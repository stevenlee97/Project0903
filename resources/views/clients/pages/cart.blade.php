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
						@if(Session::has('success'))
						<div class="alert alert-success">
							{{Session::get('success')}}
						</div>
						@endif
						@if(Session::has('error'))
						<div class="alert alert-danger">
							{{Session::get('error')}}
						</div>
						@endif
						<div class="cart_items">
							<ul class="cart_list">
								@foreach($cart_content as $c)
								<form class="formItem{{$c->id}}" method="post" action="{{route('updateQuantity')}}">
									@csrf
									<input type="text" class="form-control" name="productId" id="productId" aria-describedby="helpId" value="{{$c->id}}" readonly hidden>
									<li class="cart_item clearfix">
										<div class="cart_item_image"><img src="assets/admin/images/img/images/products/{{$c->options->image}}" alt=""></div>
										<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
											<div class="cart_item_name cart_info_col">
												<div class="cart_item_title">Tên sản phẩm</div>
												<div class="cart_item_text">{{$c->name}}</div>
											</div>
											<div class="cart_item_quantity cart_info_col">
												<div class="cart_item_title">Số lượng</div>
												<div class="cart_item_text" style="display:block;">
													<input type="text" class="form-control" name="quantity" id="quantity" aria-describedby="helpId" placeholder="" value="{{$c->qty}}">
												</div>
											</div>
											<div class="cart_item_price cart_info_col">
												<div class="cart_item_title">Giá</div>
												<div class="cart_item_text">{{number_format($c->price)}}</div>
											</div>
											<div class="cart_item_total cart_info_col">
												<div class="cart_item_title">Tổng giá</div>
												<div class="cart_item_text">{{number_format(($c->price)*($c->qty))}}</div>
											</div>
											<div class="cart_item_quantity cart_info_col">
												<div class="cart_item_title">Hành động</div>
												<div class="cart_item_text">
													<button id="update{{$c->id}}" class="btn btn-info" type="submit"><i class="fas fa-sync-alt"></i></button>
													<a name="delCartItem{{$c->id}}" id="delCartItem{{$c->id}}" class="btn btn-danger" href="{{route('delcartitem',$c->rowId)}}" role="button"><i class="fas fa-trash"></i></a>
												</div>
											</div>
										</div>
									</li>
								</form>
								@endforeach
							</ul>
						</div>
						
						<!-- Order Total -->
						<div class="order_total">
							<div class="order_total_content text-md-right">
								<div class="order_total_title">Tổng giá trị đơn hàng (Đã kèm thuế VAT 10%):</div>
								<div class="order_total_amount">{{$cart_total}}</div>
							</div>
						</div>

						<div class="cart_buttons">
							<a href="{{route('clearcart')}}" class="button cart_button_clear">Xóa giỏ hàng</a>
							<a href="{{route('checkout')}}" class="button cart_button_checkout">Thanh toán</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection