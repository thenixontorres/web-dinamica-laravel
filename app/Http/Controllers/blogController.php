<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\article;
use App\Models\constant;
use Flash;
use App\Models\tag;
use App\Models\section;

class blogController extends Controller
{
    public function index(Request $request)
    {	

        
    	$tags = tag::all();
    	$Constant = constant::all();
    	$articles = article::buscar($request->title)->orderBy('id', 'DESC')->where('visibility', '1')->paginate(3);
    	$lastest = article::orderBy('id', 'DESC')->where('visibility', '1')->limit(10)->get();

        $Banner = section::where('page_id', '2')->where('name', 'Cabecera del Blog')->first();

        $mounths = article::where('visibility', '1')->get();

        return view('blog.public')
        ->with('articles', $articles)
        ->with('Constant', $Constant)
        ->with('tags', $tags)
        ->with('Banner', $Banner)
        ->with('lastest', $lastest);
    }

    //recibe slug del articulo
    public function article($slug)
    {
    	$tags = tag::all();
    	$Constant = constant::all();
        $lastest = article::orderBy('id', 'DESC')->where('visibility', '1')->limit(10)->get();
        $article = article::where('slug', $slug)->first();
        $Banner = section::where('page_id', '2')->where('name', 'Cabecera del Blog')->first();
    	if(empty($article) || $article->visibility == '0'){
    		Flash::error('Este articulo no existe o no esta disponible.');
    		return view('blog.public');
    	}else{
    		return view('blog.article')
    			->with('article', $article)
    			->with('Constant', $Constant)
    			->with('tags', $tags)
                ->with('Banner', $Banner)
                ->with('lastest', $lastest);
    	}
    }

    //recibe id de la categoria
    public function category($id)
    {
    	$tags = tag::all();
    	$Constant = constant::all();
    	$articles = article::orderBy('id', 'DESC')->where('tag_id', $id)->where('visibility', '1')->paginate(3);
        $lastest = article::orderBy('id', 'DESC')->where('visibility', '1')->limit(10)->get();
        $Banner = section::where('page_id', '2')->where('name', 'Cabecera del Blog')->first();
    	if(empty($articles)){
    		Flash::error('Esta categria no posee articulos aun.');
    		return view('blog.public');
    	}else{
    		return view('blog.public')
    			->with('articles', $articles)
    			->with('Constant', $Constant)
    			->with('tags', $tags)
                ->with('Banner', $Banner)
                ->with('lastest', $lastest);
    	}
    }
}
