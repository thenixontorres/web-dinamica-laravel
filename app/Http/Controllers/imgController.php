<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateimgRequest;
use App\Http\Requests\UpdateimgRequest;
use App\Repositories\imgRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class imgController extends AppBaseController
{
    /** @var  imgRepository */
    private $imgRepository;

    public function __construct(imgRepository $imgRepo)
    {
        $this->imgRepository = $imgRepo;
    }

    /**
     * Display a listing of the img.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->imgRepository->pushCriteria(new RequestCriteria($request));
        $imgs = $this->imgRepository->all();

        return view('imgs.index')
            ->with('imgs', $imgs);
    }

    /**
     * Show the form for creating a new img.
     *
     * @return Response
     */
    public function create()
    {
        return view('imgs.create');
    }

    /**
     * Store a newly created img in storage.
     *
     * @param CreateimgRequest $request
     *
     * @return Response
     */
    public function store(CreateimgRequest $request)
    {
        $input = $request->all();

        $img = $this->imgRepository->create($input);

        Flash::success('Img saved successfully.');

        return redirect(route('imgs.index'));
    }

    /**
     * Display the specified img.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $img = $this->imgRepository->findWithoutFail($id);

        if (empty($img)) {
            Flash::error('Img not found');

            return redirect(route('imgs.index'));
        }

        return view('imgs.show')->with('img', $img);
    }

    /**
     * Show the form for editing the specified img.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $img = $this->imgRepository->findWithoutFail($id);

        if (empty($img)) {
            Flash::error('Img not found');

            return redirect(route('imgs.index'));
        }

        return view('imgs.edit')->with('img', $img);
    }

    /**
     * Update the specified img in storage.
     *
     * @param  int              $id
     * @param UpdateimgRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateimgRequest $request)
    {
        $img = $this->imgRepository->findWithoutFail($id);

        if (empty($img)) {
            Flash::error('Img not found');

            return redirect(route('imgs.index'));
        }

        $img = $this->imgRepository->update($request->all(), $id);

        Flash::success('Img updated successfully.');

        return redirect(route('imgs.index'));
    }

    /**
     * Remove the specified img from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $img = $this->imgRepository->findWithoutFail($id);

        if (empty($img)) {
            Flash::error('Img not found');

            return redirect(route('imgs.index'));
        }

        $this->imgRepository->delete($id);

        Flash::success('Img deleted successfully.');

        return redirect(route('imgs.index'));
    }
}
