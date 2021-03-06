<?php

namespace App\Http\Controllers\font_end;

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
    public function article_detail($id)
    {
        $article_detail = Article_detail::where('id',$id)->get();
        return view('article_detail_template',compact('article_detail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Article_detail  $article_detail
     * @return \Illuminate\Http\Response
     */
    public function show(Article_detail $article_detail)
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
