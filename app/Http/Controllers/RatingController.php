<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
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
