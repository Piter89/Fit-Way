@extends('layout')

@section('content')


    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>USER</th>
            <th>TEXT</th>
            <th>DATE</th>
            <th>ABOUT ARTICLE</th>
        </tr>
        @foreach($comments as $comment)
            <tr>
                <td>{{ $comment->id }}</td>
                <td>{{ $comment->user_name  }}</td>
                <td>{{ $comment->text  }}</td>
                <td>{{ $comment->date  }}</td>
                <td>{{ $comment->article_id  }}</td>
                <td> <a class="btn btn-info" href="{{route('articles.edit', $comment ->id)}}">Edit</a></td>
                <td>
                    <form method="post" action="{{route('articles.destroy', $comment ->id)}}">
                        <input name="_method" type="hidden" value="DELETE">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger"  >Delete</button>
                    </form>
                </td>

            </tr>
        @endforeach
    </table>

    {{ $comments->links() }}


@endsection