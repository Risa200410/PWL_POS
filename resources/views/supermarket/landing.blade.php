<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermarket Landing Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #9dedf1; /* Warna merah seperti gambar */
        }
        .navbar-brand, .nav-link {
            color: white !important;
        }
        .nav-link:hover {
            color: #ffdd57 !important; /* Warna kuning pada hover */
        }
        .btn-login, .btn-register {
            border-radius: 20px;
            margin-left: 10px;
            color: white;
            padding: 5px 15px;
        }
        .btn-login {
            background-color: #007bff; /* Warna biru untuk login */
        }
        .btn-register {
            background-color: #9dedf1; /* Warna oranye untuk register */
        }
        .promo-banner {
            width: 100%;
            max-height: 500px;
            object-fit: cover;
        }
        .promo-container {
            text-align: center;
            background-color: white;
            padding: 20px;
            border-bottom: 2px solid #9dedf1;
        }
        .promo-title {
            font-size: 24px;
            font-weight: bold;
            color: #9dedf1;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Risa Plaza Market</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Promosi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Private Brand</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Super Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Karir</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-login" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-register" href="#">Register</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Promo Banner -->
    <div class="promo-container">
        <img src="path-to-your-banner-image.jpg" alt="Promo Banner" class="promo-banner">
    </div>

    <!-- Promo Information -->
    <div class="container text-center">
        <h2 class="promo-title">My Super Trip for Frequent Spender</h2>
        <p>
            Holiday trip for 5 families to Malang Jatim Park 4 Days 3 Nights, Royal Carribean, Universal Studio Singapore, and many more exciting prizes!
        </p>
        <div>
            <img src="path-to-promo-image1.jpg" alt="Promo 1" style="width: 100%; max-width: 300px; margin: 10px;">
            <img src="path-to-promo-image2.jpg" alt="Promo 2" style="width: 100%; max-width: 300px; margin: 10px;">
            <img src="path-to-promo-image3.jpg" alt="Promo 3" style="width: 100%; max-width: 300px; margin: 10px;">
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center py-4" style="background-color: #9dedf1; color: white;">
        <p>&copy; 2024 Plaza Market - All Rights Reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    @include('supermarket.header')

    @yield('content')
    
    @include('supermarket.footer')

</body>
</html>

