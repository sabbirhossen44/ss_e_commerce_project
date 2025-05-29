<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CategoryController extends Controller
{
    public function category()
    {
        $categories = Category::latest()->paginate(10);
        return view('admin.category.index', [
            'categories' => $categories,
        ]);
    }
    public function category_store(Request $request)
    {
        $request->validate([
            'category_name' => "required|unique:categories,category_name",
            'category_photo' => 'required|image',
        ]);
        $logo = $request->file('category_photo');
        $logo_name = "category" . time() . uniqid() . random_int(5000, 50000) . '.' . $logo->getClientOriginalExtension();
        $logo->move(public_path('uploads/category/'), $logo_name);
        Category::insert([
            'category_name' => $request->category_name,
            'photo' => $logo_name,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('category_ad', 'Category Add Successful!');
    }
    public function category_edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', [
            'category' => $category,
        ]);
    }
    public function category_update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required'
        ]);
        $category = Category::find($id);
        if ($request->hasFile('category_photo')) {
            $img_path = public_path('uploads/category/'.$category->photo);
            if (file_exists($img_path)) {
                unlink($img_path);
            }
            $photo = $request->file('category_photo');
            $logo_name = "category" . time() . uniqid() . random_int(5000, 50000) . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('uploads/category/'), $logo_name);
            $category->update([
                'category_name' => $request->category_name,
                'photo' => $logo_name,
                'updated_at' => Carbon::now(),
            ]);
            return back()->with('category_update', 'Category Update Successful!');
        }
        $category->update([
            'category_name' => $request->category_name,
            'updated_at' => Carbon::now(),
        ]);
        return back()->with('category_update', 'Category Update Successful!');
    }
    public function category_softdelte($id)
    {
        $category = Category::find($id);
        $category->delete();
        return back()->with('soft_delete', 'Category Soft Delete Successful!');
    }
    public function trash_list()
    {
        $alTrash = Category::onlyTrashed()->latest()->paginate(10);
        return view('admin.category.trash_list', [
            'alTrash' => $alTrash,
        ]);
    }
    public function category_restore($id)
    {
        $category = Category::onlyTrashed()->find($id);
        $category->restore();
        return back()->with('category_resotr', 'Category Resotre Successfully Done!');
    }
    public function category_parmarentdelete($id)
    {
        $category = Category::onlyTrashed()->find($id);
        if ($category->photo) {
            $photo_path = public_path('uploads/category/' . $category->photo);
            if (file_exists($photo_path)) {
                unlink($photo_path);
            }
        }
        $category->forceDelete();
        return back()->with('trash_delete', 'Category Pramrent delete Successful!');
    }
}
