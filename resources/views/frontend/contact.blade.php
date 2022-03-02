@extends('master')

		
@section('content')
	

	<div class="site wrapper-content">
		<div class="top_site_main" style="background-image:url(images/banner/top-heading.jpg);">
			<div class="banner-wrapper container article_heading">
				<div class="breadcrumbs-wrapper">
					<ul class="phys-breadcrumb">
						<li><a href="index-2.html" class="home">Home</a></li>
						<li>Contact</li>
					</ul>
				</div>
				<h1 class="heading_primary">Contact Us</h1></div>
		</div>
		<section class="content-area">
			<div class="container">
				<div class="row">
					<div class="site-main col-sm-9 alignleft">
						<div class="video-container">
							<div class="mapouter">
							<div class="mapouter"><div class="gmap_canvas"><iframe width="1250" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Iubat%20&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de/google-maps/"></a></div><style>.mapouter{text-align:right;height:500px;width:1250px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1250px;}</style></div>
						</div>
						<div class="pages_content padding-top-4x">
							<h4>CONTACT INFORMATION</h4>
							<div class="contact_infor">
								<ul>
									<li><label><i class="fa fa-map-marker"></i>ADDRESS</label>
										<div class="des">House # 43, Garib e Newaj Avenue, Sector # 10, Uttara, Shaka-1230</div>
									</li>
									<li><label><i class="fa fa-phone"></i>TEL NO</label>
										<div class="des">0123456789</div>
									</li>
									
									<li><label><i class="fa fa-envelope"></i>EMAIL</label>
										<div class="des">info@travels.com</div>
									</li>
									<li>
										<label><i class="fa fa-clock-o"></i>WORKING HOURS</label>
										<div class="des">Sat – Thus 9:00 am – 5:30 pm, Sat 9:00 am – 1:00 pm
											
										</div>
									</li>
									
								</ul>
							</div>
						</div>
						<div class="wpb_wrapper pages_content">
							<h4>Question???</h4>
					

							<div role="form" class="wpcf7">
								<div class="screen-reader-response"></div>
								<form action="" method="post" class="wpcf7-form" novalidate="novalidate">
									<div class="form-contact">
										<div class="row-1x">
											<div class="col-sm-6">
													<span class="wpcf7-form-control-wrap your-name">
														<input type="text" name="name" value="" size="40" class="wpcf7-form-control" placeholder="Your name*">
													</span>
											</div>
											<div class="col-sm-6">
													<span class="wpcf7-form-control-wrap your-email">
														<input type="email" name="email" value="" size="40" class="wpcf7-form-control" placeholder="Email*">
													</span>
											</div>
										</div>
										<div class="form-contact-fields">
												<span class="wpcf7-form-control-wrap your-subject">
													<input type="text" name="subject" value="" size="40" class="wpcf7-form-control" placeholder="Subject">
												</span>
										</div>
										<div class="form-contact-fields">
											<span class="wpcf7-form-control-wrap your-message">
												<textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Message"></textarea>
												 </span><br>
											<input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit">
										</div>
									</div>
								</form>


							</div>
						</div>
					</div>-
					<div class="widget-area col-sm-3 align-left">
						<aside class="widget widget_travel_tour">
						<div class="wrapper-special-tours">

						
							<div class="inner-special-tours">
								<a href="tour.php">
									<img width="430" height="305" src="admin/" alt="" title=""></a>
								<div class="item_rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<div class="post_title"><h3>
								<a href="single-tour.php?pacId=" rel="bookmark"></a>
								</h3></div>
								<div class="item_price">
								<span class="price"></span>
								</div>
							</div>
							
						</div>
					</aside>
					</div>
				</div>
			</div>
		</section>
	</div>

@endsection