<?php

namespace App\Repositories;

use App\Models\Medicament;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MedicamentRepository
 * @package App\Repositories
 * @version December 13, 2017, 4:57 pm UTC
 *
 * @method Medicament findWithoutFail($id, $columns = ['*'])
 * @method Medicament find($id, $columns = ['*'])
 * @method Medicament first($columns = ['*'])
*/
class MedicamentRepository extends BaseRepository
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
        return Medicament::class;
    }
}
