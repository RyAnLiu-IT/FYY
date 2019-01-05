<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'types';

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
    protected $fillable = ['name'];

    public function product()
    {
        return $this->hasMany('App\Product');
    }
    public function printer()
    {
        return $this->hasManyThrough('App\Product', 'App\Printer_info');
    }
    public function laptop()
    {
        return $this->hasManyThrough('App\Product', 'App\Laptop_info');
    }

}
