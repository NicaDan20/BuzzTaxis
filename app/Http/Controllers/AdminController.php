<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Auth;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\Post;


class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function dashboard(){
        if (Gate::allows('admin-or-editor-only', Auth::user())){
            return view('dashboard', [
                'user'=>Auth::user(),
                'content'=> " "
            ]);    
        } else {
            abort(403);
        }   
    }
    public function posts(){
        if (Gate::allows('admin-or-editor-only', Auth::user())){
            return view('admin.posts', [
                'user'=>Auth::user(),
                'posts'=>Post::orderBy('updated_at', 'DESC')->paginate(20)
            ]);    
        } else {
            abort(403);
        }   
    }

    public function bookings(){
        if (Gate::allows('admin-only', Auth::user())) {
            return view('admin.bookings', [
                'user'=>Auth::user(),
                'bookings'=>Booking::where('status', 1)->orderBy('updated_at', 'DESC')->get()
            ]);
        } else {
            abort(403);
        }
    }
    

}
