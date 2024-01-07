<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
<meta name="description" content=""/>
<meta name="author" content=""/>
<title>New Age - Start Bootstrap Theme</title>
<link rel="icon" type="image/x-icon" href="{{ asset('landing/assets/favicon.ico') }}"/>
<!-- Bootstrap icons-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"/>
<!-- Google fonts-->
<link rel="preconnect" href="https://fonts.gstatic.com"/>
<link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet"/>
<!-- Core theme CSS (includes Bootstrap)-->
<link href="{{ asset('landing/css/styles.css') }}" rel="stylesheet"/>
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
<div class="container px-5">
	<a class="navbar-brand fw-bold" href="#page-top">Toko Sejahtera</a>
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	Menu <i class="bi-list"></i>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
			<li class="nav-item">
				<a class="nav-link me-lg-3" href="#features">Features</a>
			</li>
			<li class="nav-item">
				<a class="nav-link me-lg-3" href="#download">Download</a>
			</li>
		</ul>
		 @if (Route::has('login')) <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
		<span class="d-flex align-items-center">
		<i class="bi-chat-text-fill me-2"></i>
		<a href="{{ route('login') }}" class="text-white">Login</a>
		</span>
		</button>
		@endif
	</div>
</div>
</nav>
<!-- Mashead header-->
<header class="masthead">
<div class="container px-5">
	<div class="row gx-5 align-items-center">
		<div class="col-lg-6">
			<!-- Mashead text and app badges-->
			<div class="mb-5 mb-lg-0 text-center text-lg-start">
				<h1 class="display-1 lh-1 mb-3">Toko Sejahtera</h1>
				<p class="lead fw-normal text-muted mb-5">
					Aplikasi untuk mencatat segala transaksi di Toko Sejahtera
				</p>
			</div>
		</div>
		<div class="col-lg-6">
			<!-- Masthead device mockup feature-->
			<div class="masthead-device-mockup">
				<svg class="circle" viewbox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
				<defs>
				<lineargradient id="circleGradient" gradienttransform="rotate(45)">
				<stop class="gradient-start-color" offset="0%"></stop>
				<stop class="gradient-end-color" offset="100%"></stop>
				</lineargradient>
				</defs>
				<circle cx="50" cy="50" r="50"></circle></svg><svg class="shape-1 d-none d-sm-block" viewbox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
				<rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
				<rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect></svg><svg class="shape-2 d-none d-sm-block" viewbox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"></circle></svg>
				<div class="device-wrapper">
					<div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
						<div class="screen bg-black">
							<!-- PUT CONTENTS HERE:-->
							<!-- * * This can be a video, image, or just about anything else.-->
							<!-- * * Set the max width of your media to 100% and the height to-->
							<!-- * * 100% like the demo example below.-->
							<video muted="muted" autoplay="" loop="" style="max-width: 100%; height: 100%"><source src="{{ asset('landing/assets/img/demo-screen.mp4') }}" type="video/mp4"/></video>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>
<!-- Quote/testimonial aside-->
<aside class="text-center bg-gradient-primary-to-secondary">
<div class="container px-5">
	<div class="row gx-5 justify-content-center">
		<div class="col-xl-8">
			<div class="h2 fs-1 text-white mb-4">
				"Bekerjalah dengan jujur maka anda akan mendapatkan berkah"
			</div>
			<img src="{{ asset('landing/assets/img/tnw-logo.svg') }}" alt="..." style="height: 3rem"/>
		</div>
	</div>
</div>
</aside>
<!-- App features section-->
<section id="features">
<div class="container px-5">
	<div class="row gx-5 align-items-center">
		<div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
			<div class="container-fluid px-5">
				<div class="row gx-5">
					<div class="col-md-6 mb-5">
						<!-- Feature item-->
						<div class="text-center">
							<i class="bi-phone icon-feature text-gradient d-block mb-3"></i>
							<h3 class="font-alt">Device Mockups</h3>
							<p class="text-muted mb-0">
								Tampilan Mockup
							</p>
						</div>
					</div>
					<div class="col-md-6 mb-5">
						<!-- Feature item-->
						<div class="text-center">
							<i class="bi-camera icon-feature text-gradient d-block mb-3"></i>
							<h3 class="font-alt">Pemakaian</h3>
							<p class="text-muted mb-0">
								Pemakaian yang mudah dan praktis
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 mb-5 mb-md-0">
						<!-- Feature item-->
						<div class="text-center">
							<i class="bi-gift icon-feature text-gradient d-block mb-3"></i>
							<h3 class="font-alt">Terpercaya</h3>
							<p class="text-muted mb-0">
								Sangat dipercayai oleh beberapa pihak
							</p>
						</div>
					</div>
					<div class="col-md-6">
						<!-- Feature item-->
						<div class="text-center">
							<i class="bi-patch-check icon-feature text-gradient d-block mb-3"></i>
							<h3 class="font-alt">Halal</h3>
							<p class="text-muted mb-0">
								Dijamin Halal
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 order-lg-0">
			<!-- Features section device mockup-->
			<div class="features-device-mockup">
				<svg class="circle" viewbox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
				<defs>
				<lineargradient id="circleGradient" gradienttransform="rotate(45)">
				<stop class="gradient-start-color" offset="0%"></stop>
				<stop class="gradient-end-color" offset="100%"></stop>
				</lineargradient>
				</defs>
				<circle cx="50" cy="50" r="50"></circle></svg><svg class="shape-1 d-none d-sm-block" viewbox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
				<rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
				<rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect></svg><svg class="shape-2 d-none d-sm-block" viewbox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"></circle></svg>
				<div class="device-wrapper">
					<div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
						<div class="screen bg-black">
							<!-- PUT CONTENTS HERE:-->
							<!-- * * This can be a video, image, or just about anything else.-->
							<!-- * * Set the max width of your media to 100% and the height to-->
							<!-- * * 100% like the demo example below.-->
							<video muted="muted" autoplay="" loop="" style="max-width: 100%; height: 100%"><source src="{{ asset('landing/assets/img/demo-screen.mp4') }}" type="video/mp4"/></video>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<!-- Basic features section-->
<section class="bg-light">
<div class="container px-5">
	<div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
		<div class="col-12 col-lg-5">
			<h2 class="display-4 lh-1 mb-4">Toko Sejahtera</h2>
			<p class="lead fw-normal text-muted mb-5 mb-lg-0">
				Toko sejahtera ini dibangun untuk memenuhi tugas besar Ujian Akhir Semester mata kuliah Pemrograman Web
			</p>
		</div>
		<div class="col-sm-8 col-md-6">
			<div class="px-5 px-sm-0">
				<img class="img-fluid rounded-circle" src="https://source.unsplash.com/u8Jn2rzYIps/900x900" alt="..."/>
			</div>
		</div>
	</div>
</div>
</section>
<!-- Call to action section-->
<section class="cta">
<div class="cta-content">
	<div class="container px-5">
		<h2 class="text-white display-1 lh-1 mb-4">Jangan Kebanyakan Berfikir.<br/>Mari Bekerja ! ! !</h2>
	</div>
</div>
</section>
<!-- App badge section-->
<section class="bg-gradient-primary-to-secondary" id="download">
<div class="container px-5">
	<h2 class="text-center text-white font-alt mb-4">Get the app now!</h2>
	<div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
		<a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="{{ asset('landing/assets/img/google-play-badge.svg') }}" alt="..."/></a>
		<a href="#!"><img class="app-badge" src="{{ asset('landing/assets/img/app-store-badge.svg') }}" alt="..."/></a>
	</div>
</div>
</section>
<!-- Footer-->
<footer class="bg-black text-center py-5">
<div class="container px-5">
	<div class="text-white-50 small">
		<div class="mb-2">&copy;Toko Sejahtera 2024. All Rights Reserved.</div>
		<a href="#!">Privacy</a>
		<span class="mx-1">&middot;</span>
		<a href="#!">Terms</a>
		<span class="mx-1">&middot;</span>
		<a href="#!">FAQ</a>
	</div>
</div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{ asset('landing/js/scripts.js') }}"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>