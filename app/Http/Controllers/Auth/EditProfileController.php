<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class EditProfileController extends Controller
{
    public function editProfile(){
        return view("auth.editProfile");
    }
    public function postEditProfile (Request $request){
        $user = Auth::user();

        $request->validate([
            'name' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required',
            'job_title' => 'required'
        ]);

        $input = $request->only('name','phone','address','job_title');

        $user->update($input);
    
        session()->flash('msg','Profile Updated successfully');
        return redirect(route('editProfile'));
    }
}