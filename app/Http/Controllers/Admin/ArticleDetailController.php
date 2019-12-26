<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Article_detail;
use Illuminate\Http\Request;

class ArticleDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article_detail = Article_detail::all();
        return view('admin/article_detail',compact('article_detail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Article_detail::create($request->all());
        return redirect()->route('article_detail')->with('success','ban da them thanh cong');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Article_detail  $article_detail
     * @return \Illuminate\Http\Response
     */
    public function article_detail()
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Article_detail  $article_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Article_detail $article_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Article_detail  $article_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article_detail $article_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Article_detail  $article_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article_detail $article_detail)
    {
        //
    }
}
