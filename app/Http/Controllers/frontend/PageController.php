<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function urunler() {
        return view('frontend.pages.products');
    }
    public function urundetay() {
        return view('frontend.pages.product');
    }
    public function hakkimizda () {
        return view('frontend.pages.about');
    }
    public function card () {
        return view('frontend.pages.card');

    }
    public function iletisim() {
        return view('frontend.pages.contact');
    }

}
