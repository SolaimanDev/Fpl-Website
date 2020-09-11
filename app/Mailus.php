<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mailus extends Model
{
    protected $table;
    protected $fillable = ['name', 'email','subject','message'];
}
