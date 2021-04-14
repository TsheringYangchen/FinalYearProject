<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
   
    public function download(){
        return view('front.download');
    }
    public function licensee(){
        return view('front.licensee-login');
    }
    public function bin(){
        return view('front.BIN');
    }
    public function ein(){
        return view('front.EIN');
    }
    public function infringement(){
        return view('front.infringement');
    }
    public function status(){
        return view('front.License-Status');
    }
}
