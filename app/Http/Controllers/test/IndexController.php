<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    
    public function show(){
        return view('test.test');
    }

    public function button(){
        return redirect()->route('test')->with('success',"ボタンを押した");
    }
}
