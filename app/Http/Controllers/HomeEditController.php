<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Setting;
use App\Models\Article;

class HomeEditController extends Controller
{

    public function page($pages)
    {
        $settings = Setting::all();

        //السلايدرات
        $sliders = Slider::take(3)->get();

        //عناوين المقالات في السلايدر
        $sliderCategory =  Category::where('status', 1)->take(11)->get();

        //أهم المقالات
        $importantArticles = Article::latest()->paginate(2);

        //مقالات شائعة
        $internationalArticles =  Article::take(3)->get();

        //مقالات عشوائية
        $impotrantArticles = Article::inRandomOrder()->take(3)->get();

        //6 مقالات عشوائية
        $randomArticles = Article::inRandomOrder()->take(6)->get();

        if ($pages == 'index')
            return view(
                'pages.index',
                compact(
                    'settings',
                    'importantArticles',
                    'internationalArticles',
                    'sliderCategory',
                    'sliders',
                    'randomArticles',
                    'impotrantArticles'
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
