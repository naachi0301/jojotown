<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Trend;

class WelcomeController extends Controller
{
   public function index()
    {
        $trends = Trend::all();

        $trends = $this->setProductsToTrends($trends);

        return view('welcome', [
            'trends' => $trends,
        ]);
    }

    private function setProductsToTrends($trends)
    {
        foreach ($trends as $trend) {
            $query = Product::query();
            $query = $query->join('trend_products', 'products.id', '=', 'trend_products.product_id');
            $query = $query->where('trend_products.trend_id', $trend['id']);
            $products = $query->get();
            $trend['products'] = $products;
        }
        return $trends;
    }
}
