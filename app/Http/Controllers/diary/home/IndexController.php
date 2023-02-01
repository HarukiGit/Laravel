<?php

namespace App\Http\Controllers\diary\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Diary;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $diary=Diary::all();
        return view('diary.home')->with('diaries',$diary);
    }
}
