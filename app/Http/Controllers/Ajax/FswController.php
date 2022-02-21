<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class FswController extends Controller
{
    public function search($courseName){
         $events = Event::whereHas('courseLocation',function($query)use($courseName){
             $query->where('api_keyword','=',$courseName);
         })
         ->with('courseLocation')
         ->get();
         return response()->json(compact('events'),200); 
    }
}

//イベントをコースごとにフィルターして表示する処理

    
//     $books = Book::whereHas('tag', function($query) use($param) {
//     $query->where('tag', $param);
//     })->get();

    // public function search($courseId){
    //      $events = Event::where('course_id','=',$courseId)
    //      ->with('courseLocation')
    //      ->get();
    //      return response()->json(compact('events'),200); 
    // }
    
    // }
    // public function search() {
    //     // $events=Event::all();
    //     $events = Event::where('course_id','=','7')
    //      ->with('courseLocation')
    //      ->get();
    //     return response()->json(compact('events'),200); 
    //     //eventsという名前でデータを返す
    // }