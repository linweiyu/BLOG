<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.overview');
    }
    public function  write()
    {
        $tags=\App\Tag::all()->pluck('name','id');
        return view('admin.write',compact('tags','tags'));
    }
    public function manage()
    {
        $articles = \Auth::user()->articles()->get();
        return view('admin.manage', compact('articles'));
    }

    public function showarticle($id)
    {
        $article = \App\Article::find($id);
        return view('admin.show',compact('article','article'));
    }

    public function about()
    {
        return view('front.about');
    }

    public function contact()
    {
        return view('front.contact');
    }
}
