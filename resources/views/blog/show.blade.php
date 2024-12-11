<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $blog->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }
        .blog-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
        }
        .blog-meta {
            color: #6c757d;
            font-size: 1rem;
        }
        .blog-content {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #444;
        }
        .btn-back {
            background-color: #007bff;
            color: white;
            font-size: 1.1rem;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }
        .btn-back:hover {
            background-color: #0056b3;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img alt="detective-DPO" height="50" src="./assets/logo.png" width="50"/>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Blog Detail Section -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <!-- Blog Image -->
                <img src="{{ asset('storage/blog_images/' . basename($blog->image)) }}" class="hero-image" alt="blog image">

                <!-- Blog Title and Date -->
                <h1 class="blog-title mt-4">{{ $blog->title }}</h1>
                <p class="blog-meta">{{ $blog->created_at->format('d M Y') }}</p>

                <!-- Blog Content -->
                <div class="blog-content mt-4">
                    <p>{{ $blog->content }}</p>
                </div>

                <!-- Back to Blog List Button -->
                <a href="{{ url('/') }}" class="btn-back mt-5">Kembali ke Daftar Blog</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
