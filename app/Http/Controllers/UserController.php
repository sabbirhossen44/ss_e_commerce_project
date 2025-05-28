<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function user_profile()
    {
        $user = Auth::id();
        return view('admin.users.index', compact('user'));
    }
    public function user_info_update(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $user = User::find(Auth::id());
        $user->update([
            'name' => $request->name,
            'updated_at' => Carbon::now(),
        ]);
        return back()->with('success', 'User Information Updated Successfully');
    }
    public function user_pass_change(Request $request)
    {
        $request->validate([
            'old_pass' => 'required',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);
        $user = User::find(Auth::id());
        if (Hash::check($request->old_pass, $user->password)) {
            $user->update([
                'password' => bcrypt($request->password)
            ]);
            return back()->with('pass_change', 'Password Changed Successfully');
        } else {
            return back()->with('password_not_match', 'Old password not match!');
        }
    }
    public function profile_photo_update(Request $request)
    {
        $request->validate([
            'photo' => 'required|image',
        ]);
        $user = User::find(Auth::id());
        if ($user->photo) {
            $old_photo = public_path('uploads/user/' . $user->photo);
            if (file_exists($old_photo)) {
                unlink($old_photo);
            }
        }
        $photo = $request->file('photo');
        $photo_name = 'user_' . $user->id . time() . uniqid() . '.' . $photo->getClientOriginalExtension();
        $photo->move(public_path('uploads/user/'), $photo_name);
        User::find(Auth::id())->update([
            'photo' => $photo_name,
            'updated_at' => Carbon::now(),
        ]);
        return back()->with('photo_update', 'Profile Photo Updated Successfully');
    }

    public function user_list()
    {
        $users = User::where('id', '!=', Auth::id())->latest()->paginate(10);
        return view('admin.users.user_list', [
            'users' => $users
        ]);
    }
    public function newuser_add(Request $request)
    {
        $request->validate([
            'user_name' => 'required',
            'user_email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);
        User::insert([
            'name' => $request->user_name,
            'email' => $request->user_email,
            'password' => bcrypt($request->password),
            'created_at' => Carbon::now(),
        ]);
        return back()->with('user_add', 'User Added Successfully');
    }
    public function user_delete($id)
    {
        $user = User::find($id);
        if ($user->photo) {
            $photo_path = public_path('uploads/user/' . $user->photo);
            if (file_exists($photo_path)) {
                unlink($photo_path);
            }
        }
        $user->delete();
        return back()->with('user_delete', 'User Deleted Successfully');
    }
}
