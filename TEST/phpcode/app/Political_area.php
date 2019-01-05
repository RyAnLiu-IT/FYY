<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Political_area extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'political_areas';

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
    protected $fillable = ['name', 'mgid'];

    public function regions()
    {
        return $this->belongsTo('App\Main_region');
    }
    public function shops()
    {
        return $this->hasMany('App\Shop_address');
    }
    
}
