<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index() {
        // $events=Event::all();
        $events = Event::with('courseLocation')->get();
        return response()->json(compact('events'),200); //eventsという名前でデータを返す
        // dd($courseid);
    }
}
