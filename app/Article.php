<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    //
    protected $fillable=[
        'title',
        'body',
        'published_at'
    ];
    protected $dates=['published_at'];
    // get published article
    public function scopePublished($query)
    {
        $query->where('Published_at','<=',Carbon::now());
    }
    //get author
    public function author()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
    // set type of published_at
    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at']=Carbon::createFromFormat('Y-m-d',$date);
    }
    public function getPublishedAtAttribute($date)
    {
        return Carbon::parse($date);
    }
    // get an article's extract
    public function extract()
    {
        $strip=str_replace('&nbsp;','',strip_tags($this->body));
        return strlen($strip)>150?mb_substr($strip,0,150,'utf-8').'...':$strip;
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }
    public function getTagListAttribute()
    {
        return $this->tags->pluck('id')->toArray();
    }
    public function getReplies()
    {
        return $this->hasMany('App\Reply');
    }
}
