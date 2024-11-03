<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $contents = Content::all();
        $categories = Category::all();
        $contents = Content::with('writer')->get();
        $contents = Content::with('category')->get();
        return view('home', compact('contents', 'categories'));
    }
}
