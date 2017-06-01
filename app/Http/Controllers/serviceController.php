<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateserviceRequest;
use App\Http\Requests\UpdateserviceRequest;
use App\Repositories\serviceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\icon;
use App\Models\service;

class serviceController extends AppBaseController
{
    /** @var  serviceRepository */
    private $serviceRepository;

    public function __construct(serviceRepository $serviceRepo)
    {
        $this->serviceRepository = $serviceRepo;
    }

    /**
     * Display a listing of the service.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->serviceRepository->pushCriteria(new RequestCriteria($request));
        //$services = $this->serviceRepository->all();
        $services = service::orderBy('id', 'DESC')->paginate(10);
        return view('services.index')
            ->with('services', $services);
    }

    /**
     * Show the form for creating a new service.
     *
     * @return Response
     */
    public function create()
    {   
        $icons = icon::all();
        return view('services.create')
        ->with('icons', $icons);
    }

    /**
     * Store a newly created service in storage.
     *
     * @param CreateserviceRequest $request
     *
     * @return Response
     */
    public function store(CreateserviceRequest $request)
    {
        $input = $request->all();

        $service = $this->serviceRepository->create($input);

        Flash::success('Servicio registrado con exito.');

        return redirect(route('services.index'));
    }

    /**
     * Display the specified service.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $service = $this->serviceRepository->findWithoutFail($id);

        if (empty($service)) {
            Flash::error('Service not found');

            return redirect(route('services.index'));
        }

        return view('services.show')->with('service', $service);
    }

    /**
     * Show the form for editing the specified service.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $service = $this->serviceRepository->findWithoutFail($id);

        if (empty($service)) {
            Flash::error('Servicio no encontrado.');

            return redirect(route('services.index'));
        }
        $icons = icon::all();
        return view('services.edit')
        ->with('service', $service)
        ->with('icons', $icons);
    }

    /**
     * Update the specified service in storage.
     *
     * @param  int              $id
     * @param UpdateserviceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateserviceRequest $request)
    {
        $service = $this->serviceRepository->findWithoutFail($id);

        if (empty($service)) {
            Flash::error('Servicio no encontrado.');

            return redirect(route('services.index'));
        }

        $service = $this->serviceRepository->update($request->all(), $id);

        Flash::success('Servicio actualizado con exito.');

        return redirect(route('services.index'));
    }

    /**
     * Remove the specified service from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $service = $this->serviceRepository->findWithoutFail($id);

        if (empty($service)) {
            Flash::error('Servicio no encontrado.');

            return redirect(route('services.index'));
        }

        $this->serviceRepository->delete($id);

        Flash::success('Servicio borrado con exito.');

        return redirect(route('services.index'));
    }
}
