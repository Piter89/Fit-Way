@extends('layout')

@section('content')
        <!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Case</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('/pages') }}">Kategorie</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{url('/articles')}}">Artykuły</a></li>
            <li><a href="#">Komentarze</a>{{url('/comments')}}</li>
            <li><a href="#">Użytkownicy</a></li>
            <li><a href="#">Dane użytkownika</a></li>
        </ul>
    </div>
</nav>

<div class="container">
    <h3>Inverted Navbar</h3>
    <p>An inverted navbar is black instead of gray.</p>
</div>

</body>
</html>


@endsection