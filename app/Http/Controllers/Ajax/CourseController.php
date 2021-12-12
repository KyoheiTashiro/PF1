<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index() {
        $course=Course::all();
        return response()->json(compact('courses'),200); //eventsという名前でデータを返す
    }
}
