<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Setting;
use App\Events\ArticleViewer;

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

        $article =  Article::where('id', $id)->take(3)->get();
        //dd($article);

        return view('pages.economy', compact(
            //'settings',
            'sliderCategory',
            'articles',
            'categoryArticles',
            'article'
        ));
    }

    public function details($id)
    {
        $settings = Setting::all();

        //عناوين المقالات في السلايدر
        $sliderCategory =  Category::where('status', 1)->take(11)->get();

        //المقالة الحالية اللي ضغطت عليها
        $articles =  Article::where('id', $id)->get();

        $article =  Category::where('id', $id)->take(3)->get();


        $related =  Article::inRandomOrder()->take(3)->get();
        //dd($article);

        $views = Article::where('id', $id)->first();
        event(new ArticleViewer($views));

        return view('pages.details', compact(
            //'settings',
            'sliderCategory',
            'articles',
            'related',
            'article',
            'views'
        ));
    }
}
