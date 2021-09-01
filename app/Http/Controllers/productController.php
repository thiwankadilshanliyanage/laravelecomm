<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class productController extends Controller
{
    //
    function index()
    {

        $data= Product::all();

        return view('product',['products'=>$data]);
    }
}
