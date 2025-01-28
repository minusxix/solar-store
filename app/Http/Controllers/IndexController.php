<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return view('pages.home');
    }
    public function kit($slug) {
        return view('pages.kit');
    }
}
