<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ShopPage;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ShopPageController extends Controller
{
    public function shoppage(){
        $contents = ShopPage::all();
        return view('admin.shop_pages.index',[
            'contents' => $contents,
        ]);
    }
    public function shop_store(Request $request){
        $request->validate([
            'title' => 'required',
            'photo' => 'required|image',
        ]);
        $photo = $request->file('photo');
        $photo_name = "shop_page".time() . uniqid(). $photo->getClientOriginalName();
        $photo->move(public_path('uploads/shop_page/'), $photo_name);
        
        ShopPage::insert([
            'title' => $request->title,
            'photo' => $photo_name,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('shoppage_store', 'Content add succesfully!');
    }
}
