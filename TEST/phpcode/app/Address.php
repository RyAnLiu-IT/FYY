<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'addresses';

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
    protected $fillable = ['uid', 'first_name', 'surname', 'phone', 'title', 'street_address_1', 'street_address_2', 'city', 'state', 'zip_code', 'country'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
