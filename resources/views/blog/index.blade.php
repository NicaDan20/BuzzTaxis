@extends('layouts._blog')

@section('content')
    <div class="blog-main-container">

        <div class="article-container">
            <div class="blog-title">
                <h1>Our Blog</h1>
                <p>Here we share our thoughts on the industry, on our business and what we have been up to recently. Expect monthly or bi-monthly updates.</p>
            </div>

            @if (Auth::check())
                <a href="/blog/create">Create Post</a>
            @endif

            @foreach ($posts as $post)
            <div class="article">
                <div class="article-image-container">
                    <img class="preview-image blog-image " src="{{$post->image_path}}">
                </div>
                <div class="article-title">
                    <h1>{{  $post->title  }}</h1>
                </div>
                <div class="article-metadata">
                    <span> <i class="fa-solid fa-user"></i> {{$post->user->name}} &nbsp / &nbsp &nbsp<i class="fa-regular fa-calendar-days"></i> {{date('jS M Y', strtotime($post->updated_at))}} </span>
                </div>
                <div class="article-description">
                    <p>{!! $post->description !!}</p>
                </div>
                <div class="read-more large">
                    <a href="/blog/{{$post->slug}}">Read More</a>
                </div>
            </div>    
            @endforeach
    
        </div>

        
        
    </div>
@endsection