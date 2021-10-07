<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {

        return \App\Models\Event::all();  // ←自動でjsonにしてくれます

    }
}
