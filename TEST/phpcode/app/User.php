<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'first_name', 'surname', 'title',  'email', 'phone', 'broadway_membership_number', 'password', 'language'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function address()
    {
        return $this->hasMany('App\Address');
    }
    public function cart()
    {
        return $this->hasMany('App\Cart');
    }
    public function order()
    {
        return $this->hasMany('App\Order');
    }
    public function collection()
    {
        return $this->hasMany('App\Collection');
    }
}
