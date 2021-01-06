<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{
    public function index() {
        $posts= Post::orderBy('created_at','desc')->limit(2)->get();
        return view('pages.index')->with('posts',$posts);
    }

    public function about() {
        return view('pages.about') ;
    }
    public function contact() {
        return view('pages.contact') ;
    }



}

