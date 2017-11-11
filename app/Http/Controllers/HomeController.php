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
        $this->middleware('auth',['except'=>['about','contact','communicate']]);
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

    //about mail
    public function communicate(Request $request){
        $username=$request->name;
        $useremail=$request->email;
        $usercontent=$request->contact;
//        DB::table('contacts')->insert(
//            ['content'=>$usercontent,'email'=>$useremail,'name'=>$username]
//        );
        Mail::raw($usercontent."  对方的邮箱：".$useremail." 联系用户名：".$username, function ($message) {
            $to = '511254671@qq.com';
            $message ->to($to)->subject("来自soldo的联系" );
        });
        //flash()->overlay('Send Success. I will reply you soon! Thank you to contact me','Successful','success');
        return redirect('/contact');
    }

}
