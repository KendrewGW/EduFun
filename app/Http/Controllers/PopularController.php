<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use Illuminate\Http\Request;

class PopularController extends Controller
{
    //
    public function index(){
        $contents = Content::with(['writer', 'category'])->inRandomOrder()->paginate(3);
        $categories = Category::all();
        return view('popular', compact('contents', 'categories'));
    }
}
