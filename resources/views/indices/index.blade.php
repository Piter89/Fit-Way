@extends('layout')

@section('content')


    <table class="table table-hover">
        <tr>
            <th>id</th>
            <th>Poziom tłuszczu</th>
            <th>Wytrzymałość</th>
            <th>Siła </th>
            <th>Gibkość</th>
            <th>Użytkownik</th>
            <th>Opcje</th>


        </tr>
        @foreach($indices as $index)
            <tr>
                <td>{{ $index->id }}</td>
                <td>{{ $index->body_fat  }}</td>
                <td>{{ $index->endurance}}</td>
                <td>{{ $index->strength }}</td>
                <td>{{ $index->suppleness  }}</td>
                <td>{{ $index->user_id  }}</td>
                <td> <a class="btn btn-info" href="{{route('indices.edit', $index ->id)}}">Edit</a></td>
                <td>
                    <form method="post" action="{{route('indices.destroy', $index ->id)}}">
                        <input name="_method" type="hidden" value="DELETE">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger"  >Delete</button>
                    </form>
                </td>

            </tr>
        @endforeach
    </table>
    <a class="btn btn-danger" href="{{route('indices.create')}}">Dodaj wskaźniki</a>
    {{ $indices->links() }}


@endsection