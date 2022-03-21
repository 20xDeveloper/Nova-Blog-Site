<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests;
use App\Article;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ArticlesController extends Controller
{

    public function index($type){

        $articles = Article::latest()->get(); // im using an eloquant method. must include the model namespace in this file to use it.
        if($type == "physical"){
            return view('blogs.physicalBlog', compact("articles"));
        } else if($type == "mental"){
            return view('blogs.mentalBlog', compact("articles"));
        } else if($type == "spiritual"){
            return view('blogs.spiritualBlog', compact("articles"));
        } else if($type == "lifetips"){
            return view('blogs.lifeTips', compact("articles"));
        }

    }

    public function create(){
        return view('blogs.create');
    }

    public function store(ArticleRequest $request){
        //dd($request);
        $formData = $request->all();

        $sidePic = $request->file('sidePic');
        $openingPic = $request->file('openingPic');
        $closingPic = $request->file('closingPic');

        $formData['sidePic'] = $sidePic->getClientOriginalName();
        $formData['openingPic'] = $openingPic->getClientOriginalName();
        $formData['closingPic'] = $closingPic->getClientOriginalName();

        Article::create($formData);

        if($sidePic != null){
            Storage::disk('local')->put($sidePic->getClientOriginalName(), File::get($sidePic));
            //$productsidePic = $sidePic
        }

        if($openingPic != null){
            Storage::disk('local')->put($openingPic->getClientOriginalName(), File::get($openingPic));
            //$productsidePic = $sidePic
        }

        if($closingPic != null){
            Storage::disk('local')->put($closingPic->getClientOriginalName(), File::get($closingPic));
            //$productsidePic = $sidePic
        }

        if($request->input('catId') == 1){
            return redirect('blog/physical');
        }
        else if($request->input('catId') == 2){
            return redirect('blog/mental');
        }
        else if($request->input('catId') == 3){
            return redirect('blog/spiritual');
        }
        else if($request->input('catId') == 4){
            return redirect('blog/lifeTips');
        }
    }


        //this is what you call route model binding/type hinting
        public function show(Article $article){ //the parameter is the id. Make sure you type hint. So called the model name.
            //    $category = Category::find($category); //i find the id and return to the variable category dont need this if you type hint

            return view('blogs/displayArticle', compact("article"));
        }

        public function back($articleType){
            if($articleType == "physical"){
                return redirect("blog/physical");
            }else if($articleType == "mental"){
                return redirect("blog/mental");
            }else if($articleType == "spiritual"){
                return redirect("blog/spiritual");
            }else if($articleType == "lifetips"){
                return redirect("blog/lifetips");
            }else if($articleType == "contact"){
                return redirect("contact");
            }


        }

    public function __construct(){
        //can you explain this to me also what did php artisan make:auth do. Where is the file?
        $this->middleware('auth', ['only' => ['create']]);
    }


}
