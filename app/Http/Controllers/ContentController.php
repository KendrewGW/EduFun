<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    //
    public function show($id){
        $content = Content::with(['category', 'writer'])->findOrFail($id);
        $categories = Category::all();
        return view('detail', compact('content', 'categories'));
    }

}
