<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Topic;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['parent_id', 'order', 'title', 'slug', 'description', 'last_topic_id', 'last_user_id', 'topics', 'replies'];

    public function parent(){
        return $this->belongsTo('App\Category', 'parent_id')->orderBy('order');
    }

    public function children(){
        return $this->hasMany('App\Category', 'parent_id')->orderBy('order');
    }

    public function last_topic(){
        return $this->belongsTo('App\Topic', 'last_topic_id', 'id');
    }

    public function last_user(){
        return $this->belongsTo('App\User', 'last_user_id', 'id');
    }
}
