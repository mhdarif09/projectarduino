@extends('layouts.super')

@section('content')
    <h3>Edit Blog</h3>
    <form action="{{ route('superadmin.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $blog->title }}" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" id="content" class="form-control" required>{{ $blog->content }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" id="image" class="form-control">
            <img src="{{ Storage::url($blog->image) }}" alt="Current Image" width="100">
        </div>
        <button type="submit" class="btn btn-warning">Update Blog</button>
    </form>
@endsection
