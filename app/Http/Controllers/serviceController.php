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
use Illuminate\Support\Facades\Storage;


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

        $path = storage_path('app/public/images/');
        if (!is_dir($path)) {
        mkdir($path, 0777, true);
        }
        // se crea el servicio
        $service = new service();
        $service->fill($input);
        //si esta vacio se le pone el default
        if (empty($request->file('banner_img'))) {
            $service->banner_img = 'images/slider-default.jpg';
            $service->save();
        }else{
            $idBanner = uniqid();
            $bannerUp = $request->file('banner_img');
            $image = Storage::disk('images')->putFileAs('images', $request->file('banner_img'), $idBanner.'.'.$bannerUp->getClientOriginalExtension());
            $service->banner_img = $image;
            $service->save();
        } 

        //$service = $this->serviceRepository->create($input);

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

         //si carga la imagen
        if ($request->file('banner_img') != null) {
            //Borrado de imagen anterior
            if ($service->banner_img != 'thumbs/default.jpg' && $service->banner_img != 'thumbs/slider-default.jpg'){
            Storage::disk('images')->delete($service->banner_img);
            }
            $path = storage_path('app/public/images/');
            if (!is_dir($path)) {
            mkdir($path, 0777, true);
            }

            $idBanner = uniqid();
            $bannerUp = $request->file('banner_img');
            $image = Storage::disk('images')->putFileAs('images', $request->file('banner_img'), $idBanner.'.'.$bannerUp->getClientOriginalExtension());
            $service->fill($request->all());
            $service->banner_img = $image;
            $service->save();
        }else{
            $image = $service->banner_img;
            $service->fill($request->all());
            $service->banner_img = $image;
            $service->save();
        } 

        //$service = $this->serviceRepository->update($request->all(), $id);

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

        if ($service->banner_img != 'images/slider-default.jpg') {
            Storage::disk('images')->delete($service->banner_img);
        }

        $this->serviceRepository->delete($id);

        Flash::success('Servicio borrado con exito.');

        return redirect(route('services.index'));
    }
}
