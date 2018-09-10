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
use App\Customers;
use App\BillDetail;

use Carbon\Carbon;
use Cart;

class HomeClientsController extends Controller
{
    public function getDetailProduct($id){
        $detail = Products::where('id',$id)->get();
        // dd($detail);
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
        $total = Products::get();
        return view('clients.pages.product',compact('product','total'));
    }

    function getProductById($id){
        // $subcate = Categories::where('id_parent',$id)->get()->count();
        // dd($subcate);
        $product = Products::where('id_type',$id)->get();
        return view('clients.pages.list-product',compact('product'));
    }

    function getCart(){
        $cart_content = Cart::content();
        $cart_total = Cart::total();
        return view('clients.pages.cart',compact('cart_content','cart_total'));
    }

    function clearCart() {
        Cart::destroy();
        return redirect()->route('getcart');
    }

    function updateQuantity(Request $req){
        $productId = $req->productId;
        $quantity = $req->quantity;
        // dd($productId);
        $rs = Cart::search(function ($cartItem, $rowId) use($productId) {
            return $cartItem->id === $productId;
        }); 
        if (count($rs) != 0) {
            foreach ($rs as $cartItem) {
                $rowId = $cartItem->rowId;
            }
            Cart::update($rowId, ['qty' => $quantity]);
        }
        return redirect()->route('getcart');
    }

    function getBuyProduct($id) {
        $rowId;
        $quantity;
        $product = Products::where('id',$id)->first();
        $rs = Cart::search(function ($cartItem, $rowId) use($id) {
            return $cartItem->id === $id;
        }); 
        if (count($rs) != 0) {
            foreach ($rs as $cartItem) {
                $rowId = $cartItem->rowId;
                $quantity = ($cartItem->qty);
            }
            $quantity = $quantity+1;
            Cart::update($rowId, ['qty' => $quantity]);
        } else {
            Cart::add(['id' => $id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price, 'options' => ['image' => $product->image]]);
        }
        return redirect()->route('getcart');
    }

    function getCheckout(){
        return view('clients.pages.checkout');
    }

    function postCheckout(Request $req){
        if(count(Cart::content()) == 0) {
            return redirect()->route('getcart')->with('error','Giỏ hàng trống. Vui lòng thêm sản phẩm vào giỏ hàng để thanh toán');
        }
        $customer = new Customers;
        $customer->name = $req->customerName;
        $customer->email = $req->email;
        $customer->address = $req->address;
        $customer->phone = $req->phone;
        $customer->note = $req->note;
        $customer->save();
        $cus = Customers::orderBy('id', 'desc')->first();
        $cusId = $cus->id;
        $today = Carbon::now()->format('Y-m-d');
        $totalBill = Cart::total();
        $totalBill = str_replace(",", "",$totalBill);
        $totalBill2 = floatval($totalBill);
        $bill = new Bills;
        $bill->id_customer = $cusId;
        $bill->date_order = $today;
        $bill->total = $totalBill2;
        $bill->save();
        $billItem = Bills::orderBy('id', 'desc')->first();
        $billId = $billItem->id;
        $product = Cart::content();
        foreach($product as $productItem){
            $billDetail = new BillDetail;
            $billDetail->id_bill = $billId;
            $billDetail->id_product = $productItem->id;
            $billDetail->quantity = $productItem->qty;
            $billDetail->price = $productItem->price;
            $billDetail->save();
        }
        Cart::destroy();
        return redirect()->route('getcart')->with('success','Thanh toán thanh công!');
    }

    function delCartItem($rowId){
        Cart::remove($rowId);
        
        return redirect()->route('getcart');
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
