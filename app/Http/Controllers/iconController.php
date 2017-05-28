<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateiconRequest;
use App\Http\Requests\UpdateiconRequest;
use App\Repositories\iconRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class iconController extends AppBaseController
{
    /** @var  iconRepository */
    private $iconRepository;

    public function __construct(iconRepository $iconRepo)
    {
        $this->iconRepository = $iconRepo;
    }

    /**
     * Display a listing of the icon.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->iconRepository->pushCriteria(new RequestCriteria($request));
        $icons = $this->iconRepository->all();

        return view('icons.index')
            ->with('icons', $icons);
    }

    /**
     * Show the form for creating a new icon.
     *
     * @return Response
     */
    public function create()
    {
        return view('icons.create');
    }

    /**
     * Store a newly created icon in storage.
     *
     * @param CreateiconRequest $request
     *
     * @return Response
     */
    public function store(CreateiconRequest $request)
    {
        $input = $request->all();

        $icon = $this->iconRepository->create($input);

        Flash::success('Icon saved successfully.');

        return redirect(route('icons.index'));
    }

    /**
     * Display the specified icon.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $icon = $this->iconRepository->findWithoutFail($id);

        if (empty($icon)) {
            Flash::error('Icon not found');

            return redirect(route('icons.index'));
        }

        return view('icons.show')->with('icon', $icon);
    }

    /**
     * Show the form for editing the specified icon.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $icon = $this->iconRepository->findWithoutFail($id);

        if (empty($icon)) {
            Flash::error('Icon not found');

            return redirect(route('icons.index'));
        }

        return view('icons.edit')->with('icon', $icon);
    }

    /**
     * Update the specified icon in storage.
     *
     * @param  int              $id
     * @param UpdateiconRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateiconRequest $request)
    {
        $icon = $this->iconRepository->findWithoutFail($id);

        if (empty($icon)) {
            Flash::error('Icon not found');

            return redirect(route('icons.index'));
        }

        $icon = $this->iconRepository->update($request->all(), $id);

        Flash::success('Icon updated successfully.');

        return redirect(route('icons.index'));
    }

    /**
     * Remove the specified icon from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $icon = $this->iconRepository->findWithoutFail($id);

        if (empty($icon)) {
            Flash::error('Icon not found');

            return redirect(route('icons.index'));
        }

        $this->iconRepository->delete($id);

        Flash::success('Icon deleted successfully.');

        return redirect(route('icons.index'));
    }
}
