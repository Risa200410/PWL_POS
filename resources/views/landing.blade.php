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
            color: white !important;
            font-size: 24px;
            font-weight: bold;
        }
        .btn-login, .btn-register {
            border-radius: 20px;
            margin-left: 10px;
            color: white;
            padding: 5px 15px;
        }
        .btn-login {
            background-color: #007bff;
        }
        .btn-register {
            background-color: #9dedf1;
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
        .description-container, .about-us-container {
            padding: 40px 0;
            background-color: #f9f9f9;
        }
        .description-title, .about-title {
            font-size: 28px;
            color: #007bff;
            font-weight: bold;
            text-align: center;
        }
        .description-text, .about-text {
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
        <a class="navbar-brand" href="#">Risa Plaza Market</a>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
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
        </div>
    </nav>

    <!-- Promo Banner -->
    <div class="promo-container">
        <img src="adminlte/dist/img/promo_banner.png" alt="Promo Banner" class="promo-banner">
    </div>

    <!-- Promo Information -->
    <div class="container text-center">
        <h2 class="promo-title">My Super Trip for Frequent Spender</h2>
        <p>
            Holiday trip for 5 families to Malang Jatim Park 4 Days 3 Nights, Royal Carribean, Universal Studio Singapore, and many more exciting prizes!
        </p>
        <div>
            <img src="adminlte/dist/img/diskon1.jpeg" alt="Promo 1" style="width: 100%; max-width: 300px; margin: 10px;">
            <img src="adminlte/dist/img/diskon2.jpeg" alt="Promo 2" style="width: 100%; max-width: 300px; margin: 10px;">
            <img src="adminlte/dist/img/diskon3.jpg" alt="Promo 3" style="width: 100%; max-width: 300px; margin: 10px;">
        </div>
    </div>

    <!-- Store Description -->
    <div class="description-container">
        <h2 class="description-title">Tentang Risa Plaza Market</h2>
        <p class="description-text">
            Risa Plaza Market adalah supermarket modern yang menghadirkan produk berkualitas untuk kebutuhan sehari-hari. 
            Kami berkomitmen memberikan pelayanan terbaik kepada pelanggan dengan menyediakan berbagai pilihan produk, mulai dari bahan makanan segar hingga kebutuhan rumah tangga lainnya. 
            Dengan harga terjangkau dan berbagai promo menarik, Risa Plaza Market menjadi pilihan tepat bagi keluarga Anda. 
            Nikmati pengalaman berbelanja yang menyenangkan di Risa Plaza Market dengan suasana yang nyaman dan produk-produk yang selalu segar.
        </p>
    </div>

    <!-- About Us Section -->
    <div class="about-us-container">
        <h2 class="about-title">About Us</h2>
        <p class="about-text">
            Selamat datang di Risa Plaza Market! <br><br>

            Kami adalah perusahaan yang berdedikasi untuk menyediakan produk-produk berkualitas tinggi dengan harga yang terjangkau, serta layanan pelanggan yang ramah dan cepat. 
            Berdiri sejak 2024, tujuan kami adalah membantu Anda menemukan solusi terbaik untuk kebutuhan sehari-hari melalui pilihan produk yang kami sediakan. 
            Kami selalu berkomitmen untuk meningkatkan pengalaman belanja Anda dan terus berkembang bersama pelanggan setia kami. Terima kasih telah mempercayai Risa Plaza Market sebagai mitra belanja Anda!
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
