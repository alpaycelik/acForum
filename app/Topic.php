<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $table = 'topics';
    protected $fillable = ['forum_id', 'title', 'slug', 'post', 'user_id', 'last_post_user', 'replies'];
}
