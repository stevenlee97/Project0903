<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/admin/images/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <title>@yield('title')</title>
    <base href="{{asset('')}}">
    <!-- Bootstrap Core CSS -->
    {{-- <link href="assets/admin/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet"> --}}

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- Custom CSS -->

    <link href="assets/admin/css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
    <link href="assets/admin/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="assets/admin/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/admin/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/admin/css/helper.css" rel="stylesheet">
    <link href="assets/admin/css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="assets/ckeditor/ckeditor.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.assets/admin/js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b><img src="assets/admin/images/logo.png" alt="homepage" class="dark-logo" /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span><img src="assets/admin/images/logo-text.png" alt="homepage" class="dark-logo" /></span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- Messages -->
                        <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th-large"></i></a>
                            <div class="dropdown-menu animated zoomIn">
                                <ul class="mega-dropdown-menu row">


                                    <li class="col-lg-3  m-b-30">
                                        <h4 class="m-b-20">CONTACT US</h4>
                                        <!-- Contact -->
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email"> </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </form>
                                    </li>
                                    <li class="col-lg-3 col-xlg-3 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-lg-3 col-xlg-3 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-lg-3 col-xlg-3 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Messages -->
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">
                        <a name="logoutBtn" id="logoutBtn" class="btn btn-primary" href="{{route('logout')}}" role="button">Đăng Xuất</a>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        
                        <li> <a href="{{route('dashboard')}}" aria-expanded="false"><i class="fas fa-home"></i><span class="hide-menu">Trang chủ </span></a></li>

                        <li class="nav-label">QUẢN LÝ</li>

                        <li> <a  href="{{route('getuserlist')}}" aria-expanded="false"><i class="fas fa-users"></i><span class="hide-menu">Khách hàng</span></a></li>

                    <li> <a href="{{route('getcatelist')}}" aria-expanded="false"><i class="fas fa-shopping-cart"></i><span class="hide-menu">Loại sản phẩm</span></a></li>
                        
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-cubes"></i><span class="hide-menu">Sản phẩm </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a  class="has-arrow" aria-expanded="false" href="ui-alert.html"><span class="hide-menu"> Danh sách theo loại</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        @foreach($menu as $m)
                                            @if(count($m->levelTwo)==0)
                                                <li><a href="{{route('getproductlist',$m->id)}}">{{$m->name}}</a></li>
                                            @else
                                                <li><a  class="has-arrow" aria-expanded="false" href="#"><span class="hide-menu">{{$m->name}}</span></a>
                                                    <ul aria-expanded="false" class="collapse">
                                                        @foreach($m->levelTwo as $l2)
                                                            <li><a href="{{route('getproductlist',$l2->id)}}">{{$l2->name}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                    
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                                
                            <li><a href="{{route('addproduct')}}"> Thêm sản phẩm mới</a></li>
                            </ul>
                        </li>

                        <li> <a class="has-arrow  " href="{{route('getbilllist')}}" aria-expanded="false"><i class="fas fa-file-invoice-dollar"></i><span class="hide-menu">Đơn hàng</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('bills',0)}}">Đơn hàng chưa xác nhận</a></li>
                                <li><a href="{{route('bills',1)}}">Đơn hàng đã xác nhận</a></li>
                                <li><a href="{{route('bills',2)}}">Đơn hàng đã hoàn tất</a></li>
                                <li><a href="{{route('bills',3)}}">Đơn hàng đã bị hủy</a></li>
                            </ul>
                        </li>


                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">@yield('chude')</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            @yield('content')
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved by Ly Truong Uy.</footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="assets/admin/js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/admin/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="assets/admin/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/admin/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="assets/admin/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="assets/admin/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->


	<script src="assets/admin/js/lib/calendar-2/moment.latest.min.js"></script>
    <!-- scripit init-->
    <script src="assets/admin/js/lib/calendar-2/semantic.ui.min.js"></script>
    <!-- scripit init-->
    <script src="assets/admin/js/lib/calendar-2/prism.min.js"></script>
    <!-- scripit init-->
    <script src="assets/admin/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <!-- scripit init-->
    <script src="assets/admin/js/lib/calendar-2/pignose.init.js"></script>

    <script src="assets/admin/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/admin/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <script src="assets/admin/js/scripts.js"></script>
    <!-- scripit init-->

    <script src="assets/admin/js/custom.min.js"></script>
    
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/admin/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="assets/admin/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="assets/admin/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="assets/admin/js/custom.min.js"></script>


    <script src="assets/admin/js/lib/datatables/datatables.min.js"></script>
    <script src="assets/admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="assets/admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="assets/admin/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="assets/admin/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="assets/admin/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="assets/admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="assets/admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="assets/admin/js/lib/datatables/datatables-init.js"></script>

        <!-- Form validation -->
        <script src="assets/admin/js/lib/form-validation/jquery.validate.min.js"></script>
        <script src="assets/admin/js/lib/form-validation/jquery.validate-init.js"></script>
        <!--Custom JavaScript -->
        <script src="assets/admin/js/custom.min.js"></script>
</body>

</html>