<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laptop_info extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'laptop_infos';

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
    protected $fillable = ['pid', 'tid', 'processor', 'operating_system', 'memory', 'storage', 'display_resolution_width', 'display_resolution_length'];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
    
}
