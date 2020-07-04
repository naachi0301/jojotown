<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index () 
    {
        $hello1 = 'Hello!';
        $hello2 = 'こんにちは！';

        return view('hello/index', compact('hello1', 'hello2'));
    }
}
