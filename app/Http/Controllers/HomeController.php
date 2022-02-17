<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeProduct;
use App\Models\Product;
use Auth;
class HomeController extends Controller
{

    public function home(){
        $type_products = TypeProduct::all();
        return view("home", compact('type_products'));
    }
    public function loginForm(){
        return view("login");
    }
    public function registerForm(){
        return view("register");
    }
    public function menuOfType(TypeProduct $type){

        $type_products = TypeProduct::all();
        
        $products = $type->products;
       
        return view('menu', compact('type_products','products'));
    }
    public function timkiem(TypeProduct $type, Request $request){
        $type_products = TypeProduct::all();
        
        $products = $type->products;
       
        $products = Product::where('name','like','%'.$request->tukhoa.'%')->get();
        return view('search', compact('type_products','products'));
    }
   
    public function menuDX(){
        return view(" menuDX");
    }
    public function menuNuocEp(){
        return view("menuNuocEp");
    }
    public function menuBanh(){
        return view("menuBanh");
    }
    public function login(Request $request){
        $request->validate([
            'username' => 'required|min:10',
            'password' => 'required|min:8|max:20',
        ],[
            'username.required'=>'Bạn phải nhập tên đăng nhập',   
            'password.required'=>'Bạn phải nhập mật khẩu',
            'username.min'=>'Nhập tên đăng nhập ít nhất 10 ký tự',
            'password.min'=>'Nhập mật khẩu ít nhất 8 ký tự',
            'password.max'=>'Nhập mật khẩu tối đa 30 ký tự',
        ]);
    }
    public function register(Request $request){
        $request->validate([
            'username' => 'required|min:10',
            'password' => 'required|min:8|max:20',
            'phone' => 'regex:/^0[0-9]{9}$/'
        ],[
            'username.min'=>'Nhập tên đăng nhập ít nhất 10 ký tự',
            'password.min'=>'Nhập mật khẩu ít nhất 8 ký tự',
            'password.max'=>'Nhập mật khẩu tối đa 30 ký tự',
            'phone.regex'=>'Nhập số điện thoại không đúng định dạng'
        ]);
    }
    public function logout () {
        Auth::logout();
        return redirect('/');
    }
    public function redirect(Request $request)
    {
        return redirect("/dashboard");
    }

}
