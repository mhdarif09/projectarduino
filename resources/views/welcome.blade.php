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

        .team-member {
            display: none;
        }
        .team-member.show {
            display: block;
        }

        /* Scroll Down Animation */
        .scroll-down {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 2rem;
            color: #7ED4AD;
            animation: bounce 1.5s infinite;
        }

        .scroll-down i {
            cursor: pointer;
        }

        @keyframes bounce {
            0% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(10px);
            }
            100% {
                transform: translateY(0);
            }
        }

        html {
            scroll-behavior: smooth;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-top: 30px;
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
            <a class="btn btn-outline-warning" href="#latest-posts"><i class="fas fa-newspaper"></i> BERITA TERKINI</a>
        </div>
        <!-- Scroll Down Arrow -->
        <div class="scroll-down">
            <i class="fas fa-chevron-down"></i>
        </div>
    </div>
  <!-- Layanan Section -->
<div class="container mt-5">
    <h2 class="section-title text-center text-dark mb-4">Our Services</h2>
    <div class="row">
        <!-- Detect DPO Service -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-light rounded">
                <div class="card-body text-center">
                    <i class="fas fa-user-shield fa-3x mb-3"></i> <!-- Icon for Detect DPO -->
                    <h5 class="card-title">Detect DPO</h5>
                    <p class="card-text">Service for detecting Data Protection Officer (DPO) compliance.</p>
                </div>
            </div>
        </div>
        <!-- Laporan DPO Service -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-light rounded">
                <div class="card-body text-center">
                    <i class="fas fa-file-alt fa-3x mb-3"></i> <!-- Icon for Laporan DPO -->
                    <h5 class="card-title">Laporan DPO</h5>
                    <p class="card-text">Reports for Data Protection Officer (DPO) activities and compliance status.</p>
                </div>
            </div>
        </div>
        <!-- Laporan No DPO Service -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-light rounded">
                <div class="card-body text-center">
                    <i class="fas fa-exclamation-triangle fa-3x mb-3"></i> <!-- Icon for Laporan No DPO -->
                    <h5 class="card-title">Laporan No DPO</h5>
                    <p class="card-text">Reports for organizations without a designated Data Protection Officer (No DPO).</p>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Latest Blog Posts Section -->
    <div id="latest-posts" class="container mt-5">
        <h2 class="section-title text-center text-dark mb-4">Latest Blog Posts</h2>
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
    <div class="container mt-5">
        <h2 class="section-title text-center text-dark mb-4">Our Team</h2>
        <div class="row">
            <!-- Team Members (Initial 5) -->
            <div class="col-md-4 mb-4 team-member show">
                <div class="card">
                    <img src="./assets/arif.jpeg" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Muhammad Arif</h5>
                        <p class="card-text">Description of team member 1.</p>
                        <!-- Social Media Links -->
                        <div class="social-icons">
                            <a href="https://www.instagram.com/mhmmdarif.rs" target="_blank" class="text-dark me-2">
                                <i class="fab fa-instagram"> Instagram </i>
                            </a>
                            <a href="https://www.linkedin.com/in/muhammad-arif-rahmad-syahputra/" target="_blank" class="text-dark me-2">
                                <i class="fab fa-linkedin"> Linkedin </i>
                            </a>
                            <a href="https://github.com/mhdarif09" target="_blank" class="text-dark">
                                <i class="fab fa-github"> Github </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 team-member show">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Team Member 2</h5>
                        <p class="card-text">Description of team member 2.</p>
                        <!-- Social Media Links -->
                        <div class="social-icons">
                            <a href="https://www.instagram.com" target="_blank" class="text-dark me-2">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.linkedin.com" target="_blank" class="text-dark me-2">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="https://github.com" target="_blank" class="text-dark">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 team-member show">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Team Member 3</h5>
                        <p class="card-text">Description of team member 3.</p>
                        <!-- Social Media Links -->
                        <div class="social-icons">
                            <a href="https://www.instagram.com" target="_blank" class="text-dark me-2">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.linkedin.com" target="_blank" class="text-dark me-2">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="https://github.com" target="_blank" class="text-dark">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 team-member show">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Team Member 4</h5>
                        <p class="card-text">Description of team member 4.</p>
                        <!-- Social Media Links -->
                        <div class="social-icons">
                            <a href="https://www.instagram.com" target="_blank" class="text-dark me-2">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.linkedin.com" target="_blank" class="text-dark me-2">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="https://github.com" target="_blank" class="text-dark">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 team-member show">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Team Member 5</h5>
                        <p class="card-text">Description of team member 5.</p>
                        <!-- Social Media Links -->
                        <div class="social-icons">
                            <a href="https://www.instagram.com" target="_blank" class="text-dark me-2">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.linkedin.com" target="_blank" class="text-dark me-2">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="https://github.com" target="_blank" class="text-dark">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Hidden Team Members (Additional 8) -->
            <div class="col-md-4 mb-4 team-member">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Team Member 6</h5>
                        <p class="card-text">Description of team member 6.</p>
                        <!-- Social Media Links -->
                        <div class="social-icons">
                            <a href="https://www.instagram.com" target="_blank" class="text-dark me-2">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.linkedin.com" target="_blank" class="text-dark me-2">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="https://github.com" target="_blank" class="text-dark">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Repeat this structure for the other team members... -->
    
        </div>
        <!-- Button to Show All Team Members -->
        <div class="text-center mt-4">
            <button id="show-team" class="btn btn-outline-success">Show All Team</button>
        </div>
    </div>
    
    <script>
        document.getElementById('show-team').addEventListener('click', function() {
            // Show all hidden team members
            let teamMembers = document.querySelectorAll('.team-member');
            teamMembers.forEach(function(member) {
                member.classList.add('show');
            });
            // Hide the "Show All Team" button after showing all members
            this.style.display = 'none';
        });
    </script>
    
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelector('.scroll-down').addEventListener('click', function() {
            window.scrollTo({
                top: window.innerHeight,
                behavior: 'smooth'
            });
        });
    </script>
</body>
</html>
