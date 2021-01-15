<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use DB ;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
        $categories = DB::table('categories')
            ->join('post', 'categories.id', '=', 'post.category_id')
            ->select(DB::raw('count(post.category_id) as A'))
          
            ->get();
           
       
        $posts = post::latest()->paginate(6);

        return view('pages.index', compact('categories', 'posts'));
    }

    public function about() {
        return view('pages.about') ;
    }
    public function contact() {
        return view('pages.contact') ;
    }



}

