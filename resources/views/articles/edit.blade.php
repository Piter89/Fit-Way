@extends('layout')

@section('content')

    <form action="{{route('articles.update', $articles ->id)}}" method="post">
        <input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}
        <label>Edytuj stronę</label>

        <input type="text" name="title" value = "{{$articles->title}}" class="form-control" id="title" placeholder="tytuł strony">
        <textarea name="content" class="form-control" placeholder="treść strony" rows="3"> {{$articles->content}}</textarea>
        <div class="form-group">
            <select class="form-control" name="pages_id">
                @foreach($pages as $page)
                    @if($page->id == $articles->title)
                        <option selected ="selected" value="{{ $page->id  }}">{{ $page->name }}</option>
                    @else
                        <option value="{{ $page->id  }}">{{ $page->name }}</option>


                    @endif
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Edytuj</button>




    </form>



@endsection