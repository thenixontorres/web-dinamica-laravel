<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\article;
use App\Models\constant;

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
}
