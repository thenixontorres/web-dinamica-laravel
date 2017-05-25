<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatevarRequest;
use App\Http\Requests\UpdatevarRequest;
use App\Repositories\varRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class varController extends AppBaseController
{
    /** @var  varRepository */
    private $varRepository;

    public function __construct(varRepository $varRepo)
    {
        $this->varRepository = $varRepo;
    }

    /**
     * Display a listing of the var.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->varRepository->pushCriteria(new RequestCriteria($request));
        $vars = $this->varRepository->all();

        return view('vars.index')
            ->with('vars', $vars);
    }

    /**
     * Show the form for creating a new var.
     *
     * @return Response
     */
    public function create()
    {
        return view('vars.create');
    }

    /**
     * Store a newly created var in storage.
     *
     * @param CreatevarRequest $request
     *
     * @return Response
     */
    public function store(CreatevarRequest $request)
    {
        $input = $request->all();

        $var = $this->varRepository->create($input);

        Flash::success('Var saved successfully.');

        return redirect(route('vars.index'));
    }

    /**
     * Display the specified var.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $var = $this->varRepository->findWithoutFail($id);

        if (empty($var)) {
            Flash::error('Var not found');

            return redirect(route('vars.index'));
        }

        return view('vars.show')->with('var', $var);
    }

    /**
     * Show the form for editing the specified var.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $var = $this->varRepository->findWithoutFail($id);

        if (empty($var)) {
            Flash::error('Var not found');

            return redirect(route('vars.index'));
        }

        return view('vars.edit')->with('var', $var);
    }

    /**
     * Update the specified var in storage.
     *
     * @param  int              $id
     * @param UpdatevarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatevarRequest $request)
    {
        $var = $this->varRepository->findWithoutFail($id);

        if (empty($var)) {
            Flash::error('Var not found');

            return redirect(route('vars.index'));
        }

        $var = $this->varRepository->update($request->all(), $id);

        Flash::success('Var updated successfully.');

        return redirect(route('vars.index'));
    }

    /**
     * Remove the specified var from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $var = $this->varRepository->findWithoutFail($id);

        if (empty($var)) {
            Flash::error('Var not found');

            return redirect(route('vars.index'));
        }

        $this->varRepository->delete($id);

        Flash::success('Var deleted successfully.');

        return redirect(route('vars.index'));
    }
}
