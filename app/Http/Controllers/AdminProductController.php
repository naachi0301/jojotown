<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class AdminProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function index()
    {
        $products = Product::all();
        return view('admin/product/index', [
            'products' => $products
        ]);
    }

    public function create()
    {
        return view('admin/product/detail', [
            'product_name' => '',
            'product_explain' => '',
            'price' => '',
            'url' => '',
            'image_url' => '',
            'action' => '/admin/product/store'
        ]);
    }

    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->product_name;
        $product->brand_id = 1;
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
        return view('admin/product/detail', [
            'product_name' => $product['name'],
            'product_explain' => $product['explain'],
            'price' => $product['price'],
            'url' => $product['url'],
            'image_url' => $product['image_url'],
            'action' => '/admin/product/update/' . $id
        ]);
    }

    public function update(int $id, Request $request)
    {
        $product = Product::find($id);
        $product->name = $request->product_name;
        $product->brand_id = 1;
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