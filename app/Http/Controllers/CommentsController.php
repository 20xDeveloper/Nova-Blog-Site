<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Http\Requests;
use App\Article;
use App\Http\Requests\CommentRequest;
use DateTime;

class CommentsController extends Controller
{
    public function create(Article $article){

        $date = new DateTime();
        $timestamp = $date->getTimestamp(); //Used when submitted a comment. This will display the time the comment was submitted.
        $id = $article->id; //this will get the post_id

        return view('blogs.createComment', compact('article', 'timestamp', 'id'));
    }
    public function store(CommentRequest $request){

        $formData = $request->all();
        Comment::create($formData);
        return redirect('blog/displayArticle/'. $request->post_id); //this goes back to the previous url/page you were in. Very helpful to trigger a certain route.
    }

    //this is what you call route model binding/type hinting
    public function show(Comment $comments){ //the parameter is the id. Make sure you type hint. So called the model name.
        //    $category = Category::find($category); //i find the id and return to the variable category dont need this if you type hint

        return view('blogs/displayArticle', compact("article"));
    }
}
