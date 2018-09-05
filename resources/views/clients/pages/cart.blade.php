@extends('clients.layouts.masterclient')
@section('title','Giỏ hàng')
@section('content')
<link rel="stylesheet" type="text/css" href="assets/client/styles/cart_styles.css">
<link rel="stylesheet" type="text/css" href="assets/client/styles/cart_responsive.css">
	<!-- Cart -->

	<div class="cart_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="cart_container">
						<div class="cart_title">Giỏ hàng</div>
						<div class="cart_items">
							<ul class="cart_list">
								@foreach($cart_content as $c)
								<li class="cart_item clearfix">
									<div class="cart_item_image"><img src="assets/admin/images/img/images/products/{{$c->options->image}}" alt=""></div>
									<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
										<div class="cart_item_name cart_info_col">
											<div class="cart_item_title">Tên sản phẩm</div>
											<div class="cart_item_text">{{$c->name}}</div>
										</div>
										<div class="cart_item_quantity cart_info_col">
											<div class="cart_item_title">Số lượng</div>
											<div class="cart_item_text">1</div>
										</div>
										<div class="cart_item_price cart_info_col">
											<div class="cart_item_title">Giá</div>
											<div class="cart_item_text">{{number_format($c->price)}}</div>
										</div>
										<div class="cart_item_total cart_info_col">
											<div class="cart_item_title">Tổng giá</div>
											<div class="cart_item_text">0</div>
										</div>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
						
						<!-- Order Total -->
						<div class="order_total">
							<div class="order_total_content text-md-right">
								<div class="order_total_title">Tổng giá trị đơn hàng:</div>
								<div class="order_total_amount">{{$cart_total}}</div>
							</div>
						</div>

						<div class="cart_buttons">
							<a href="{{route('clearcart')}}" class="button cart_button_clear">Xóa giỏ hàng</a>
							<button type="button" class="button cart_button_checkout">Thanh toán</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection