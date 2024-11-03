<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use Illuminate\Http\Request;

class PopularController extends Controller
{
    //
    public function index(){
        $contents = Content::all();
        $categories = Category::all();
        $contents = Content::with('writer')->get();
        $contents = Content::with('category')->get();
        return view('popular', compact('contents', 'categories'));
    }
}
