@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Carousel Produk -->
    <div id="productCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image1.jpg" class="d-block w-100" alt="Produk 1">
            </div>
            <div class="carousel-item">
                <img src="image2.jpg" class="d-block w-100" alt="Produk 2">
            </div>
            <div class="carousel-item">
                <img src="image3.jpg" class="d-block w-100" alt="Produk 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- About Section -->
    <div class="about-section mt-5">
        <h2>About Us</h2>
        <p>Risa's Supermarket adalah supermarket terpercaya yang menyediakan berbagai produk kebutuhan sehari-hari. Kami berkomitmen untuk memberikan layanan terbaik kepada pelanggan kami.</p>
    </div>
</div>
@endsection
