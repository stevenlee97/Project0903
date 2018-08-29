@extends('admin.layouts.master')
@section('title','Cập nhật sản phẩm')
@section('chude','Cập nhật thông tin sản phẩm')
@section('content')
<!-- Start Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-validation">
                    <form class="form-valide" action="{{route('updateproduct',$product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="productName">Tên sản phẩm:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="productName" name="productName" value="{{$product->name}}">
                                </div>
                            </div>
                
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="id_type">Chọn cấp cha:</label>
                                <div class="col-lg-8">
                                    <select class="form-control" id="parentCate" name="id_type">
                                        {{-- <option value="">---Chọn loại---</option> --}}
                                            @foreach($levelOne as $l1)
                                                <option value="{{$l1->id}}">{{$l1->name}}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="id_type">Chọn cấp con:</label>
                                <div class="col-lg-8">
                                    <select class="form-control" id="subCate" name="id_type">
                                        @foreach($levelTwo as $l2)
                                    <option value="{{$l2->id}}" @if($l2->id==$product->id_type) selected @endif>{{$l2->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="detailInfo">Thông tin chi tiết:</label>
                                <div class="col-lg-8">
                                <textarea rows="10" type="text" class="form-control" id="detailInfo" name="detailInfo">{{$product->detail}}</textarea>
                                </div>
                                    
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="unitPrice">Đơn giá:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="unitPrice" name="unitPrice" value="{{$product->price}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="promoPrice">Đơn giá khuyến mãi:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="promoPrice" name="promoPrice" value="{{$product->promotion_price}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="promoProduct">Khuyến mãi kèm theo:</label>
                                <div class="col-lg-8">
                                <textarea rows="10" type="text" class="form-control" id="promoProduct" name="promoProduct">{{$product->promotion}}</textarea>
                                </div>                                
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-number">Hình sản phẩm:</label>
                                <input type="file" name="images">
                                <br>
                                <div>
                                    <img height="100px" src="assets/admin/images/img/images/products/{{$product->image}}" alt="">
                                </div>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="specialProduct" id="specialProduct"> Sản phẩm đặc biệt</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="newProduct" id="newProduct"> Sản phẩm mới</label>
                                </div>
                                <div class="checkbox">
                                        <label><input type="checkbox" name="deletedProduct" id="deletedProduct"  @if($product->deleted==1) checked @endif> Xoá sản phẩm</label>
                                      </div>
                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
    <script>
            CKEDITOR.replace('detailInfo');
            CKEDITOR.replace('promoProduct');
        </script>
<!-- End PAge Content -->
@endsection