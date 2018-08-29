@extends('admin.layouts.registerlayout')
@section('content')
    <!-- Main wrapper  -->
    <div id="main-wrapper">

        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="login-content card">
                            <div class="login-form">
                                    {{-- @if($errors->any())
                                    <div class="alert alert-danger">
                                    @foreach($errors->all() as $err)
                                        <li>{{$err}}</li>
                                    @endforeach
                                    </div>
                                    @endif --}}
                                <h4>Admin Register</h4>
                                <form class="form-signin" method="post" action="{{route('postregister')}}">
                                    @csrf
                                    <div class="form-group">
                                        
                                        <input type="text"name="username" class="form-control" placeholder="User Name" required autofocus>
                                        <ul><li style="color:red" > {{ $errors->first('username') }}</li></ul>
                                    </div>
            
                                    <div class="form-group">
                                        
                                        <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
                                        <ul><li style="color:red" > {{ $errors->first('email') }}</li></ul>
                                    </div>
                                    
                                    <div class="form-group">
                                        
                                        <input type="text" name="fullname" class="form-control" placeholder="Full Name" required autofocus>
                                        <ul><li style="color:red" > {{ $errors->first('fullname') }}</li></ul>
                                    </div>

                                    <div class="form-group">
                                        
                                        <input type="date" name="birthdate" class="form-control" required autofocus>
                                        <ul><li style="color:red" > {{ $errors->first('birthdate') }}</li></ul>
                                    </div>

                                    <div class="form-group">
                                    <Select name="gender" class="form-control">
                                        <option value="gender">Chọn giới tính</option>
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                        <option value="Khác">Khác</option>
                                    </Select>
                                    </div>

                                    <div class="form-group">

                                        <input type="text" name="address" class="form-control" placeholder="Address" required autofocus>
                                        <ul><li style="color:red" > {{ $errors->first('address') }}</li></ul>
                                    </div>
                                    
                                    <div class="form-group">

                                        <input type="text" name="phone" class="form-control" placeholder="Phone" required autofocus>
                                        <ul><li style="color:red" > {{ $errors->first('phone') }}</li></ul>
                                    </div>

                                    <div class="form-group">
                                        
                                        <input type="password" name="password" class="form-control" placeholder="Password" required autofocus>
                                        <ul><li style="color:red" > {{ $errors->first('password') }}</li></ul>
                                    </div>
                                    <div class="form-group">
                                        
                                        <input type="password" name="cfrpassword" class="form-control" placeholder="Confirm Password" required autofocus>
                                        <ul><li style="color:red" > {{ $errors->first('cfrpassword') }}</li></ul>
                                    </div>
                                    <div class="checkbox">
                                        <label>
										<input type="checkbox"> Agree the terms and policy
									</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                                    <div class="register-link m-t-15 text-center">
                                    <p>Already have account ? <a href="{{route('getlogin')}}"> Sign in</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Wrapper -->
@endsection