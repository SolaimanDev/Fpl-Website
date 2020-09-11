<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username','password', 'picture', 'phone', 'address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
// $2y$10$gCeqkrVLMdHMY0qiHwNkXeDUHZWWp/7XBbaCyCWOqD24hxRjDPw/.
// Token : xhF8dFdcF0jKqbjurbQi9rvC2rmyn9bSJcUmtepviexpS7KxDpH4BruhoTPD