<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;


class MonthEventController extends Controller
{
    public function month($year_month){
         $events = Event::where('date','>=',$year_month.'-01')
         ->where('date','<=',$year_month.'-31')
         ->with('courseLocation')
         ->orderBy('date','asc')
         ->get();
         return response()->json(compact('events'),200); 
    }
}

//パラメータ(月)によってイベントを検索して取得
