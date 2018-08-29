@extends('admin.layouts.master')
@section('title','Quản Lý Đơn Hàng')
@section('chude','Đơn Hàng')
@section('content')
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">                            
                                    <b>
                                        @if($status==0)
                                            Danh sách đơn hàng chưa xác nhận
                                        @elseif($status==1)
                                            Danh sách đơn hàng đã xác nhận
                                        @elseif($status==2)
                                            Danh sách đơn hàng đã hoàn tất
                                        @else
                                            Danh sách đơn hàng bị hủy
                                        @endif
                                    </b></h4>
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
                                            <th>Mã đơn hàng</th>
                                            <th>Tên khách hàng - SĐT</th>
                                            <th>Ngày đặt</th>
                                            <th>Sản phẩm (số lượng)</th>
                                            <th>Tổng tiền (chưa giảm)</th>
                                            <th>Tổng tiền thanh toán</th>
                                            <th>Ghi chú</th>
                                            @if($status==1)
                                            <th>Tùy chọn</th>
                                            @endif
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($bills as $b)  
                                          <tr>
                                          <td>DH000{{$b->id}}</td>
                
                                    <td>
                                            {{$b->customer->name}}
                                                <br>
                                            {{$b->customer->phone}}
                                    </td>
                
                                    <td>
                                        {{date('d-m-Y',strtotime($b->date_order))}}</td>
                                            <td>
                                                @foreach($b->billDetail as $detail)
                                                <li>{{$detail->product->name}} ({{$detail->quantity}})</li>
                                                @endforeach
                                    </td>
                
                                    <td>{{number_format($b->total)}}</td>
                
                                    <td>
                                        {{number_format($b->promt_price)}}
                                    </td>
                
                                    <td>{{$b->note}}</td>
                
                                    @if($status==1)
                                        <td>
                                            <button class="btn btn-primary btn-sm updateBill" data-toggle="modal" 
                                            data-target="#myModal" data-id="{{$b->id}}"> Giao hàng </button>
                                                <button class="btn btn-danger btn-sm cancelBill" data-toggle="modal" 
                                        data-target="#myModal1" data-id="{{$b->id}}" > Hủy </button>
                                        </td>
                                    @endif
                                    
                                          </tr>
                                          @endforeach
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal" id="myModal" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                            <div class="modal-body">
                            <p> Bạn có chắc chắn hoàn tất DH000<b id="idBill">...</b> ? </p>
                                  </div>        
                                  <div class="modal-footer">
                                        <a class="btn btn-primary" href="admin/update-bill" id="addIdBill">OK</a>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                    </div>
                      </div>
                    </div>
              </div>

              <div class="modal" id="myModal1" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                            <div class="modal-body">
                            <p> Bạn có muốn hủy DH000<b id="idBill1">...</b>? </p>
                                  </div>        
                                  <div class="modal-footer">
                                        <a class="btn btn-primary" href="admin/cancel-bill" id="cancelIdBill">OK</a>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                    </div>
                      </div>
                    </div>
              </div>
              <script>
                    $(document).ready(function(){
                        $('.updateBill').click(function(){
                            var idBill = $(this).attr('data-id')
                            $('#addIdBill').attr('href',"admin/update-bill-"+idBill)
                            $('#idBill').html(idBill)
                        })
                    })
                    </script>

<script>
        $(document).ready(function(){
            $('.cancelBill').click(function(){
                var idBill1 = $(this).attr('data-id')
                $('#cancelIdBill').attr('href',"admin/cancel-bill-"+idBill1)
                $('#idBill1').html(idBill1)
            })
        })
        </script>

                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
@endsection