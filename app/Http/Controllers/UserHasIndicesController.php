<?php

namespace App\Http\Controllers;

use App\User;
use App\User_Has_Index;
use Illuminate\Http\Request;

class UserHasIndicesController extends Controller
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
        $has_indices = User_Has_Index::paginate(10);
        return view('has_indices.index', compact ('has_indices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $has_indices = User_Has_Index::all();

        return view ('has_indices.create', compact('has_indices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $has_indices = new User_Has_Index();
        $has_indices ->body_fat = $request->input('body_fat');
        $has_indices ->body_fat_weight = $request->input('body_fat_weight');
        $has_indices ->endurance = $request->input('endurance');
        $has_indices ->strength = $request->input('strength');
        $has_indices ->suppleness = $request->input('suppleness');
        $has_indices->save();
        return redirect('/has_indices');
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

        $has_indices = User_Has_Index::find($id);
        return view('has_indices.edit', compact('has_indices'));
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
        $has_indices = User_Has_Index::find($id);
        $has_indices ->body_fat = $request->input('body_fat');
        $has_indices ->body_fat_weight = $request->input('body_fat_weight');
        $has_indices ->endurance = $request->input('endurance');
        $has_indices ->strength = $request->input('strength');
        $has_indices ->suppleness = $request->input('suppleness');
        $has_indices->save();
        return redirect('/has_indices');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $has_indices = User_Has_Index::find($id);
        $has_indices->delete();

        return redirect('/has_indices');
    }

}