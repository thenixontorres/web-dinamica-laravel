<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\article;
use App\Models\constant;
use Flash;
use App\Models\tag;

class blogController extends Controller
{
    public function index()
    {	
    	$tags = tag::all();
    	$Constant = constant::all();
    	$articles = article::where('visibility', '1')->paginate(3);
    	return view('blog.public')
        ->with('articles', $articles)
        ->with('Constant', $Constant)
        ->with('tags', $tags);
    }

    //recibe id del articulo
    public function article($id)
    {
    	$tags = tag::all();
    	$Constant = constant::all();
    	$article = article::where('id', $id)->first();
    	if(empty($article) || $article->visibility == '0'){
    		Flash::error('Este articulo no existe o no esta disponible.');
    		return view('blog.public');
    	}else{
    		return view('blog.article')
    			->with('article', $article)
    			->with('Constant', $Constant)
    			->with('tags', $tags);
    	}
    }

    //recibe id de la categoria
    public function category($id)
    {
    	$tags = tag::all();
    	$Constant = constant::all();
    	$articles = article::where('tag_id', $id)->where('visibility', '1')->paginate(3);
    	if(empty($articles)){
    		Flash::error('Esta categria no posee articulos aun.');
    		return view('blog.public');
    	}else{
    		return view('blog.public')
    			->with('articles', $articles)
    			->with('Constant', $Constant)
    			->with('tags', $tags);
    	}
    }
}
