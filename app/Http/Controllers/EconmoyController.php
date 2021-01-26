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
        //روابط السوشيال ميديا
        $settings = Setting::all();

        //عناوين المقالات في السلايدر
        $sliderCategory =  Category::where('status', 1)->take(11)->get();

        //مقالات شائعة
        $articles =  Article::take(2)->get();

        //الصنف والمقالت التابعة له
        $categoryArticles = Category::query()->where('id', $id)->with('articles', function ($article) {
            $article->orderBy('id', 'desc')->get();
        })->get();

        //الصفحات الثابتة
        $mypages = StaticPages::all();

        //المقالة المضغوط عليها
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
        //روابط السوشال
        $settings = Setting::all();

        //صفحة الثوابت
        $mypages = StaticPages::all();

        //عناوين المقالات في السلايدر
        $sliderCategory =  Category::where('status', 1)->take(11)->get();

        //المقالة الحالية اللي ضغطت عليها
        $articles =  Article::where('id', $id)->with('editors')->get();

        //مواضيع عشوائية
        $related =  Article::inRandomOrder()->take(3)->get();

        //مشاهدات
        $views = Article::where('id', $id)->first();
        event(new ArticleViewer($views));

        $ratings = Rating::where('article_id',$id)->avg('rating');

        return view('pages.details', compact(
            'settings',
            'sliderCategory',
            'articles',
            'related',
            'views',
            'mypages',
            'ratings'
        ));
    }


    //تقييم المقالة
    public function postRating($article, Request $request)
    {
        //$requestData = $request->all();
        $requestData['user_id'] = Auth::id();
        $requestData['article_id'] = $article;
        $requestData['rating'] = $request->star;
        Rating::create($requestData);
        return redirect()->back();
    }
}
