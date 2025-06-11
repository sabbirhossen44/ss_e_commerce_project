<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Offers;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class OffersController extends Controller
{
    public function offers()
    {
        $offer50 = Offers::where('offer50', 1)->first();
        $offer30 = Offers::where('offer30', 1)->first();
        return view('admin.offers.index', [
            'offer50' => $offer50,
            'offer30' => $offer30,
        ]);
    }
    public function offer50(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'off_title' => 'required',
            'time' => 'required',
            'photo' => 'nullable|image',
            'logo' => 'nullable|image',
        ]);
        $logo = $request->file('logo');
        $photo = $request->file('photo');
        $offer50 = Offers::where('offer50', 1)->first();
        if (!empty($logo)) {
            if (!empty($photo)) {
                $logo_path = public_path('uploads/offers/' . $offer50->logo);
                if (file_exists($logo_path)) {
                    unlink($logo_path);
                }
                $logo_name = 'offer50_' . time() . uniqid() . '.' . $logo->getClientOriginalExtension();
                $logo->move("uploads/offers/", $logo_name);

                $file_path = public_path('uploads/offers/' . $offer50->photo);
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
                $photo_name = 'offer50_' . time() . uniqid() . '.' . $photo->getClientOriginalExtension();
                $photo->move("uploads/offers/", $photo_name);
                $offer50->update([
                    'title' => $request->title,
                    'off_title' => $request->off_title,
                    'time' => $request->time,
                    'logo' => $logo_name,
                    'photo' => $photo_name,
                    'offer50' => 1,
                    'updated_at' => Carbon::now(),
                ]);
                return back()->with('offer50_update', 'Offer Updated Successful!');
            } else {
                $logo_path = public_path('uploads/offers/' . $offer50->logo);
                if (file_exists($logo_path)) {
                    unlink($logo_path);
                }
                $logo_name = 'offer50_' . time() . uniqid() . '.' . $logo->getClientOriginalExtension();
                $logo->move("uploads/offers/", $logo_name);
                $offer50->update([
                    'title' => $request->title,
                    'off_title' => $request->off_title,
                    'logo' => $logo_name,
                    'time' => $request->time,
                    'offer50' => 1,
                    'updated_at' => Carbon::now(),
                ]);
                return back()->with('offer50_update', 'Offer Updated Successful!');
            }
        } else {
            if (!empty($photo)) {
                $file_path = public_path('uploads/offers/' . $offer50->logo);
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
                $photo_name = 'offer50_' . time() . uniqid() . '.' . $photo->getClientOriginalExtension();
                $photo->move("uploads/offers/", $photo_name);
                $offer50->update([
                    'title' => $request->title,
                    'off_title' => $request->off_title,
                    'time' => $request->time,
                    'photo' => $photo_name,
                    'offer50' => 1,
                    'updated_at' => Carbon::now(),
                ]);
                return back()->with('offer50_update', 'Offer Updated Successful!');
            } else {
                $offer50->update([
                    'title' => $request->title,
                    'off_title' => $request->off_title,
                    'time' => $request->time,
                    'offer50' => 1,
                    'updated_at' => Carbon::now(),
                ]);
                return back()->with('offer50_update', 'Offer Updated Successful!');
            }
        }
    }
    public function offer30(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'off_title' => 'required',
            'time' => 'required',
            'photo' => 'nullable|image',
            'logo' => 'nullable|image',
        ]);
        $logo = $request->file('logo');
        $photo = $request->file('photo');
        $offer30 = Offers::where('offer30', 1)->first();
        if (!empty($logo)) {
            if (!empty($photo)) {
                $logo_path = public_path('uploads/offers/' . $offer30->logo);
                if (file_exists($logo_path)) {
                    unlink($logo_path);
                }
                $logo_name = 'offer30_' . time() . uniqid() . '.' . $logo->getClientOriginalExtension();
                $logo->move("uploads/offers/", $logo_name);

                $file_path = public_path('uploads/offers/' . $offer30->photo);
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
                $photo_name = 'offer30_' . time() . uniqid() . '.' . $photo->getClientOriginalExtension();
                $photo->move("uploads/offers/", $photo_name);
                $offer30->update([
                    'title' => $request->title,
                    'off_title' => $request->off_title,
                    'time' => $request->time,
                    'logo' => $logo_name,
                    'photo' => $photo_name,
                    'offer30' => 1,
                    'updated_at' => Carbon::now(),
                ]);
                return back()->with('offer30_update', 'Offer Updated Successful!');
            } else {
                $logo_path = public_path('uploads/offers/' . $offer30->logo);
                if (file_exists($logo_path)) {
                    unlink($logo_path);
                }
                $logo_name = 'offer30_' . time() . uniqid() . '.' . $logo->getClientOriginalExtension();
                $logo->move("uploads/offers/", $logo_name);
                $offer30->update([
                    'title' => $request->title,
                    'off_title' => $request->off_title,
                    'logo' => $logo_name,
                    'time' => $request->time,
                    'offer30' => 1,
                    'updated_at' => Carbon::now(),
                ]);
                return back()->with('offer30_update', 'Offer Updated Successful!');
            }
        } else {
            if (!empty($photo)) {
                $file_path = public_path('uploads/offers/' . $offer30->logo);
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
                $photo_name = 'offer30_' . time() . uniqid() . '.' . $photo->getClientOriginalExtension();
                $photo->move("uploads/offers/", $photo_name);
                $offer30->update([
                    'title' => $request->title,
                    'off_title' => $request->off_title,
                    'time' => $request->time,
                    'photo' => $photo_name,
                    'offer30' => 1,
                    'updated_at' => Carbon::now(),
                ]);
                return back()->with('offer30_update', 'Offer Updated Successful!');
            } else {
                $offer30->update([
                    'title' => $request->title,
                    'off_title' => $request->off_title,
                    'time' => $request->time,
                    'offer30' => 1,
                    'updated_at' => Carbon::now(),
                ]);
                return back()->with('offer30_update', 'Offer Updated Successful!');
            }
        }
    }
}
