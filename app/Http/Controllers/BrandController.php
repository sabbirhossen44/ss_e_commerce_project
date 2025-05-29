<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class BrandController extends Controller
{
    public function brand(){
        $brands = Brand::latest()->paginate(10);
        return view('admin.brand.index',[
            'brands'=> $brands,
        ]);
    }
    public function brand_store(Request $request){
        $request->validate([
            'brand_name' => 'required|unique:brands,brand_name',
            'brand_logo' => 'required'
        ]);
        $photo = $request->file('brand_logo');
        $logo_name = "brand" . time() . uniqid() . random_int(5000, 50000) . '.' . $photo->getClientOriginalExtension();
        $photo->move(public_path('uploads/brand/'),$logo_name);
        Brand::insert([
            'brand_name' => $request->brand_name,
            'brand_logo' => $logo_name,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('brand_add', 'New Brand Add Susseccful!');
    }
    public function brand_edit($id){
        $brand = Brand::find($id);
        return view('admin.brand.edit',[
            "brand" => $brand,
        ]);
    }
    public function brand_update(Request $request, $id){
        $brand = Brand::find($id);
        $request->validate([
            'brand_name' => 'required',
        ]);
        if ($request->hasFile('brand_logo')) {
            $img_path = public_path('uploads/category/'.$brand->brand_logo);
            if (file_exists($img_path)) {
                unlink($img_path);
            }
            $photo = $request->file('brand_logo');
            $logo_name = "brand" . time() . uniqid() . random_int(5000, 50000) . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('uploads/brand/'), $logo_name);
            $brand->update([
                'brand_name' => $request->brand_name,
                'brand_logo' => $logo_name,
                'updated_at' => Carbon::now(),
            ]);
            return back()->with('brand_update', 'Brand Update Successful!');
        }
        $brand->update([
                'brand_name' => $request->brand_name,
                'updated_at' => Carbon::now(),
            ]);
            return back()->with('brand_update', 'Brand Update Successful!');
    }
    public function brand_delete($id){
        $brand = Brand::find($id);
        $photo = public_path('uploads/brand/'.$brand->brand_logo);
        if (file_exists($photo)) {
            unlink($photo);
        }
        $brand->delete();
        return back()->with('brand_delete', 'Brand Delete Successful!');
    }
}
