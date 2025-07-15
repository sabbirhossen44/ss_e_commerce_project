<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ShopPage;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ShopPageController extends Controller
{
    public function shoppage()
    {
        $contents = ShopPage::all();
        return view('admin.shop_pages.index', [
            'contents' => $contents,
        ]);
    }
    public function shop_store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'photo' => 'required|image',
        ]);
        $photo = $request->file('photo');
        $photo_name = "shop_page" . time() . uniqid() .'.'. $photo->getClientOriginalExtension();
        $photo->move(public_path('uploads/shop_page/'), $photo_name);

        ShopPage::insert([
            'title' => $request->title,
            'photo' => $photo_name,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('shoppage_store', 'Content add succesfully!');
    }

    public function shop_Pagestatus(Request $request)
    {
        ShopPage::find($request->product_id)->update([
            'status' => $request->status,
            'updated_at' => Carbon::now(),
        ]);
    }

    public function shop_page_edit($id)
    {
        $data = ShopPage::find($id);
        return view('admin.shop_pages.edit', [
            'data' => $data,
        ]);
    }

    public function shop_update(Request $request, $id)
    {
        $data = ShopPage::find($id);
        $request->validate([
            'title' => 'required',
            'photo' => 'nullable|image',
        ]);
        $photo = $request->file('photo');
        if ($photo) {
            $photo_path = public_path('uploads/shop_page/' . $data->photo);
            if (file_exists($photo_path)) {
                unlink($photo_path);
            }
            $photo_name = "shop_page" . time() . uniqid() .'.'. $photo->getClientOriginalExtension();
            $photo->move(public_path('uploads/shop_page/'), $photo_name);
            $data->update([
                'title' => $request->title,
                'photo' => $photo_name,
                'updated_at' => Carbon::now(),
            ]);
            return back()->with('shoppage_update', 'Content Update succesfully!');
        } else {
            $data->update([
                'title' => $request->title,
                'updated_at' => Carbon::now(),
            ]);
            return back()->with('shoppage_update', 'Content Update succesfully!');
        }
    }
    public function shop_page_delete($id){
        $data = ShopPage::find($id);
        $photo_path = public_path('uploads/shop_page/'.$data->photo);
        if ($data->photo && file_exists($photo_path)) {
            unlink($photo_path);
        }
        $data->delete();
        return back()->with('delete', 'Shop Content Delete Successful!');
    }
}
