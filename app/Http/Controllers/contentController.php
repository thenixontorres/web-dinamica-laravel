<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecontentRequest;
use App\Http\Requests\UpdatecontentRequest;
use App\Repositories\contentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class contentController extends AppBaseController
{
    /** @var  contentRepository */
    private $contentRepository;

    public function __construct(contentRepository $contentRepo)
    {
        $this->contentRepository = $contentRepo;
    }

    /**
     * Display a listing of the content.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->contentRepository->pushCriteria(new RequestCriteria($request));
        $contents = $this->contentRepository->all();

        return view('contents.index')
            ->with('contents', $contents);
    }

    /**
     * Show the form for creating a new content.
     *
     * @return Response
     */
    public function create()
    {
        return view('contents.create');
    }

    /**
     * Store a newly created content in storage.
     *
     * @param CreatecontentRequest $request
     *
     * @return Response
     */
    public function store(CreatecontentRequest $request)
    {
        $input = $request->all();

        $content = $this->contentRepository->create($input);

        Flash::success('Content saved successfully.');

        return redirect(route('contents.index'));
    }

    /**
     * Display the specified content.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $content = $this->contentRepository->findWithoutFail($id);

        if (empty($content)) {
            Flash::error('Content not found');

            return redirect(route('contents.index'));
        }

        return view('contents.show')->with('content', $content);
    }

    /**
     * Show the form for editing the specified content.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $content = $this->contentRepository->findWithoutFail($id);

        if (empty($content)) {
            Flash::error('Content not found');

            return redirect(route('contents.index'));
        }

        return view('contents.edit')->with('content', $content);
    }

    /**
     * Update the specified content in storage.
     *
     * @param  int              $id
     * @param UpdatecontentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecontentRequest $request)
    {
        $content = $this->contentRepository->findWithoutFail($id);

        if (empty($content)) {
            Flash::error('Content not found');

            return redirect(route('contents.index'));
        }

        $content = $this->contentRepository->update($request->all(), $id);

        Flash::success('Content updated successfully.');

        return redirect(route('contents.index'));
    }

    /**
     * Remove the specified content from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $content = $this->contentRepository->findWithoutFail($id);

        if (empty($content)) {
            Flash::error('Content not found');

            return redirect(route('contents.index'));
        }

        $this->contentRepository->delete($id);

        Flash::success('Content deleted successfully.');

        return redirect(route('contents.index'));
    }
}
