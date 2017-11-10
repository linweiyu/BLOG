<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    //
    protected $fillable=[
        'content',
        'email',
        'name',
        'article_id'
    ];
    public function replies()
    {
        return $this->belongsToMany('App\Reply','reply_reply','comment_id','reply_id');
    }

    public function article()
    {
        return $this->belongsTo('App\Article');
    }

    public function issecond()
    {
        return $this->issecond;
    }

    function get_gravatar( $s = 80, $d = 'monsterid', $r = 'g', $img = false, $atts = array() ) {
        $url = 'https://www.gravatar.com/avatar/';
        $url .= md5( strtolower( trim( $this->email ) ) );
        $url .= "?s=$s&d=$d&r=$r";
        if ( $img ) {
            $url = '<img src="' . $url . '"';
            foreach ( $atts as $key => $val )
                $url .= ' ' . $key . '="' . $val . '"';
            $url .= ' />';
        }
        return $url;
    }

}
