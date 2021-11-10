{{-- @dd($post) --}}

@extends('layout.main')

@section('container')
    <article class="mb-5">
        <h2>
            <a href="/posts/">{{ $post["slug"] }}</a>
        </h2>
        <h5>By: {{  $post["author"] }}</h5>
        <p>{{  $post["body"] }}</p>
    </article>

    <a href="/blog">Back to Blog</a>
@endsection