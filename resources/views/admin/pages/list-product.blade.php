@extends('admin.layouts.master')
@section('title','Quản Lý Sản Phẩm')
@section('chude','Sản Phẩm')
@section('content')
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <h4 class="card-title">Danh sách sản phẩm thuộc loại <b>{{$nameType}}</b></h4>
                                <h6 class="card-subtitle">Xuất thông tin dưới dạng Copy, CSV, Excel, PDF & In</h6>
                                <div class="table-responsive m-t-40">
                                        <div class="panel-body">
                                                @if(Session::has('success'))
                                                <div style="color:#fff" class="alert alert-success">
                                                    <b>{{Session::get('success')}}</b>
                                                </div>
                                                @endif
                                                @if(Session::has('error'))
                                                <div class="alert alert-danger">
                                                    {{Session::get('error')}}
                                                </div>
                                                @endif
                                            </div>
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                          <tr>
                                                <th>Mã sản phẩm</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Hình ảnh</th>
                                                <th>Đơn giá - giá khuyến mãi</th>
                                                <th>Sản phẩm đặc biệt</th>
                                                <th>Sản phẩm mới</th>
                                                <th>Ẩn ngoài web</th>
                                                
                                                <th>Tùy chọn</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($products as $p)  
                                          <tr>
                                          <td>SP000{{$p->id}}</td>
                
                                    <td id="name-{{$p->id}}">
                                            {{$p->name}}
                                    </td>
                                    <td>
                                            <img height="100px" src="assets/admin/images/img/images/products/{{$p->image}}" alt="">
                                    </td>
                
                                    <td>
                                            {{number_format($p->price)}}
                                        <br>
                                            {{number_format($p->promotion_price)}}
                                    </td>

                                    <td>
                                        <input type="checkbox" disabled  @if($p->status==1) checked  @endif> 
                                    </td>
                    
                                    <td>
                                        <input type="checkbox" disabled @if($p->new==1) checked @endif> 
                                    </td>
                
                                    <td>
                                        <input type="checkbox" disabled @if($p->deleted==1) checked  @endif>
                                    </td>                                       
                                    
                                    <td>
                                        <button class="btn btn-danger btn-sm updateProduct" data-toggle="modal" 
                                        data-target="#myModal" data-id="{{$p->id}}"><i class="far fa-trash-alt"></i></button> 
                                        <a class="btn btn-primary btn-sm" href="{{route('updateproduct',$p->id)}}"><i class="far fa-pencil-square-o"></i></a>
                                    </td>
                                    
                                          </tr>
                                          @endforeach
                                        </tbody>
                                    </table>
                                      {{-- {{$products->links()}} --}}
                            </div>
                            </div>
                        </div>
                    </div>


                    <div class="modal" id="myModal" role="dialog" tabindex="-1" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                        <p> Bạn có chắc chắn xóa sản phẩm <b id="nameProduct">...</b>? </p>
                                </div>

                                <div class="modal-footer">
                                <a href="admin/delete-product" class="btn btn-success" id="deleteIdProduct">OK</a>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
                <!-- End PAge Content -->

            </div>
            <!-- End Container fluid  -->
    <script>

        $(document).ready(function(){
            $('.updateProduct').click(function(){
                var idProduct = $(this).attr('data-id') //get
                var nameProduct = $('#name-'+idProduct).text()

                $('#deleteIdProduct').attr('href',"admin/delete-product-"+idProduct) //set
                $('#nameProduct').html(nameProduct)
            })
        })
        </script>
@endsection