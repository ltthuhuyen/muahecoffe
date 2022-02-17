<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TypeProduct;

class DashboardController extends Controller
{
    public function index(){

        $type_products = TypeProduct::all();

        return view('employee.typeProducts.list', compact('type_products'));
    }
}
