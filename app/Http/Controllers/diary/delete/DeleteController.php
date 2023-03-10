<?php

namespace App\Http\Controllers\diary\delete;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Diary;

class DeleteController extends Controller
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
        //dd($request->id);
        $diary->where('id', $request->id)->delete();
        return redirect()->route('delete');
    }
}
