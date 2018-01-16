<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NewsCategory;
use App\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newscategories = NewsCategory::orderBy('created_at', 'asc')->get();
        return view('pages.news')->with('newscategories', $newscategories);
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
        $this->validate($request, ['newsTitle' => 'required|min:3|max:100', 'newsCategoryName' => 'required', 'newsContent' => 'required']);
        //initialize news
        $news = new News();
        $news->title = $request->newsTitle;
        $news->author = "John Lewis";
        $news->image = $request->newsImage;
        $news->category = $request->newsCategoryName;
        $news->content = $request->newsContent;
        $news->save();

        session()->flash('Ziņa veiksmīgi pievienota.');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('newsy')->where('id', $id)->delete();
        return redirect('/news');
    }

}
