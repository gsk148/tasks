@extends('layout')

@section('title')
    Информация о пользователе {!! $user->name !!}
@stop

@section('mainContent')
    <h3>Информация о пользователе {!! $user->name !!}</h3>

    @foreach(App\User::find(1)->roles as $user)
            {{--*/ $role  = $user->role_title /*--}}
            @if($role == 'admin')
                <p>Вы авторизованы, как <strong>{{ $role }}</strong></p>
            @endif
            @if (Auth::user())
                {!! Auth::user()->id !!}
            @else
                <div class="alert alert-danger">User is not logged!</div>
            @endif
    @endforeach

@stop
