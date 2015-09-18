@extends('layout')

@section('title')
    Мои текущие задачи
@stop

@section('mainContent')
    <h2>Мои текущие задачи</h2>
    {{-- */ $myTasksimplementerId = \DB::table('task_implementer')->select('task_id')->where('user_id', '=', Auth::user()->id)->get() /* --}}
    @foreach ($myTasksimplementerId as $ids)
        {{ $task_id[] =  $ids->task_id }}
    @endforeach
  @stop
