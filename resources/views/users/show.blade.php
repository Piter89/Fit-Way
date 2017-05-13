@extends('index')

@section('content')

    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dane użytkownika</div>

                    <img src="{{ asset('storage/users/' . $user->id . '/avatars/' . $user->avatar) }}" alt="" class="img-responsive">
                    <div class="panel-body text-center">
                        <h2><a href="{{ url('/users/' . $user->id) }}">{{ $user->name }}</a></h2>

                        <p>
                            @if ($user->sex == 'm')
                                Mężczyzna
                            @else
                                Kobieta
                            @endif
                        </p>
                        <p>{{ $user->email }}</p><br>

                        @if ($user->id === Auth::id())

                        <a class="btn btn-info" href="{{route('users.edit', $user ->id)}}">Edytuj dane użytkownika</a></td>
                            @endif
                    </div>
                </div>

            </div>

            <div class="col-md-5">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae molestias repellat earum amet adipisci obcaecati! Consequatur, voluptatem, harum? Quis commodi unde assumenda neque doloribus cum suscipit, dolorum dolor itaque harum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection