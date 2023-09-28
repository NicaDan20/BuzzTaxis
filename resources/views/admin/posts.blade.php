@extends('dashboard')

@section('content')


@if (Auth::check())
    <a href="/blog/create">Create Post</a>
@endif

@if (session()-> has('message')) 
<div class="message">
    <p>
        {{ session()->get('message') }}
    </p>
</div>

@endif


<div class="posts">
    <ul class="posts-list">
        @foreach ($posts as $post)
        <li><a href="/blog/{{$post->slug}}">{{$post->title}}</a> -- By {{$post->user->name}} -- Last updated on: {{$post->updated_at}} --                     <span>
            <a href="/blog/{{ $post->slug }}/edit">Edit</a>
            <form class="delete-post" action="/blog/{{$post->slug}}" method="POST">
                @csrf
                @method('delete')

                <button class="delete-post" type="submit">Delete</button>
            </form>
        </span>
</li>    
        @endforeach
        {{ $posts->links() }}

    </ul>
</div>

@endsection