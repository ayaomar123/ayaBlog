<?php

namespace App\Http\Controllers;
use App\Events\ArticleViewer;
use App\Models\Comment;
use Helpers;

class EconmoyController extends Controller
{
    //صفحة الصنف والمقالات التابعة له
    public function economy($id)
    {
        //روابط السوشيال ميديا
        $settings = Helpers::getSetting();

        //عناوين المقالات في السلايدر
        $sliderCategory =  Helpers::getSliderCategory();

        //مقالات شائعة
        $articles =  Helpers::getArticles();

        //الصنف والمقالت التابعة له
        $categoryArticles = Helpers::getCategoryArticles($id);

        //الصفحات الثابتة
        $mypages = Helpers::getmypages();

        return view('pages.economy', compact(
            'settings',
            'sliderCategory',
            'articles',
            'categoryArticles',
            'mypages'
        ));
    }


    //صفحة المقالات
    public function details($id)
    {
        //روابط السوشال
        $settings = Helpers::getSetting();

        //صفحة الثوابت
        $mypages = Helpers::getmypages();

        //عناوين المقالات في السلايدر
        $sliderCategory =  Helpers::getSliderCategory();

        //المقالة الحالية اللي ضغطت عليها
        $articles = Helpers::getCurrentArticle($id);

        //مواضيع عشوائية
        $related =  Helpers::getRelatedArticle();

        //مشاهدات
        $views = Helpers::getViews($id);
        event(new ArticleViewer($views));

        //التقييم
        $ratings = Helpers::getRatings($id);

        $comments = Helpers::getComments($id);
        //dd($comments);

        return view('pages.details', compact(
            'settings',
            'sliderCategory',
            'articles',
            'related',
            'views',
            'mypages',
            'ratings',
            'comments'
        ));
    }

}
