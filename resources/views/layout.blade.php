//layout dla CMSa




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Witaj w świecie Fit Way - drogi do sprawności</title>
    <meta name ="description" content="Serwis w pełni poświęcony trosce o sprawność fizyczną przydatny użytkownikom pragnącym kontrolować podstawowe parametry sprawności fizyczne za pomocą prostych metod">
    <meta name="keywords" content="sprawność, zdrowie,testy sprawnościowe, wydolność, siła gibkość,procent tłuszczu, samopoczucie">
    <meta name="author" content="Piotr Konieczny">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <script  src="/js/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="/css/jquery-ui.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="flex-center position-ref full-height">

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ url('/pages') }}">Kategorie</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{url('/articles')}}">Artykuły</a></li>
                <li><a href="{{url('/comments')}}">Komentarze</a></li>
                <li><a href="{{url('/users')}}">Użytkownicy</a></li>
                <li><a href="{{url('/data')}}">Dane użytkownika</a></li>
                <li><a href="{{url('/indices')}}">Wskaźniki sprawności</a></li>

            </ul>
        </div>
    </nav>

    <div>


    </div>

<div class="container">
    @yield('content')
</div>
</body>
</html>
