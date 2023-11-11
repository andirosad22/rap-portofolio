@extends('layouts.main')
@section('container')

<div class="container mt-5">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2>{{ $post->title }}</h2>

            <p>by. <a href="/posts?authors={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>  in <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>

            @if ($post->image)
            <div class="" style="max-height: 350px; overflow: hidden;">
                <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid mt-3" alt="{{ $post->category->name }}">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">
            @endif

            {{-- <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}"> --}}

            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>

@endsection


