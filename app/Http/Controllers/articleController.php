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
        $articles = $this->articleRepository->all();

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

        $article = $this->articleRepository->create($input);

        $thumb = new thumb();
        $idThumb = uniqid();
        $thumbUp = $request->file('thumb');
        $image = Storage::disk('images')->putFileAs('thumbs', $request->file('thumb'), $idImage.'.'.$imageUp->getClientOriginalExtension());
        $thumb->thumb = $image;
        $thumb->article_id = $article->id;
        $thumb->save();
        
        Flash::success('Article saved successfully.');

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
            Flash::error('Article not found');

            return redirect(route('articles.index'));
        }

        $article = $this->articleRepository->update($request->all(), $id);

        Flash::success('Article updated successfully.');

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
            Flash::error('Article not found');

            return redirect(route('articles.index'));
        }

        $this->articleRepository->delete($id);

        Flash::success('Article deleted successfully.');

        return redirect(route('articles.index'));
    }
}
