<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMedicamentRequest;
use App\Http\Requests\UpdateMedicamentRequest;
use App\Repositories\MedicamentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MedicamentController extends AppBaseController
{
    /** @var  MedicamentRepository */
    private $medicamentRepository;

    public function __construct(MedicamentRepository $medicamentRepo)
    {
        $this->medicamentRepository = $medicamentRepo;
    }

    /**
     * Display a listing of the Medicament.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->medicamentRepository->pushCriteria(new RequestCriteria($request));
        $medicaments = $this->medicamentRepository->all();

        return view('medicaments.index')
            ->with('medicaments', $medicaments);
    }

    /**
     * Show the form for creating a new Medicament.
     *
     * @return Response
     */
    public function create()
    {
        return view('medicaments.create');
    }

    /**
     * Store a newly created Medicament in storage.
     *
     * @param CreateMedicamentRequest $request
     *
     * @return Response
     */
    public function store(CreateMedicamentRequest $request)
    {
        $input = $request->all();

        $medicament = $this->medicamentRepository->create($input);

        Flash::success('Medicament saved successfully.');

        return redirect(route('medicaments.index'));
    }

    /**
     * Display the specified Medicament.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $medicament = $this->medicamentRepository->findWithoutFail($id);

        if (empty($medicament)) {
            Flash::error('Medicament not found');

            return redirect(route('medicaments.index'));
        }

        return view('medicaments.show')->with('medicament', $medicament);
    }

    /**
     * Show the form for editing the specified Medicament.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $medicament = $this->medicamentRepository->findWithoutFail($id);

        if (empty($medicament)) {
            Flash::error('Medicament not found');

            return redirect(route('medicaments.index'));
        }

        return view('medicaments.edit')->with('medicament', $medicament);
    }

    /**
     * Update the specified Medicament in storage.
     *
     * @param  int              $id
     * @param UpdateMedicamentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMedicamentRequest $request)
    {
        $medicament = $this->medicamentRepository->findWithoutFail($id);

        if (empty($medicament)) {
            Flash::error('Medicament not found');

            return redirect(route('medicaments.index'));
        }

        $medicament = $this->medicamentRepository->update($request->all(), $id);

        Flash::success('Medicament updated successfully.');

        return redirect(route('medicaments.index'));
    }

    /**
     * Remove the specified Medicament from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $medicament = $this->medicamentRepository->findWithoutFail($id);

        if (empty($medicament)) {
            Flash::error('Medicament not found');

            return redirect(route('medicaments.index'));
        }

        $this->medicamentRepository->delete($id);

        Flash::success('Medicament deleted successfully.');

        return redirect(route('medicaments.index'));
    }
}
