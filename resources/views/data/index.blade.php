@extends('layout')

@section('content')


    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>WIEK</th>
            <th>Płeć</th>
            <th>WZROST</th>
            <th>Waga</th>
            <th>Użytkownik</th>
            <th>Opcje</th>
        </tr>
        @foreach($data as $dat)
            <tr>
                <td>{{ $dat->id }}</td>
                <td>{{ $dat->age }}</td>
                <td>{{ $dat->sex  }}</td>
                <td>{{ $dat->height  }}</td>
                <td>{{ $dat->weight  }}</td>
                <td>{{ $dat->user_id  }}</td>

                <td> <a class="btn btn-info" href="{{route('data.edit', $dat ->id)}}">Edit</a></td>
                <td>
                    <form method="post" action="{{route('data.destroy', $dat ->id)}}">
                        <input name="_method" type="hidden" value="DELETE">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger"  >Delete</button>
                    </form>
                </td>

            </tr>
        @endforeach
    </table><br>
    <a class="btn btn-danger" href="{{route('data.create')}}">Dodaj dane</a>
    {{ $data->links() }}


@endsection