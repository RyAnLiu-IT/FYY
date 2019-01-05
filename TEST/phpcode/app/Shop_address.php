<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop_address extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'shop_addresses';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['shop_address', 'phone', 'business_hours', 'mtr_station', 'paid'];

    public function areas()
    {
        return $this->belongsTo('App\Political_area');
    }
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
    
}
