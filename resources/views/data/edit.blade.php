@extends('layout')

@section('content')

    <form action="{{route('data.update', $data ->id)}}" method="post">
        <input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}
        <label>Edytuj dane</label>
        <input type="text" name="age" value = "{{$data->age}}" class="form-control" id="title" placeholder="wiek">
        <input type="text" name="sex" value = "{{$data->sex}}" class="form-control" id="title" placeholder="płeć">
        <input type="text" name="height" value = "{{$data->height}}" class="form-control" id="title" placeholder="wzrost">
        <input type="text" name="weight" value = "{{$data->weight}}" class="form-control" id="title" placeholder="waga">
        <input type="text" name="user_id" value = "{{$data->user_id}}" class="form-control" id="title" placeholder="user_id">





    <button type="submit" class="btn btn-primary">Edytuj</button>
    </form>
@endsection