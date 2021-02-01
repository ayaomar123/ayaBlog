<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use toastr;


class CommentController extends Controller
{
    public function postComment($article, Request $request)
    {
        if (Auth()->user()) {
            $requestData['user_id'] = Auth::id();
            $requestData['article_id'] = $article;
            $requestData['comment'] = $request->comment;
            $requestData = Comment::create($requestData);
            return redirect()->back();
        } else {
            return view('Auth.login');
        }
    }

    
}
