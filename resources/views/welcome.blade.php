<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Detective DPO</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            color: white;
            text-align: center;
        }
        .navbar-nav .nav-link {
            color: white !important;
            font-size: 1.2rem;
            margin-right: 20px;
        }
        .navbar-nav .nav-link:hover {
            color: #ffc107 !important;
        }
        .hero-section {
            position: relative;
            text-align: center;
            color: white;
        }
        .hero-section img {
            width: 100%;
            height: auto;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }
        .hero-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .hero-text h1 {
            font-size: 3rem;
            font-weight: bold;
            color: #F1F0E8;
        }
        .hero-text .btn {
            margin: 10px;
            border: 2px solid #7ED4AD;
            color: #F1F0E8;
            font-size: 1.2rem;
        }
        .hero-text .btn:hover {
            background-color: #7ED4AD;
            color: black;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        .card-body .btn {
            transition: background-color 0.3s ease;
        }
        .card-body .btn:hover {
            background-color: #2f7bff;
            color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img alt="detective-DPO" height="50" src="./assets/logo.png" width="50"/>
            </a>
            <button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
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

    <div class="hero-section">
        <img alt="background-detective-DPO" height="1080" src="./assets/background.jpg" width="1920"/>
        <div class="overlay"></div>
        <div class="hero-text">
            <h1>Detective DPO</h1>
            <a class="btn btn-outline-success" href="#"><i class="fas fa-bullseye"></i> VISI & MISI</a>
            <a class="btn btn-outline-warning" href="#"><i class="fas fa-newspaper"></i> BERITA TERKINI</a>
        </div>
    </div>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Latest Blog Posts</h2>
        <div class="row">
            @foreach($blogs as $blog)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-light rounded">
                        <img src="{{ asset('storage/blog_images/' . basename($blog->image)) }}" class="card-img-top" alt="blog image" style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title text-dark">{{ $blog->title }}</h5>
                            <p class="card-text text-muted">{{ \Str::limit($blog->content, 120) }}</p>
                            <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-outline-primary stretched-link">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        <!-- Pagination -->
        <div class="d-flex justify-content-center">
            {{ $blogs->links('pagination::bootstrap-5') }}
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
