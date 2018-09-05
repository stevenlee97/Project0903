@extends('clients.layouts.masterclient')
@section('title','Trang chủ')
@section('content')
    <!-- Banner -->

	<div class="banner">
		<div class="banner_background" style="background-image:url(assets/client/images/products/bannermac.jpg)"></div>
		<div class="container fill_height">
			<div class="row fill_height">
				
				<div class="col-lg-5 offset-lg-4 fill_height">
					<div class="banner_content">
						<h2 class="banner_text" style="color:black">New era of Macbook Air</h2><br/><br/><br/>
						
					
						<h3 class="banner_text"style="color:black">IS NOW AVAILABLE</h3>
					<div class="button banner_button"><a href="{{route('getproduct')}}">Shop Now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Characteristics -->

	<div class="characteristics">
		<div class="container">
			<div class="row">

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="assets/client/images/char_1.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Free Delivery</div>
							<div class="char_subtitle">from $50</div>
						</div>
					</div>
				</div>

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="assets/client/images/char_2.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Free Delivery</div>
							<div class="char_subtitle">from $50</div>
						</div>
					</div>
				</div>

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="assets/client/images/char_3.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Free Delivery</div>
							<div class="char_subtitle">from $50</div>
						</div>
					</div>
				</div>

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="assets/client/images/char_4.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Free Delivery</div>
							<div class="char_subtitle">from $50</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Deals of the week -->

	<div class="deals_featured">
		<div class="container">
			<div class="row">
				<div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">
					
					<!-- Deals -->

					<div class="deals">
						<div class="deals_title">Hot deals</div>
						<div class="deals_slider_container">
							
							<!-- Deals Slider -->
							<div class="owl-carousel owl-theme deals_slider">
								
								<!-- Deals Item -->
								@foreach($hotproduct as $hot)
								<div class="owl-item deals_item">
								<div class="deals_image"><img height="300px"src="assets/client/images/products/{{$hot->image}}" alt=""></div>
									<div class="deals_content">
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_category"><a href="#">Phone</a></div>
											
										</div>
										<div class="deals_info_line d-flex flex-row justify-content-start">
										<div class="deals_item_name">{{$hot->name}}</div>
											@if($hot->promotion_price == 0)
											<div class="deals_item_price ml-auto" >{{number_format($hot->price)}} VND</div>
											@else
											<div class="product_price discount">{{number_format($hot->promotion_price)}} VND<p><strike>{{number_format($hot->price)}}</strike></p></div>
												@endif
										</div>
										<div class="available">
											<div class="available_line d-flex flex-row justify-content-start">
												<div class="available_title">Available: <span>6</span></div>
												<div class="sold_title ml-auto">Already sold: <span>28</span></div>
											</div>
											<div class="available_bar"><span style="width:17%"></span></div>
										</div>
										<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
											<div class="deals_timer_title_container">
												<div class="deals_timer_title">Hurry Up</div>
												<div class="deals_timer_subtitle">Offer ends in:</div>
											</div>
											<div class="deals_timer_content ml-auto">
												<div class="deals_timer_box clearfix" data-target-time="">
													<div class="deals_timer_unit">
														<div id="deals_timer1_hr" class="deals_timer_hr"></div>
														<span>hours</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer1_min" class="deals_timer_min"></div>
														<span>mins</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer1_sec" class="deals_timer_sec"></div>
														<span>secs</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								@endforeach

							</div>

						</div>

						<div class="deals_slider_nav_container">
							<div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
							<div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
						</div>
					</div>
					
					<!-- Featured -->
					<div class="featured">
						<div class="tabbed_container">
							<div class="tabs">
								<ul class="clearfix">
									<li class="active">Special Product</li>
									<li>New Arrival</li>
								</ul>
								<div class="tabs_line"><span></span></div>
							</div>

							<!-- Product Panel -->
							<div class="product_panel panel active">
								<div class="featured_slider slider">
									@foreach($specialproduct as $p)
									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
										<div class="product_image d-flex flex-column align-items-center justify-content-center"><img height="150px" src="assets/admin/images/img/images/products/{{$p->image}}" alt=""></div>
											<div class="product_content">
												@if($p->promotion_price == 0)
												<div class="product_price">{{number_format($p->price)}} VND</div>
												@else
											<div class="product_price discount">{{number_format($p->promotion_price)}} VND<p><strike>{{number_format($p->price)}}</strike></p></div>
												@endif
											<div class="product_name"><div><a href="{{route('getdetail',$p->id)}}">{{$p->name}}</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<a href="{{route('buyproduct',$p->id)}}" class="btn btn-primary">Thêm vào giỏ hàng</a>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
													@if($p->promotion_price != 0)
												<li class="product_mark product_discount">Sale</li>
													@elseif($p->new != 0)
												<li class="product_mark product_discount" style="background:#0e8ce4">new</li>
													@endif
												
											</ul>
										</div>
									</div>
									@endforeach
									

								</div>
								<div class="featured_slider_dots_cover"></div>
							</div>

							<!-- Product Panel -->

							<div class="product_panel panel">
								<div class="featured_slider slider">
									
									<!-- Slider Item -->
									@foreach($newproduct as $np)
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
										<div class="product_image d-flex flex-column align-items-center justify-content-center"><img height="150px" src="assets/client/images/products/{{$np->image}}" alt=""></div>
											<div class="product_content">
													@if($np->promotion_price == 0)
													<div class="product_price">{{number_format($np->price)}} VND</div>
													@else
												<div class="product_price discount">{{number_format($np->promotion_price)}} VND<p><strike>{{number_format($np->price)}}</strike></p></div>
													@endif
												<div class="product_name"><div><a href="product.html">{{$np->name}}</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
														@if($np->promotion_price != 0)
													<li class="product_mark product_discount">Sale</li>
														@endif
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>
									@endforeach

								</div>
								<div class="featured_slider_dots_cover"></div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Popular Categories -->

	<div class="popular_categories">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="popular_categories_content">
						<div class="popular_categories_title">Popular Categories</div>
						<div class="popular_categories_slider_nav">
							<div class="popular_categories_prev popular_categories_nav"><i class="fas fa-angle-left ml-auto"></i></div>
							<div class="popular_categories_next popular_categories_nav"><i class="fas fa-angle-right ml-auto"></i></div>
						</div>
						<div class="popular_categories_link"><a href="#">full catalog</a></div>
					</div>
				</div>
				
				<!-- Popular Categories Slider -->

				<div class="col-lg-9">
					<div class="popular_categories_slider_container">
						<div class="owl-carousel owl-theme popular_categories_slider">

							<!-- Popular Categories Item -->
							<div class="owl-item">
								<div class="popular_category d-flex flex-column align-items-center justify-content-center">
									<div class="popular_category_image"><img src="assets/client/images/popular_1.png" alt=""></div>
									<div class="popular_category_text">Smartphones & Tablets</div>
								</div>
							</div>

							<!-- Popular Categories Item -->
							<div class="owl-item">
								<div class="popular_category d-flex flex-column align-items-center justify-content-center">
									<div class="popular_category_image"><img src="assets/client/images/popular_2.png" alt=""></div>
									<div class="popular_category_text">Computers & Laptops</div>
								</div>
							</div>

							<!-- Popular Categories Item -->
							<div class="owl-item">
								<div class="popular_category d-flex flex-column align-items-center justify-content-center">
									<div class="popular_category_image"><img src="assets/client/images/popular_3.png" alt=""></div>
									<div class="popular_category_text">Gadgets</div>
								</div>
							</div>

							<!-- Popular Categories Item -->
							<div class="owl-item">
								<div class="popular_category d-flex flex-column align-items-center justify-content-center">
									<div class="popular_category_image"><img src="assets/client/images/popular_4.png" alt=""></div>
									<div class="popular_category_text">Video Games & Consoles</div>
								</div>
							</div>

							<!-- Popular Categories Item -->
							<div class="owl-item">
								<div class="popular_category d-flex flex-column align-items-center justify-content-center">
									<div class="popular_category_image"><img src="assets/client/images/popular_5.png" alt=""></div>
									<div class="popular_category_text">Accessories</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Banner -->

	<div class="banner_2">
		<div class="banner_2_background" style="background-image:url(assets/client/images/products/ip8.jpg)"></div>
		<div class="banner_2_container">
			<div class="banner_2_dots"></div>

				<!-- Banner 2 Slider Item -->
				<div class="owl-item">
					<div class="banner_2_item">
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col-lg-4 col-md-6 fill_height">
									<div class="banner_2_content">
										<div class="banner_2_title">iPhone 8 64GB</div>
										<div class="banner_2_text" ><b>Siêu phẩm smartphone 2017 - iPhone 8 đã chính thức được Apple ra mắt với nhiều cải tiến giá trị so với người tiền nhiệm iPhone 7, hứa hẹn một năm bội thu cho gã khổng lồ xứ Cupertino.</p>
												Thiết kế Apple iPhone 8 64GB đổi mới toát lên vẻ sang trọng nhờ chất liệu kính ở mặt lưng mà Apple đã thêm vào.</b>
												</div>
										
										<div class="button banner_2_button"><a href="#">Explore</a></div>
									</div>
									
								</div>

							</div>
						</div>			
					</div>
				</div>

			
		</div>
	</div>

	<!-- Hot New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabbed_container">
						<div class="tabs clearfix tabs-right">
							<div class="new_arrivals_title">Hot New Arrivals</div>
							<ul class="clearfix">
								<li class="active">Featured</li>
							</ul>
							<div class="tabs_line"><span></span></div>
						</div>
						<div class="row">
							<div class="col-lg-9" style="z-index:1;">

								<!-- Product Panel -->
								<div class="product_panel panel active">
									<div class="arrivals_slider slider">

										@foreach($specialproduct as $p)
										<!-- Slider Item -->
										<div class="featured_slider_item">
											<div class="border_active"></div>
											<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img height="150px" src="assets/admin/images/img/images/products/{{$p->image}}" alt=""></div>
												<div class="product_content">
													@if($p->promotion_price == 0)
													<div class="product_price">{{number_format($p->price)}} VND</div>
													@else
												<div class="product_price discount">{{number_format($p->promotion_price)}} VND<p><strike>{{number_format($p->price)}}</strike></p></div>
													@endif
												<div class="product_name"><div><a href="{{route('getdetail',$p->id)}}">{{$p->name}}</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
														@if($p->promotion_price != 0)
													<li class="product_mark product_discount">Sale</li>
														@elseif($p->new != 0)
													<li class="product_mark product_discount" style="background:#0e8ce4">new</li>
														@endif
													
												</ul>
											</div>
										</div>
										@endforeach


									<div class="arrivals_slider_dots_cover"></div>
								</div>

							</div>

							{{-- <div class="col-lg-3">
								<div class="arrivals_single clearfix">
									<div class="d-flex flex-column align-items-center justify-content-center">
										<div class="arrivals_single_image"><img src="assets/client/images/new_single.png" alt=""></div>
										<div class="arrivals_single_content">
											<div class="arrivals_single_category"><a href="#">Smartphones</a></div>
											<div class="arrivals_single_name_container clearfix">
												<div class="arrivals_single_name"><a href="#">LUNA Smartphone</a></div>
												<div class="arrivals_single_price text-right">$379</div>
											</div>
											<div class="rating_r rating_r_4 arrivals_single_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<form action="#"><button class="arrivals_single_button">Add to Cart</button></form>
										</div>
										<div class="arrivals_single_fav product_fav active"><i class="fas fa-heart"></i></div>
										<ul class="arrivals_single_marks product_marks">
											<li class="arrivals_single_mark product_mark product_new">new</li>
										</ul>
									</div>
								</div>
							</div> --}}

						</div>
								
					</div>
				</div>
			</div>
		</div>		
	</div>



	<!-- Trends -->

	<div class="trends">
		<div class="trends_background" style="background-image:url(assets/client/images/trends_background.jpg)"></div>
		<div class="trends_overlay"></div>
		<div class="container">
			<div class="row">

				<!-- Trends Content -->
				<div class="col-lg-3">
					<div class="trends_container">
						<h2 class="trends_title">Trends 2018</h2>
						<div class="trends_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</p></div>
						<div class="trends_slider_nav">
							<div class="trends_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
							<div class="trends_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
						</div>
					</div>
				</div>

				<!-- Trends Slider -->
				<div class="col-lg-9">
					<div class="trends_slider_container">

						<!-- Trends Slider -->

						<div class="owl-carousel owl-theme trends_slider">

							<!-- Trends Slider Item -->
							<div class="owl-item">
								<div class="trends_item is_new">
									<div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="assets/client/images/trends_1.jpg" alt=""></div>
									<div class="trends_content">
										<div class="trends_category"><a href="#">Smartphones</a></div>
										<div class="trends_info clearfix">
											<div class="trends_name"><a href="product.html">Jump White</a></div>
											<div class="trends_price">$379</div>
										</div>
									</div>
									<ul class="trends_marks">
										<li class="trends_mark trends_discount">-25%</li>
										<li class="trends_mark trends_new">new</li>
									</ul>
									<div class="trends_fav"><i class="fas fa-heart"></i></div>
								</div>
							</div>

							<!-- Trends Slider Item -->
							<div class="owl-item">
								<div class="trends_item">
									<div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="assets/client/images/trends_2.jpg" alt=""></div>
									<div class="trends_content">
										<div class="trends_category"><a href="#">Smartphones</a></div>
										<div class="trends_info clearfix">
											<div class="trends_name"><a href="product.html">Samsung Charm...</a></div>
											<div class="trends_price">$379</div>
										</div>
									</div>
									<ul class="trends_marks">
										<li class="trends_mark trends_discount">-25%</li>
										<li class="trends_mark trends_new">new</li>
									</ul>
									<div class="trends_fav"><i class="fas fa-heart"></i></div>
								</div>
							</div>

							<!-- Trends Slider Item -->
							<div class="owl-item">
								<div class="trends_item is_new">
									<div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="assets/client/images/trends_3.jpg" alt=""></div>
									<div class="trends_content">
										<div class="trends_category"><a href="#">Smartphones</a></div>
										<div class="trends_info clearfix">
											<div class="trends_name"><a href="product.html">DJI Phantom 3...</a></div>
											<div class="trends_price">$379</div>
										</div>
									</div>
									<ul class="trends_marks">
										<li class="trends_mark trends_discount">-25%</li>
										<li class="trends_mark trends_new">new</li>
									</ul>
									<div class="trends_fav"><i class="fas fa-heart"></i></div>
								</div>
							</div>

							<!-- Trends Slider Item -->
							<div class="owl-item">
								<div class="trends_item is_new">
									<div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="assets/client/images/trends_1.jpg" alt=""></div>
									<div class="trends_content">
										<div class="trends_category"><a href="#">Smartphones</a></div>
										<div class="trends_info clearfix">
											<div class="trends_name"><a href="product.html">Jump White</a></div>
											<div class="trends_price">$379</div>
										</div>
									</div>
									<ul class="trends_marks">
										<li class="trends_mark trends_discount">-25%</li>
										<li class="trends_mark trends_new">new</li>
									</ul>
									<div class="trends_fav"><i class="fas fa-heart"></i></div>
								</div>
							</div>

							<!-- Trends Slider Item -->
							<div class="owl-item">
								<div class="trends_item">
									<div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="assets/client/images/trends_2.jpg" alt=""></div>
									<div class="trends_content">
										<div class="trends_category"><a href="#">Smartphones</a></div>
										<div class="trends_info clearfix">
											<div class="trends_name"><a href="product.html">Jump White</a></div>
											<div class="trends_price">$379</div>
										</div>
									</div>
									<ul class="trends_marks">
										<li class="trends_mark trends_discount">-25%</li>
										<li class="trends_mark trends_new">new</li>
									</ul>
									<div class="trends_fav"><i class="fas fa-heart"></i></div>
								</div>
							</div>

							<!-- Trends Slider Item -->
							<div class="owl-item">
								<div class="trends_item is_new">
									<div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="assets/client/images/trends_3.jpg" alt=""></div>
									<div class="trends_content">
										<div class="trends_category"><a href="#">Smartphones</a></div>
										<div class="trends_info clearfix">
											<div class="trends_name"><a href="product.html">Jump White</a></div>
											<div class="trends_price">$379</div>
										</div>
									</div>
									<ul class="trends_marks">
										<li class="trends_mark trends_discount">-25%</li>
										<li class="trends_mark trends_new">new</li>
									</ul>
									<div class="trends_fav"><i class="fas fa-heart"></i></div>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Reviews -->

	<div class="reviews">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="reviews_title_container">
						<h3 class="reviews_title">Latest Reviews</h3>
						<div class="reviews_all ml-auto"><a href="#">view all <span>reviews</span></a></div>
					</div>

					<div class="reviews_slider_container">
						
						<!-- Reviews Slider -->
						<div class="owl-carousel owl-theme reviews_slider">
							
							<!-- Reviews Slider Item -->
							<div class="owl-item">
								<div class="review d-flex flex-row align-items-start justify-content-start">
									<div><div class="review_image"><img src="assets/client/images/review_1.jpg" alt=""></div></div>
									<div class="review_content">
										<div class="review_name">Roberto Sanchez</div>
										<div class="review_rating_container">
											<div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="review_time">2 day ago</div>
										</div>
										<div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
									</div>
								</div>
							</div>

							<!-- Reviews Slider Item -->
							<div class="owl-item">
								<div class="review d-flex flex-row align-items-start justify-content-start">
									<div><div class="review_image"><img src="assets/client/images/review_2.jpg" alt=""></div></div>
									<div class="review_content">
										<div class="review_name">Brandon Flowers</div>
										<div class="review_rating_container">
											<div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="review_time">2 day ago</div>
										</div>
										<div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
									</div>
								</div>
							</div>

							<!-- Reviews Slider Item -->
							<div class="owl-item">
								<div class="review d-flex flex-row align-items-start justify-content-start">
									<div><div class="review_image"><img src="assets/client/images/review_3.jpg" alt=""></div></div>
									<div class="review_content">
										<div class="review_name">Emilia Clarke</div>
										<div class="review_rating_container">
											<div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="review_time">2 day ago</div>
										</div>
										<div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
									</div>
								</div>
							</div>

							<!-- Reviews Slider Item -->
							<div class="owl-item">
								<div class="review d-flex flex-row align-items-start justify-content-start">
									<div><div class="review_image"><img src="assets/client/images/review_1.jpg" alt=""></div></div>
									<div class="review_content">
										<div class="review_name">Roberto Sanchez</div>
										<div class="review_rating_container">
											<div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="review_time">2 day ago</div>
										</div>
										<div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
									</div>
								</div>
							</div>

							<!-- Reviews Slider Item -->
							<div class="owl-item">
								<div class="review d-flex flex-row align-items-start justify-content-start">
									<div><div class="review_image"><img src="assets/client/images/review_2.jpg" alt=""></div></div>
									<div class="review_content">
										<div class="review_name">Brandon Flowers</div>
										<div class="review_rating_container">
											<div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="review_time">2 day ago</div>
										</div>
										<div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
									</div>
								</div>
							</div>

							<!-- Reviews Slider Item -->
							<div class="owl-item">
								<div class="review d-flex flex-row align-items-start justify-content-start">
									<div><div class="review_image"><img src="assets/client/images/review_3.jpg" alt=""></div></div>
									<div class="review_content">
										<div class="review_name">Emilia Clarke</div>
										<div class="review_rating_container">
											<div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="review_time">2 day ago</div>
										</div>
										<div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
									</div>
								</div>
							</div>

						</div>
						<div class="reviews_dots"></div>
					</div>
				</div>
			</div>
		</div>
    </div>
@endsection