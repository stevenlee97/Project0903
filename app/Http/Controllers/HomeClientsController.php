<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use Hash;
use Auth;
use App\Bills;
use App\Products;
use App\Categories;
use App\PageUrl;
use App\Helpers\helpers;

class HomeClientsController extends Controller
{
    public function getDetailProduct($id){
        $detail = Products::where('id',$id)->get();
        return view('clients.pages.product-detail',compact('detail'));
    }

    function getHome(){
        $specialproduct = Products::where('status',1)->get();
        $newproduct = Products::where('new',1)->get();
        $hotproduct = Products::where('hot', 1)->get();
        return view('clients.pages.home',compact('specialproduct','newproduct','hotproduct'));
    }

    function getProduct(){
        $product = Products::paginate(15);
        return view('clients.pages.product',["product" => $product]);
    }

    function getCart(){
        return view('clients.pages.cart');
    }

    function getContact(){
        return view('clients.pages.contact');
    }

    function getLogin(){
        return view('clients.pages.clientlogin');
    }

    function postLogin(Request $req){
        $data = [
            'email'=>$req->email,
            'password'=>$req->password
        ];
        if (Auth::attempt($data)){
            return redirect()->route('gethome');
        }
        else
            return redirect()->back()->with('error','Sai thông tin đăng nhập, Vui lòng thử lại !');

    }

    function getRegister(){
        return view('clients.pages.clientregister');
    }

    function postRegister(request $req){
        $validator = Validator::make($req->all(),
        [
           'username'=> 'required|unique:users|max:255|min:10',
           'email'=>'required|unique:users|email',
           'password'=>'required|min:6',
           'ConfirmPassword'=>'same:password'
        ],[
            'username.unique'=>"Username đã được sử dụng",
            'username.min'=>"Username tối thiếu 10 ký tự",
            'email.email'=>"Email không đúng định dạng",
            'email.unique'=>"Email đã được sử dụng",
            'password.min'=>"Mật khẩu tối thiểu 6 ký tự",
            'ConfirmPassword.same'=>'Mật khẩu không giống nhau'
        ]);

        if ($validator->fails()){
            return redirect()->route('getclientregister')
                             ->withErrors($validator)
                             ->withInput();
        }
        $user = new User;
        $user->username = $req->username;
        $user->email = $req->email;
        $user->fullname = $req->fullname;
        $user->birthdate = date('Y-m-d',strtotime($req->birthdate));
        $user->address = $req->address;
        $user->phone = $req->phone;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect()->route('getclientlogin')->with('success','Register Successfully! Please login.');
        //dd($req->all);
    }

    function getLevelTwo(Request $req){
        $levelTwo = Categories::where('id_parent',$req->id)->get();
        if(empty($levelTwo->toArray())){
            echo "nolevel2";
        }
        else
            return view('admin.ajax.leveltwo',compact('levelTwo'));
    }
}
