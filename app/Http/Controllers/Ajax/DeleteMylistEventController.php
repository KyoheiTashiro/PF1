<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mylist;
use Auth;

class DeleteMylistEventController extends Controller
{
    public function delete(Request $request){
        Auth::user()->noMylist($request->event);
        return 'マイリスト削除ok!';
    }
}