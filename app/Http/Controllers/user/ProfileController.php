<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('user.AuthProfile.profile');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'Required',
            'email' => 'Required',
            'phone' => 'Required',
        ]);

        $user = User::findOrFail(auth()->user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }

        $user->phone = $request->phone;

        $user->description = $request->description;

        if ($request->hasFile('image')) {
            $file = 'images/userProfile/' . $user->image;
            if (!empty($user->image)) {
                if (\Illuminate\Support\Facades\File::exists($file)) {
                    unlink($file);
                }
            }
            $temp = $request->file('image');
            $image = $request->image->getClientOriginalName();
            $destination = 'images/userProfile/';
            $temp->move($destination, $image);
            $user->image = $destination . $image;
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
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with([
                'error' => 'Old password is incorrect.'
            ]);
        }
        $user = User::findOrFail(auth()->user()->id);
        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with([
            'message' => 'Password successfully updated.'
        ]);
    }
}
