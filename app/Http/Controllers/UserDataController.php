<?php

namespace App\Http\Controllers;


use App\UserData;
use Illuminate\Http\Request;

class UserDataController extends Controller
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
        $data = UserData::paginate(10);
        return view('data.index', compact ('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = UserData::all();
        return view ('data.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new UserData();
        $data ->age = $request->input('age');
        $data->sex = $request->input('sex');
        $data->height = $request->input('height');
        $data->weight = $request->input('weight');
        $data->user_id = $request->input('user_id');
        $data->save();
        return redirect('/data');
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

        $data = UserData :: find($id);

        return view('data.edit', compact('data'));
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
        $data = UserData :: find($id);
        $data ->age = $request->input('age');
        $data->sex = $request->input('sex');
        $data->height = $request->input('height');
        $data->weight = $request->input('weight');
        $data->user_id = $request->input('user_id');
        $data->save();
        return redirect('/data');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = UserData::find($id);
        $data->delete();

        return redirect('/data');
    }
}
