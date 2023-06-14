<!DOCTYPE html>
<html lang="en">

<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Lingua project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link href="plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/blog.css">
	<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
	<link rel="shortcut icon" type="image/png" href="/assets/images/logos/favicon.png" />
	<link rel="stylesheet" href="/assets/css/styles.min.css" />
</head>

<body>

	<div class="super_container">

		<!-- Header -->

		<header class="header">

			<!-- Top Bar -->
			<!-- Header Content -->
			<div class="header_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header_content d-flex flex-row align-items-center justify-content-start">
								<div class="logo_container mr-auto">
									<a href="#">
										<div class="logo_text">Biblioteca Saber</div>
									</a>
								</div>
								<nav class="main_nav_contaner">
									<ul class="main_nav">
										<li><a href="/livros">Catalogo de Livros</a></li>
										<li><a href="/quemsomos">Quem somos</a></li>
										<li><a href="/regrasdeuso">Regras de Uso</a></li>
										<li><a href="/contato">Contato</a></li>
									</ul>
								</nav>
								<div class="header_content_right ml-auto text-right">
									<div class="user" id="navbarNav">
										<ul class="navbar-nav">
											<li class="nav-item dropdown">
												<a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
														<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
														<path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
														<path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
														<path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
													</svg>
												</a>
												<div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
													<div class="message-body">
														@auth
														<a href="/emprestimos" class="d-flex align-items-center gap-2 dropdown-item">
															<i class="ti ti-user fs-6"></i>
															<p class="mb-0 fs-3">Dashboard</p>
														</a>
														<form method="POST" action="/logout">
															@csrf
															<a href="/logout" class="btn btn-outline-primary mx-3 mt-2 d-block" onclick="event.preventDefault();
															this.closest('form').submit();">
																Logout
															</a>
														</form>
														@endauth
														@guest
														<a href="/login" class="d-flex align-items-center gap-2 dropdown-item">
															<i class="ti ti-user fs-6"></i>
															<p class="mb-0 fs-3">Login</p>
														</a>
														@endguest
													</div>
												</div>
											</li>
										</ul>
									</div>
									<div class="hamburger menu_mm">
										<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>

		</header>

		<!-- Menu -->

		<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
			<div class="menu_close_container">
				<div class="menu_close">
					<div></div>
					<div></div>
				</div>
			</div>
			<div class="search">
				<form action="#" class="header_search_form menu_mm">
					<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
					<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
						<i class="fa fa-search menu_mm" aria-hidden="true"></i>
					</button>
				</form>
			</div>
			<nav class="menu_nav">
				<ul class="menu_mm">
					<li class="menu_mm"><a href="index.html">Home</a></li>
					<li class="menu_mm"><a href="courses.html">Courses</a></li>
					<li class="menu_mm"><a href="instructors.html">Instructors</a></li>
					<li class="menu_mm"><a href="#">Events</a></li>
					<li class="menu_mm"><a href="blog.html">Blog</a></li>
					<li class="menu_mm"><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
			<div class="menu_extra">
				<div class="menu_phone"><span class="menu_title">Telefone:</span>14 4002-8922</div>
				<div class="menu_social">
					<span class="menu_title">Siga-nos</span>
					<ul>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Home -->

		<div class="home">

		</div>

		<!-- Blog -->

		<div class="blog">
			@yield('content')
		</div>

		<!-- Footer -->

		<footer class="footer">
			<div class="footer_body">
				<div class="container">
					<!--editar-->
					<div class="row">

						<!-- Newsletter -->
						<div class="col-lg-3 footer_col">
							<div class="newsletter_container d-flex flex-column align-items-start justify-content-end">
								<div class="footer_logo mb-auto"><a href="#">Biblioteca Saber</a></div>
								
							</div>
						</div>

						<!-- About 
						<div class="col-lg-2 offset-lg-3 footer_col">
							<div>
								<div class="footer_title">About Us</div>
								<ul class="footer_list">
									<li><a href="#">Courses</a></li>
									<li><a href="#">Team</a></li>
									<li><a href="#">Brand Guidelines</a></li>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Advertise with us</a></li>
									<li><a href="#">Press</a></li>
									<li><a href="#">Contact us</a></li>
								</ul>
							</div>
						</div> -->

						<!-- Help & Support 
						<div class="col-lg-2 footer_col">
							<div class="footer_title">Help & Support</div>
							<ul class="footer_list">
								<li><a href="#">Discussions</a></li>
								<li><a href="#">Troubleshooting</a></li>
								<li><a href="#">Duolingo FAQs</a></li>
								<li><a href="#">Schools FAQs</a></li>
								<li><a href="#">Duolingo English Test FAQs</a></li>
								<li><a href="#">Status</a></li>
							</ul>
						</div>
                              -->
						<!-- Privacy 
						<div class="col-lg-2 footer_col clearfix">
							<div>
								<div class="footer_title">Privacy & Terms</div>
								<ul class="footer_list">
									<li><a href="#">Community Guidelines</a></li>
									<li><a href="#">Terms</a></li>
									<li><a href="#">Brand Guidelines</a></li>
									<li><a href="#">Privacy</a></li>
								</ul>
							</div>
						</div>
                        -->
					</div>
				</div>
			</div>
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="copyright_content d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
								<div class="cr"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
									 &copy;<script>
										document.write(new Date().getFullYear());
									</script> Todos os direitos reservados a Biblioteca Saber</a> 
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
								<div class="cr_right ml-md-auto">
									<div class="footer_phone"><span class="cr_title">Telefone:</span>14 4002-8922</div>
									<div class="footer_social">
			
										<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="js/blog.js"></script>
	<script src="/assets/libs/jquery/dist/jquery.min.js"></script>
	<script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="/assets/js/sidebarmenu.js"></script>
	<script src="/assets/js/app.min.js"></script>
	<script src="/assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>