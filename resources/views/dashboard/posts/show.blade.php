@extends('dashboard.layouts.main')

@section('container')

<div class="container mt-5">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2>{{ $post->title }}</h2>

            <a href="/dashboard/posts" class="btn btn-success">
                <i class="bi bi-file-earmark-text"></i>
                Back to my all posts
            </a>

            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">
                <i class="bi bi-pencil-square"></i>
                Edit
            </a>

            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-trash">Delete</i></button>
                </form>
            <br>
            @if ($post->image)
            <div class="" style="max-height: 350px; overflow: hidden;">
                <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid mt-3" alt="{{ $post->category->name }}">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-3" alt="{{ $post->category->name }}">
            @endif


            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>

@endsection


