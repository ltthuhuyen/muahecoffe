<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\TypeProduct;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all()->paginate(8);
        return view('employee.products.list', compact('products'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $type_products = TypeProduct::all();
        return view('employee.products.create', compact('type_products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->validate([
            'type_id' => ['required', 'exists:type_products,id'],
            'name' => 'required',
            'price' => 'required|numeric|min:0',
            'image'=> 'required|image',
            'description' => 'required',
        ]);
     

        $data['image'] = $request->file('image')->store('public/products');
        $product = Product::create($data);
        $product->prices()->create([
            'apply' => now(),
            'price' => $request->price
        ]);
        
        return redirect('/employee/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        // echo $id;
        $product = Product::findOrFail($id);

        return view ('employee.products.show' , compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view ('employee.products.edit' , compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $product= $request->input('$id');
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->description = $request->description ;
        // $product->image = $request->image;
        $product->image = $request->file('image')->store('public/products');
        $product->prices()->create([
            'apply' => now(),
            'price' => $request->price
        ]);
        $product->save();
        return redirect('/employee/products');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $product= $request->input('$id');
        $product = Product::findOrFail($id);
        $product->prices()->delete();
        $product ->delete();
        return redirect('/employee/products');
    }

    
}
