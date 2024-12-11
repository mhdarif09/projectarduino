<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Detective DPO - Visi & Misi</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
        }
        /* Navbar */
        .navbar {
            background-color: #343a40;
            padding: 15px 0;
        }
        .navbar-brand img {
            height: 50px;
            width: auto;
        }
        .navbar-nav .nav-link {
            color: white !important;
            font-size: 1.1rem;
            font-weight: 500;
        }
        .navbar-nav .nav-link:hover {
            color: #ffc107 !important;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            background: url('./assets/background.jpg') no-repeat center center;
            background-size: cover;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }
        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: bold;
            text-transform: uppercase;
        }

        /* Section Titles */
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #343a40;
            margin-top: 50px;
            text-align: center;
            border-bottom: 3px solid #007bff;
            display: inline-block;
            padding-bottom: 5px;
        }

        /* Content Section */
        .content-section {
            padding: 60px 0;
        }
        .content-section p {
            font-size: 1.2rem;
            color: #495057;
            line-height: 1.6;
            text-align: center;
            max-width: 800px;
            margin: 0 auto 30px;
        }
        .content-section ul {
            font-size: 1.1rem;
            color: #495057;
            list-style-type: none;
            padding-left: 0;
            max-width: 800px;
            margin: 0 auto;
        }
        .content-section ul li {
            margin-bottom: 15px;
            line-height: 1.8;
        }

        /* Footer */
        footer {
            background-color: #343a40;
            color: #fff;
            padding: 40px 0;
            text-align: center;
        }

        footer p {
            font-size: 1rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.5rem;
            }
            .section-title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img alt="detective-DPO" src="./assets/logo.png"/>
            </a>
            <button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#visi-misi">Visi & Misi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#team-member">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section (Banner) -->
    <div class="hero-section">
        <h1>Visi dan Misi</h1>
    </div>

    <!-- Visi & Misi Section -->
    <div id="visi-misi" class="container content-section">
        <h2 class="section-title">Visi</h2>
        <p>Membangun solusi keamanan dan perlindungan data yang dapat diandalkan, dengan meningkatkan kesadaran dan kepatuhan terhadap peraturan perlindungan data pribadi (DPO) di berbagai organisasi.</p>

        <h2 class="section-title">Misi</h2>
        <ul style="list-style-type:disc;">
            <li>Menyediakan layanan deteksi dan pemantauan kepatuhan terhadap Data Protection Officer (DPO) di organisasi.</li>
            <li>Memberikan pelatihan dan penyuluhan mengenai pentingnya perlindungan data pribadi.</li>
            <li>Membantu organisasi untuk menyusun laporan kepatuhan DPO secara terstruktur dan sesuai dengan regulasi.</li>
            <li>Mengembangkan platform yang memudahkan akses dan pengelolaan informasi terkait DPO bagi organisasi dan publik.</li>
        </ul>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Detective DPO. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
