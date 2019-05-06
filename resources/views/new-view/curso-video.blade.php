<!doctype html>
<html lang="en">

<!-- Mirrored from jthemes.org/html/genius-course/check-out.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Apr 2019 15:20:39 GMT -->
<head>
	<meta charset="UTF-8">
	<title>Check Out Page</title>


	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('css/fontawesome-all.css') }}">
	<link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
	<link rel="stylesheet" type="text/css" href="{{  asset('css/meanmenu.css') }}">
	<link rel="stylesheet" href="{{  asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{  asset('css/video.min.css') }}">
	<link rel="stylesheet" href="{{  asset('css/lightbox.css') }}">
	<link rel="stylesheet" href="{{  asset('css/progess.css') }}">
	<link rel="stylesheet" href="{{  asset('css/style.css') }}">
	<link rel="stylesheet" href="{{  asset('css/responsive.css') }}">


	<link rel="stylesheet"  href="{{  asset('css/colors/switch.css') }}">
</head>

<body>

	<!-- Start of Header section
		============================================= -->
		<header>
			<div id="main-menu"  class="main-menu-container">
				<div  class="main-menu">
					<div class="container">
						<div class="navbar-default">
							<div class="navbar-header float-left">
								<a class="navbar-brand text-uppercase" href="#"><img src="img/logo/f-logo.png" alt="logo"></a>
							</div><!-- /.navbar-header -->

							<div class="select-lang">
								<select>
									<option value="9" selected="">ENG</option>
									<option value="10">BAN</option>
									<option value="11">ARB</option>
									<option value="12">FRN</option>
								</select>
							</div>
							<div class="cart-search float-right ul-li">
								<ul>
									<li>
										<button type="button" class="toggle-overlay search-btn">
											<i class="fas fa-search"></i>
										</button>
										<div class="search-body">
											<div class="search-form">
												<form action="#">
													<input class="search-input" type="search" placeholder="Search Here">
													<div class="outer-close toggle-overlay">
														<button type="button" class="search-close">
															<i class="fas fa-times"></i>
														</button>
													</div>
												</form>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="log-in float-right">
								<a  data-toggle="modal" data-target="#myModal" href="#">log in</a>
								<!-- The Modal -->
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">

											<!-- Modal Header -->
											<div class="modal-header backgroud-style">
												<div class="gradient-bg"></div>
												<div class="popup-logo">
													<img src="assets/img/logo/p-logo.jpg" alt="">
												</div>
												<div class="popup-text text-center">
													<h2> <span>Login</span> Your Account.</h2>
													<p>Login to our website, or <span>REGISTER</span></p>
												</div>
											</div>

											<!-- Modal body -->
											<div class="modal-body">
												<div class="facebook-login">
													<a href="#">
														<div class="log-in-icon">
															<i class="fab fa-facebook-f"></i>
														</div>
														<div class="log-in-text text-center">
															Login with Facebook
														</div>
													</a>
												</div>
												<div class="alt-text text-center"><a href="#">OR SIGN IN</a> </div>
												<form class="contact_form" action="#" method="POST" enctype="multipart/form-data">
													<div class="contact-info">
														<input class="name" name="Email" type="email" placeholder="Your@email.com*">
													</div>
													<div class="contact-info">
														<input class="pass" name="name" type="password" placeholder="Your password*">
													</div>
													<div class="nws-button text-center white text-capitalize">
														<button type="submit" value="Submit">LOg in Now</button> 
													</div> 
												</form>
												<div class="log-in-footer text-center">
													<p>* Denotes mandatory field.</p>
													<p>** At least one telephone number is required.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<nav class="navbar-menu float-right">
								<div class="nav-menu ul-li">
									<ul>
										<li class="menu-item-has-children ul-li-block">
											<a href="#">SOBRE NOSOTROS</a>
											<ul class="sub-menu">
												<li><a href="#">Vision</a></li>
												<li><a href="#">Mision</a></li>
												<li><a href="#">Quienes somos</a></li>
											</ul>
										</li>
										<li><a href="#">SERVICIOS</a></li>
										<li><a href="#">CURSOS</a></li>
										<li><a href="#">TESTIMONIOS</a></li>
										<li><a href="#">CONTACTANOS</a></li>
									</ul>
								</div>
							</nav>

							<div class="mobile-menu">
								<div class="logo"><a href="index-1.html"><img src="assets/img/logo/logo.png" alt="Logo"></a></div>
								<nav>
									<ul>
										<li class="menu-item-has-children ul-li-block">
											<a href="#">SOBRE NOSOTROS</a>
											<ul class="sub-menu">
												<li><a href="#">Vision</a></li>
												<li><a href="#">Mision</a></li>
												<li><a href="#">Quienes somos</a></li>
											</ul>
										</li>
										<li><a href="#">SERVICIOS</a></li>
										<li><a href="#">CURSOS</a></li>
										<li><a href="#">TESTIMONIOS</a></li>
										<li><a href="#">CONTACTANOS</a></li>
									</ul>
								</nav>

							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
 	<!-- Start of Header section
 		============================================= --> 


	<!-- Start of breadcrumb section
		============================================= -->
		<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
			<div class="blakish-overlay"></div>
			<div class="container">
				
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->


	<!-- Start of Checkout content
		============================================= -->
		<section id="checkout" class="checkout-section">
			<div class="container">
				<div class="checkout-content">
					<div class="row">
						<div class="col-md-9">
							<div class="course-list-view table-responsive">
								<iframe width="100%" height="514" src="https://www.youtube.com/embed/CHEIC1ryguw?list=RDCHEIC1ryguw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							<h3 class="text-capitalize pt-4"><span> Este es el titulo de esta video el que tienes que ver</span></h3>
							<div class="row">
								<div class="col-md-12">
									<div class="footer-social ul-li pt-4">
										<div class="section-title-2  headline text-left">
											<h4>Descripcion.</h4>
										</div>
										<p>
											Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
										</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="pt-4">
										<div class="section-title-2  headline text-left">
											<h4>Materiales.</h4>
										</div>
										<div class="course-details-category ul-li">
											<ul>
												<li><a href="#">PDF - Dispos de la presentacion</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="side-bar-widget first-widget">
								<div class="sub-total-item">
									<div class="purchase-list mt15 ul-li-block">
										<div class="ul-li-block">
										<h5 class="">Nombre del modulo</h5>
										<ul>
											<li><a href="#"><i ></i>Video del modulo</a></li>
											<li><a href="#"><i ></i>Video del modulo</a></li>
											<li><a href="#"><i ></i>Video del modulo</a></li>
											<li><a href="#"><i ></i>Video del modulo</a></li>
											<li><a href="#"><i ></i>Video del modulo</a></li>
											<li><a href="#"><i ></i>Video del modulo</a></li>
										</ul>
									</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End  of Checkout content
		============================================= -->

	<!-- Start of footer section
		============================================= -->
		<footer>
			<section id="footer-area" class="footer-area-section">
				<div class="container">
					
					<!-- /footer-widget-content -->
					<div class="footer-social-subscribe mb65">
						<div class="row">
							<div class="col-md-3">
								<div class="footer-social ul-li">
									<h2 class="widget-title">Redes Sociales</h2>
									<ul>
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="copy-right-menu">
						<div class="row">
							<div class="col-md-6">
								<div class="copy-right-text">
									<p>© 2019 - Desarollado y diseñado por <a href="#" title="Best Premium WordPress, HTML Template Store"> ACEX</a>. Todos los derechos reservados</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</footer>
	<!-- End of footer section
		============================================= -->



		<!-- For Js Library -->
		<script src="{{  asset('js/jquery-2.1.4.min.js') }}"></script>
		<script src="{{  asset('js/bootstrap.min.js') }}"></script>
		<script src="{{  asset('js/popper.min.js') }}"></script>
		<script src="{{  asset('js/owl.carousel.min.js') }}"></script>
		<script src="{{  asset('js/jarallax.js') }}"></script>
		<script src="{{  asset('js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{  asset('js/lightbox.js') }}"></script>
		<script src="{{  asset('js/jquery.meanmenu.js') }}"></script>
		<script src="{{  asset('js/scrollreveal.min.js') }}"></script>
		<script src="{{  asset('js/jquery.counterup.min.js') }}"></script>
		<script src="{{  asset('js/waypoints.min.js') }}"></script>
		<script src="{{  asset('js/jquery-ui.js') }}"></script>
		<script src="{{  asset('js/gmap3.min.js') }}"></script>
		<script src="{{  asset('js/switch.js') }}"></script>

    	<script src="{{  asset('js/script.js') }}"></script>
	</body>
	
<!-- Mirrored from jthemes.org/html/genius-course/check-out.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Apr 2019 15:20:40 GMT -->
</html>