<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Slider;
use App\Http\Requests\SettingRequest;
use App\Models\StaticPages;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::get();
        $mypages = StaticPages::get();
        //dd($settings);
        return view('setting.index', compact('settings','mypages'));
    }

    public function edit($id)
    {
        $setting = Setting::find($id);
        return view('setting.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        Setting::where("id",$id)->update([
            'facebook' => $request['facebook'],
            'twitter' => $request['twitter'],
            'youtube' => $request['youtube'],
            'instagram' => $request['instagram'],
            'snapchat' => $request['snapchat'],
            'linkedin' => $request['linkedin'],
        ]);
        return redirect()->route('setting.index')
            ->with('success', 'setting updated successfully');
    }
}
