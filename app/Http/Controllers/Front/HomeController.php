<?php

namespace App\Http\Controllers\Front;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Pagination\Paginator;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::paginate(4);

        return view('front.index', compact('products'));
    }
}
