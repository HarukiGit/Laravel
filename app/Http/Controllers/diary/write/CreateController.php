<?php

namespace App\Http\Controllers\diary\write;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Diary;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $diary=new Diary;
        $diary->text=$request->input('test');
        $diary->image='null';
        $diary->save();
        return redirect()->route('write');
    }

}
