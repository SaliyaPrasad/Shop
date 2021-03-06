@extends('layout')
@section('content')




<!-- HOME -->
	<div id="home">
		<!-- container -->
		<div class="container">
			<!-- home wrap -->
			<div class="home-wrap">
				<!-- home slick -->
				<div id="home-slick">
					<!-- banner -->
					<div class="banner banner-1">
						<img src="{{URL::to('frontend/img/banner01.jpg')}}" alt="">
						<div class="banner-caption text-center">
							<h1>Bags sale</h1>
							<h3 class="white-color font-weak">Up to 50% Discount</h3>
							<button class="primary-btn">Shop Now</button>
						</div>
					</div>
					<!-- /banner -->

					<!-- banner -->
					<div class="banner banner-1">
						<img src="{{URL::to('frontend/img/banner02.jpg')}}" alt="">
						<div class="banner-caption">
							<h1 class="primary-color">HOT DEAL<br><span class="white-color font-weak">Up to 50% OFF</span></h1>
							<button class="primary-btn">Shop Now</button>
						</div>
					</div>
					<!-- /banner -->

					
				</div>
				<!-- /home slick -->
			</div>
			<!-- /home wrap -->
		</div>
		<!-- /container -->
	</div>
	<!-- /HOME -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="#">
						<img src="{{URL::to('frontend/img/banner10.jpg')}}" alt="">
						<div class="banner-caption text-center">
							<h2 class="white-color">NEW COLLECTION</h2>
						</div>
					</a>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="#">
						<img src="{{URL::to('frontend/img/banner11.jpg')}}" alt="">
						<div class="banner-caption text-center">
							<h2 class="white-color">NEW COLLECTION</h2>
						</div>
					</a>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3">
					<a class="banner banner-1" href="#">
						<img src="{{URL::to('frontend/img/banner12.jpg')}}" alt="">
						<div class="banner-caption text-center">
							<h2 class="white-color">NEW COLLECTION</h2>
						</div>
					</a>
				</div>
				<!-- /banner -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section-title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Deals Of The Day</h2>
						<div class="pull-right">
							<div class="product-slick-dots-1 custom-dots"></div>
						</div>
					</div>
				</div>
				<!-- /section-title -->

				<!-- banner -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="banner banner-2">
						<img src="{{URL::to('frontend/img/banner14.jpg')}}" alt="">
						<div class="banner-caption">
							<h2 class="white-color">NEW<br>COLLECTION</h2>
							<button class="primary-btn">Shop Now</button>
						</div>
					</div>
				</div>
				<!-- /banner -->

				<!-- Product Slick -->
				
				<div class="col-md-9 col-sm-8 col-xs-8">
					<div class="row">
						<div id="product-slick-1" class="product-slick">
							<!-- Product Single -->
							<?php foreach($all_published_product as $v_published_product){?>
							<div class="product product-single">
						

								<div class="product-thumb">
									<div class="product-label">
										<span>New</span>
										<span class="sale">-20%</span>
									</div>
									
									<button class="main-btn quick-view"><a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}"><i class="fa fa-search-plus"></i> Quick view</a></button>
									<img src="{{URL::to($v_published_product->product_image)}}" style="height: 280px;" alt="">
								</div>
								<div class="product-body">
									<h3 class="product-price">${{$v_published_product->product_price}} 
											 <del class="product-old-price">${{$v_published_product->product_price}}</del></h3>
									
									<h2 class="product-name"><a href="#">{{$v_published_product->product_name}}</a></h2>
									<div class="product-btns">
										<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
										<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
										<button class="primary-btn add-to-cart"><a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}"><i class="fa fa-shopping-cart"></i> Add to Cart</a></button>
										
									</div>
									
								</div>
								
							</div>
							
							<?php } ?>
							<!-- /Product Single -->

							
						</div>
					</div>
				</div>
				<!-- /Product Slick -->
			</div>
			<!-- /row -->

			
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	
	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Latest Products</h2>
					</div>
				</div>
				<!-- section title -->

				<!-- Product Single -->
				<?php foreach($all_published_product as $v_published_product){?>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<button class="main-btn quick-view"><a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}"><i class="fa fa-search-plus"></i> Quick view</a></button>
							<img src="{{URL::to($v_published_product->product_image)}}" style="height: 280px;" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">${{$v_published_product->product_price}}</h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="#">{{$v_published_product->product_name}}</a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<button class="primary-btn add-to-cart"><a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}"><i class="fa fa-shopping-cart"></i> Add to Cart</a></button>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
				<!-- /Product Single -->

				

	

			
			</div>
			<!-- /row -->

			<!-- row -->
			<div class="row">
				<!-- banner -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="banner banner-2">
						<img src="{{URL::to('frontend/img/banner15.jpg')}}" alt="">
						<div class="banner-caption">
							<h2 class="white-color">NEW<br>COLLECTION</h2>
							<button class="primary-btn">Shop Now</button>
						</div>
					</div>
				</div>
				<!-- /banner -->

				<!-- Product Single -->
				<?php foreach($all_published_product as $v_published_product){?>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<div class="product-label">
								<span>New</span>
								<span class="sale">-20%</span>
							</div>
							<button class="main-btn quick-view"><a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}"><i class="fa fa-search-plus"></i> Quick view</a></button>
							<img src="{{URL::to($v_published_product->product_image)}}" style="height: 200px;" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">${{$v_published_product->product_price}} <del class="product-old-price">${{$v_published_product->product_2price}}</del></h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="#">{{$v_published_product->product_name}}</a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<button class="primary-btn add-to-cart"><a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}"><i class="fa fa-shopping-cart"></i> Add to Cart</a></button>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
				<!-- /Product Single -->

				

				
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
@endsection

