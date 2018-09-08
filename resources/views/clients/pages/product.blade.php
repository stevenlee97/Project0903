@extends('clients.layouts.masterclient')
@section('title','Sản phẩm')
@section('content')
<link rel="stylesheet" type="text/css" href="assets/client/plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="assets/client/styles/shop_styles.css">
<link rel="stylesheet" type="text/css" href="assets/client/styles/shop_responsive.css">
    <!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="assets/client/images/shop_background.jpg"></div>
		<div class="home_overlay"></div>
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title">Smartphones & Tablets</h2>
		</div>
	</div>

	<!-- Shop -->

	<div class="shop">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">

					<!-- Shop Sidebar -->
					<div class="shop_sidebar">
						<div class="sidebar_section">
							<div class="sidebar_title">Categories</div>
							<ul class="sidebar_categories">
								<li><a href="#">Computers & Laptops</a></li>
								<li><a href="#">Cameras & Photos</a></li>
								<li><a href="#">Hardware</a></li>
								<li><a href="#">Smartphones & Tablets</a></li>
								<li><a href="#">TV & Audio</a></li>
								<li><a href="#">Gadgets</a></li>
								<li><a href="#">Car Electronics</a></li>
								<li><a href="#">Video Games & Consoles</a></li>
								<li><a href="#">Accessories</a></li>
							</ul>
						</div>
						<div class="sidebar_section filter_by_section">
							<div class="sidebar_title">Filter By</div>
							<div class="sidebar_subtitle">Price</div>
							<div class="filter_price">
								<div id="slider-range" class="slider_range"></div>
								<p>Range: </p>
								<p><input type="text" id="amount" class="amount" readonly style="border:0; font-weight:bold;"></p>
							</div>
						</div>
						<div class="sidebar_section">
							<div class="sidebar_subtitle color_subtitle">Color</div>
							<ul class="colors_list">
								<li class="color"><a href="#" style="background: #b19c83;"></a></li>
								<li class="color"><a href="#" style="background: #000000;"></a></li>
								<li class="color"><a href="#" style="background: #999999;"></a></li>
								<li class="color"><a href="#" style="background: #0e8ce4;"></a></li>
								<li class="color"><a href="#" style="background: #df3b3b;"></a></li>
								<li class="color"><a href="#" style="background: #ffffff; border: solid 1px #e1e1e1;"></a></li>
							</ul>
						</div>
						<div class="sidebar_section">
							<div class="sidebar_subtitle brands_subtitle">Brands</div>
							<ul class="brands_list">
								<li class="brand"><a href="#">Apple</a></li>
								<li class="brand"><a href="#">Beoplay</a></li>
								<li class="brand"><a href="#">Google</a></li>
								<li class="brand"><a href="#">Meizu</a></li>
								<li class="brand"><a href="#">OnePlus</a></li>
								<li class="brand"><a href="#">Samsung</a></li>
								<li class="brand"><a href="#">Sony</a></li>
								<li class="brand"><a href="#">Xiaomi</a></li>
							</ul>
						</div>
					</div>

				</div>

				<div class="col-lg-9">
					
					<!-- Shop Content -->

					<div class="shop_content">
						<div class="shop_bar clearfix">
						<div class="shop_product_count"><span>{{count($total)}}</span> products found</div>
							<div class="shop_sorting">
								<span>Sort by:</span>
								<ul>
									<li>
										<span class="sorting_text">highest rated<i class="fas fa-chevron-down"></span></i>
										<ul>
											<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "original-order" }'>highest rated</li>
											<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "name" }'>name</li>
											<li class="shop_sorting_button"data-isotope-option='{ "sortBy": "price" }'>price</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>

						<div class="product_grid">
							<div class="product_grid_border"></div>

							<!-- Product Item -->
							@foreach($product as $p)
							<div class="product-item">
								<div class="product_item is_new" style="height:330px">
									<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img width="100px" src="assets/admin/images/img/images/products/{{$p->image}}" alt=""></div>
									<div class="product_content">
											@if($p->promotion_price == 0)
											<div class="product_price">{{number_format($p->price)}} VND</div>
											@else
										<div class="product_price discount">{{number_format($p->promotion_price)}} VND <p><strike >{{number_format($p->price)}} VND</strike></p></div>
											@endif
										
									<div class="product_name"><div><a href="{{route('getdetail',$p->id)}}" tabindex="0">{{$p->name}}</a></div></div>
									</div>
									<ul class="product_marks">
										@if($p->promotion_price != 0)
										<li class="product_mark product_new" style="background:#df3b3b;">Sale</li>
											@elseif($p->new != 0)
										<li class="product_mark product_new">new</li>
											@endif
									</ul>
								</div>
							</div>
							@endforeach

						</div>

						


						<!-- Shop Page Navigation -->

						<div class="shop_page_nav d-flex flex-row">
							{{ $product->links() }}
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>
@endsection