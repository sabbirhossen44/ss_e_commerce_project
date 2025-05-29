<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\subCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        $categories = Category::all();
        $subcategories = subCategory::all();
        return view('admin.product.product_add',[
            'categories' => $categories,
            'subcategories' => $subcategories,
        ]);
    }
    public function getsubcategory(Request $request){
        $str = '<option value="">Select Category</option>';
        $subcategories = subCategory::where('category_id', $request->category_id)->get();
        foreach($subcategories as $subcategory){
            $str .= '<option value="'.$subcategory->id .'">'.$subcategory->subcategory_name.'</option>';
        }
        echo $str;
        
    }
}
