<?php

namespace App\Http\Controllers;

use App\FitIndex;
use App\User;
use Illuminate\Http\Request;

class FitIndicesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indices= FitIndex::paginate(10);
        $user= User::all();
        return view('indices.index',compact ('indices','user') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $indices = FitIndex::all();
        $users=User::all();
        return view ('indices.create', compact('indices','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $indices = new FitIndex();
        $indices ->body_fat = $request->input('body_fat');
        $indices ->endurance = $request->input('endurance');
        $indices ->strength = $request->input('strength');
        $indices ->suppleness = $request->input('suppleness');
        $indices ->user_id = $request->input('user_id');
        $indices->save();
        return redirect('/indices');
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

        $indices = FitIndex::find($id);
        return view('indices.edit', compact('indices'));
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
        $indices = FitIndex::find($id);
        $indices ->body_fat = $request->input('body_fat');
        $indices ->endurance = $request->input('endurance');
        $indices ->strength = $request->input('strength');
        $indices ->suppleness = $request->input('suppleness');
        $indices ->user_id = $request->input('user_id');
        $indices->save();
        return redirect('/indices');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $indices = FitIndex::find($id);
        $indices->delete();

        return redirect('/indices');
    }
}
