<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('layout/bootstrap/dist/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('layout/css/main.css') }}">
<title>Toko Sejahtera</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-white fixed-top py-4 shadow-sm">
<div class="container">
	<a class="navbar-brand" href="index.html">Toko Sejahtera</a>
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<div class="input-group mx-auto mt-5 mt-lg-0">
			<input type="text" class="form-control" placeholder="Mau cari apa?" aria-label="Mau cari apa?" aria-describedby="button-addon2">
			<button class="btn btn-outline-warning" type="button" id="button-addon2"><i class="bx bx-search"></i></button>
		</div>
		<ul class="navbar-nav ms-auto mt-3 mt-sm-0">
			<li class="nav-item me-3">
				<a class="nav-link active" href="#">
				<i class="bx bx-heart"></i>
				<span class="badge text-bg-warning rounded-circle position-absolute">2</span>
				</a>
			</li>
			<li class="nav-item me-5">
				<a class="nav-link" href="#">
				<i class="bx bx-cart-alt"></i>
				<span class="badge text-bg-warning rounded-circle position-absolute">3</span>
				</a>
			</li>

			@if (Route::has('login'))
			<li class="nav-item mt-5 mt-lg-0 text-center">
				<a class="nav-link btn-second me-lg-3" href="{{ route('login') }}">Login</a>
			</li>
			<li class="nav-item mt-3 mt-lg-0 text-center">
				<a class="nav-link btn-first" href="{{ route('register') }}">Register</a>
			</li>
            @endif
		</ul>
	</div>
</div>
</nav>

<!-- Header -->
<section class="header">
<div class="container">
	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="{{ asset('layout/assets/img/slide1.jpg') }}" class="d-block w-100" alt="slide 1">
			</div>
			<div class="carousel-item">
				<img src="{{ asset('layout/assets/img/slide2.jpg') }}" class="d-block w-100" alt="slide 2">
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
		</button>
	</div>
</div>
</section>
<!-- Popular -->
<section class="popular">
    <div class="container">
        <!-- ... (bagian lain dari kode) ... -->

        <div class="row mt-5">
            @foreach ($products as $product)
                <div class="col-lg-3 col-6">
                    <div class="card card-product card-body p-lg-4 p3">
                        <a href="{{ route('product.show', $product->id) }}">
                            <img src="{{ asset('uploads/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid">
                        </a>
                        <h3 class="product-name mt-3">{{ $product->name }}</h3>
                        <!-- Tambahkan informasi produk lainnya sesuai kebutuhan -->
                        <div class="detail d-flex justify-content-between align-items-center mt-4">
                            <p class="price">IDR {{ number_format($product->price, 2) }}</p>
                            <a href="{{ route('product.show', $product->id) }}" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Subscribe  -->
<section class="subscribe">
<div class="container">
	<div class="subscribe-wrapper">
		<div class="row justify-content-center text-center">
			<div class="col-lg-6 col-md-7 col-10 col-sub">
				<h1>Subscribe to get latest updates!</h1>
				<form action="#" class="mt-5">
					<div class="input-group w-100">
						<input type="email" class="form-control" placeholder="Type your email ..">
						<button class="btn btn-outline-warning">Subscribe</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</section>
<footer>
<div class="container pt-5">
	<div class="row row-content">
		<div class="col-md-6">
			<h1 class="logo-brand">Indo <span>Toko</span></h1>
			<p>
				Lorem ipsum dolor sit amet
			</p>
		</div>
		<div class="col-md-3 mt-4 mt-sm-0">
			<h3 class="mb-3">Navigation</h3>
			<ul class="p-0">
				<li>
					<a href="#">Home</a>
				</li>
				<li class="mt-3">
					<a href="#">Best Seller</a>
				</li>
				<li class="mt-3">
					<a href="#">Category</a>
				</li>
				<li class="mt-3">
					<a href="#">Comunity</a>
				</li>
				<li class="mt-3">
					<a href="#">Blog</a>
				</li>
			</ul>
		</div>
		<div class="col-md-3 mt-4 mt-sm-0">
			<h3 class="mb-3">Company</h3>
			<a href="#">john@example.com</a>
			<p>
				Jln. Tamansiswa, No 32 Yogyakarta Indonesia
			</p>
		</div>
	</div>
	<div class="row row-copy mt-4 mt-sm-0">
		<div class="col-md-6">
			<p>
				&copy; 2023 IndoToko. All rights reserved.
			</p>
		</div>
		<div class="col-md-6 text-sm-end">
			<a href="#"><i class='bx bxl-instagram-alt'></i></a>
			<a href="#"><i class='bx bxl-facebook-circle'></i></a>
		</div>
	</div>
</div>
</footer>
<script src="{{ asset('layout/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>