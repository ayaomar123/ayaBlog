<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Setting;
use App\Models\Article;

class EditPagesController extends Controller
{

    public function page($pages)
    {
        //top header menu
        $staticPages = Category::where('status', 1)->paginate(7);

        $activeSlider = Slider::orderBy('created_at', 'asc')->paginate(1);

        $sliders = Slider::orderBy('created_at', 'desc')->paginate(2);

        $settings = Setting::all();

        $importantArticles = Article::latest()->paginate(2);

        $internationalArticles =  Article::orderBy('created_at', 'desc')->paginate(3);

        $sliderArticles =  Article::where('status', 1)->paginate(11);

        $randomArticles = Article::all()->random(6);

        if ($pages == 'index')
            return view(
                'pages.index',
                compact(
                    'staticPages',
                    'activeSlider',
                    'settings',
                    'importantArticles',
                    'internationalArticles',
                    'sliderArticles',
                    'sliders',
                    'randomArticles',
                )
            );

        if ($pages == 'privacy')
            return view(
                'pages.privacy',
                compact(
                    'staticPages',
                    'activeSlider',
                    'settings',
                    'importantArticles',
                    'internationalArticles',
                    'sliderArticles',
                    'sliders',
                    'randomArticles',
                )
            );

        if ($pages == 'laws')
            return view(
                'pages.laws',
                compact(
                    'staticPages',
                    'activeSlider',
                    'settings',
                    'importantArticles',
                    'internationalArticles',
                    'sliderArticles',
                    'sliders',
                    'randomArticles',
                )
            );

        if ($pages == 'editor')
            return view(
                'pages.editor',
                compact(
                    'staticPages',
                    'activeSlider',
                    'settings',
                    'importantArticles',
                    'internationalArticles',
                    'sliderArticles',
                    'sliders',
                    'randomArticles',
                )
            );

        if ($pages == 'call')
            return view(
                'pages.call',
                compact(
                    'staticPages',
                    'activeSlider',
                    'settings',
                    'importantArticles',
                    'internationalArticles',
                    'sliderArticles',
                    'sliders',
                    'randomArticles',
                )
            );

        if ($pages == 'who')
            return view(
                'pages.who',
                compact(
                    'staticPages',
                    'activeSlider',
                    'settings',
                    'importantArticles',
                    'internationalArticles',
                    'sliderArticles',
                    'sliders',
                    'randomArticles',
                )
            );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('EditPages.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
