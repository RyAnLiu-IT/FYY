<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

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
    protected $fillable = ['broadway_code', 'bid', 'tid', 'name', 'model', 'dimensions_W_mm', 'dimensions_H_mm', 'dimensions_D_mm', 'net_weight', 'description', 'keywords', 'place_of_origin', 'sales_territory', 'warranty_m', 'special_feature', 'special_feature2', 'accessory'];

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }
    public function type()
    {
        return $this->belongsTo('App\Type');
    }
    public function color()
    {
        return $this->belongsToMany('App\Color');
    }
    
}
