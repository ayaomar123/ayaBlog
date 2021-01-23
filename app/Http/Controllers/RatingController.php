<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
use App\Models\Article;
use App\Models\Category;
use App\Models\Setting;
use App\Events\ArticleViewer;

class RatingController extends Controller
{
    public function index($id)
    {
        $settings = Setting::all();

        //عناوين المقالات في السلايدر
        $sliderCategory =  Category::where('status', 1)->take(11)->get();

        $article = Article::where('id',$id);

        return view('Rating.index', compact(
            //'settings',
            'sliderCategory',
            'article'
        ));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'stars' => 'required' ,
            'article_id' => 'required'
        ]);

        $review = new Rating;
        $review->stars = $request->input('stars');
        $review->article_id = $request['required'];
        $review->save();
        return redirect('/posts')->with('success', 'post created');
    }

}
