<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\ProductGallery;
use App\Models\subCategory;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function product()
    {
        $categories = Category::all();
        $subcategories = subCategory::all();
        $brands = Brand::all();
        $tags = Tag::all();
        return view('admin.product.product_add', [
            'categories' => $categories,
            'subcategories' => $subcategories,
            'brands' => $brands,
            'tags' => $tags,
        ]);
    }
    public function getsubcategory(Request $request)
    {
        $str = '<option value="">Select Category</option>';
        $subcategories = subCategory::where('category_id', $request->category_id)->get();
        foreach ($subcategories as $subcategory) {
            $str .= '<option value="' . $subcategory->id . '">' . $subcategory->subcategory_name . '</option>';
        }
        echo $str;
    }
    public function product_store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'product_name' => 'required',
            'brand_id' => 'required',
            'price' => 'required',
            'sort_desc' => 'required',
            'preview' => 'required',
        ]);
        $photo = $request->file('preview');
        $preview = "product_" . time() . uniqid() . random_int(5000, 500000) . '.' . $photo->getClientOriginalExtension();
        $photo->move(public_path('uploads/product/preview/'), $preview);
        $remove = array("@", "#", "(", ")", "*", "/", " ", '""');
        $slug = Str::lower(str_replace($remove, "_", $request->product_name)) . time() . uniqid();
        $product_id = Product::insertGetId([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->sub_category_id,
            'brand_id' => $request->brand_id,
            'product_name' => $request->product_name,
            'price' => $request->price,
            'discount' => $request->dis_price,
            'after_discount' => $request->price - ($request->price * $request->dis_price / 100),
            'tags' => implode(",", $request->tags),
            'short_desc' => $request->sort_desc,
            'long_desc' => $request->long_desc,
            'addi_info' => $request->addi_info,
            'preview' => $preview,
            'slug' => $slug,
            'created_at' => Carbon::now(),
        ]);

        $galleries = $request->file('gallery');

        foreach ($galleries as $gallery) {
            $preview = "product_" . time() . uniqid() . random_int(5000, 500000) . '.' . $gallery->getClientOriginalExtension();
            $gallery->move(public_path('uploads/product/productgallery/'), $preview);
            ProductGallery::insert([
                'product_id' => $product_id,
                'gallery' => $preview,
                'created_at' => Carbon::now(),
            ]);
        }
        return back()->with('product_add', 'New Product Add Successfully!');
    }
    public function product_list()
    {
        $products = Product::latest()->paginate(10);
        return view('admin.product.product_list', [
            'products' => $products,
        ]);
    }
    public function getstatus(Request $request)
    {
        Product::find($request->product_id)->update([
            'status' => $request->status,
        ]);
    }
    public function discount50(Request $request)
    {
        Product::find($request->product_id)->update([
            'discount50' => $request->discount50,
        ]);
    }
    public function discount30(Request $request)
    {
        Product::find($request->product_id)->update([
            'discount30' => $request->discount30,
        ]);
    }
    public function product_edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $subcategories = subCategory::all();
        $product_gallery = ProductGallery::where('product_id', $id)->get();
        $selected_tags = explode(',', $product->tags);
        $brands = Brand::all();
        $tags = Tag::all();
        return view('admin.product.edit', [
            'product' => $product,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'brands' => $brands,
            'tags' => $tags,
            'product_gallery' => $product_gallery,
            'selected_tags' => $selected_tags,
        ]);
    }
    public function ajaxDeleteGalleryImage($id)
    {
        $image = ProductGallery::findOrFail($id);

        // Delete image file
        $image_path = public_path('uploads/product/productgallery/' . $image->gallery);
        if (file_exists($image_path)) {
            unlink($image_path);
        }

        // Delete DB record
        $image->delete();

        return response()->json(['success' => true, 'message' => 'Image deleted successfully.']);
    }
    public function product_update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $request->validate([
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'product_name' => 'required',
            'brand_id' => 'required',
            'price' => 'required',
            'sort_desc' => 'required',
            // 'preview' => 'required',
        ]);

        if ($request->hasFile('preview')) {
            $photo_path = public_path('uploads/product/preview/' . $product->preview);
            if (file_exists($photo_path)) {
                unlink($photo_path);
                $photo = $request->file('preview');
                $preview = "product_" . time() . uniqid() . random_int(5000, 500000) . '.' . $photo->getClientOriginalExtension();
                $photo->move(public_path('uploads/product/preview/'), $preview);
                $product->update([
                    'preview' => $preview,
                ]);
            }
        }
        if ($request->hasFile('gallery')) {
            $galleries = $request->file('gallery');
            foreach ($galleries as $gallery) {
                $preview = "product_" . time() . uniqid() . random_int(5000, 500000) . '.' . $gallery->getClientOriginalExtension();
                $gallery->move(public_path('uploads/product/productgallery/'), $preview);
                ProductGallery::insert([
                    'product_id' => $product->id,
                    'gallery' => $preview,
                    'updated_at' => Carbon::now(),
                ]);
            }
        }
        $product->update([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->sub_category_id,
            'brand_id' => $request->brand_id,
            'product_name' => $request->product_name,
            'price' => $request->price,
            'discount' => $request->dis_price,
            'after_discount' => $request->price - ($request->price * $request->dis_price / 100),
            'tags' => implode(",", $request->tags),
            'short_desc' => $request->sort_desc,
            'long_desc' => $request->long_desc,
            'addi_info' => $request->addi_info,
            'updated_at' => Carbon::now(),
        ]);
        return back()->with('product_update', 'Product Update Successfully!');
    }
    public function product_delete($id){
        $product = Product::findOrFail($id);
        $img_path = public_path('uploads/product/preview/'.$product->preview);
        if (file_exists($img_path)) {
            unlink($img_path);
        }
        $product_gallery = ProductGallery::where('product_id', $id)->get();
        foreach($product_gallery as $gallery){
            $img_path = public_path('uploads/product/productgallery/'.$gallery->gallery);
            if (file_exists($img_path )) {
                unlink($img_path );
            }
        }
        Inventory::where('product_id', $id)->delete();
        ProductGallery::where('product_id', $id)->delete();
        Product::find($id)->delete();
        return back()->with('product_delete', 'Product Delete Successfully!');

    }
}
