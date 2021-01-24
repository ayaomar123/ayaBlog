<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Setting;
use App\Events\ArticleViewer;
use App\Models\StaticPages;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;


class EconmoyController extends Controller
{
    public function economy($id)
    {
        $settings = Setting::all();

        //عناوين المقالات في السلايدر
        $sliderCategory =  Category::where('status', 1)->take(11)->get();

        //مقالات شائعة
        $articles =  Article::take(2)->get();


        $categoryArticles = Category::query()->where('id', $id)->with('articles', function ($article) {
            $article->orderBy('id', 'desc')->get();
        })->get();

        $mypages = StaticPages::all();

        $article =  Article::where('id', $id)->take(3)->get();



        return view('pages.economy', compact(
            'settings',
            'sliderCategory',
            'articles',
            'categoryArticles',
            'article',
            'mypages'
        ));
    }

    public function details($id)
    {
        $settings = Setting::all();

        $mypages = StaticPages::all();

        //عناوين المقالات في السلايدر
        $sliderCategory =  Category::where('status', 1)->take(11)->get();

        //المقالة الحالية اللي ضغطت عليها
        $articles =  Article::where('id', $id)->get();

        $article =  Category::where('id', $id)->take(3)->get();


        $related =  Article::inRandomOrder()->take(3)->get();
        //dd($article);

        $views = Article::where('id', $id)->first();
        event(new ArticleViewer($views));

        $ratings = Rating::where('article_id',$id)->first()->avg('rating');
        //dd($ratings);
        return view('pages.details', compact(
            'settings',
            'sliderCategory',
            'articles',
            'related',
            'article',
            'views',
            'mypages',
            'ratings'
        ));
    }


    public function postRating($article, Request $request)
    {
        //$requestData = $request->all();
        $requestData['user_id'] = Auth::id();
        $requestData['article_id'] = $article;
        $requestData['rating'] = $request->star;
        Rating::create($requestData);
        return redirect()->back();
        //dd($requestData);
    }
}
