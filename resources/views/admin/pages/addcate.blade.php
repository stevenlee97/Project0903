@extends('admin.layouts.master')
@section('title','Thêm loại sản phẩm')
@section('chude','Thêm loại sản phẩm')
@section('content')
<!-- Start Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-validation">
                    <form class="form-valide" action="{{route('postCate')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="cateName">Tên loại sản phẩm:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="cateName" name="cateName">
                                </div>
                            </div>
                
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="parentCate">Chọn cấp cha:</label>
                                <div class="col-lg-8">
                                    <select class="form-control" id="parentCate" name="parentCate">
                                            @foreach($levelOne as $l1)
                                                <option value="{{$l1->id}}">{{$l1->name}}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <button type="submit" class="btn btn-primary">Lưu</button>
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