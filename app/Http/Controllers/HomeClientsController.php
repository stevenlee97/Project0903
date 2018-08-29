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
    public function getDetailProduct(){
        return view('clients.pages.productdetail');
    }

    function getHome(){
        return view('clients.pages.home');
    }

    function getProduct(){
        return view('clients.pages.product');
    }

    function getCart(){
        return view('clients.pages.cart');
    }
}
