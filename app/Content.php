<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
     protected $table;
    protected $fillable = ['title', 'description','content_slug','picture','video_link','submenu_id'];
}
