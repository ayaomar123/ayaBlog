<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use Helpers;

class EditProfileController extends Controller
{

    public function editProfile()
    {
        $mypages = Helpers::getmypages();
        $settings = Helpers::getSetting();
        return view("auth.editProfile", compact('mypages', 'settings'));
    }
    public function postEditProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            //'image' => 'required',
        ]);

        $input = $request->only('name', 'email', 'image');
        //dd($input);

        if ($request->image) {
            $fileName = $request->image->store("public/images");
            $imageName = $request->image->hashName();
            $input['image'] = $imageName;
        }
        $user->update($input);

        session()->flash('msg', 'Profile Updated successfully');
        return redirect(route('admin.home'));
    }
}
