<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TagController extends Controller
{
    public function tags(){
        $tags = Tag::latest()->paginate(20);
        return view('admin.tag.index',[
            'tags' => $tags,
        ]);
    }
    public function tags_store(Request $request){
        $request->validate([
            'tag' => 'required|unique:tags,tag_name'
        ]);
        Tag::insert([
            'tag_name' => $request-> tag,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('tag_add', 'New Tag add Successful!');
    }
    public function tag_delte($id){
        Tag::find($id)->delete();
        return back()->with('tag_delete', 'Tag Successfully Delete!');
    }
}
