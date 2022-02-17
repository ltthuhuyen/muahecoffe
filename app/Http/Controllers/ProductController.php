<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(Request $request){
        $data= $request->validate([
            'name_product' => 'required',
            'price' => 'required',
            'image'=> 'required',
            'description' => 'required',
        ]);

        Product::create($data);
        return 'Created successfully';
    }
  
}
