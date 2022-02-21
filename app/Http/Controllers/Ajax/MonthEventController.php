<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;


class MonthEventController extends Controller
{
    public function month($year_month){
         $events = Event::where('date','like',"%$year_month%")
         ->with('courseLocation')
         ->get();
         return response()->json(compact('events'),200); 
    }
}

//パラメータ(月)によってイベントを検索して取得