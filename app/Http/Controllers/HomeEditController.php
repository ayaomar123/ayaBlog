<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Helpers;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Setting;
use App\Models\Article;
use App\Models\StaticPages;

class HomeEditController extends Controller
{

    public function index()
    {
        //روابط السوشيال ميديا
        $settings = Helpers::getSetting();

        //صور السلايدرات
        $sliders = Helpers::getSlider();

        //الصفحات الثابتة
        $mypages = Helpers::getmypages();

        //عناوين المقالات في السلايدر
        $sliderCategory =  Helpers::getSliderCategory();

        //أهم المقالات
        $importantArticles = Helpers::getArticles();

        //مقالات شائعة
        $internationalArticles =  Helpers::getRelatedArticle();

        //مقالات عشوائية
        $impotrantArticles = Helpers::getArticles();

        //6 مقالات عشوائية
        $randomArticles = Helpers::getRandomArticle();

        return view('pages.index', compact(
            'settings',
            'importantArticles',
            'internationalArticles',
            'sliderCategory',
            'sliders',
            'randomArticles',
            'impotrantArticles',
            'mypages'
        ));
    }


    //لإظهار الstatic pages
    public function page($id)
    {
        //حسابات السوشيال ميديا
        $settings =  Helpers::getSetting();

        //السلايدرات
        $sliders = Helpers::getSlider();

        //عناوين المقالات في السلايدر
        $sliderCategory =  Helpers::getSliderCategory();

        //أهم المقالات
        $importantArticles = Helpers::getArticles();

        //مقالات شائعة
        $internationalArticles =  Helpers::getRelatedArticle();

        //مقالات عشوائية
        $impotrantArticles = Helpers::getRelatedArticle();

        //6 مقالات عشوائية
        $randomArticles =  Helpers::getRandomArticle();

        //الصنف والمقالات التابعة له
        $categoryArticle = Category::query()->with('articles', function ($query) {
            $query->orderBy('id', 'desc')->take(1)->get();
        })->get();

        //المقالة اللي اخترتها
        $myArticles =  Article::where('id', $id)->get();


        return view(
            'pages.index',
            compact(
                //'settings',
                'importantArticles',
                'internationalArticles',
                'sliderCategory',
                'sliders',
                'randomArticles',
                'impotrantArticles',
                'myArticles',
            )
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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
        //return view('EditPages.edit');
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
