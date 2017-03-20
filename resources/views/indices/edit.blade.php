@extends('layout')

@section('content')

    <form action="{{route('indices.update', $indices ->id)}}" method="post">
        <input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}
        <label>Edytuj indeks</label>

        <input type="text" name="body_fat" value = "{{$indices->body_fat}}" class="form-control" id="title" placeholder="body fat">
        <input type="text" name="endurance" value = "{{$indices->endurance}}" class="form-control" id="title" placeholder="pulse 1">
        <input type="text" name="strength" value = "{{$indices->strength}}" class="form-control" id="title" placeholder="strength">
        <input type="text" name="suppleness" value = "{{$indices->suppleness}}" class="form-control" id="title" placeholder="suppleness">
        <input type="text" name="user_id" value = "{{$indices->user_id}}" class="form-control" id="title" placeholder="user_id">



        <button type="submit" class="btn btn-primary">Edytuj</button>




    </form>



@endsection