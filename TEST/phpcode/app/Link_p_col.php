<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link_p_col extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'link_p_cols';

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
    protected $fillable = ['pid', 'col_id'];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
    public function color()
    {
        return $this->belongsTo('App\Color');
    }
    
}
