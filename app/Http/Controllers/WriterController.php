<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Writer;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function index(){
        $writers = Writer::all();
        $categories = Category::all();
        $writers = Writer::with('category')->get();
        return view('writers', compact('writers', 'categories'));
    }
}
