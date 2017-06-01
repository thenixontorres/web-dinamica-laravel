<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetagRequest;
use App\Http\Requests\UpdatetagRequest;
use App\Repositories\tagRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\article;
use App\Models\tag;

class tagController extends AppBaseController
{
    /** @var  tagRepository */
    private $tagRepository;

    public function __construct(tagRepository $tagRepo)
    {
        $this->tagRepository = $tagRepo;
    }

    /**
     * Display a listing of the tag.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tagRepository->pushCriteria(new RequestCriteria($request));
        //$tags = $this->tagRepository->all();
        $tags = tag::orderBy('id', 'DESC')->paginate(10);
        return view('tags.index')
            ->with('tags', $tags);
    }

    /**
     * Show the form for creating a new tag.
     *
     * @return Response
     */
    public function create()
    {
        return view('tags.create');
    }

    /**
     * Store a newly created tag in storage.
     *
     * @param CreatetagRequest $request
     *
     * @return Response
     */
    public function store(CreatetagRequest $request)
    {
        $input = $request->all();

        $tag = $this->tagRepository->create($input);

        Flash::success('Caregoria guardada con exito.');

        return redirect(route('tags.index'));
    }

    /**
     * Display the specified tag.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tag = $this->tagRepository->findWithoutFail($id);

        if (empty($tag)) {
            Flash::error('Tag not found');

            return redirect(route('tags.index'));
        }

        return view('tags.show')->with('tag', $tag);
    }

    /**
     * Show the form for editing the specified tag.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tag = $this->tagRepository->findWithoutFail($id);

        if (empty($tag)) {
            Flash::error('Categoria no encontrada.');

            return redirect(route('tags.index'));
        }

        return view('tags.edit')->with('tag', $tag);
    }

    /**
     * Update the specified tag in storage.
     *
     * @param  int              $id
     * @param UpdatetagRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetagRequest $request)
    {
        $tag = $this->tagRepository->findWithoutFail($id);

        if (empty($tag)) {
            Flash::error('Categoria no encontrada.');

            return redirect(route('tags.index'));
        }

        $tag = $this->tagRepository->update($request->all(), $id);

        Flash::success('categoria actualizada con exito.');

        return redirect(route('tags.index'));
    }

    /**
     * Remove the specified tag from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tag = $this->tagRepository->findWithoutFail($id);

        if (empty($tag)) {
            Flash::error('Categoria no encontrada.');

            return redirect(route('tags.index'));
        }

        $count = count(article::where('tag_id', $id)->get());
        if ($count != 0) {
            Flash::error('Aun hay articluos asociados a esta categoria.');
            return redirect(route('tags.index'));
        }
        $this->tagRepository->delete($id);

        Flash::success('categoria borrada con exito.');

        return redirect(route('tags.index'));
    }
}
