@extends('clients.layouts.masterclient')
@section('title','Liên hệ')
@section('content')
<link rel="stylesheet" type="text/css" href="assets/client/styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="assets/client/styles/contact_responsive.css">
    <!-- Contact Info -->

	<div class="contact_info">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">

						<!-- Contact Item -->
						<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
							<div class="contact_info_image"><img src="images/contact_1.png" alt=""></div>
							<div class="contact_info_content">
								<div class="contact_info_title">Số điện thoại</div>
								<div class="contact_info_text">+84 932 098168</div>
							</div>
						</div>

						<!-- Contact Item -->
						<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
							<div class="contact_info_image"><img src="images/contact_2.png" alt=""></div>
							<div class="contact_info_content">
								<div class="contact_info_title">Email</div>
								<div class="contact_info_text">lytruonguy97@gmail.com</div>
							</div>
						</div>

						<!-- Contact Item -->
						<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
							<div class="contact_info_image"><img src="images/contact_3.png" alt=""></div>
							<div class="contact_info_content">
								<div class="contact_info_title">Địa chỉ</div>
								<div class="contact_info_text">21 đường 64 Phường 10 Quận 6</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact Form -->

	<div class="contact_form">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="contact_form_container">
						<div class="contact_form_title">Liên lạc với chúng tôi:</div>

						<form action="#" id="contact_form">
							<div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
								<input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Họ và tên" required="required" data-error="Xin điền đầy đủ thông tin.">
								<input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="Email" required="required" data-error="Xin điền đầy đủ thông tin.">
								<input type="text" id="contact_form_phone" class="contact_form_phone input_field" placeholder="Số điện thoại">
							</div>
							<div class="contact_form_text">
								<textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Bạn cần hỗ trợ..." required="required" data-error="Xin điền thông tin cần hỗ trợ."></textarea>
							</div>
							<div class="contact_form_button">
								<button type="submit" class="button contact_submit_button">Gửi</button>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
		<div class="panel"></div>
	</div>

	<!-- Map -->

	<div class="contact_map">
		<div id="google_map" class="google_map">
			<div class="map_container">
				<div id="map"></div>
			</div>
		</div>
    </div>


    @endsection
    