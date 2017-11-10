<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepliesController extends Controller
{
    //
    public function store(Request $request)
    {
        $reply=new \App\Reply($request->all());
        if(!$request->has('comment_id')){
            $reply->issecond=false;
            $reply->article->getReplies()->save($reply);
        }else{
            $comment=\App\Reply::all()->where('id',$request->comment_id)->first();
            $reply->issecond=true;
            $comment->replies()->save($reply);
        }
        return back();
    }
}
