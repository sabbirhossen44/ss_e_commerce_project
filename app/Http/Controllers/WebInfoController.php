<?php

namespace App\Http\Controllers;

use App\Models\WebInfo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;

class WebInfoController extends Controller
{
    public function web_info()
    {
        $webinfos = WebInfo::latest()->get();
        return view('admin.webinfo.index', [
            'webinfos' => $webinfos,
        ]);
    }
    public function add_webinfo()
    {
        return view('admin.webinfo.add');
    }
    public function webinfo_store(Request $request)
    {
        $request->validate([
            'logo' => 'required|image',
            'icon' => 'required|image',
            'title' => 'required',
            'number' => 'required',
            'email' => 'required',
            'address' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'youtube' => 'required',
            'instagram' => 'required',
            'linkedin' => 'required',
        ]);
        $logo = $request->file('logo');
        $logo_name = "logo_" . time() . uniqid() . $logo->getClientOriginalName();
        $logo->move(public_path('uploads/webinfo/'), $logo_name);
        $icon = $request->file('icon');
        $icon_name = "icon" . time() . uniqid() . $icon->getClientOriginalName();
        $icon->move(public_path('uploads/webinfo/'), $icon_name);
        $raw = preg_replace('/[\s\-_]+/', '', $request->number);
        $number_link = '';
        if (Str::startsWith($raw, '+88')) {
            $number_link = $raw;
        } else {
            $clean = ltrim($raw, '0');
            $number_link = '+880' . $clean;
        }

        WebInfo::insert([
            'logo' => $logo_name,
            'icon' => $icon_name,
            'number' => $request->number,
            'number_link' => $number_link,
            'title' => $request->title,
            'email' => $request->email,
            'address' => $request->address,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'youtube' => $request->youtube,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('wibinfo_add', "Web Info Add Successfully!");
    }
    public function webinfo_view($id)
    {
        $webinfo = WebInfo::find($id);
        return view('admin.webinfo.view', [
            'webinfo' => $webinfo,
        ]);
    }
    public function webinfo_edit($id)
    {
        $webinfo = WebInfo::find($id);
        return view('admin.webinfo.edit', [
            'webinfo' => $webinfo,
        ]);
    }
    public function webinfo_update(Request $request, $id)
    {
        $web_info = WebInfo::find($id);
        $request->validate([
            'logo' => 'nullable|image',
            'icon' => 'nullable|image',
            'title' => 'required',
            'number' => 'required',
            'email' => 'required',
            'address' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'youtube' => 'required',
            'instagram' => 'required',
            'linkedin' => 'required',
        ]);
        if ($request->hasFile('logo')) {
            $logo_path = public_path('uploads/webinfo/' . $web_info->logo);
            if (file_exists($logo_path)) {
                unlink($logo_path);
            }
            $logo = $request->file('logo');
            $logo_name = "logo_" . time() . uniqid() . $logo->getClientOriginalName();
            $logo->move(public_path('uploads/webinfo/'), $logo_name);
            $web_info->update([
                'logo' => $logo_name,
                'updated_at' => Carbon::now(),
            ]);
        }
        if ($request->hasFile('icon')) {
            $icon_path = public_path('uploads/webinfo/' . $web_info->icon);
            if (file_exists($icon_path)) {
                unlink($icon_path);
            }
            $icon = $request->file('icon');
            $icon_name = "icon" . time() . uniqid() . $icon->getClientOriginalName();
            $icon->move(public_path('uploads/webinfo/'), $icon_name);
            $web_info->update([
                'icon' => $icon_name,
                'updated_at' => Carbon::now(),
            ]);
        }

        $raw = preg_replace('/[\s\-_]+/', '', $request->number);
        $number_link = '';
        if (Str::startsWith($raw, '+88')) {
            $number_link = $raw;
        } else {
            $clean = ltrim($raw, '0');
            $number_link = '+880' . $clean;
        }

        $web_info->update([
            'number' => $request->number,
            'number_link' => $number_link,
            'title' => $request->title,
            'email' => $request->email,
            'address' => $request->address,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'youtube' => $request->youtube,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'updated_at' => Carbon::now(),
        ]);

        return back()->with('wibinfo_update', "Web Info Update Successfully!");
    }
    public function webinfostatus(Request $request){
        WebInfo::find($request->web_id)->update([
            'status' => $request->status,
            'update_at' => Carbon::now(),
        ]);
    }
    public function webinfo_delete($id)
    {
        $webinfo = WebInfo::find($id);
        $logo_path = public_path('uploads/webinfo/' . $webinfo->logo);
        if (file_exists($logo_path)) {
            unlink($logo_path);
        }
        $icon_path = public_path('uploads/webinfo/' . $webinfo->icon);
        if (file_exists($icon_path)) {
            unlink($icon_path);
        }
        $webinfo->delete();
        return back()->with('webinfo_delete', 'Webinfo Delete Successfully!');
    }
}
