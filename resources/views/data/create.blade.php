@extends('layout')

@section('content')

    <form action="{{route('data.store')}}" method="post">

        {{ csrf_field() }}
        <label>Dodaj dane</label>

        <input type="text" name="age" class="form-control" id="title" placeholder="wiek">
        <input type="text" name="sex" class="form-control" id="title" placeholder="płeć">
        <input type="text" name="height" class="form-control" id="title" placeholder="wzrost">
        <input type="text" name="weight" class="form-control" id="title" placeholder="waga">
        <input type="text" name="user_id" class="form-control" id="title" placeholder="user_id">


        <button type="submit" class="btn btn-primary">Dodaj</button>



    </form>



@endsection