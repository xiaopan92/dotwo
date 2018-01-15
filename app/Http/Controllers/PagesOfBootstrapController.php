<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesOfBootstrapController extends Controller
{
    public function show(){
        return view('pages_of_bootstrap/index');
    }
}
