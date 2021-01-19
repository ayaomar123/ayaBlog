<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Setting;
use App\Models\Article;

class EditPagesController extends Controller
{

    public function page($pages){
        $categories = Category::paginate(7);
        $sliders = Slider::paginate(3);
        $settings = Setting::all();
        //أهم المقالات
        $articles = Article::paginate(2);
        //المقالات الشائعة
        $internationalArticles =  Article::orderBy('created_at', 'desc')
        ->take(3)
        ->get();

        $articles2 =  Article::where('status', 1)->get();
        //dd($articles);

        if($pages== 'index')
        return view('pages.index',
        compact('categories',
        'sliders',
        'settings',
        'articles',
        'internationalArticles',
        'articles2',
    ));

        if($pages== 'privacy')
        return view('pages.privacy');

        if($pages== 'laws')
        return view('pages.laws');

        if($pages== 'editor')
        return view('pages.editor');

        if($pages== 'call')
        return view('pages.call');

        if($pages== 'who')
        return view('pages.who');

        if($pages== 'profile')
        return view('pages.profile');
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
