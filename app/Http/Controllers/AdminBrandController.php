<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class AdminBrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function index()
    {
        $brands = Brand::all();
        return view('admin/brand/index',[
            'brands' => $brands
        ]);
    }
    
    public function create()
    {
        return view('admin/brand/detail', [
            'brand_name' => '',
            'action' => '/admin/brand/store'

        ]);
    }
    
    public function store(Request $request)
    {
        $brand = new Brand;
        $brand->name = $request->brand_name;
        $brand->save();
        
        return redirect('/admin/brand');
    }

    public function edit(int $id, Request $request)
    {
        $brand = Brand::find($id);
        return view('admin/brand/detail', [
            'brand_name' => $brand['name'],
            'action' => '/admin/brand/update/' . $id
        ]);
    }

    public function update(int $id, Request $request)
    {
        $brand = Brand::find($id);
        $brand->name = $request->brand_name;

        $brand->update();

        return redirect('/admin/brand');
    }

    public function destroy(int $id)
    {
        $brand = Brand::destroy($id);
        
        return redirect('/admin/brand');
    }
}    