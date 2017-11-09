<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable=[
        'title',
        'body',
        'published_at'
    ];

    public function author()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
