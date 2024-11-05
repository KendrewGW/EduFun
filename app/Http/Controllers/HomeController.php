<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $contents = Content::with(['writer', 'category'])->get();
        $categories = Category::all();
        return view('home', compact('contents', 'categories'));
    }
}
