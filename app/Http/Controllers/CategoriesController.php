<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests;
use App\Http\Requests\CategoryRequest;

class CategoriesController extends Controller
{
    public function index(Category $type){
        $categories = Category::all(); // im using an eloquant method. must include the model namespace in this file to use it.
        if($type = "physical"){
            return view('blogs.physicalBlog', compact("categories"));
        } else if($type = "mental"){
            return view('blogs.mentalBlog', compact("categories"));
        } else if($type = "spiritual"){
            return view('blogs.mentalBlog', compact("categories"));
        } else if($type = "lifeTips"){
            return view('blogs.lifeTips', compact("categories"));
        }
    }

    public function create(){
        return view('blogs.create');
    }

    public function store(CategoryRequest $request){
        $formData = $request->all();

        Category::create($formData);
        if($formData->name = "physical"){
            return redirect('blog/physical');
        }
        else if($formData->name = "mental"){
            return redirect('blog/mental');
        }
        else if($formData->name = "spiritual"){
            return redirect('blog/spiritual');
        }
        else if($formData->name = "lifeTips"){
            return redirect('blog/lifeTips');
        }

    }
}
