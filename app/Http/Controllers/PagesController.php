<?php

namespace App\Http\Controllers;

use App\Article;
use App\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');   //-  uruchamia się sama automatycznie
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::paginate(10);
        return view('pages.index', compact ('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Article::all();
        return view ('pages.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage. przechowuje dane
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $page = new Page();
        $page ->name = $request->input('name');
        $page->save();
        return redirect('/pages');
    }

    /**
     * Display the specified resource. wyświetla odpowiedni rekord
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource. edycja nowego zasobu
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $page = Page :: find($id);
        $categories = Categories::all();
        return view('pages.edit', compact('page', 'categories'));
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
        $page = Page :: find($id);
        $page->name = $request->input ('name');
        $page ->save();
        return redirect('/pages');

    }

    /**
     * Remove the specified resource from storage. usuwnie
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::find($id);
        $page ->delete();

        return redirect('/pages');
    }
}
