<?php

namespace App\Http\Controllers\font_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Article;
class ArticleController extends Controller
{
    public function index(){
       
    	$article = Article::all();
       return view('article',compact('article'));
    
    }
}
