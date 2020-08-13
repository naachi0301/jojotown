<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;
use App\Trend;

class AdminProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $query = Product::query();
        if (!empty($request->brand_id)) {
            $query = $query->where('brand_id', $request->brand_id);
        }
        $products = $query->get();
        $brands = Brand::all();
        return view('admin/product/index', [
            'products' => $products,
            'brand_id' => $request->brand_id,
            'brands' => $brands,
        ]);
        
    }

    public function create()
    {
        $brands = Brand::all();
        $trends = Trend::all();
        return view('admin/product/detail', [
            'product_name' => '',
            'product_explain' => '',
            'price' => '',
            'url' => '',
            'image_url' => '',
            'brand_id' => count($brands) > 0 ? $brands[0]['id'] : 0,
            'trend_id' => count($trends) > 0 ? $trends[0]['id'] : 0,
            'action' => '/admin/product/store',
            'brands' => $brands,
            'trends' => $trends,
        ]);
    }

    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->product_name;
        $product->brand_id = $request->brand_id;
        $product->trend_id = $request->trend_id;
        $product->price = $request->price;

        $product->explain = $request->product_explain;
        $product->url = $request->input('url');
        $product->image_url = $request->input('image_url');


        $product->save();

        return redirect('/admin/product');
    }

    public function edit(int $id, Request $request)
    {
        $product = Product::find($id);
        $brands = Brand::all();
        $trends = Trend::all();
        return view('admin/product/detail', [
            'product_name' => $product['name'],
            'product_explain' => $product['explain'],
            'price' => $product['price'],
            'url' => $product['url'],
            'brand_id' => $product['brand_id'],
            'trend_id' => $product['trend_id'],
            'image_url' => $product['image_url'],
            'action' => '/admin/product/update/' . $id,
            'brands' => $brands,
            'trends' => $trends,
        ]);
    }

    public function update(int $id, Request $request)
    {
        $product = Product::find($id);
        $product->name = $request->product_name;
        $product->brand_id = $request->brand_id;
        $product->trend_id = $request->trend_id;
        $product->price = $request->price;

        $product->explain = $request->product_explain;
        $product->url = $request->input('url');
        $product->image_url = $request->input('image_url');

        $product->update();

        return redirect('/admin/product');
    }

    public function destroy(int $id)
    {
        $product = Product::destroy($id);
        
        return redirect('/admin/product');
    }
}