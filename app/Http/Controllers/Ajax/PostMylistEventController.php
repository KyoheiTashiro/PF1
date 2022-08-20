<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mylist;
use Auth;


class PostMylistEventController extends Controller
{
    public function post(Request $request){
        Auth::user()->mylist($request->event);
        return 'マイリスト追加ok!';
    }
    //mylistsテーブルにevent_idとuser_idを保存する

    // 削除の処理はDeleteMylistEventController

}
