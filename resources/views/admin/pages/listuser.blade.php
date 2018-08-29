@extends('admin.layouts.master')
{{-- @extends('admin.layouts.datatable') --}}
@section('title','Danh sách khách hàng')
@section('chude','Khách Hàng')
@section('content')
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Danh Sách Khách Hàng</h4>
                                <h6 class="card-subtitle">Xuất thông tin dưới dạng Copy, CSV, Excel, PDF & In</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ID Khách hàng</th>
                                                <th>User name</th>
                                                <th>Họ và tên</th>
                                                <th>Ngày tháng năm sinh</th>
                                                <th>Địa chỉ</th>
                                                <th>Email</th>
                                                <th>Số điện thoại</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($user as $u)  
                                          <tr>
                                          <td>KH000{{$u->id}}</td>
                
                                    <td>
                                        {{$u->username}}
                                    </td>
                
                                    <td>
                                        {{$u->fullname}}
                                    </td>
                
                                    <td>
                                        {{date('d-m-Y',strtotime($u->birthdate))}}
                                    </td>
                
                                    <td>
                                       {{$u->address}}
                                    </td>
                
                                    <td>
                                        {{$u->email}} 
                                    </td>
                
                                    <td>
                                        {{$u->phone}}
                                    </td>
                                          </tr>
                                          @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
@endsection