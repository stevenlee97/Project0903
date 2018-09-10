@extends('clients.layouts.masterclient')
@section('title','Kết Quả Tìm Kiếm')
@section('content')
<link rel="stylesheet" type="text/css" href="assets/client/plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="assets/client/styles/shop_styles.css">
<link rel="stylesheet" type="text/css" href="assets/client/styles/shop_responsive.css">
    <!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="assets/client/images/shop_background.jpg"></div>
		<div class="home_overlay"></div>
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title">Kết Quả Tìm Kiếm</h2>
		</div>
	</div>

	<!-- Shop -->

	<div class="shop">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">

				</div>

				<div class="col-lg-9">
					
					<!-- Shop Content -->

					<div class="shop_content">
						<div class="shop_bar clearfix">
						<div class="shop_product_count"><span>{{$count}}</span> sản phẩm được tìm thấy</div>
						</div>

						<div class="product_grid">
							<div class="product_grid_border"></div>

							<!-- Product Item -->
							@foreach($rs as $p)
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

					</div>

				</div>
			</div>
		</div>
	</div>
@endsection