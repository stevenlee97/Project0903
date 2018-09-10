@extends('admin.layouts.master')
@section('title','Thêm sản phẩm mới')
@section('chude','Thêm sản phẩm mới')
@section('content')
<!-- Start Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-validation">
                    <form class="form-valide" action="{{route('addproduct')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="productName">Tên sản phẩm:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="productName" name="productName">
                                </div>
                            </div>
                
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="id_type">Chọn cấp cha:</label>
                                <div class="col-lg-8">
                                    <select class="form-control" id="parentCate" name="id_type">
                                        <option value="">---Chọn loại---</option>
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
                                        {{-- <option value="">---Chọn loại---</option> --}}
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="detailInfo">Thông tin chi tiết:</label>
                                <div class="col-lg-8">
                                    <textarea rows="10" type="text" class="form-control" id="detailInfo" name="detailInfo" ></textarea>
                                </div>
                                    
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="unitPrice">Đơn giá:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="unitPrice" name="unitPrice">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="promoPrice">Đơn giá khuyến mãi:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="promoPrice" name="promoPrice" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="promoProduct">Khuyến mãi kèm theo:</label>
                                <div class="col-lg-8">
                                    <textarea rows="10" type="text" class="form-control" id="promoProduct" name="promoProduct"></textarea>
                                </div>                                
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-number">Hình sản phẩm:</label>
                                <input type="file" name="images">
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="specialProduct" id="specialProduct"> Sản phẩm đặc biệt</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="newProduct" id="newProduct"> Sản phẩm mới</label>
                                </div>

                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                    <button type="button" class="btn btn-danger" id="resetBtn">Tạo lại</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $("#resetBtn").click(function(){
        $("#productName").val("");
        $("#parentCate").val("");
        $("#subCate").val("");
        $("#detailInfo").val("");
        $("#unitPrice").val("");
        $("#promoPrice").val("");
        $("#promoProduct").val("");
        $('#specialProduct').prop('checked', false);
        $('#newProduct').prop('checked', false);
    });
});
</script>

<script src="assets/admin/js/js/jquery.js"></script>
<script>
        $(document).ready(function(){
            $('#parentCate').change(function(){
                var idType = $(this).val()
                $.ajax({
                    //url:"admin/select-level-two",
                    url:"{{route('getl2')}}",
                    type: 'GET',
                    data:{
                        id:idType //$_GET['id'] ~$req->id
                    },
                    success:function(res){
                        console.log(res)
                        if($.trim(res)=='nolevel2'){
                            $('#subCate').html('<select name="id_type" class="form-control" id="subCate"> <option disabled>Loại này không có cấp 2</option></select>')
                            
                        }
                        else{
                            $('#subCate').html(res)
                            $('#parentCate').attr('name','')
                        }
                    },
                    error:function(){
                        console.log('error!')
                    }
                })
            })
        })
        </script>
    <script>
            CKEDITOR.replace('detailInfo');
            CKEDITOR.replace('promoProduct');
        </script>
<!-- End PAge Content -->
@endsection