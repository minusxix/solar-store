<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class IndexController extends Controller
{
    public function index() {
        $category = Category::orderBy('id', 'DESC')->get();
        return view('pages.home', compact('category'));
    }
    public function kit($slug) {
        $category = Category::orderBy('id', 'DESC')->get();
        $product = Category::where('slug', $slug)->first();
        return view('pages.kit', compact('category', 'product'));
    }
}
