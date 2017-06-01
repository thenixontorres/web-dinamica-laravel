<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\article;
use App\Models\constant;
use Flash;

class blogController extends Controller
{
    public function index()
    {	
    	$Constant = constant::all();
    	$articles = article::where('visibility', '1')->paginate(3);
    	return view('blog.public')
        ->with('articles', $articles)
        ->with('Constant', $Constant);
    }

    //recibe id del articulo
    public function article($id)
    {
    	$Constant = constant::all();
    	$article = article::where('id', $id)->first();
    	if(empty($article)){
    		Flash::error('Este articulo no existe.');
    		return view('blog.public');
    	}else{
    		return view('blog.article')
    			->with('article', $article)
    			->with('Constant', $Constant);
    	}
    }
}
