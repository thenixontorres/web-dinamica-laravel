<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatesectionRequest;
use App\Http\Requests\UpdatesectionRequest;
use App\Repositories\sectionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\page;
use App\Models\section;
use App\Models\content;
use App\Models\config;


class sectionController extends AppBaseController
{
    /** @var  sectionRepository */
    private $sectionRepository;

    public function __construct(sectionRepository $sectionRepo)
    {
        $this->sectionRepository = $sectionRepo;
    }

    /**
     * Display a listing of the section.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->sectionRepository->pushCriteria(new RequestCriteria($request));
        $sections = $this->sectionRepository->all();

        return view('sections.index')
            ->with('sections', $sections);
    }

    /**
     * Show the form for creating a new section.
     *
     * @return Response
     */
    public function create()
    {   
        $pages = page::all();
        return view('sections.create')
            ->with('pages', $pages);
    }

    /**
     * Store a newly created section in storage.
     *
     * @param CreatesectionRequest $request
     *
     * @return Response
     */
    public function store(CreatesectionRequest $request)
    {
        $input = $request->all();

        $section = $this->sectionRepository->create($input);

        $content = new content();
        $content->section_id = $section->id;
        $content->fill($input);
        $content->save();
        Flash::success('Section guardada con exito.');

        return redirect(route('sections.index'));
    }

    /**
     * Display the specified section.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $section = $this->sectionRepository->findWithoutFail($id);
        
        $content = content::where('section_id',$id)->first();

        if (empty($section)) {
            Flash::error('Section not found');

            return redirect(route('sections.index'));
        }

        return view('sections.show')
            ->with('section', $section)
            ->with('content', $content);
    }

    /**
     * Show the form for editing the specified section.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $section = $this->sectionRepository->findWithoutFail($id);
        $pages = page::all();
        $content = content::where('section_id',$id)->first();

        if (empty($section)) {
            Flash::error('Seccion no encontrada.');

            return redirect(route('sections.index'));
        }

        return view('sections.edit')
            ->with('section', $section)
            ->with('pages', $pages)
            ->with('content', $content);
    }

    /**
     * Update the specified section in storage.
     *
     * @param  int              $id
     * @param UpdatesectionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesectionRequest $request)
    {
        $section = $this->sectionRepository->findWithoutFail($id);

        if (empty($section)) {
            Flash::error('Seccion no encontrada.');

            return redirect(route('sections.index'));
        }
        
        $section = $this->sectionRepository->update($request->all(), $id);

        $content = content::where('section_id',$section->id)->first();
        $content->fill($request->all());
        $content->save();
        Flash::success('Section updated successfully.');

        return redirect(route('sections.index'));
    }

    /**
     * Remove the specified section from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $section = $this->sectionRepository->findWithoutFail($id);

        if (empty($section)) {
            Flash::error('Section not found');

            return redirect(route('sections.index'));
        }
        $config = config::where('section_id',$id)->first();
        $config->delete();
        $content = content::where('section_id',$id)->first();
        $content->delete();
        $this->sectionRepository->delete($id);

        Flash::success('Section deleted successfully.');

        return redirect(route('sections.index'));
    }
}
