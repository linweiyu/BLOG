<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles=\App\Article::latest()->published()->paginate(8);

        return view('front.index',compact('articles','articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tags=\App\Tag::all()->pluck('name','id');
        return view('admin.write',compact('tags','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $article = \Auth::user()->articles()->create($request->all());
        $article->tags()->attach($request->input('tag_list'));
        return view('admin.overview');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $article = \App\Article::find($id);
        return view('front.show',compact('article','article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tags=\App\Tag::all()->pluck('name','id');
        $article = \App\Article::find($id);
        return view('admin.edit',['article'=>$article,'tags'=>$tags]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $article=\App\Article::findorfail($id);
        $article->update($request->all());
        $article->tags()->sync($request->input('tag_list'));
        return redirect('articles/'.$article->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $article = \App\Article::find($id);
        if(\Auth::user()->id != $article->author->id)
            return redirect()->guest('login');
        $article->delete();
        return redirect('admin/manage');
    }
}
