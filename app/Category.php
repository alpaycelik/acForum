<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['parent_id', 'order', 'title', 'slug', 'description', 'last_post_title', 'last_post_user', 'topics', 'replies'];

    public function parent(){
        return $this->belongsTo('App\Category', 'parent_id')->orderBy('order');
    }

    public function children(){
        return $this->hasMany('App\Category', 'parent_id')->orderBy('order');
    }
}
