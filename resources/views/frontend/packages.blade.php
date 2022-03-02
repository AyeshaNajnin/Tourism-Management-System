@extends('master')
@section('content')

	<div class="site wrapper-content">
		<div class="top_site_main" style="background-image:url(images/banner/top-heading.jpg);">
			<div class="banner-wrapper container article_heading">
				<div class="breadcrumbs-wrapper">
					<ul class="phys-breadcrumb">
						<li><a href="index-2.html" class="home">Home</a></li>
						<li>Tours</li>
					</ul>
				</div>
				<h1 class="heading_primary">Tours</h1></div>
		</div>
		<section class="content-area">
			<div class="container">
				<div class="row">
					<div class="site-main col-sm-12">

						<ul class="tours products wrapper-tours-slider">
							<!--pagination -->
							
							
								<div class="item_border item-product">
									<div class="post_images">
										<a href="single-tour.php?pacId=">
											<span class="price"></span>
											<img style="width: 430px; height: 305px;" src="admin/" alt="" title="">
										</a>
									</div>
									<div class="wrapper_content">
										<div class="post_title"><h4>
											<a href="single-tour.php?pacId="></a>
										</h4></div>
										<span class="post_date"></span>
										<div class="description">
											<p></p>
										</div>
									</div>
									<div class="read_more">
										<div class="item_rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
										</div>
										<a rel="nofollow" href="single-tour.php?pacId=" class="button product_type_tour_phys add_to_cart_button">Read more</a>
									</div>
								</div>
							</li>
						
						</ul>

						<div class="navigation paging-navigation" role="navigation">
							<ul class="page-numbers">
								<!--pagination -->
								
								<!--pagination -->
								
							</ul>
						</div>

					</div>
				</div>
			</div>
		</section>
	</div>
	
<div class="site wrapper-content">
		
		<section class="content-area">
			<div class="container">
				<div class="row">
					<div class="site-main col-sm-9 alignleft">
						<div class="custom-tour" style="padding: 50px 0;">
						</div>
						
						<div class="wpb_wrapper pages_content">
						
						
							<div role="form" class="wpcf7">
								<div class="screen-reader-response"></div>
						
								<form action="#" method="post" class="wpcf7-form" novalidate="novalidate">
									<div class="form-contact">
										
										<div class="form-contact-fields col-sm-8">
											<label for="">Name</label>
											<span class="wpcf7-form-control-wrap your-name">
												<input type="text" name="name" value="" size="40" class="wpcf7-form-control">
											</span>
										</div>
										<div class="form-contact-fields col-sm-8">
											<label for="">User Name</label>
											<span class="wpcf7-form-control-wrap your-email">
												<input type="test" name="username" value="" size="40" class="wpcf7-form-control">
											</span>
										</div>
									
										<div class="form-contact-fields col-sm-8">
											<label for="">Email</label>
											<span class="wpcf7-form-control-wrap your-subject">
												<input type="email" name="email" value="" size="40" class="wpcf7-form-control">
											</span>
										</div>

										<div class="form-contact-fields col-sm-8">
											<label for="">Phone</label>
											<span class="wpcf7-form-control-wrap your-subject">
												<input type="text" name="phone" value="" size="40" class="wpcf7-form-control">
											</span>
										</div>

										<div class="form-contact-fields col-sm-8">
											<label for="">Password</label>
											<span class="wpcf7-form-control-wrap your-subject">
												<input type="password" name="password" value="" size="40" class="wpcf7-form-control">
											</span>
										</div>
								
										<div class="form-contact-fields col-sm-8">
											<label for="">Company Name</label>
											<span class="wpcf7-form-control-wrap your-subject">
												<input type="text" name="companyName" value="" class="wpcf7-form-control">
											</span>
										</div>

										<div class="form-contact-fields col-sm-8">
											<label for="">Address</label>
											<span class="wpcf7-form-control-wrap your-message">
												<textarea name="address" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"></textarea>
												 </span><br>
										</div>
										<div class="form-contact-fields col-sm-8">
											<label for="">Zip Code</label>
											<span class="wpcf7-form-control-wrap your-subject">
												<input type="text" name="zip" value="" size="40" class="wpcf7-form-control">
											</span>
										</div>
										<div class="form-contact-fields col-sm-8">
											<label for="">City</label>
											<span class="wpcf7-form-control-wrap your-subject">
												<input type="text" name="city" value="" size="40" class="wpcf7-form-control">
											</span><br>
											<input type="submit" value="Update" class="wpcf7-form-control wpcf7-submit">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
@endsection