<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class formulas
 * @package App\Models
 * @version December 13, 2017, 6:10 pm UTC
 *
 * @property integer user_id
 */
class formulas extends Model
{
    use SoftDeletes;

    public $table = 'formulas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required'
    ];

    
}
