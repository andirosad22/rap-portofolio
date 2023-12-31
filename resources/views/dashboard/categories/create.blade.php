@extends('dashboard.layouts.main')

@section('container')
<div class="nav-content">
    <a href="/dashboard/categories">categories</a>/  <a href="/dashboard/categories/create">create</a>
</div>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"> Create New Category</h1>
</div>

<div class="col-lg-8">

    <form method="POST" action="/dashboard/categories" class="mb-5">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror "  id="name" required autofocus value="{{ old('name') }}">
          @error('name')
          {{ $message }}
          @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" value="{{ old('slug') }}" required >
            @error('slug')
          {{ $message }}
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>
<script>
    const title = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    title.addEventListener('change',function () {
        fetch('/dashboard/posts/checkSlug?title='+title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug);
    });
</script>

@endsection