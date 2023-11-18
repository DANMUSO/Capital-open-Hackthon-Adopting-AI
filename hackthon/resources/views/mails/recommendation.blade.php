<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>v1 Platform</title>
<!-- Stylesheets -->
<link href="http://34.206.53.230:9010/v1/css/bootstrap.css" rel="stylesheet">
<link href="http://34.206.53.230:9010/v1/css/style.css" rel="stylesheet">
<link href="http://34.206.53.230:9010/v1/css/responsive.css" rel="stylesheet">

<link href="http://34.206.53.230:9010/v1/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="http://34.206.53.230:9010/v1/images/favicon.png" type="image/x-icon">
<link rel="icon" href="http://34.206.53.230:9010/v1/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader">
		<span></span>
	</div>
 	
 	<!-- Main Header -->
    <header class="main-header">
    	
		<!-- Header Top -->
		<div class="header-top">
			<div class="auto-container clearfix">
				<div class="row">
                    <div class="col-md-4">
                    <div class="pull-left">
					<ul class="info">
						<li><a href="tel:+254703894372"><span class="icon flaticon-phone"></span>Call: +254703894372</a></li>
						<li><a href="https://qloudpointsolutions.com/"><span class="icon flaticon-email-2"></span>Info@v1.com</a></li>
					</ul>
				</div>
                    </div>
                    <div class="col-md-4">

                    <div class="pull-right clearfix">
					<!-- Social Box -->
					<ul class="social-box">
						<li><a href="">Movies</a></li>
						<li><a href="">TV Shows</a></li>
						<li><a href="{{ url('login')}}">Login</a></li>
					</ul>
				</div>
                    </div>
                    <div class="col-md-4">

                    <div class="pull-right clearfix">
					<!-- Social Box -->
					<ul class="social-box">
						<li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
						<li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
						<li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
					</ul>
				</div>
                    </div>

                </div>
				
				
				
			</div>
		</div>
		
      
		<!-- Sticky Header  -->
        <div class="sticky-header header-top">

        
        </div><!-- End Sticky Menu -->
    
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="{{ asset('v1/images/logo.png')}}" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->
	
    </header>
    <!-- End Main Header -->
	
   <!-- Featured Section -->
	<section class="featured-section">
		<div class="pattern-layer-one" style="background-image: url({{ asset('nexttop/images/background/pattern-9.png')}})"></div>
		<div class="pattern-layer-two" style="background-image: url({{ asset('nexttop/images/background/pattern-10.png')}})"></div>
		<div class="auto-container">
		
			<!-- Sec Title -->
			<div class="sec-title light">
				<div class="clearfix">
					<div class="pull-left">
						<div class="title">Now Showing</div>
						<h2>Featured showing</h2>
					</div>
					<div class="pull-right">
						<div class="button-box">
							<a href="movie.html" class="theme-btn btn-style-two"><span class="txt">View More <i class="lnr lnr-arrow-right"></i></span></a>
						</div>
					</div>
				</div>
			</div>
			<!-- End Sec Title -->
			
			<div class="row clearfix">
				
				<!-- Feature Block -->
				<div class="feature-block">
					<div class="inner-box">
						<div class="image">
							<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
							<img src="{{ asset('nexttop/images/resource/feature-1.jpg')}}" alt="">
							<div class="overlay-box">
								<ul class="post-meta">
									<li><span class="icon fa fa-star"></span>5.7</li>
									<li><span class="icon fa fa-comment"></span>25</li>
								</ul>
							</div>
						</div>
						<div class="lower-content">
							<div class="clearfix">
								<div class="pull-left">
									<h6><a href="movie.html">Robin Hood</a></h6>
								</div>
								<div class="pull-right">
									<div class="year">2010</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Feature Block -->
				<div class="feature-block">
					<div class="inner-box">
						<div class="image">
							<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
							<img src="{{ asset('nexttop/images/resource/feature-2.jpg')}}" alt="">
							<div class="overlay-box">
								<ul class="post-meta">
									<li><span class="icon fa fa-star"></span>5.7</li>
									<li><span class="icon fa fa-comment"></span>25</li>
								</ul>
							</div>
						</div>
						<div class="lower-content">
							<div class="clearfix">
								<div class="pull-left">
									<h6><a href="movie.html">Bad Boys Life</a></h6>
								</div>
								<div class="pull-right">
									<div class="year">2012</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Feature Block -->
				<div class="feature-block">
					<div class="inner-box">
						<div class="image">
							<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
							<img src="{{ asset('nexttop/images/resource/feature-3.jpg')}}" alt="">
							<div class="overlay-box">
								<ul class="post-meta">
									<li><span class="icon fa fa-star"></span>5.7</li>
									<li><span class="icon fa fa-comment"></span>25</li>
								</ul>
							</div>
						</div>
						<div class="lower-content">
							<div class="clearfix">
								<div class="pull-left">
									<h6><a href="movie.html">Hot Dolitle</a></h6>
								</div>
								<div class="pull-right">
									<div class="year">2014</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Feature Block -->
				<div class="feature-block">
					<div class="inner-box">
						<div class="image">
							<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
							<img src="{{ asset('nexttop/images/resource/feature-4.jpg')}}" alt="">
							<div class="overlay-box">
								<ul class="post-meta">
									<li><span class="icon fa fa-star"></span>5.7</li>
									<li><span class="icon fa fa-comment"></span>25</li>
								</ul>
							</div>
						</div>
						<div class="lower-content">
							<div class="clearfix">
								<div class="pull-left">
									<h6><a href="movie.html">Invisible Man</a></h6>
								</div>
								<div class="pull-right">
									<div class="year">2016</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Feature Block -->
				<div class="feature-block">
					<div class="inner-box">
						<div class="image">
							<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
							<img src="{{ asset('nexttop/images/resource/feature-5.jpg')}}" alt="">
							<div class="overlay-box">
								<ul class="post-meta">
									<li><span class="icon fa fa-star"></span>5.7</li>
									<li><span class="icon fa fa-comment"></span>25</li>
								</ul>
							</div>
						</div>
						<div class="lower-content">
							<div class="clearfix">
								<div class="pull-left">
									<h6><a href="movie.html">Onward Hood</a></h6>
								</div>
								<div class="pull-right">
									<div class="year">2018</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Feature Block -->
				<div class="feature-block">
					<div class="inner-box">
						<div class="image">
							<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
							<img src="{{ asset('nexttop/images/resource/feature-6.jpg')}}" alt="">
							<div class="overlay-box">
								<ul class="post-meta">
									<li><span class="icon fa fa-star"></span>5.7</li>
									<li><span class="icon fa fa-comment"></span>25</li>
								</ul>
							</div>
						</div>
						<div class="lower-content">
							<div class="clearfix">
								<div class="pull-left">
									<h6><a href="movie.html">Tenet Life</a></h6>
								</div>
								<div class="pull-right">
									<div class="year">2019</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Feature Block -->
				<div class="feature-block">
					<div class="inner-box">
						<div class="image">
							<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
							<img src="{{ asset('nexttop/images/resource/feature-7.jpg')}}" alt="">
							<div class="overlay-box">
								<ul class="post-meta">
									<li><span class="icon fa fa-star"></span>5.7</li>
									<li><span class="icon fa fa-comment"></span>25</li>
								</ul>
							</div>
						</div>
						<div class="lower-content">
							<div class="clearfix">
								<div class="pull-left">
									<h6><a href="movie.html">The Grudge</a></h6>
								</div>
								<div class="pull-right">
									<div class="year">2020</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Feature Block -->
				<div class="feature-block">
					<div class="inner-box">
						<div class="image">
							<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
							<img src="{{ asset('nexttop/images/resource/feature-8.jpg')}}" alt="">
							<div class="overlay-box">
								<ul class="post-meta">
									<li><span class="icon fa fa-star"></span>5.7</li>
									<li><span class="icon fa fa-comment"></span>25</li>
								</ul>
							</div>
						</div>
						<div class="lower-content">
							<div class="clearfix">
								<div class="pull-left">
									<h6><a href="movie.html">Underwater</a></h6>
								</div>
								<div class="pull-right">
									<div class="year">2022</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Feature Block -->
				<div class="feature-block">
					<div class="inner-box">
						<div class="image">
							<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
							<img src="{{ asset('nexttop/images/resource/feature-9.jpg')}}" alt="">
							<div class="overlay-box">
								<ul class="post-meta">
									<li><span class="icon fa fa-star"></span>5.7</li>
									<li><span class="icon fa fa-comment"></span>25</li>
								</ul>
							</div>
						</div>
						<div class="lower-content">
							<div class="clearfix">
								<div class="pull-left">
									<h6><a href="movie.html">The Turning</a></h6>
								</div>
								<div class="pull-right">
									<div class="year">2022</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Feature Block -->
				<div class="feature-block">
					<div class="inner-box">
						<div class="image">
							<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
							<img src="{{ asset('nexttop/images/resource/feature-10.jpg')}}" alt="">
							<div class="overlay-box">
								<ul class="post-meta">
									<li><span class="icon fa fa-star"></span>5.7</li>
									<li><span class="icon fa fa-comment"></span>25</li>
								</ul>
							</div>
						</div>
						<div class="lower-content">
							<div class="clearfix">
								<div class="pull-left">
									<h6><a href="movie.html">Birds of Prey</a></h6>
								</div>
								<div class="pull-right">
									<div class="year">2022</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Featured Section -->
	
	<!-- Main Footer -->
    <footer class="main-footer">
		<div class="pattern-layer-one" style="background-image: url({{ asset('v1/images/background/pattern-12.png')}})"></div>
		<div class="pattern-layer-two" style="background-image: url({{ asset('v1/images/background/pattern-13.png')}}})"></div>
    	<div class="auto-container">
            <div class="widgets-section">
            	<div class="logo">
					<a href="index.html"><img src="{{ asset('v1/images/footer-logo.png')}}" alt=""></a>
				</div>
				<ul class="contact-info-list">
					<li>
						<span class="icon"><img src="{{ asset('v1/images/icons/icon-1.png')}}" alt=""></span>
						<a href="tel:+3453-909-6565">+254703894372</a><br>
						<a href="tel:+2390-875-223">+254772381541</a>
					</li>
					<li>
						<span class="icon"><img src="{{ asset('v1/images/icons/icon-2.png')}}" alt=""></span>
						<a href="mailto:info@v1.com">info@v1.com</a><br>
						<a href="www.qloudpointsolitions.com">www.v1.com</a>
					</li>
					<li>
						<span class="icon"><img src="{{ asset('v1/images/icons/icon-3.png')}}" alt=""></span>
						Westlans Nairobi Garage<br>Nairobi - Kenya
					</li>
				</ul>
				
				<!-- Social Box -->
				<ul class="social-box">
					<li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
					<li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
					<li><a href="https://skype.com/" class="fa fa-skype"></a></li>
					<li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
				</ul>
				
			</div>
			
		</div>
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="copyright">&copy; 2023 v1. All Rights Reserved. Designed By <a href="https://qloudpointsolutions.com/" target="_blank">Qloud Point Solutions Ltd</a></div>
			</div>
		</div>
	</footer>
	<!-- End Main Footer -->
	
</div>
<!--End pagewrapper-->

<!-- Search Popup -->
<div class="search-popup">
	<div class="color-layer"></div>
	<button class="close-search"><span class="fa fa-arrow-up"></span></button>
	<form method="post" action="blog.html">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<!-- End Header Search -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>
<script src="http://34.206.53.230:9010/v1/js/jquery.js"></script>
<script src="http://34.206.53.230:9010/v1/js/popper.min.js"></script>
<script src="http://34.206.53.230:9010/v1/js/bootstrap.min.js"></script>
<script src="http://34.206.53.230:9010/v1/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="http://34.206.53.230:9010/v1/js/jquery.fancybox.js"></script>
<script src="http://34.206.53.230:9010/v1/js/appear.js"></script>
<script src="http://34.206.53.230:9010/v1/js/parallax.min.js"></script>
<script src="http://34.206.53.230:9010/v1/js/tilt.jquery.min.js"></script>
<script src="http://34.206.53.230:9010/v1/js/jquery.paroller.min.js"></script>
<script src="http://34.206.53.230:9010/v1/js/owl.js"></script>
<script src="http://34.206.53.230:9010/v1/js/wow.js"></script>
<script src="http://34.206.53.230:9010/v1/js/nav-tool.js"></script>
<script src="http://34.206.53.230:9010/v1/js/jquery-ui.js"></script>
<script src="http://34.206.53.230:9010/v1/js/script.js"></script>


</body>
</html>