<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Trend;

class WelcomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $trends = Trend::all();
        
        return view('welcome', [
            'products' => $products,
            'trends' => $trends,
        ]);
    }
}
