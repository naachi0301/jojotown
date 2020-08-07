<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trend;

class AdminTrendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function index()
    {
        $trends = Trend::all();
        return view('admin/trend/index',[
            'trends' => $trends
        ]);
    }
    
    public function create()
    {
        return view('admin/trend/detail', [
            'trend_name' => '',
            'trend_discription' => '',
            'action' => '/admin/trend/store'

        ]);
    }
    
    public function store(Request $request)
    {
        $trend = new Trend;
        $trend->name = $request->trend_name;
        $trend->discription = $request->trend_discription;
        
        $trend->save();
        
        return redirect('/admin/trend');
    }

    public function edit(int $id, Request $request)
    {
        $trend = Trend::find($id);
        return view('admin/trend/detail', [
            'trend_name' => $trend['name'],
            'trend_discription' => $trend['discription'],
            'action' => '/admin/trend/update/' . $id
        ]);
    }

    public function update(int $id, Request $request)
    {
        $trend = Trend::find($id);
        $trend->name = $request->trend_name;
        $trend->discription = $request->trend_discription;
        
        $trend->update();

        return redirect('/admin/trend');
    }

    public function destroy(int $id)
    {
        $trend = Trend::destroy($id);
        
        return redirect('/admin/trend');
    }
}    