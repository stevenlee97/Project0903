@extends('admin.layouts.master')
@section('title','Quản Lý Loại Sản Phẩm')
@section('chude','Loại Sản Phẩm')
@section('content')
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <h4 class="card-title">Danh sách sản phẩm thuộc loại</h4>
                                <h6 class="card-subtitle">Xuất thông tin dưới dạng Copy, CSV, Excel, PDF & In</h6>
                                <div class="table-responsive m-t-40">
                                        <div class="panel-body">
                                                @if(Session::has('success'))
                                                <div style="color:#fff" class="alert alert-success">
                                                    {{Session::get('success')}}
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
                                                <th>Mã loại</th>
                                                <th>Tên loại</th>
                                                <th>Liên kết</th>
                                                <th>Tùy chọn</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($cate as $c)  
                                          <tr>
                                          <td>LSP000{{$c->id}}</td>
                
                                    <td>
                                            {{$c->name}} 
                                    </td>

                                    <td>
                                            {{$c->id_url}}
                                    </td>
                

                                    <td>
                                             
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
                    {{-- <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                    <div class="modal-body">
                                            <p> Bạn có chắc chắn xóa sản phẩm <b id="nameProduct">...</b>? </p>
                                    </div>

                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-success"> <a href="admin/delete-product" id="deleteIdProduct">OK</a></button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                    </div>
                              </div>
                            </div>
                      </div> --}}
        </div>
                <!-- End PAge Content -->

            </div>
            <!-- End Container fluid  -->
@endsection