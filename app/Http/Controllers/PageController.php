<?php

namespace App\Http\Controllers;
use stdClass;
use Illuminate\Http\Request;
use App\Models\Product;
class PageController extends Controller
{
    public function productdetail(){
        $products = Product::all();
        $eid = request('eid');
        return view('product-details',['eid' => $eid,'products' => $products]); 
    }
    public function servicedetail(){
        return view("service-details");
    }

    public function mainPage()
    {
        $products = Product::all();
        return view('index', ['products' => $products]);
    }
}
