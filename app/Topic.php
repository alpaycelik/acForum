<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $table = 'topics';
    protected $fillable = ['category_id', 'title', 'slug', 'post', 'user_id', 'last_post_user', 'replies'];

    public function category(){
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function last_user(){
        return $this->belongsTo('App\User', 'last_post_user', 'id');
    }


}
