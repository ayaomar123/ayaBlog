<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StaticPages;
use App\Models\Category;
use App\Models\Setting;

class PageController extends Controller
{
    public function pages($id)
    {
        $settings = Setting::all();

        //عناوين المقالات في السلايدر
        $sliderCatgory =  Category::where('status', 1)->take(11)->get();
        $mypages = StaticPages::all();

        $page = StaticPages::where('id',$id)->get();
        //dd($page);

        return view('pages.privacy', compact(
            'settings',
            'sliderCatgory',
            'mypages',
            'page'
        ));
    }
}
