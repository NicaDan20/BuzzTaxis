@extends('layouts.posts')

@section('title')
{{'Buzz Taxis - ' . $post->title}}
@endsection

@section('description')
{!! strip_tags($post->description) !!}
@endsection


@section('content')

<div class="blog-main-content">
    <div class="blog-title-header">
        <h1>{{$post->title}}</h1>
    </div>

    <div class="blog-image-container">
        <img class="preview-image blog-image full-screen" src="\{{ $post->image_path }}" alt="Blog Image">
    </div>

    <div class="blog-post-text">
        {!! $post->markdown !!}
    </div>

</div>

{{-- <div class="grid-item main-grid" id="interior-page">

    <div class="header" id="blog-header">
        <h1>{{$post->title}}</h1>
    </div>

    <div class="image-container-full-page">
        <img class="preview-image blog-image " src="\{{ $post->image_path }}" alt="Blog Image">
    </div>

    <div class="content-section" id="sect1">
        {!! $post->markdown !!}
    </div>

</div> --}}

@endsection