<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CategoryController extends Controller
{
    public function category(){
        $categories = Category::latest()->paginate(10);
        return view('admin.category.index',[
            'categories' => $categories,
        ]);
    }
    public function category_store(Request $request){
        $request->validate([
            'category_name' => "required|unique:categories,category_name",
            'category_photo' => 'required|image',
        ]);
        $logo = $request->file('category_photo');
        $logo_name = "category". time() . uniqid() . random_int(5000, 50000). '.' .$logo->getClientOriginalExtension();
        $logo->move(public_path('uploads/category/'), $logo_name);
        Category::insert([
            'category_name' => $request->category_name,
            'photo' => $logo_name,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('category_ad', 'Category Add Successful!');
    }
    public function category_softdelte($id){
        $category = Category::find($id);
        $category->delete();
        return back()->with('soft_delete', 'Category Soft Delete Successful!');
    }
    public function trash_list(){
        $alTrash = Category::onlyTrashed()->get();
        return view('admin.category.trash_list',[
            'alTrash' => $alTrash,
        ]);
    }
}
