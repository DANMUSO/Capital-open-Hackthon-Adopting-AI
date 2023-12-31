@extends('layouts.web')

@section('content')


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
							<div class="title">NextTop AI Internet & TV</div>
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
							<div class="title">NextTop AI Internet & TV</div>
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
						<h3>Subscribe in order to receive tailored movie suggestions</h3>
					</div>
				</div>
				
				<!-- Form Column -->
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="appointment-form">
							<form method="post" action="contact.html">
								<div class="form-group">
									<input class="form-control" type="name" name="name" value="" placeholder="name" required="">
									<button type="submit" class="theme-btn btn-style-two"><span class="txt">Subscribe<i class="lnr lnr-arrow-right"></i></span></button>
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
						<h2>Featured Movies</h2>
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
							<img src="{{ asset('v1/images/thegodfather.jpg')}}" alt="" style="height:310px">
							<div class="overlay-box">
								<ul class="post-meta">
									<li><span class="icon fa fa-star"></span>4.5</li>
									<li><span class="icon fa fa-comment"></span>1020</li>
								</ul>
							</div>
						</div>
						<div class="lower-content">
							<div class="clearfix">
								<div class="pull-left">
									<h6><a href="movie.html">The Godfather</a></h6>
								</div>
								<div class="pull-right">
									<div class="year">1972</div>
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
							<img src="{{ asset('v1/images/starwarmovie.jpg')}}" alt="" style="height:100%">
							<div class="overlay-box">
								<ul class="post-meta">
									<li><span class="icon fa fa-star"></span>4.45</li>
									<li><span class="icon fa fa-comment"></span>1010</li>
								</ul>
							</div>
						</div>
						<div class="lower-content">
							<div class="clearfix">
								<div class="pull-left">
									<h6><a href="movie.html">Star Wars</a></h6>
								</div>
								<div class="pull-right">
									<div class="year">1972</div>
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
							<img src="{{ asset('v1/images/titanicmovie.jpg')}}" style="height:100%" alt="">
							<div class="overlay-box">
								<ul class="post-meta">
									<li><span class="icon fa fa-star"></span>4.4</li>
									<li><span class="icon fa fa-comment"></span>1000</li>
								</ul>
							</div>
						</div>
						<div class="lower-content">
							<div class="clearfix">
								<div class="pull-left">
									<h6><a href="movie.html">Titanic</a></h6>
								</div>
								<div class="pull-right">
									<div class="year">1997</div>
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
							<img src="{{ asset('v1/images/forrestgumpmovie.jpg')}}" alt="">
							<div class="overlay-box">
								<ul class="post-meta">
									<li><span class="icon fa fa-star"></span>3.9</li>
									<li><span class="icon fa fa-comment"></span>999</li>
								</ul>
							</div>
						</div>
						<div class="lower-content">
							<div class="clearfix">
								<div class="pull-left">
									<h6><a href="movie.html">Forrest Gump</a></h6>
								</div>
								<div class="pull-right">
									<div class="year">1994</div>
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
							<img src="{{ asset('v1/images/pulpfiction.jpg')}}" alt="">
							<div class="overlay-box">
								<ul class="post-meta">
									<li><span class="icon fa fa-star"></span>3.6</li>
									<li><span class="icon fa fa-comment"></span>930</li>
								</ul>
							</div>
						</div>
						<div class="lower-content">
							<div class="clearfix">
								<div class="pull-left">
									<h6><a href="movie.html">The Matrix</a></h6>
								</div>
								<div class="pull-right">
									<div class="year">1999</div>
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
							<img src="{{ asset('v1/images/thematrix.jpg')}}" alt="">
							<div class="overlay-box">
								<ul class="post-meta">
									<li><span class="icon fa fa-star"></span>3.6</li>
									<li><span class="icon fa fa-comment"></span>930</li>
								</ul>
							</div>
						</div>
						<div class="lower-content">
							<div class="clearfix">
								<div class="pull-left">
									<h6><a href="movie.html">Pulp Fiction</a></h6>
								</div>
								<div class="pull-right">
									<div class="year">1994</div>
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
							<img src="{{ asset('v1/images/inceptionmovie.jpg')}}" alt="">
							<div class="overlay-box">
								<ul class="post-meta">
									<li><span class="icon fa fa-star"></span>3.1</li>
									<li><span class="icon fa fa-comment"></span>700</li>
								</ul>
							</div>
						</div>
						<div class="lower-content">
							<div class="clearfix">
								<div class="pull-left">
									<h6><a href="movie.html">Inception</a></h6>
								</div>
								<div class="pull-right">
									<div class="year">2010</div>
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