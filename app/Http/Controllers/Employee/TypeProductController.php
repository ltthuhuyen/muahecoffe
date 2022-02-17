<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\TypeProduct;
use Illuminate\Http\Request;


class TypeProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $type_products = TypeProduct::all();

        return view('employee.typeProducts.list', compact('type_products'));
    
    }

  
    public function create()
    {
        return view('employee.typeProducts.create');
    }

   
    public function store(Request $request)
    {
        $data= $request->validate([
          
            'name' => 'required',
            
        ]);
      
        TypeProduct::create($data);
        return redirect('employee/typeProducts');
    }

    public function show(TypeProduct $typeProduct)
    {
        
    }

    public function edit($id)
    {
        $typeProduct = TypeProduct::findOrFail($id);
        return view ('employee.typeProducts.edit' , compact('typeProduct'));
    }
    
    public function update(Request $request,$id)
    {
        $typeProduct= $request->input('$id');
        $typeProduct = TypeProduct::find($id);
        $typeProduct->name = $request->name;
        $typeProduct->save();
        return redirect('/employee/typeProducts');
    }

    public function destroy(Request $request,$id)
    {
        $typeProduct= $request->input('$id');
        $typeProduct = TypeProduct::findOrFail($id);
        $typeProduct ->delete();
        return redirect('/employee/typeProducts');
    }
}
