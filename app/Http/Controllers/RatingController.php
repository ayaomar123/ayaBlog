<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;

class RatingController extends Controller
{
    public function rate()
    {

    }

    public function ratePost(Request $request)
    {
        request()->validate(
            'stars' => 'required']);
        dd($requestData);
        Rating::create($requestData);


        return redirect()->route('slider.index')
            ->with('success', 'Project created successfully.');
    }

}
