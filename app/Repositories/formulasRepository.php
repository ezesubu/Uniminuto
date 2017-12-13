<?php

namespace App\Repositories;

use App\Models\formulas;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class formulasRepository
 * @package App\Repositories
 * @version December 13, 2017, 6:10 pm UTC
 *
 * @method formulas findWithoutFail($id, $columns = ['*'])
 * @method formulas find($id, $columns = ['*'])
 * @method formulas first($columns = ['*'])
*/
class formulasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return formulas::class;
    }
}
