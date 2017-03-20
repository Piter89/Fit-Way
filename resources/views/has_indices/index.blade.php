@extends('layout')

@section('content')


    <table class="table table-hover">
        <tr>
            <th>id</th>
            <th>Procent tłuszczu</th>
            <th>Waga tłuszczu</th>
            <th>Tętno 2</th>
            <th>Tętno 3</th>
            <th>Siła </th>
            <th>Gibkość</th>
            <th>Opcje</th>


        </tr>
        @foreach($has_indices as $index)
            <tr>
                <td>{{ $index->id }}</td>
                <td>{{ $index->body_fat  }}</td>
                <td>{{ $index->pulse_1 }}</td>
                <td>{{ $index->pulse_2 }}</td>
                <td>{{ $index->pulse_3 }}</td>
                <td>{{ $index->strength }}</td>
                <td>{{ $index->suppleness  }}</td>
                <td> <a class="btn btn-info" href="{{route('has_indices.edit', $index ->id)}}">Edit</a></td>
                <td>
                    <form method="post" action="{{route('has_indices.destroy', $index ->id)}}">
                        <input name="_method" type="hidden" value="DELETE">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger"  >Delete</button>
                    </form>
                </td>

            </tr>
        @endforeach
    </table>

    {{ $has_indices->links() }}


@endsection