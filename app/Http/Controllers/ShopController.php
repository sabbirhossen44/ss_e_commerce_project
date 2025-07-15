<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ShopPage;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop(Request $request){
        $data = $request->all();
        $shop_banner = ShopPage::where('status', 1)->first();
        $products = Product::where('status', 1)->where(function($q) use ($data){
            if (!empty($data['search_input']) && $data['search_input'] != '' && $data['search_input'] != 'undefined'){
                $q->where(function($q) use ($data){
                    $q->where('product_name', 'like' , '%' . $data['search_input'] . '%');
                    $q->orWhere('tags', 'like' , '%' . $data['search_input'] . '%');
                    $q->orWhereHas('pro_to_cat', function($query) use ($data){
                        $query->where('category_name' ,'like' , '%' . $data['search_input'] . '%');
                    });
                    $q->orWhereHas('pro_to_cat', function($query) use ($data){
                        $query->where('category_name' ,'like' , '%' . $data['search_input'] . '%');
                    });
                });
            };
        })->paginate(12);
        $categories = Category::all();
        $brands = Brand::all();
        return view('frontend.shop',[
            'shop_banner' => $shop_banner,
            'products' => $products,
            'categories' => $categories,
            'brands' => $brands,
        ]);
    }
}
