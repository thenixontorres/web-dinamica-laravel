<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatearticleRequest;
use App\Http\Requests\UpdatearticleRequest;
use App\Repositories\articleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\tag;
use App\Models\thumb;
use App\Models\article;
use Illuminate\Support\Str as Str;

class articleController extends AppBaseController
{
    /** @var  articleRepository */
    private $articleRepository;

    public function __construct(articleRepository $articleRepo)
    {
        $this->articleRepository = $articleRepo;
    }

    /**
     * Display a listing of the article.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->articleRepository->pushCriteria(new RequestCriteria($request));
        //$articles = $this->articleRepository->all();
        $articles = article::orderBy('id', 'DESC')->paginate(5);
        return view('articles.index')
            ->with('articles', $articles);
    }

    /**
     * Show the form for creating a new article.
     *
     * @return Response
     */
    public function create()
    {   
        $tags = tag::all();
        return view('articles.create')
        ->with('tags', $tags);
    }

    /**
     * Store a newly created article in storage.
     *
     * @param CreatearticleRequest $request
     *
     * @return Response
     */
    public function store(CreatearticleRequest $request)
    {
        $input = $request->all();
        $slug = Str::slug($request->title);
        $repeats = article::where('slug', $slug)->get();
        //el slug/nombre del articulo debe ser unico
        if(count($repeats)>0){
            Flash::error('Articulo ya existe, pruebe otro nombre');
            return redirect()->back();
        }

        $input['slug'] = $slug;

        $article = $this->articleRepository->create($input);
        $article->save();

        $path = storage_path('app/public/images/');
        if (!is_dir($path)) {
        mkdir($path, 0777, true);
        }

        $thumb = new thumb();
        if (empty($request->file('thumb'))) {
            $thumb->thumb = 'thumbs/default.jpg';
            $thumb->article_id = $article->id;
            $thumb->save();
        }else{
        $idThumb = uniqid();
        $thumbUp = $request->file('thumb');
        $image = Storage::disk('images')->putFileAs('thumbs', $request->file('thumb'), $idThumb.'.'.$thumbUp->getClientOriginalExtension());
        $thumb->thumb = $image;
        $thumb->article_id = $article->id;
        $thumb->save();
        }    
        Flash::success('Articulo registrado con exito.');

        return redirect(route('articles.index'));
    }

    /**
     * Display the specified article.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $article = $this->articleRepository->findWithoutFail($id);

        if (empty($article)) {
            Flash::error('Article not found');

            return redirect(route('articles.index'));
        }

        return view('articles.show')->with('article', $article);
    }

    /**
     * Show the form for editing the specified article.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $article = $this->articleRepository->findWithoutFail($id);

        if (empty($article)) {
            Flash::error('Article not found');

            return redirect(route('articles.index'));
        }

        $tags = tag::all();

        return view('articles.edit')
            ->with('article', $article)
            ->with('tags', $tags);
    }

    /**
     * Update the specified article in storage.
     *
     * @param  int              $id
     * @param UpdatearticleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatearticleRequest $request)
    {
        $article = $this->articleRepository->findWithoutFail($id);

        if (empty($article)) {
            Flash::error('Articulo no encontrado');

            return redirect(route('articles.index'));
        }

        $slug = Str::slug($request->title);

        //si modifica el titulo/slug no deben haber coincidencias de slug
        if ($request->title != $article->title) {
            $repeats = article::where('slug', $slug)->get();
            if(count($repeats) > 0){
                Flash::error('Articulo ya existe, pruebe otro nombre');
                return redirect()->back();
            }
        }

        //si carga la imagen
        if ($request->file('thumb') != null) {
            //Borrado de imagen anterior
            if ($article->thumb->thumb != 'thumbs/default.jpg'){
            Storage::disk('images')->delete($article->thumb->thumb);
            }
            $path = storage_path('app/public/images/');
            if (!is_dir($path)) {
            mkdir($path, 0777, true);
            }

            $thumb = thumb::where('article_id', $id)->first();
            $idThumb = uniqid();
            $thumbUp = $request->file('thumb');
            $image = Storage::disk('images')->putFileAs('thumbs', $request->file('thumb'), $idThumb.'.'.$thumbUp->getClientOriginalExtension());
            $thumb->thumb = $image;
            $thumb->article_id = $article->id;
            $thumb->save();
        }    

        $article = $this->articleRepository->update($request->all(), $id);

        Flash::success('Articulo actualizado con exito.');

        return redirect(route('articles.index'));
    }

    /**
     * Remove the specified article from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $article = $this->articleRepository->findWithoutFail($id);

        if (empty($article)) {
            Flash::error('Articulo no encontrado.');

            return redirect(route('articles.index'));
        }

        $thumb = thumb::where('article_id', $id)->first();
        //la img default no puede borrarse
        if ($thumb->thumb != 'thumbs/default.jpg') {
            Storage::disk('images')->delete($thumb->thumb);
        }

        $thumb->delete();
        $this->articleRepository->delete($id);

        Flash::success('Articulo borrado con exito.');

        return redirect(route('articles.index'));
    }
}
