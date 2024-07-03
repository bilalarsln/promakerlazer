<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function portfoliodetail(){
        return view("portfolio-details");
    }
    public function servicedetail(){
        return view("service-details");
    }
}
