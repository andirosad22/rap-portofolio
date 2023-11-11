@extends('dashboard.layouts.main')
@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> Edit Posts</h1>
    </div>

    <div class="col-lg-8">

        <form method="POST" action="/dashboard/posts/{{ $post->slug }}" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" name="title" class="form-control @error('title') is-invalid @enderror "  id="title" required autofocus value="{{ old('title',$post->title) }}">
              @error('title')
              {{ $message }}
              @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" value="{{ old('slug',$post->slug) }}" required >
                @error('slug')
              {{ $message }}
              @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>

                <select name="category_id" class="form-select">
                    @foreach ($categories as $category)
                    @if (old('category_id', $post->category_id) == $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Post Image</label>

                <input type="hidden" name="oldImage" value="{{ $post->image }}">

                @if ($post->image)
                <img src="{{ asset('storage/'. $post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                    @else
                    <img src="" class="img-preview img-fluid mb-3 col-sm-5">
                @endif

                
                <input type="file" id="image" onchange="previewImage()" name="image" class="form-control @error('image') is-invalid @enderror" >
                @error('image')
              {{ $message }}
              @enderror
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <input type="hidden" id="body" name="body" value="{{ old('body', $post->body) }}">
                <trix-editor input="body"></trix-editor>
                @error('body')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Edit Post</button>
        </form>
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change',function () {
            fetch('/dashboard/posts/checkSlug?title='+title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug);
        });

        document.addEventListener('trix-file-accrept',function (e) {
            e.preventDefault();
        })


        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview ');
            
            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection