<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function offers(){
        return view('admin.offers.index');
    }
}
