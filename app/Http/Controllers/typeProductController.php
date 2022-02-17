<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\typeProduct;

class typeProductController extends Controller
{
    public function list()
    {
       $type_products = typeProduct::all();
       return view('employee.typeProducts.list', compact('type_products'));
    }
    public function create()
    {
       return view('employee.typeProducts.create');
    }

    public function store(Request $request){
        $data= $request->validate([
            'id_type' => 'required',
            'name_type' => 'required',
            
        ]);
        
        typeProduct::create($data);
        return redirect('employee.typeProducts');
    
    }
    public function edit(typeProduct  $type_products){
        // $type_products = typeProduct::findOrFail($id_type);
        return view ('employee.typeProducts.edit' , compact('$type_product'));
    }

    public function update(Request $request , typeProduct  $type_product){
        $data= $request->validate([
            'id_type' => 'required',
            'name_type' => 'required|string',
            
        ]);
        $type_products->update($data);
        return redirect('employee.typeProducts.list');
    
    }
    

    // public function delete($id_type)
    // {
    //     $type_products = typeProduct::findOrFail($id_type);
    //     $type_products->delete();

    //     return redirect('/employee/typeProducts');
    // }
}
