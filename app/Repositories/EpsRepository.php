<?php

namespace App\Repositories;

use App\Models\Eps;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EpsRepository
 * @package App\Repositories
 * @version December 13, 2017, 4:58 pm UTC
 *
 * @method Eps findWithoutFail($id, $columns = ['*'])
 * @method Eps find($id, $columns = ['*'])
 * @method Eps first($columns = ['*'])
*/
class EpsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Eps::class;
    }
}
