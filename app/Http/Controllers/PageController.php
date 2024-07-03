<?php

namespace App\Http\Controllers;
use stdClass;
use Illuminate\Http\Request;
use App\Models\Product;
class PageController extends Controller
{
    public function portfoliodetail(){
        
        return view("portfolio-details");
    }
    public function servicedetail(){
        return view("service-details");
    }

    public function mainPage()
    {
        $veri = new stdClass;
        $veri -> product = Product::get(); 
        return view('index',compact('veri')); 
        
    }
}
