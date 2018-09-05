@extends('clients.layouts.masterclient')
@section('title','Chi tiết sản phẩm')
@section('content')
<link rel="stylesheet" type="text/css" href="assets/client/styles/product_styles.css">
<link rel="stylesheet" type="text/css" href="assets/client/styles/product_responsive.css">
	<!-- Single Product -->

	<div class="single_product">
		<div class="container">
			<div class="row">
					@foreach($detail as $d)
				<!-- Images -->
				<div class="col-lg-2 order-lg-1 order-2">
					<ul class="image_list">
						<li data-image="assets/admin/images/img/images/products/{{$d->image}}"><img src="assets/admin/images/img/images/products/{{$d->image}}" alt=""></li>
						<li data-image="assets/admin/images/img/images/products/{{$d->image}}"><img src="assets/admin/images/img/images/products/{{$d->image}}" alt=""></li>
						<li data-image="assets/admin/images/img/images/products/{{$d->image}}"><img src="assets/admin/images/img/images/products/{{$d->image}}" alt=""></li>
					</ul>
				</div>

				<!-- Selected Image -->
				<div class="col-lg-5 order-lg-2 order-1">
					<div class="image_selected"><img src="assets/admin/images/img/images/products/{{$d->image}}" alt=""></div>
				</div>

				<!-- Description -->
				
				<div class="col-lg-5 order-3">
					<div class="product_description">
						<div class="product_category">Laptops</div>
					<div class="product_name">{{$d->name}}</div>
						
					<div class="product_text"><p>{!! $d->detail !!}</p></div>
						<div class="order_info d-flex flex-row">
							<form action="#">
								<div class="clearfix" style="z-index: 1000;">
									
									<!-- Product Quantity -->
									<div class="product_quantity clearfix">
										<span>Quantity: </span>
										<input id="quantity_input" type="text" pattern="[0-9]*" value="1">
										<div class="quantity_buttons">
											<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
											<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
										</div>
									</div>

									<!-- Product Color -->
									<ul class="product_color">
										<li>
											<span>Color: </span>
											<div class="color_mark_container"><div id="selected_color" class="color_mark"></div></div>
											<div class="color_dropdown_button"><i class="fas fa-chevron-down"></i></div>

											<ul class="color_list">
												<li><div class="color_mark" style="background: #999999;"></div></li>
												<li><div class="color_mark" style="background: #b19c83;"></div></li>
												<li><div class="color_mark" style="background: #000000;"></div></li>
											</ul>
										</li>
									</ul>

								</div>

								@if($d->promotion_price == 0)
								<div class="product_price">{{number_format($d->price)}} VND</div>
								@else
							<div class="product_price discount">{{number_format($d->promotion_price)}} VND<p><strike>{{number_format($d->price)}}</strike></p></div>
								@endif
								<div class="button_container">
									<a href="{{route('buyproduct',$d->id)}}" class="button cart_button">Thêm vào giỏ hàng</a>
									<div class="product_fav"><i class="fas fa-heart"></i></div>
								</div>
								@endforeach
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
@endsection