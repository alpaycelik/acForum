<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void

    public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response

    public function index()
    {
        return view('home');
    } */

    public function get_index() {
        $categories = Category::where('parent_id', '=', 0)->orderBy('order','ASC')->get();
        return view('frontend.index', ['categories' => $categories]);
    }
}
