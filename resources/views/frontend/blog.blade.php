@extends('master')

@section('content')


	<div class="site wrapper-content">
		<div class="top_site_main" style="background-image:url(images/banner/top-heading.jpg);">
			<div class="banner-wrapper container article_heading">
				<div class="breadcrumbs-wrapper">
					<ul class="phys-breadcrumb">
						<li><a href="index-2.html" class="home">Home</a></li>
						<li>Blog</li>
					</ul>
				</div>
				<h1 class="heading_primary">Blog</h1></div>
		</div>
		<section class="content-area">
			<div class="container">
				<div class="row">
					<div class="site-main col-sm-9 align-left">
						<div class="wrapper-blog-content">
						

							<article class="type-post">
								<div class="img_post"><a href="single-blog.php">
									<img width="370" height="260" src="admin/" class="wp-post-image" alt=""></a>
								</div>
								<div class="entry-content content-thumbnail">
									<header class="entry-header">
										<h2 class="entry-title">
											<a href="single-blog.php" rel="bookmark"></a>
										</h2>
										<div class="entry-meta">
											<span class="posted-on">Posted on <a href="single-blog.php" rel="bookmark">
												<time class="entry-date published" datetime=""></time>
											</a></span>
										</div>
									</header>
									<div class="entry-desc">
										<p></p>
									</div>
								</div>
							</article>
							
						
						</div>
						<div class="navigation paging-navigation" role="navigation">
							<ul class="page-numbers">
								<!--pagination -->
								
							</ul>
						</div>
					</div>
					<div class="widget-area col-sm-3 alignright">

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
									<span class="price">৳</span>
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