@extends('layouts.super')

@section('content')
    <div class="container">
        <h1 class="mb-4">Manage Blogs</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tombol untuk menambah blog -->
        <a href="{{ route('superadmin.blog.create') }}" class="btn btn-primary mb-3">Add New Blog</a>

        <!-- Tabel Daftar Blog -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($blogs as $blog)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ Str::limit($blog->content, 50) }}</td>
                        <td>
                            <img src="{{ Storage::url($blog->image) }}" alt="Image" width="100">
                        </td>
                        <td>
                            <!-- Tombol Edit dan Hapus -->
                            <a href="{{ route('superadmin.blog.edit', $blog->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <!-- Form Delete -->
                            <form action="{{ route('superadmin.blog.destroy', $blog->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this blog?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
