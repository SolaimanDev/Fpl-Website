<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table;
    protected $fillable = ['menu_name', 'url'];

   

    public function submenu()
    {
        return $this->hasMany('App\Submenu');
    }


}
