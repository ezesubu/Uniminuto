<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEpsRequest;
use App\Http\Requests\UpdateEpsRequest;
use App\Repositories\EpsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EpsController extends AppBaseController
{
    /** @var  EpsRepository */
    private $epsRepository;

    public function __construct(EpsRepository $epsRepo)
    {
        $this->epsRepository = $epsRepo;
    }

    /**
     * Display a listing of the Eps.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->epsRepository->pushCriteria(new RequestCriteria($request));
        $eps = $this->epsRepository->all();

        return view('eps.index')
            ->with('eps', $eps);
    }

    /**
     * Show the form for creating a new Eps.
     *
     * @return Response
     */
    public function create()
    {
        return view('eps.create');
    }

    /**
     * Store a newly created Eps in storage.
     *
     * @param CreateEpsRequest $request
     *
     * @return Response
     */
    public function store(CreateEpsRequest $request)
    {
        $input = $request->all();

        $eps = $this->epsRepository->create($input);

        Flash::success('Eps saved successfully.');

        return redirect(route('eps.index'));
    }

    /**
     * Display the specified Eps.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $eps = $this->epsRepository->findWithoutFail($id);

        if (empty($eps)) {
            Flash::error('Eps not found');

            return redirect(route('eps.index'));
        }

        return view('eps.show')->with('eps', $eps);
    }

    /**
     * Show the form for editing the specified Eps.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $eps = $this->epsRepository->findWithoutFail($id);

        if (empty($eps)) {
            Flash::error('Eps not found');

            return redirect(route('eps.index'));
        }

        return view('eps.edit')->with('eps', $eps);
    }

    /**
     * Update the specified Eps in storage.
     *
     * @param  int              $id
     * @param UpdateEpsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEpsRequest $request)
    {
        $eps = $this->epsRepository->findWithoutFail($id);

        if (empty($eps)) {
            Flash::error('Eps not found');

            return redirect(route('eps.index'));
        }

        $eps = $this->epsRepository->update($request->all(), $id);

        Flash::success('Eps updated successfully.');

        return redirect(route('eps.index'));
    }

    /**
     * Remove the specified Eps from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $eps = $this->epsRepository->findWithoutFail($id);

        if (empty($eps)) {
            Flash::error('Eps not found');

            return redirect(route('eps.index'));
        }

        $this->epsRepository->delete($id);

        Flash::success('Eps deleted successfully.');

        return redirect(route('eps.index'));
    }
}
