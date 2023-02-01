<?php

namespace App\Http\Controllers\diary\write;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // ディレクトリ名
        $dir = 'image';

        // アップロードされたファイル名を取得
        $file_name = $request->file('image')->getClientOriginalName();

        // 取得したファイル名で保存
        $request->file('image')->storeAs('public/' . $dir, $file_name);

        // ファイル情報をDBに保存
        $image_name = $file_name;
        $image_path = 'storage/' . $dir . '/' . $file_name;
 
        return redirect()->route('write',['image_path'=>$image_path]);
    }
}
