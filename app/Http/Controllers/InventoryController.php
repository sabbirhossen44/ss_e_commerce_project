<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class InventoryController extends Controller
{
    public function inventory($id)
    {
        $product = Product::find($id);
        $colors = Color::all();
        $sizes = Size::all();
        $inventories = Inventory::latest()->where('product_id', $id)->get();
        return view('admin.inventory.index', [
            'product' => $product,
            'colors' => $colors,
            'sizes' => $sizes,
            'inventories' => $inventories,
        ]);
    }
    public function inventory_store(Request $request, $id)
    {
        $prodcut = Product::find($id);
        $request->validate([
            'color_id' => 'required',
            'size_id' => 'required',
            'quantity' => 'required',
        ]);
        if (Inventory::where('product_id', $prodcut->id)->where('color_id', $request->color_id)->where('size_id', $request->size_id)->exists()) {
            Inventory::where('product_id', $prodcut->id)->where('color_id', $request->color_id)->where('size_id', $request->size_id)->increment('quantity', $request->quantity);
            return back()->with('inventory_increment', "Inventory Increment Successful!");
        } else {
            Inventory::insert([
                'product_id' => $prodcut->id,
                'color_id' => $request->color_id,
                'size_id' => $request->size_id,
                'quantity' => $request->quantity,
                'created_at' => Carbon::now(),
            ]);
            return back()->with('inventory_add', "New Inventory Add Successful!");
        }
    }
    public function inventory_delete($id)
    {
        $inventory = Inventory::find($id);
        $inventory->delete();
        return back()->with('inventory_delete', 'Inventory Delete SUccesfully!');
    }
}
