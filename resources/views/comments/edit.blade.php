@extends('layout')

@section('content')

    <form action="{{route('comments.update', $comments ->id)}}" method="post">
        <input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}
        <label>Edytuj stronę</label>

        <input type="text" name="user_name" value = "{{$comments->user_name}}" class="form-control" id="title" placeholder="tytuł strony">
        <textarea name="text" class="form-control" placeholder="treść strony" rows="3"> {{$comments->text}}</textarea>
        <div class="form-group">
            <select class="form-control" name="article_id">
                @foreach($articles as $article)
                    @if($article->id == $article->title)
                        <option selected ="selected" value="{{ $article->id  }}">{{ $article->title }}</option>
                    @else
                        <option value="{{ $article->id  }}">{{ $article->title }}</option>

                    @endif
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Edytuj</button>




    </form>



@endsection