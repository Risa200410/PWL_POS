@extends ('layouts.template' )

@section('content')
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
            background-color: #9dedf1;
            padding: 10px 20px;
        }

        .navbar-brand {
            color: rgb(4, 6, 18) !important;
            font-size: 24px;
            font-weight: bold;
        }

        .btn-login,
        .btn-register {
            border-radius: 20px;
            margin-left: 10px;
            color: white;
            padding: 5px 15px;
        }

        .btn-login {
            background-color: #0b7ed1;
        }

        .btn-register {
            background-color: #0b7ed1;
        }

        .promo-banner {
            width: 100%;
            max-height: 500px;
            object-fit: cover;
            margin-top: 20px;
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

        .description-container,
        .about-us-container {
            padding: 40px 0;
            background-color: #f9f9f9;
        }

        .description-title,
        .about-title {
            font-size: 28px;
            color: #007bff;
            font-weight: bold;
            text-align: center;
        }

        .description-text,
        .about-text {
            font-size: 18px;
            color: #333;
            text-align: center;
            margin: 20px auto;
            max-width: 800px;
            line-height: 1.6;
        }

        footer {
            background-color: #9dedf1;
            color: white;
            padding: 20px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <img src="adminlte/dist/img/logoRisa.png" alt="Logo Risa Plaza"
            style="width: 40px; height: 40px; margin-right: 10px;">
        <a class="navbar-brand" href="#">Risa Plaza Market</a>
        {{-- <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <!-- Login Button -->
                <li class="nav-item">
                    <a class="btn btn-login" href="/login">Login</a> <!-- Rute ke halaman login -->
                </li>
                <!-- Register Button -->
                <li class="nav-item">
                    <a class="btn btn-register" href="/register">Register</a> <!-- Rute ke halaman register -->
                </li>
            </ul>
        </div> --}}
    </nav>

    <!-- Promo Banner -->
    <div class="promo-container">
        <img src="adminlte/dist/img/promo_banner.png" alt="Promo Banner" class="promo-banner">
    </div>

    <!-- Promo Information -->
    <div class="container text-center">
        <h2 class="promo-title"> 🎉 Promo Besar Plaza Mart! 🎉 </h2>
        <p>Menangkan Liburan Tak Terlupakan untuk 5 keluarga ke Malang Jatim Park - 4 Hari 3 Malam, Royal Caribbean
        </p>
        <p> Cruise, Universal Studios Singapura, dan masih banyak hadiah seru lainnya! 🎁🏖️🌍
        </p>
        <p>Belanja sekarang di Plaza Mart dan jadikan belanja Anda sebagai petualangan sekali seumur hidup!</p>
        <div>
            <img src="adminlte/dist/img/diskon1.jpeg" alt="Promo 1"
                style="width: 100%; max-width: 300px; margin: 10px;">
            <img src="adminlte/dist/img/diskon2.jpeg" alt="Promo 2"
                style="width: 100%; max-width: 300px; margin: 10px;">
            <img src="adminlte/dist/img/diskon3.jpg" alt="Promo 3"
                style="width: 100%; max-width: 300px; margin: 10px;">
        </div>
    </div>

    <!-- Store Description -->
    {{-- <div class="description-container">
        <h2 class="description-title">Tentang Risa Plaza Market</h2>
        <p class="description-text">
            Risa Plaza Market adalah supermarket modern yang menghadirkan produk berkualitas untuk kebutuhan
            sehari-hari.
            Kami berkomitmen memberikan pelayanan terbaik kepada pelanggan dengan menyediakan berbagai pilihan produk,
            mulai dari bahan makanan segar hingga kebutuhan rumah tangga lainnya.
            Dengan harga terjangkau dan berbagai promo menarik, Risa Plaza Market menjadi pilihan tepat bagi keluarga
            Anda.
            Nikmati pengalaman berbelanja yang menyenangkan di Risa Plaza Market dengan suasana yang nyaman dan
            produk-produk yang selalu segar.
        </p>
    </div> --}}

    <!-- About Us Section -->
    <div class="about-us-container">
        <h2 class="about-title">About Us</h2>
        <p class="about-text">
            Selamat datang di Risa Plaza Market! <br><br>

            Risa Plaza Market adalah supermarket modern yang menghadirkan produk berkualitas untuk kebutuhan
            sehari-hari.
            Kami berkomitmen memberikan pelayanan terbaik kepada pelanggan dengan menyediakan berbagai pilihan produk,
            mulai dari bahan makanan segar hingga kebutuhan rumah tangga lainnya.
            Dengan harga terjangkau dan berbagai promo menarik, Risa Plaza Market menjadi pilihan tepat bagi keluarga
            Anda.
            Nikmati pengalaman berbelanja yang menyenangkan di Risa Plaza Market dengan suasana yang nyaman dan
            produk-produk yang selalu segar.
        </p>
    </div>

    <!-- Footer -->
    <footer class="text-center">
        <p>&copy; 2024 Plaza Market - All Rights Reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
@endsection

