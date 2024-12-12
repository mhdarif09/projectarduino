<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Detective DPO</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        body {
            font-family: 'Arial', sans-serif;
            color: white;
            text-align: center;
        }

        .navbar {
            transition: background-color 0.3s ease-in-out;
        }

        .navbar.transparent {
            background-color: transparent;
            box-shadow: none;
        }

        .navbar.scrolled {
            background-color: rgba(0, 0, 0, 0.8);
            /* Warna hitam transparan */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            /* Tambahkan bayangan untuk efek */
        }

        .navbar-nav .nav-link {
            color: white !important;
            font-size: 1.2rem;
            margin-right: 20px;
        }

        .navbar-nav .nav-link:hover {
            color: #7ED4AD !important;
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
    <nav class="navbar navbar-expand-lg navbar-dark transparent fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img alt="detective-DPO" height="50" src="./assets/logo.png" width="50" />
            </a>
            <button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"
                class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#latest-posts">Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team-member">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero-section">
        <img alt="background-detective-DPO" height="1080" src="./assets/background.jpg" width="1920" />
        <div class="overlay"></div>
        <div class="hero-text">
            <h1>Detective DPO</h1>
            <a class="btn btn-outline-success" href="{{ url('/visi-misi') }}"><i class="fas fa-bullseye"></i> VISI &
                MISI</a>
            <a class="btn btn-outline-warning" href="#latest-posts"><i class="fas fa-newspaper"></i> BERITA TERKINI</a>
        </div>
        <!-- Scroll Down Arrow -->
        <div class="scroll-down">
            <i class="fas fa-chevron-down"></i>
        </div>
    </div>
    <!-- Layanan Section -->
    <div class="container mt-5 " id="layanan">">
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
                        <p class="card-text">Reports for Data Protection Officer (DPO) activities and compliance status.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Laporan No DPO Service -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-light rounded">
                    <div class="card-body text-center">
                        <i class="fas fa-exclamation-triangle fa-3x mb-3"></i> <!-- Icon for Laporan No DPO -->
                        <h5 class="card-title">Laporan No DPO</h5>
                        <p class="card-text">Reports for organizations without a designated Data Protection Officer (No
                            DPO).</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest Blog Posts Section -->
    <div id="latest-posts" class="container mt-5">
        <h2 class="section-title text-center text-dark mb-4">Latest Blog Posts</h2>
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-light rounded">
                        <img src="{{ asset('storage/blog_images/' . basename($blog->image)) }}" class="card-img-top"
                            alt="blog image" style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title text-dark">{{ $blog->title }}</h5>
                            <p class="card-text text-muted">{{ \Str::limit($blog->content, 120) }}</p>
                            <a href="{{ route('blog.show', $blog->id) }}"
                                class="btn btn-outline-primary stretched-link">Read More</a>
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
    <div class="container mt-5" id="team-member">
        <h2 class="section-title text-center text-dark mb-4">Our Team</h2>
        <div class="row">
            <!-- Team Members (Initial 5) -->
            <div class="col-md-4 mb-4 team-member show">
                <div class="card">
                    <img src="./assets/arif.jpeg" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Muhammad Arif</h5>
                        <p class="card-text">Startup Ethunsiast & Web Developer.</p>
                        <!-- Social Media Links -->
                        <div class="social-icons">
                            <a href="https://www.instagram.com/mhmmdarif.rs" target="_blank" class="text-dark me-2">
                                <i class="fab fa-instagram"> Instagram </i>
                            </a>
                            <a href="https://www.linkedin.com/in/muhammad-arif-rahmad-syahputra/" target="_blank"
                                class="text-dark me-2">
                                <i class="fab fa-linkedin"> LinkedIn </i>
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
                    <img src="./assets/sugiyanto.jpg" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Sugiyanto</h5>
                        <p class="card-text">Front-End Web Developer.</p>
                        <!-- Social Media Links -->
                        <div class="social-icons">
                            <a href="https://www.instagram.com/sugiyanto_tan02" target="_blank"
                                class="text-dark me-2">
                                <i class="fab fa-instagram"> Instagram </i>
                            </a>
                            <a href="https://www.linkedin.com/in/sugiyanto-tan-77935a2a7/" target="_blank"
                                class="text-dark me-2">
                                <i class="fab fa-linkedin"> LinkedIn </i>
                            </a>
                            <a href="https://github.com/Sugiyanto02" target="_blank" class="text-dark">
                                <i class="fab fa-github"> Github </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 team-member show">
                <div class="card">
                    <img src="./assets/inayah.jpg" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Inayah Utami</h5>
                        <p class="card-text">UI/UX Designer.</p>
                        <!-- Social Media Links -->
                        <div class="social-icons">
                            <a href="https://www.instagram.com/inyh_utt" target="_blank" class="text-dark me-2">
                                <i class="fab fa-instagram"> Instagram </i>
                            </a>
                            <a href="http://www.linkedin.com/in/inayah-utami-812b9b307" target="_blank" class="text-dark me-2">
                                <i class="fab fa-linkedin"> LinkedIn </i>
                            </a>
                            <a href="https://github.com/Inayahutami10" target="_blank" class="text-dark">
                                <i class="fab fa-github"> Github </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 team-member show">
                <div class="card">
                    <img src="./assets/rama.jpg" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Muhammad Ramandha Satria</h5>
                        <p class="card-text">Architecture Design.</p>
                        <!-- Social Media Links -->
                        <div class="social-icons">
                            <a href="https://www.instagram.com/ramaaaaaaaaaa.a?" target="_blank" class="text-dark me-2">
                                <i class="fab fa-instagram"> Instagram </i>
                            </a>
                            <a href="http://www.linkedin.com/in/muhammad-ramandha-satrya-464667284" target="_blank" class="text-dark me-2">
                                <i class="fab fa-linkedin"> LinkedIn </i>
                            </a>
                            {{-- <a href="https://github.com" target="_blank" class="text-dark">
                                <i class="fab fa-github"> Github </i>
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 team-member show">
                <div class="card">
                    <img src="./assets/habib.jpg" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Al Habib Prawira</h5>
                        <p class="card-text">Architecture Design.</p>
                        <!-- Social Media Links -->
                        <div class="social-icons">
                            <a href="https://www.instagram.com/alfata_fawwaz" target="_blank" class="text-dark me-2">
                                <i class="fab fa-instagram"> Instagram </i>
                            </a>
                            {{-- <a href="https://www.linkedin.com" target="_blank" class="text-dark me-2">
                                <i class="fab fa-linkedin"> LinkedIn </i>
                            </a>
                            <a href="https://github.com" target="_blank" class="text-dark">
                                <i class="fab fa-github"> Github </i>
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 team-member show">
                <div class="card">
                    <img src="./assets/isnaini.jpg" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Isnaini Pa'iza Fitri</h5>
                        <p class="card-text">UI/UX Designer.</p>
                        <!-- Social Media Links -->
                        <div class="social-icons">
                            <a href="https://www.instagram.com/isnifzatri" target="_blank" class="text-dark me-2">
                                <i class="fab fa-instagram"> Instagram </i>
                            </a>
                            <a href="https://www.linkedin.com/in/paiza23" target="_blank" class="text-dark me-2">
                                <i class="fab fa-linkedin"> LinkedIn </i>
                            </a>
                            <a href="https://github.com/isni23" target="_blank" class="text-dark">
                                <i class="fab fa-github"> Github </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Hidden Team Members (Additional 8) -->
            <div class="col-md-4 mb-4 team-member">
                <div class="card">
                    <img src="./assets/ilaikal.jpg" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Ilaikal Faturrahman</h5>
                        <p class="card-text">Advice Giver & Supervisor.</p>
                        <!-- Social Media Links -->
                        <div class="social-icons">
                            <a href="https://www.instagram.com/ilaikalfathurrahman" target="_blank" class="text-dark me-2">
                                <i class="fab fa-instagram"> Instagram </i>
                            </a>
                            <a href="https://www.linkedin.com/in/ilaikal-fathurrahman-11215b340" target="_blank" class="text-dark me-2">
                                <i class="fab fa-linkedin"> LinkedIn </i>
                            </a>
                            <a href="https://github.com/Kal-ikal" target="_blank" class="text-dark">
                                <i class="fab fa-github"> Github </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 team-member">
                <div class="card">
                    <img src="./assets/riski.jpg" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Riski Hamdani</h5>
                        <p class="card-text">Architecture Design.</p>
                        <!-- Social Media Links -->
                        <div class="social-icons">
                            <a href="https://www.instagram.com/risk_ihamdani24" target="_blank" class="text-dark me-2">
                                <i class="fab fa-instagram"> Instagram </i>
                            </a>
                            {{-- <a href="https://www.linkedin.com" target="_blank" class="text-dark me-2">
                                <i class="fab fa-linkedin"> LinkedIn </i>
                            </a>
                            <a href="https://github.com" target="_blank" class="text-dark">
                                <i class="fab fa-github"> Github </i>
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 team-member">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Nezo Alesandro</h5>
                        <p class="card-text">Beautifull World.</p>
                        <!-- Social Media Links -->
                        <div class="social-icons">
                            <a href="https://www.instagram.com" target="_blank" class="text-dark me-2">
                                <i class="fab fa-instagram"> Instagram </i>
                            </a>
                            <a href="https://www.linkedin.com" target="_blank" class="text-dark me-2">
                                <i class="fab fa-linkedin"> LinkedIn </i>
                            </a>
                            <a href="https://github.com" target="_blank" class="text-dark">
                                <i class="fab fa-github"> Github </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 team-member">
                <div class="card">
                    <img src="./assets/jagad.jpg" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Muhammad Jagad Kusuma</h5>
                        <p class="card-text">Architecture Design.</p>
                        <!-- Social Media Links -->
                        <div class="social-icons">
                            <a href="https://www.instagram.com/Jagadmuhammad" target="_blank" class="text-dark me-2">
                                <i class="fab fa-instagram"> Instagram </i>
                            </a>
                            {{-- <a href="https://www.linkedin.com" target="_blank" class="text-dark me-2">
                                <i class="fab fa-linkedin"> LinkedIn </i>
                            </a>
                            <a href="https://github.com" target="_blank" class="text-dark">
                                <i class="fab fa-github"> Github </i>
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 team-member">
                <div class="card">
                    <img src="./assets/joe.jpg" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Joe Mario</h5>
                        <p class="card-text">Architecture Design.</p>
                        <!-- Social Media Links -->
                        <div class="social-icons">
                            <a href="https://www.instagram.com/Joeemarioo" target="_blank" class="text-dark me-2">
                                <i class="fab fa-instagram"> Instagram </i>
                            </a>
                            {{-- <a href="https://www.linkedin.com" target="_blank" class="text-dark me-2">
                                <i class="fab fa-linkedin"> LinkedIn </i>
                            </a>
                            <a href="https://github.com" target="_blank" class="text-dark">
                                <i class="fab fa-github"> Github </i>
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 team-member">
                <div class="card">
                    <img src="./assets/destri.jpg" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Destry Widiani</h5>
                        <p class="card-text">Architecture Design.</p>
                        <!-- Social Media Links -->
                        <div class="social-icons">
                            <a href="https://www.instagram.com/destry_widiani" target="_blank" class="text-dark me-2">
                                <i class="fab fa-instagram"> Instagram </i>
                            </a>
                            {{-- <a href="https://www.linkedin.com" target="_blank" class="text-dark me-2">
                                <i class="fab fa-linkedin"> LinkedIn </i>
                            </a>
                            <a href="https://github.com" target="_blank" class="text-dark">
                                <i class="fab fa-github"> Github </i>
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 team-member">
                <div class="card">
                    <img src="./assets/valenza.jpg" class="card-img-top" alt="Team Member">
                    <div class="card-body">
                        <h5 class="card-title">Valenza</h5>
                        <p class="card-text">Architecture Design.</p>
                        <!-- Social Media Links -->
                        <div class="social-icons">
                            <a href="https://www.instagram.com/vallenza_" target="_blank" class="text-dark me-2">
                                <i class="fab fa-instagram"> Instagram </i>
                            </a>
                            {{-- <a href="https://www.linkedin.com" target="_blank" class="text-dark me-2">
                                <i class="fab fa-linkedin"> LinkedIn </i>
                            </a>
                            <a href="https://github.com" target="_blank" class="text-dark">
                                <i class="fab fa-github"> Github </i>
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Repeat this structure for the other team members... -->

        </div>
        <!-- Button to Show All Team Members -->
        <div class="text-center my-4">
            <button id="show-team" class="btn btn-outline-success">Show All Team</button>
        </div>
    </div>

    {{-- Footer --}}

    <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container text-center text-md-start">
            <div class="row">
                <!-- Logo dan Deskripsi -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h5 class="text-uppercase fw-bold mb-4">
                        <i class="bi bi-gem me-2"></i>Detective DPO
                    </h5>
                    <p>
                        Solusi inovatif untuk Mencegah orang berlari dalam kasus tertentu di indonesia.
                    </p>
                </div>

                <!-- Links -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">Links</h6>
                    <p><a href="/" class="text-white text-decoration-none">Home</a></p>
                    <p><a href="#!" class="text-white text-decoration-none">About</a></p>
                    <p><a href="#layanan" class="text-white text-decoration-none">Services</a></p>
                    <p><a href="#!" class="text-white text-decoration-none">Contact</a></p>
                </div>

                <!-- Useful Links -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">Useful Links</h6>
                    <p><a href="#!" class="text-white text-decoration-none">Privacy Policy</a></p>
                    <p><a href="#!" class="text-white text-decoration-none">Terms of Service</a></p>
                    <p><a href="#!" class="text-white text-decoration-none">FAQ</a></p>
                    <p><a href="#!" class="text-white text-decoration-none">Support</a></p>
                </div>

                <!-- Kontak -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p><i class="bi bi-house-door-fill me-2"></i> Palembang, Indonesia</p>
                    <p><i class="bi bi-envelope-fill me-2"></i> info@detective.com</p>
                    <p><i class="bi bi-phone-fill me-2"></i> +62 812-3456-7890</p>
                    <p><i class="bi bi-clock-fill me-2"></i> Mon - Fri, 9:00-17:00</p>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center p-3 mt-4" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 <a class="text-white fw-bold text-decoration-none" href="#">Detective DPO</a>. All rights
            reserved.
        </div>
    </footer>

    {{-- End Section Footer --}}

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
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const navbar = document.querySelector(".navbar");

            // Function to toggle classes based on scroll position
            const toggleNavbarBackground = () => {
                if (window.scrollY > 50) { // Jika scroll lebih dari 50px
                    navbar.classList.add("scrolled");
                    navbar.classList.remove("transparent");
                } else {
                    navbar.classList.add("transparent");
                    navbar.classList.remove("scrolled");
                }
            };

            // Initialize on page load
            toggleNavbarBackground();

            // Add scroll event listener
            window.addEventListener("scroll", toggleNavbarBackground);
        });
    </script>

</body>

</html>
