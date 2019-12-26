<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Article;
class ArticleController extends Controller
{
    public function index(){
       $article = Article::all();
       return view('admin/article',compact('article'));
    }
    public function create(Request $request){
    	Article::create($request->all());
    	return redirect()->route('article')->with('success','ban da them moi thanh cong');
    }
    public function article(){
    	$article = Article::all();
       return view('article',compact('article'));
    }
}
