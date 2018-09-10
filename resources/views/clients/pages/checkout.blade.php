@extends('clients.layouts.masterclient')
@section('title','Thanh Toán')
@section('content')
<div class="row">
    <div class="col-sm-5"></div>
    <div class="col-sm-4">
        <div class="card">
        <div class="card-body">
            <h3 class="card-title" style="text-align:center">Thông Tin Thanh Toán</h3>
        <br/>
            <form class="form-signin" method="post" action="{{route('postcheckout')}}">
                @csrf
                
                <div class="form-group row">
                    <label for="Email" class="col-sm-3 col-form-label">Họ & Tên:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="customerName" id="customerName" placeholder="Nhập họ tên của bạn" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Email" class="col-sm-3 col-form-label">Email:</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Nhập email của bạn" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Email" class="col-sm-3 col-form-label">Địa Chỉ</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="address" id="address" placeholder="Nhập địa chỉ của bạn" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Email" class="col-sm-3 col-form-label">Số Điện Thoại</label>
                    <div class="col-sm-9">
                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Nhập số điện thoại của bạn" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Email" class="col-sm-3 col-form-label">Ghi Chú</label>
                    <div class="col-sm-9">
                        <input type="tel" class="form-control" name="note" id="note" placeholder="Nhập ghi chú" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-5"></div>
                    <div class="col-sm-7">
                        <button style="" type="submit" class="btn btn-primary">Thanh toán</button>
                    </div>
                    
                </div>
            </form>
        </div>
        </div>
    </div>
    <div class="col-sm-3"></div>
    </div>
    </div>
</div>
@endsection