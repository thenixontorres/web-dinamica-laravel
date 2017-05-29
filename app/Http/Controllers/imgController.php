<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateimgRequest;
use App\Http\Requests\UpdateimgRequest;
use App\Repositories\imgRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\img;
use App\Models\section;

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
        $sections = section::all();
        return view('imgs.create')
            ->with('sections', $sections);
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

        //$img = $this->imgRepository->create($input);

        $path = storage_path('app/public/images/');
        if (!is_dir($path)) {
        mkdir($path, 0777, true);
        }

        //crear img
        $img = new img();
        //agregarle la posicion por default
        $input['position'] = count(img::where('section_id', $request->section_id)->get())+1;
        $img->fill($input);
        //guardado de la imagen
        if (empty($request->file('img'))) {
            $img->img = 'images/default.jpg';
            $img->save();
        }else{
        $idImage = uniqid();
        $imageUp = $request->file('img');
        $image = Storage::disk('images')->putFileAs('images', $request->file('img'), $idImage.'.'.$imageUp->getClientOriginalExtension());
        $img->img = $image;
        $img->save();
        }
        Flash::success('Imagen saved successfully.');

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
        $positions = count(img::where('section_id', $img->section_id)->get());
        if (empty($img)) {
            Flash::error('Img not found');

            return redirect(route('imgs.index'));
        }

        return view('imgs.edit')
        ->with('positions', $positions)
        ->with('img', $img);
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

        //actualizacion de la posicion
        //ontengo las imagenes de la seccion
        $coincidencias = img::where('section_id', $img->section_id)->get();
        foreach ($coincidencias as $coincidencia) {
            if ($request->position == $coincidencia->position) {
                $coincidencia->position = $img->position;
                $coincidencia->save();
            }
        }

        if ($request->file('img') != null) {
            //Borrado de imagen anterior
            Storage::disk('images')->delete($img->img);
            
            //guaradado de nueva imagen
            $path = storage_path('app/public/images/');
            if (!is_dir($path)) {
            mkdir($path, 0777, true);
            }
            
            $idImage = uniqid();
            $imageUp = $request->file('img');
            $image = Storage::disk('images')->putFileAs('images', $request->file('img'), $idImage.'.'.$imageUp->getClientOriginalExtension());
            $img->fill($request->all());
            $img->img = $image;
            $img->save();
        }else{
            $request->img = $img->img;
            $img->fill($request->all());
            $img->save();
        }
        
        //$img = $this->imgRepository->update($request->all(), $id);

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
        Storage::disk('images')->delete($img->img);

        if (empty($img)) {
            Flash::error('Img not found');

            return redirect(route('imgs.index'));
        }

        $this->imgRepository->delete($id);

        Flash::success('Img deleted successfully.');

        return redirect(route('imgs.index'));
    }
}
