@extends('layout')

@section('content')


    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>TREŚC</th>
            <th>OPTIONS</th>
        </tr>
        @foreach($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->title  }}</td>
                <td>{{ $article->content  }}</td>
                <td>{{ $article->pages_id  }}</td>
                <td> <a class="btn btn-info" href="{{route('articles.edit', $article ->id)}}">Edit</a></td>
                <td>
                    <form method="post" action="{{route('articles.destroy', $article ->id)}}">
                        <input name="_method" type="hidden" value="DELETE">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger"  >Delete</button>
                    </form>
                </td>

            </tr>
        @endforeach
    </table>

    {{ $articles->links() }}


@endsection