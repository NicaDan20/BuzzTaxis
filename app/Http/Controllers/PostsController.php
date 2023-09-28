<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use League\CommonMark\CommonMarkConverter;
use League\HTMLToMarkdown\HtmlConverter;
use Stevebauman\Purify\Facades\Purify;
use Illuminate\Support\Facades\Gate;
use Auth;


class PostsController extends Controller
{
    protected $image_path = 'images\blog\\';

    public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog.index')->with('posts', Post::orderBy('updated_at', 'DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        if (Gate::allows('admin-or-editor-only', Auth::user())){
            return view('blog.create');
        } else {
            abort(403);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Gate::allows('admin-or-editor-only', Auth::user())) {
            $request->validate([
                'title' => 'required',
                'markdown' => 'required',
                'image' => 'required|mimes:jpg,png,jpeg|max:5048'
            ]);
    
            $newImageName = uniqid() . '-' . date("Y-m-d") . "-" . $request->title . '.' . $request->image->extension();
    
            $request->image->move(public_path($this->image_path), $newImageName); 
    
            $converter = new CommonMarkConverter([
                'html_input' => 'strip',
                'allow_unsafe_links' => false,
            ]);
    
            Post::create([
                'title' => $request->input('title'),
                'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
                'image_path' => $this->image_path . $newImageName,
                'description' => $converter->convertToHtml(Purify::clean(mb_substr($request->get('markdown'),0, 275). "...")),
                'markdown' => $converter->convertToHtml(Purify::clean($request->get('markdown'))),
                'user_id' => auth()->user()->id
            ]);
    
            return redirect('/dashboard/posts')->with('message', 'Your post has been added succesfully!');
    
        } else {
            abort(403);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('blog.show')->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        
        $converter = new HtmlConverter();
        $post = Post::where('slug', $slug)->first();
        $post['markdown'] = $converter->convert($post['markdown']);
        $post['description'] = $converter->convert($post['description']);

        return view('blog.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        if (Gate::allows('admin-or-editor-only', Auth::user())) {
            $request->validate([
                'title' => 'required',
                'markdown' => 'required',
            ]);
    
            $converter = new CommonMarkConverter([
                'html_input' => 'strip',
                'allow_unsafe_links' => false,
            ]);
    
            Post::where('slug', $slug)->update([
                'title' => $request->input('title'),
                'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
                'description' => $converter->convertToHtml(Purify::clean(mb_substr($request->get('markdown'),0, 275). "...")),
                'markdown' => $converter->convertToHtml(Purify::clean($request->get('markdown'))),
                'user_id' => auth()->user()->id
            ]);
    
            return redirect('/dashboard/posts')->with('message', 'Your post has been edited succesfully!');
        } else {
            abort(403);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        if (Gate::allows('admin-or-editor-only', Auth::user())) {
            $post = Post::where('slug', $slug);
            $post->delete();
    
            return redirect('/dashboard/posts')->with('message', 'Your post has been deleted succesfully!');
        } else {
            abort(403);
        }

    }
}
