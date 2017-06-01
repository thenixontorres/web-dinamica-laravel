<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateconstantRequest;
use App\Http\Requests\UpdateconstantRequest;
use App\Repositories\constantRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class constantController extends AppBaseController
{
    /** @var  constantRepository */
    private $constantRepository;

    public function __construct(constantRepository $constantRepo)
    {
        $this->constantRepository = $constantRepo;
    }

    /**
     * Display a listing of the constant.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->constantRepository->pushCriteria(new RequestCriteria($request));
        $constants = $this->constantRepository->all();

        return view('constants.index')
            ->with('constants', $constants);
    }

    /**
     * Show the form for creating a new constant.
     *
     * @return Response
     */
    public function create()
    {
        return view('constants.create');
    }

    /**
     * Store a newly created constant in storage.
     *
     * @param CreateconstantRequest $request
     *
     * @return Response
     */
    public function store(CreateconstantRequest $request)
    {
        $input = $request->all();

        $constant = $this->constantRepository->create($input);

        Flash::success('Constant saved successfully.');

        return redirect(route('constants.index'));
    }

    /**
     * Display the specified constant.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $constant = $this->constantRepository->findWithoutFail($id);

        if (empty($constant)) {
            Flash::error('Constant not found');

            return redirect(route('constants.index'));
        }

        return view('constants.show')->with('constant', $constant);
    }

    /**
     * Show the form for editing the specified constant.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $constant = $this->constantRepository->findWithoutFail($id);

        if (empty($constant)) {
            Flash::error('Constant not found');

            return redirect(route('constants.index'));
        }

        return view('constants.edit')->with('constant', $constant);
    }

    /**
     * Update the specified constant in storage.
     *
     * @param  int              $id
     * @param UpdateconstantRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateconstantRequest $request)
    {
        $constant = $this->constantRepository->findWithoutFail($id);

        if (empty($constant)) {
            Flash::error('Variable no encontrada.');

            return redirect(route('constants.index'));
        }

        $constant = $this->constantRepository->update($request->all(), $id);

        Flash::success('Variable actualizada con exito.');

        return redirect(route('constants.index'));
    }

    /**
     * Remove the specified constant from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $constant = $this->constantRepository->findWithoutFail($id);

        if (empty($constant)) {
            Flash::error('Constant not found');

            return redirect(route('constants.index'));
        }

        $this->constantRepository->delete($id);

        Flash::success('Constant deleted successfully.');

        return redirect(route('constants.index'));
    }
}
