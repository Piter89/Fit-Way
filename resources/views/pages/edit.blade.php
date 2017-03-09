@extends('layout')

@section('content')

    <form action="{{route('pages.update', $page ->id)}}" method="post">
        <input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}
        <label>Edytuj kategorie</label>


        <input type="text" name="name" value = "{{$page->name}}" class="form-control" id="name" placeholder="treść kategorii">
        <button type="submit" class="btn btn-primary">Edytuj</button>




    </form>



@endsection