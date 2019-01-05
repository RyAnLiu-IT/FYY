<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main_region extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'main_regions';

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

    public function areas()
    {
        return $this->hasMany('App\Address');
    }
    public function shops()
    {
        return $this->hasManyThrough('App\Shop_address', 'App\Political_area');
    }
    
}
