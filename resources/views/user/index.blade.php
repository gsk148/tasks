@extends('layout')

@section('title')
   Список пользователей системы
@stop

@section('mainContent')
    @include('partials.flash')
    <h1>Список пользователей системы</h1>
    @if($users)
        <table class="table table-bordered table-hover">
                <tr>
                    <th>Имя</th>
                    <th>Подразделение</th>
                    <th>Должность</th>
                    <th>E-mail</th>
                </tr>
        @foreach($users as $user)
                <tr>
                    <td><a href="user/{{ $user->id }}"> {!! $user->name !!} {!! $user->last_name !!} </a></td>
                    <td>{!! App\Http\Helper::getDepartmentName($user->department_id)  !!}</td>
                    <td>{!! $user->position !!}</td>
                    <td>{!! $user->email !!}</td>
                </tr>
        @endforeach
        </table>
        {!! $users->render() !!}
    @else
        <p>Нет активных пользователей</p>
    @endif

@stop
