@extends('layouts.web')

@section('content')

<!-- Sidebar Cart Item -->
<div class="xs-sidebar-group info-group">
		<div class="xs-overlay xs-bg-black"></div>
		<div class="xs-sidebar-widget">
			<div class="sidebar-widget-container">
				<div class="widget-heading">
				
				</div>
				<div class="sidebar-textwidget">
					
					<!-- Sidebar Info Content -->
					<div class="sidebar-info-contents">
						<div class="content-inner">
							<div class="logo">
								<a href="index.html"><img src="{{ asset('nexttop/images/logo-2.png')}}" alt=""></a>
							</div>
							<div class="content-box">
								<h5>About Us</h5>
								<p class="text">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
								<a href="contact.html" class="theme-btn btn-style-one"><span class="txt">Consultation</span></a>
							</div>
							<div class="contact-info">
								<h5>Contact Info</h5>
								<ul class="list-style-one">
									<li><span class="icon fa fa-location-arrow"></span>Chicago 12, Melborne City, USA</li>
									<li><span class="icon fa fa-phone"></span>(111) 111-111-1111</li>
									<li><span class="icon fa fa-envelope"></span>NextTop@gmail.com</li>
									<li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
								</ul>
							</div>
							<!-- Social Box -->
							<ul class="social-box">
								<li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
								<li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
								<li><a href="https://dribbble.com/" class="fa fa-dribbble"></a></li>
								<li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- END sidebar widget item -->
	
	<!-- Main Section -->
    <section class="main-slider">
		
		<div class="main-slider-carousel owl-carousel owl-theme">
            
            <div class="slide" style="background-image: url({{ asset('nexttop/images/main-slider/v1.jpg')}})">
				<div class="pattern-layer" style="background-image: url({{ asset('nexttop/images/main-slider/pattern-layer.png')}})"></div>
				<!-- <div class="color-layer-one"></div>
				<div class="color-layer-two"></div>
				<div class="color-layer-three"></div> -->
				<div class="auto-container">
					
					<!-- Content Boxed -->
					<div class="content-boxed">
						<div class="inner-box">
							<div class="title">NextTop Internet & TV</div>
							<h1>Ultimate control of your internet</h1>
							<div class="btns-box">
								<a href="about.html" class="theme-btn btn-style-two"><span class="txt">Read More <i class="lnr lnr-arrow-right"></i></span></a>
								<a href="contact.html" class="theme-btn btn-style-three"><span class="txt">Contact Now <i class="lnr lnr-arrow-right"></i></span></a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			<div class="slide" style="background-image: url({{ asset('nexttop/images/main-slider/v9.jpg')}})">
				<div class="pattern-layer" style="background-image: url({{ asset('nexttop/images/main-slider/pattern-layer.png')}})"></div>
				<!-- <div class="color-layer-one"></div>
				<div class="color-layer-two"></div>
				<div class="color-layer-three"></div> -->
				<div class="auto-container">
					
					<!-- Content Boxed -->
					<div class="content-boxed">
						<div class="inner-box">
							<div class="title">NextTop Internet & TV</div>
							<h1>Ultimate control of your internet</h1>
							<div class="btns-box">
								<a href="about.html" class="theme-btn btn-style-two"><span class="txt">Read More <i class="lnr lnr-arrow-right"></i></span></a>
								<a href="contact.html" class="theme-btn btn-style-three"><span class="txt">Contact Now <i class="lnr lnr-arrow-right"></i></span></a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
            
			
		</div>
		
	</section>
	<!-- End Main Section -->
	
	<!-- Appointment Section -->
	<section class="appointment-section" style="background-image: url({{ asset('nexttop/images/background/pattern-1.png')}})">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Title Column -->
				<div class="title-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h3>Let's find deals and services available in your area</h3>
					</div>
				</div>
				
				<!-- Form Column -->
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="appointment-form">
							<form method="post" action="contact.html">
								<div class="form-group">
									<input type="email" name="email" value="" placeholder="Enter street address & apartment" required="">
									<button type="submit" class="theme-btn btn-style-two"><span class="txt">Check Availability <i class="lnr lnr-arrow-right"></i></span></button>
								</div>
							</form>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Appointment Section -->

    
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
	
	
	<!-- Pricing Section -->
	<section class="pricing-section" style="background-image: url({{ asset('nexttop/images/background/pattern-3.png')}})">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title light centered">
				<div class="title">Pricing Plan</div>
				<h2>Choose your plan</h2>
			</div>
			<!-- End Sec Title -->
			<div class="row clearfix">
				
				<!-- Price Block -->
				<div class="price-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="upper-box" style="background-image: url({{ asset('nexttop/images/background/pattern-4.png')}})">
							<ul class="icon-list">
								<li><span class="icon"><img src="{{ asset('nexttop/images/icons/service-1.svg')}}" alt=""></span></li>
							</ul>
							<h4>Only Internet <span>$55.00 / Month</span></h4>
						</div>
						<div class="lower-box">
							<ul class="price-list">
								<li>Internet with a 100Mbps</li>
								<li>Connect multiple users</li>
								<li>WiFi router & prevention</li>
								<li>Unlimited devices</li>
							</ul>
							<div class="button-box">
								<a href="price.html" class="theme-btn btn-style-four"><span class="txt">Get started</span></a>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Price Block -->
				<div class="price-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
						<div class="upper-box" style="background-image: url({{ asset('nexttop/images/background/pattern-4.png')}})">
							<ul class="icon-list">
								<li><span class="icon"><img src="{{ asset('nexttop/images/icons/service-2.svg')}}" alt=""></span></li>
							</ul>
							<h4>Only TV <span>$55.00 / Month</span></h4>
						</div>
						<div class="lower-box">
							<ul class="price-list">
								<li>Internet with a 100Mbps</li>
								<li>Connect multiple users</li>
								<li>WiFi router & prevention</li>
								<li>Unlimited devices</li>
							</ul>
							<div class="button-box">
								<a href="price.html" class="theme-btn btn-style-four"><span class="txt">Get started</span></a>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Price Block -->
				<div class="price-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="upper-box" style="background-image: url({{ asset('nexttop/images/background/pattern-4.png')}})">
							<ul class="icon-list">
								<li><span class="icon"><img src="{{ asset('nexttop/images/icons/service-3.svg')}}" alt=""></span></li>
							</ul>
							<h4>Only Home Phone <span>$55.00 / Month</span></h4>
						</div>
						<div class="lower-box">
							<ul class="price-list">
								<li>Internet with a 100Mbps</li>
								<li>Connect multiple users</li>
								<li>WiFi router & prevention</li>
								<li>Unlimited devices</li>
							</ul>
							<div class="button-box">
								<a href="price.html" class="theme-btn btn-style-four"><span class="txt">Get started</span></a>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Price Block -->
				<div class="price-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
						<div class="upper-box" style="background-image: url({{ asset('nexttop/images/background/pattern-4.png')}})">
							<ul class="icon-list">
								<li><span class="icon"><img src="{{ asset('nexttop/images/icons/service-1.svg')}}" alt=""></span></li>
								<li><span class="icon"><img src="{{ asset('nexttop/images/icons/service-2.svg')}}" alt=""></span></li>
								<li><span class="icon"><img src="{{ asset('nexttop/images/icons/service-3.svg')}}" alt=""></span></li>
							</ul>
							<h4>Internet + TV + Phone <span>$55.00 / Month</span></h4>
						</div>
						<div class="lower-box">
							<ul class="price-list">
								<li>Internet with a 100Mbps</li>
								<li>Connect multiple users</li>
								<li>WiFi router & prevention</li>
								<li>Unlimited devices</li>
							</ul>
							<div class="button-box">
								<a href="price.html" class="theme-btn btn-style-four"><span class="txt">Get started</span></a>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Pricing Section -->
	
	

@endsection