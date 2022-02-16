<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use File;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        return view('second-admin.pages.AuthProfile.profile');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'Required',
            'email' => 'Required',
            'phone' => 'Required',
        ]);
        $user = admin::findOrFail(auth('admin')->user()->id);

        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }

        $user->phone = $request->phone;

        $user->description = $request->description;

        if ($request->hasFile('image')) {
            $file = 'user' . $user->image;
            if (!empty($user->image)) {

                if (File::exists($file)) {
                    unlink($file);
                }
            }
            $temp = $request->file('image');
            $image = $request->image->getClientOriginalName();
            $destination = 'users';
            $temp->move($destination, $image);
            $user->image = $image;
        }
        $user->save();
        return back()->with('update_profile', 'Update Profile Successfully');
    }
    public function updatePassword(Request $request)
    {
        $this->validate($request, [
            'new_password' => 'Required',
            'old_password' => 'Required',
            'confirm_password' => 'Required|same:new_password',
        ]);
        if (!Hash::check($request->old_password, auth('admin')->user()->password)) {
            return back()->with([
                'error' => 'Old password is incorrect.'
            ]);
        }
        $user = admin::findOrFail(auth('admin')->user()->id);
        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with([
            'message' => 'Password successfully updated.'
        ]);
    }

}
