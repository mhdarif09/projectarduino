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
            color: #ffc107;
        }
        .hero-text .btn {
            margin: 10px;
            border: 2px solid #ffc107;
            color: #ffc107;
            font-size: 1.2rem;
        }
        .hero-text .btn:hover {
            background-color: #ffc107;
            color: black;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img alt="detective-DPO" height="50" src="https://storage.googleapis.com/a1aa/image/D8doKYeYijxqICjQ3KSBlHKuYC4d3HAeeR5DzacBUorfZTcPB.jpg" width="50"/>
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
                        <a class="nav-link" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="hero-section">
        <img alt="background-detective-DPO" height="1080" src="./assets/background.jpg" width="1920"/>
        <div class="overlay"></div>
        <div class="hero-text">
            <h1>Direktorat Reserse Kriminal Umum Polda Metro Jaya</h1>
            <a class="btn btn-outline-warning" href="#"><i class="fas fa-bullseye"></i> VISI & MISI</a>
            <a class="btn btn-outline-warning" href="#"><i class="fas fa-newspaper"></i> BERITA TERKINI</a>
        </div>
    </div>
    <script crossorigin="anonymous" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+3i5q5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5i5Y5
