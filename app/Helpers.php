<?php

use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Rating;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\StaticPages;

class Helpers
{

    /**
     * return settings
     */
    public static function getSetting()
    {
        return Setting::all();
    }

    /**
     * return staic pages
     */
    public static function getSliderCategory()
    {
        return Category::active()->take(11)->get();
    }

    /**
     * return articles
     */
    public static function getArticles()
    {
        return Article::take(2)->get();
    }

    /**
     * return category with related article
     */
    public static function getCategoryArticles($id)
    {
        return Category::query()->where('id', $id)->with('articles', function ($article) {
            $article->orderBy('id', 'desc')->get();
        })->get();
    }

    /**
     * return Static Pages
     */
    public static function getmypages()
    {
        return StaticPages::all();
    }

    /**
     * return Current Static Pages
     */
    public static function getmyCurrentpages($id)
    {
        return StaticPages::where('id',$id)->get();
    }


    /**
     * return Current Article
     */
    public static function getCurrentArticle($id)
    {
        return Article::where('id', $id)->with('editors')->get();
    }

    /**
     * return Related Article
     */
    public static function getRelatedArticle()
    {
        return Article::inRandomOrder()->take(3)->get();
    }

    /**
     * return views
     */
    public static function getViews($id)
    {
        return Article::where('id', $id)->first();
    }

     /**
     * return ratings
     */
    public static function getRatings($id)
    {
        return Rating::where('article_id',$id)->avg('rating');
    }

    public static function getComments($id){
        return Comment::where('article_id',$id)->paginate(5);
    }

     /**
     * return ratings
     */
    public static function getSlider()
    {
        return Slider::get();
    }

     /**
     * return ratings
     */
    public static function getRandomArticle()
    {
        return Article::inRandomOrder()->take(6)->get();
    }
}
