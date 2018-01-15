<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowGoodsController extends Controller
{
    public function show(){
        return view('show_goods/show');
    }
}
