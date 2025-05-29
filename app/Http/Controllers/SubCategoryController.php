<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\subCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class SubCategoryController extends Controller
{
    public function subcategory()
    {
        $categories = Category::all();
        $subCategories = subCategory::all();
        return view('admin.subcategory.index', [
            'categories' => $categories,
            'subCategories' => $subCategories,
        ]);
    }
    public function subcategory_store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'subcategory' => 'required',
        ]);
        if (subCategory::where('category_id', $request->category_id )->where('subcategory_name', $request->subcategory)->exists()) {
            return back()->with('subcategory_error', 'The subcategory has already been taken.');
        } else {
            subCategory::insert([
                'category_id' => $request->category_id,
                'subcategory_name' => $request->subcategory,
                'created_at' => Carbon::now(),
            ]);
            return back()->with('subcategory_add', 'SubCategory successfully added!');
        }
    }
    public function subcategory_delete($id)
    {
        $subcategory = subCategory::find($id);
        $subcategory->delete();
        return back()->with('subcategory_delete', 'subcategory delete successful!');
    }
}
