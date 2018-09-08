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

class HomeAdminController extends Controller
{
    public function getRegister(){
        return view('admin.pages.register');
    }

    public function getLogin(){
        return view('admin.pages.login');
    }

    public function postRegister(request $req){
        $validator = Validator::make($req->all(),
        [
            'username'=> 'required|unique:users|max:255|min:10',
           'email'=>'required|unique:users|email',
           'gender'=>"required",
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
            return redirect()->route('getregister')
                             ->withErrors($validator)
                             ->withInput();
        }
        $user = new User;
        $user->username = $req->username;
        $user->email = $req->email;
        $user->fullname = $req->fullname;
        $user->birthdate = date('Y-m-d',strtotime($req->birthdate));
        $user->gender = $req->gender;
        $user->address = $req->address;
        $user->phone = $req->phone;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect()->route('getlogin')->with('success','Register Successfully! Please login.');
        //dd($req->all);
    }

    public function postLogin(Request $req){
        $data = [
            'email'=>$req->email,
            'password'=>$req->password
        ];
        if (Auth::attempt($data)){
            return redirect()->route('admindashboard');
        }
        else
            return redirect()->back()->with('error','Sai thông tin đăng nhập, Vui lòng thử lại !');

    }

    public function getIndex(){
        $product = Products::get();
        $bill = Bills::get();
        $guest = User::where('role','guest')->get();
        $categories = Categories::where('id_parent',NULL)->get();

        return view('admin.dashboard.index',compact('product','bill','guest','categories'));
    }

    function getUserList(){
        $user = User::where('role','guest')->get();
        return view('admin.pages.listuser',compact('user'));
    }

    function getBillList(){
        $status = 1;
        $bills = Bills::with('customer', 'billDetail','billDetail.product')->where('status',$status)->get();
        return view('admin.pages.listbill',compact('bills','status'));
    }

    function getBillsByStatus($status){
        $bills = Bills::with('customer', 'billDetail', 'billDetail.product')->where('status',$status)->orderBy('id','DESC')->get();
        return view('admin.pages.listbill', compact('bills','status'));
    }

    function getUpdateBill($id){
        $bill = Bills::where('id',$id)->first();
        if($bill){
            $bill->status = 2; //0: chua xac nhan | 1: da xac nhan | 2: admin da giao hang | 3: DH bi huy
            $bill->save();
            return redirect()->route('getbilllist')->with('success','Cập nhật đơn hàng thành công!!');
        }
        else{
            return redirect()->route('getbilllist')->with('error',"Không tìm thấy DH000$id");
        }
    }

    function getCancelBill($id){
        $bill = Bills::where('id',$id)->first();
        if($bill){
            $bill->status = 3;
            $bill->save();
            return redirect()->route('getbilllist')->with('success','Hủy đơn hàng thành công!');
        }
        else{
            return redirect()->route('getbilllist')->with('error',"Không tìm thấy DH000$id");
        }
    }

    function getListProduct($idType){
        $nameType = Categories::where('id',$idType)->value('name');
        $products = Products::where('id_type',$idType)->get();
        return view('admin.pages.list-product',compact('products','nameType'));
    }

    function getLevelTwo(Request $req){
        $levelTwo = Categories::where('id_parent',$req->id)->get();
        if(empty($levelTwo->toArray())){
            echo "nolevel2";
        }
        else
            return view('admin.ajax.leveltwo',compact('levelTwo'));
    }

    function getAddProduct(){
        $levelOne = Categories::where('id_parent',NULL)->get();
        return view('admin.pages.addproduct',compact('levelOne'));
    }

    function postAddProduct(Request $req){
        $url = new PageUrl;
            $helper = new Helpers;
            $url->url = $helper->changeTitle($req->productName);
            $url->save();

            $product = new Products;
            $product->id_url = $url->id;
            $product->id_type = $req->id_type;
            $product->name = $req->productName;
            $product->detail = $req->detailInfo;
            $product->price = $req->unitPrice;
            $product->promotion_price = $req->promoPrice;
            $product->promotion = $req->promoProduct;
            $product->status = isset($req->specialProduct) && $req->specialProduct=='on' ? 1 : 0;
            $product->new = isset($req->newProduct) && $req->newProduct=='on' ? 1 : 0;
            // $product->deleted = isset($req->deleted) && $req->deleted=='on' ? 1 : 0;
            $product->update_at = date('Y-m-d',time());
            if($req->hasFile('images')){
                $image = $req->file('images');
                $name = time().$image->getClientOriginalName();
                $image->move('assets/admin/images/img/images/products', $name);

                $product->image = $name;
            }
            else
            {
                return redirect()->back()->with('error','Vui lòng chọn ảnh')->withInput($req->all());
            }
            $product->save();
            
            return redirect()->route('getproductlist',$product->id_type)->with('success','Thêm mới thành công!');
    }

    function getDeleteProduct($id){
        $product = Products::findOrFail($id);
        if($product){
            $product->deleted=1;
            $product->save();
            return redirect()->route('getproductlist',$product->id_type)->with('success','Xóa sản phẩm thành công!');
        }
        else{
            return redirect()->back()->with('error','Không tìm thấy sản phẩm');
        }
    }

    function getUpdateProduct($id){
        $product = Products::where('id',$id)->first();
        $levelOne = Categories::where('id_parent',NULL)->get();
        $idType = Categories::where('id',$product->id_type)->value('id_parent');
        $levelTwo = Categories::where('id_parent',$idType)->get();
        if($product){
            return view('admin.pages.editproduct',compact('product','levelOne','levelTwo'));
        }
        return redirect()->back()->with('error','Không tìm thấy sản phẩm');
    }

    function postUpdateProduct(Request $req){
        $product = Products::findOrFail($req->id);
        if($product){
            $product->id_type = $req->id_type;
            $product->name = $req->productName;
            $product->detail = $req->detailInfo;
            $product->price = $req->unitPrice;
            $product->promotion_price = $req->promoPrice;
            $product->promotion = $req->promoProduct;
            $product->status = isset($req->specialProduct) && $req->specialProduct=='on' ? 1 : 0;
            $product->new = isset($req->newProduct) && $req->newProduct=='on' ? 1 : 0;
            $product->deleted = isset($req->deleted) && $req->deletedProduct=='on' ? 1 : 0;
            $product->update_at = date('Y-m-d',time());
            if($req->hasFile('images')){
                $image = $req->file('images');
                $name = time().$image->getClientOriginalName();
                $image->move('assets/admin/images/img/images/products', $name);

                $product->image = $name;
            }
            $product->save();
            $url = PageUrl::findOrFail($product->id_url);
            $helper = new Helpers;
            $url->url = $helper->changeTitle($product->name);
            $url->save();
            return redirect()->route('getproductlist',$product->id_type)->with('success','Cập nhật thông tin sản phẩm thành công!');
        }
        else{
            return redirect()->back()->with('error','Không tìm thấy sản phẩm');
        }
    }

    function getListCate(){
        $cate = Categories::get();
        $levelOne = Categories::where('id_parent',NULL)->get();
        $subCate = Categories::where('id_parent','<>',NULL)->get();
        // $parentCate = Categories::where('id_parent','id')->value('name');
        // return view('admin.pages.list-cate',compact('cate','parentCate','levelOne'));
        dd($levelOne);
    }
}
