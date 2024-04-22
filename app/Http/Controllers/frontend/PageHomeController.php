<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageHomeController extends Controller
{
    public function anasayfa(){
        return view('frontend.pages.index');
    }
    public function urunler(){
        return view('frontend.pages.products');
    }
}
