<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop_image extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'shop_images';

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
    protected $fillable = ['sid', 'image'];

    public function shops()
    {
        return $this->belongsTo('App\Shop_address');
    }
    
}
