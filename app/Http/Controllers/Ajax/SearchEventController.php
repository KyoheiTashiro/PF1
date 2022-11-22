<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Auth;
use Carbon\Carbon;

class SearchEventController extends Controller
{   
    public function index(Request $request){
        $userId = Auth::id();
        $keyword = $request->input('keyword');

        if($keyword == null){
            $events=[];
            return response()->json(compact('events'),200);
        }else{
            $events=Event::with('course')

            ->where(function($query)use($keyword){
                $query->where('name','like',"%$keyword%")
                    ->orWhere('organizer','like',"%$keyword%")
                    ->orWhereHas('course',function($q)use($keyword){
                    $q->where('location','like',"%$keyword%");
                    });
                })

            ->withCount(['mylists' => function ($query) use ($userId) {
                $query->where('user_id', $userId);
            }])
            ->orderBy('date','asc')
            ->where('date','>=',Carbon::today())
            // ->get();
            ->paginate(5);
            return response()->json(compact('events'),200);
        }
    }
}

//イベント名・主催者・開催地で、キーワード(文字列)で検索して取得する処理

// eventsテーブル→子
// coursesテーブル→親
// 子テーブルから親テーブルにリレーションして検索したい