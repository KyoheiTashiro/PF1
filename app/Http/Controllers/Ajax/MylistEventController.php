<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mylist;
use App\Models\Event;
use Auth;
use Carbon\Carbon;

class MylistEventController extends Controller
{
    public function getMylist(){
        $userId = Auth::id();        
        $events=Event::with('course')
        ->whereHas('mylists',function($query) use($userId){
            $query->where('user_id','=',$userId);            
        })
        ->withCount(['mylists' => function ($query) use ($userId) {
        $query->where('user_id', $userId);
        }])
        ->where('date','>=',Carbon::yesterday())
        ->orderBy('date','asc')
        ->get();
        return response()->json(compact('events'),200); ;
    }
}

//ユーザーがmylistsテーブルに保存したイベントを取得



