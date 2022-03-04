<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class SearchEventController extends Controller
{   
    // try{
    //     public function search(Request $request) {
    //     $keyword = $request->input('keyword');
    //     $events=Event::where('name','like',"%$keyword%")
    //        ->with('courseLocation')
    //        ->orderBy('date','asc')
    //        ->get();
    //       return response()->json(compact('events'),200);
    //   }
    // }catch(){

    // }




  public function search(Request $request) {
      $keyword = $request->input('keyword');
      $events=Event::where('name','like',"%$keyword%")
         ->with('courseLocation')
         ->orderBy('date','asc')
         ->get();
        return response()->json(compact('events'),200);
    }


    //  public function accept(Request $request) {
    //   $value = $request->input('value');
    //   return view('home')->with('val', $value);
    // }
}

//イベントをキーワード(文字列)で検索して取得する処理