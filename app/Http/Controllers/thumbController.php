<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatethumbRequest;
use App\Http\Requests\UpdatethumbRequest;
use App\Repositories\thumbRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class thumbController extends AppBaseController
{
    /** @var  thumbRepository */
    private $thumbRepository;

    public function __construct(thumbRepository $thumbRepo)
    {
        $this->thumbRepository = $thumbRepo;
    }

    /**
     * Display a listing of the thumb.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->thumbRepository->pushCriteria(new RequestCriteria($request));
        $thumbs = $this->thumbRepository->all();

        return view('thumbs.index')
            ->with('thumbs', $thumbs);
    }

    /**
     * Show the form for creating a new thumb.
     *
     * @return Response
     */
    public function create()
    {
        return view('thumbs.create');
    }

    /**
     * Store a newly created thumb in storage.
     *
     * @param CreatethumbRequest $request
     *
     * @return Response
     */
    public function store(CreatethumbRequest $request)
    {
        $input = $request->all();

        $thumb = $this->thumbRepository->create($input);

        Flash::success('Thumb saved successfully.');

        return redirect(route('thumbs.index'));
    }

    /**
     * Display the specified thumb.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $thumb = $this->thumbRepository->findWithoutFail($id);

        if (empty($thumb)) {
            Flash::error('Thumb not found');

            return redirect(route('thumbs.index'));
        }

        return view('thumbs.show')->with('thumb', $thumb);
    }

    /**
     * Show the form for editing the specified thumb.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $thumb = $this->thumbRepository->findWithoutFail($id);

        if (empty($thumb)) {
            Flash::error('Thumb not found');

            return redirect(route('thumbs.index'));
        }

        return view('thumbs.edit')->with('thumb', $thumb);
    }

    /**
     * Update the specified thumb in storage.
     *
     * @param  int              $id
     * @param UpdatethumbRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatethumbRequest $request)
    {
        $thumb = $this->thumbRepository->findWithoutFail($id);

        if (empty($thumb)) {
            Flash::error('Thumb not found');

            return redirect(route('thumbs.index'));
        }

        $thumb = $this->thumbRepository->update($request->all(), $id);

        Flash::success('Thumb updated successfully.');

        return redirect(route('thumbs.index'));
    }

    /**
     * Remove the specified thumb from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $thumb = $this->thumbRepository->findWithoutFail($id);

        if (empty($thumb)) {
            Flash::error('Thumb not found');

            return redirect(route('thumbs.index'));
        }

        $this->thumbRepository->delete($id);

        Flash::success('Thumb deleted successfully.');

        return redirect(route('thumbs.index'));
    }
}
