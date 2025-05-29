<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class VariationController extends Controller
{
    public function variation()
    {
        $colors = Color::latest()->get();
        $sizes = Size::latest()->paginate(15);
        return view('admin.variation.index', [
            'colors' => $colors,
            'sizes' => $sizes,
        ]);
    }
    public function color_store(Request $request)
    {
        $request->validate([
            'color_name' => 'required|unique:colors,color_name',
            'color_code' => 'required|unique:colors,color_code',
        ]);
        Color::insert([
            'color_name' => $request->color_name,
            'color_code' => $request->color_code,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('color_store', 'New Color Add Successful!');
    }
    public function size_delete($id)
    {
        $size = Size::find($id);
        $size->delete();
        return back()->with('size_delete', 'Color Delete Successful!');
    }
    public function color_delete($id)
    {
        $color = Color::find($id);
        $color->delete();
        return back()->with('color_delete', 'Color Delete Successful!');
    }
    public function size_store(Request $request)
    {
        $request->validate([
            'size_name' => 'required|unique:sizes,size_name',
        ]);
        Size::insert([
            'size_name' => $request->size_name,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('size_store', 'New Size Add Successful!');
    }
}
