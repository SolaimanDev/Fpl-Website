<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table;
    protected $fillable = ['slider_title', 'slider_image','slider_caption','serial_num','status'];
}
