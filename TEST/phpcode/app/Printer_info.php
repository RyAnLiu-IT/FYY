<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Printer_info extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'printer_infos';

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
    protected $fillable = ['pid', 'tid', 'screen_display', 'auto_duplex_printing', 'print_resolution_length', 'print_resolution_width', 'max_number_of_copies', 'scanning_speed_sec', 'scan_resolution_dpi', 'main_feature'];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
    
}
