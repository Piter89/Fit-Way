@extends('layout')

@section('content')

    <form action="{{route('articles.store')}}" method="post">

        {{ csrf_field() }}
        <label>Dodaj stronę</label>

        <input type="text" name="title" class="form-control" id="title" placeholder="tytuł strony">
        <textarea name="content" class="form-control" placeholder="treść strony" rows="3"></textarea>
        <div class="form-group">
            <select class="form-control" name="pages_id">
                @foreach($pages as $page)
                    @if($page->id == $page->pages_id)
                        <option selected ="selected" value="{{ $page->id  }}">{{ $page->name }}</option>
                    @else
                        <option value="{{ $page->id  }}">{{ $page->name }}</option>


                    @endif
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Dodaj</button>



    </form>



@endsection