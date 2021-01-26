<?php

namespace App\Http\Controllers;
use Helpers;


class PageController extends Controller
{
    //لاظهار الstatic page اللي ضغطت عليها

    public function pages($id)
    {
        //السوشيال ميديا
        $settings = Helpers::getSetting();

        //عناوين المقالات في السلايدر
        $sliderCatgory =  Helpers::getSliderCategory();

        //static pages in header
        $mypages = Helpers::getmypages();

        //Current static page
        $page = Helpers::getmyCurrentpages($id);

        return view('pages.privacy', compact(
            'settings',
            'sliderCatgory',
            'mypages',
            'page'
        ));
    }
}
