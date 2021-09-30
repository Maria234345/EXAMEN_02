<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Detalle
 * @package App\Models
 * @version September 30, 2021, 2:39 am UTC
 *
 * @property integer $idcita
 */
class Detalle extends Model
{
   // use SoftDeletes;

    public $table = 'detalle';
    protected $primaryKey= 'iddetalle';
    public $timestamps =false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idcita'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'iddetalle' => 'integer',
        'idcita' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idcita' => 'nullable|integer'
    ];

    
}
