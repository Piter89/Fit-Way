@extends('layout')

@section('content')

    <form action="{{route('indices.store')}}" method="post">

        {{ csrf_field() }}
        <label>Dodaj indeks</label>

        <input type="text" name="body_fat" class="form-control" id="title" placeholder="body fat">
        <input type="text" name="endurance" class="form-control" id="title" placeholder="endurance">
        <input type="text" name="strength" class="form-control" id="title" placeholder="strength">
        <input type="text" name="suppleness" class="form-control" id="title" placeholder="suppleness">
        <div class="form-group">
            <select class="form-control" name="user_id">
                @foreach($users as $user)
                    @if($user->id == $user->user_id)
                        <option selected ="selected" value="{{ $user->id  }}">{{ $user->username }}</option>
                    @else
                        <option value="{{ $user->id  }}">{{ $user->username }}</option>


                    @endif
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Dodaj</button>



    </form>



@endsection