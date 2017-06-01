<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatesectionConfigRequest;
use App\Http\Requests\UpdatesectionConfigRequest;
use App\Repositories\sectionConfigRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class sectionConfigController extends AppBaseController
{
    /** @var  sectionConfigRepository */
    private $sectionConfigRepository;

    public function __construct(sectionConfigRepository $sectionConfigRepo)
    {
        $this->sectionConfigRepository = $sectionConfigRepo;
    }

    /**
     * Display a listing of the sectionConfig.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->sectionConfigRepository->pushCriteria(new RequestCriteria($request));
        $sectionConfigs = $this->sectionConfigRepository->all();

        return view('section_configs.index')
            ->with('sectionConfigs', $sectionConfigs);
    }

    /**
     * Show the form for creating a new sectionConfig.
     *
     * @return Response
     */
    public function create()
    {
        return view('section_configs.create');
    }

    /**
     * Store a newly created sectionConfig in storage.
     *
     * @param CreatesectionConfigRequest $request
     *
     * @return Response
     */
    public function store(CreatesectionConfigRequest $request)
    {
        $input = $request->all();

        $sectionConfig = $this->sectionConfigRepository->create($input);

        Flash::success('Section Config saved successfully.');

        return redirect(route('sectionConfigs.index'));
    }

    /**
     * Display the specified sectionConfig.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sectionConfig = $this->sectionConfigRepository->findWithoutFail($id);

        if (empty($sectionConfig)) {
            Flash::error('Section Config not found');

            return redirect(route('sectionConfigs.index'));
        }

        return view('section_configs.show')->with('sectionConfig', $sectionConfig);
    }

    /**
     * Show the form for editing the specified sectionConfig.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sectionConfig = $this->sectionConfigRepository->findWithoutFail($id);

        if (empty($sectionConfig)) {
            Flash::error('Section Config not found');

            return redirect(route('sectionConfigs.index'));
        }

        return view('section_configs.edit')->with('sectionConfig', $sectionConfig);
    }

    /**
     * Update the specified sectionConfig in storage.
     *
     * @param  int              $id
     * @param UpdatesectionConfigRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesectionConfigRequest $request)
    {
        $sectionConfig = $this->sectionConfigRepository->findWithoutFail($id);

        if (empty($sectionConfig)) {
            Flash::error('Section Config not found');

            return redirect(route('sectionConfigs.index'));
        }

        $sectionConfig = $this->sectionConfigRepository->update($request->all(), $id);

        Flash::success('Section Config updated successfully.');

        return redirect(route('sectionConfigs.index'));
    }

    /**
     * Remove the specified sectionConfig from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sectionConfig = $this->sectionConfigRepository->findWithoutFail($id);

        if (empty($sectionConfig)) {
            Flash::error('Section Config not found');

            return redirect(route('sectionConfigs.index'));
        }

        $this->sectionConfigRepository->delete($id);

        Flash::success('Section Config deleted successfully.');

        return redirect(route('sectionConfigs.index'));
    }
}
