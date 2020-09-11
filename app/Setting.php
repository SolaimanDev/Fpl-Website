<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table;
    protected $fillable = ['app_name', 'app_title', 'app_email','phone','mobile','facebook_url','logo','address','map'];
	
}
