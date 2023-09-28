<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'blog', 'terms']]);
    }


    public function index() {
        return view('home')->with('posts', Post::orderBy('updated_at', 'DESC')->take(4)->get());

    }
    
    public function terms() {
        return view('termsofuse');
    }


    public function blog() {
        return view('blog');
    }



}
