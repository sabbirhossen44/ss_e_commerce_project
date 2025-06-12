<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Offers;
use App\Models\Product;
use App\Models\Size;
use App\Models\WebInfo;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        $web_info = WebInfo::where('status', 1)->first();
        $offer_50 = Offers::where('offer50', 1)->first();
        $offer_30 = Offers::where('offer30', 1)->first();
        return view('frontend.index',[
            'web_info' => $web_info,
            'offer_50' => $offer_50,
            'offer_30' => $offer_30,
        ]);
    }
    public function shopdetails($slug){
        $product = Product::where('slug', $slug)->first();
        $sizes = Size::all();
        return view('frontend.shopdetails',[
            'product' => $product,
            'sizes' => $sizes,
        ]);
    }
}
