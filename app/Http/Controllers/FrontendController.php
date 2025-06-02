<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\WebInfo;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        $web_info = WebInfo::where('status', 1)->first();
        return view('frontend.index',[
            'web_info' => $web_info,
        ]);
    }
}
