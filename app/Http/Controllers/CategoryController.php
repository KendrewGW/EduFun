<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function datascience(){
        $contents = Content::all();
        $categories = Category::all();
        $contents = Content::with('category')->get();
        $contents = Content::with('writer')->get();
        return view('datascience', compact('contents', 'categories'));
    }

    public function networksecurity(){
        $contents = Content::all();
        $categories = Category::all();
        $contents = Content::with('category')->get();
        $contents = Content::with('writer')->get();
        return view('networksecurity', compact('contents', 'categories'));
    }
}
