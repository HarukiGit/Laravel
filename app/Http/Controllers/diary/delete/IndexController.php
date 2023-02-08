<?php

namespace App\Http\Controllers\diary\delete;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Diary;
use DateTime;
use DateTimeZone;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $diary=array_reverse(Diary::all()->toArray());
        foreach($diary as $i=>$d){
            $t = new DateTime($d['created_at']);
            $t->setTimeZone(new DateTimeZone('Asia/Tokyo'));
            $diary[$i]["created_at"]=$t->format('Y-m-d H:i:s') . PHP_EOL;
        }
        return view('diary.delete')->with('diaries',$diary);
    }
}
