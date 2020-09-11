<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    protected $table;
    protected $fillable = ['submenu_name', 'submenu_slug','menu_id'];


    public function menu()
    {
        return $this->belongsTo('App\Menu');
    }
}
