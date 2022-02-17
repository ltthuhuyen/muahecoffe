<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\TypeProduct;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        $type_products = TypeProduct::all();
        return view('guest.homepage.index', compact('type_products'));
    }
    public function menuCafe(){
        return view("guest.homepage.menuCafe");
    }
    public function menuDX(){
        return view("guest.homepage.menuDX");
    }
    public function menuNuocEp(){
        return view("guest.homepage.menuNuocEp");
    }
    public function menuBanh(){
        return view("guest.homepage.menuBanh");
    }
    public function menu(){
        return view("guest.homepage.menu");
    }
}
