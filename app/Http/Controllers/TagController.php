<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    //
    public function show(\App\Tag $tag)
    {
        $articles=$tag->articles()->latest()->published()->paginate(6);
        $isLogin=false;
        return view('articles.index',compact('articles','isLogin'));
    }
}
