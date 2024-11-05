<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function datascience(){
        $datascienceCategory = Category::where('name', 'Data Science')->first();
    
        $contents = Content::with(['category', 'writer'])->where('category_id', $datascienceCategory->id)->paginate(3);
        $categories = Category::all();
        return view('datascience', compact('contents', 'categories'));
    }

    public function networksecurity(){
        $networksecuritycategory = Category::where('name', 'Network Security')->first();
        $categories = Category::all();
        $contents = Content::with(['category', 'writer'])->where('category_id', $networksecuritycategory->id)->paginate(3);
        return view('networksecurity', compact('contents', 'categories'));
    }
}
