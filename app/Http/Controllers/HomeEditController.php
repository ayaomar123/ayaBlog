<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $settings = Setting::all();

        //صور السلايدرات
        $sliders = Slider::all();

        //الصفحات الثابتة
        $mypages = StaticPages::all();

        //عناوين المقالات في السلايدر
        $sliderCategory =  Category::where('status', 1)->take(11)->get();

        //أهم المقالات
        $importantArticles = Article::latest()->take(2)->get();

        //مقالات شائعة
        $internationalArticles =  Article::take(3)->get();

        //مقالات عشوائية
        $impotrantArticles = Article::inRandomOrder()->take(3)->get();

        $$impotrantArticles = Article::inRandomOrder()->take(3)->get();
        //6 مقالات عشوائية
        $randomArticles = Article::inRandomOrder()->take(6)->get();

        //الصنف والمقالات التابعة له
        $categoryArticle = Category::query()->with('articles', function ($query) {
            $query->orderBy('id', 'desc')->take(1)->get();
        })->get();


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
        $settings = Setting::all();

        //السلايدرات
        $sliders = Slider::all();

        //عناوين المقالات في السلايدر
        $sliderCategory =  Category::where('status', 1)->take(11)->get();

        //أهم المقالات
        $importantArticles = Article::latest()->take(2)->get();

        //مقالات شائعة
        $internationalArticles =  Article::take(3)->get();

        //مقالات عشوائية
        $impotrantArticles = Article::inRandomOrder()->take(3)->get();

        $$impotrantArticles = Article::inRandomOrder()->take(3)->get();
        //6 مقالات عشوائية
        $randomArticles = Article::inRandomOrder()->take(6)->get();

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
