<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $table = 'forums';
    protected $fillable = ['category_id', 'title', 'slug', 'description', 'last_post_title', 'last_post_user', 'topics', 'replies'];
}
