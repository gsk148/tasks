@extends('layout')

@section('title')
    Мои текущие задачи
@stop

@section('mainContent')
    <h3>Мои текущие задачи</h3>

    {{-- Request data for output  --}}
    {{--*/  $implementer_tasks = App\Http\Helper::myTasks(Auth::user()->id, 'task_implementer')  /*--}}
    {{--*/  $owner_tasks = App\Http\Helper::myTasks(Auth::user()->id, 'task_owner')  /*--}}
    {{--*/  $mover_tasks = App\Http\Helper::myTasks(Auth::user()->id, 'task_mover')  /*--}}
    {{--*/  $supervisor_tasks = App\Http\Helper::myTasks(Auth::user()->id, 'task_supervisor')  /*--}}
    <table class="table table-bordered">
        <thead>
            <th>Задача</th>
            <th>Описание</th>
            <th>Статус</th>
            <th>Создана</th>
        </thead>

    @foreach ($implementer_tasks as $task)

            <tr>
                <td> <a href="task/{{ $task->id }}"> {!!  $task->title  !!} </a></td>
                <td>{!! str_limit($task->description, 50)  !!}</td>
                <td>{!!  $task->is_active  !!}</td>
                <td>{!!  $task->id  !!}</td>
            </tr>
    @endforeach
    </table>

    <h3>Задачи, касающиеся моих бизнес-процессов</h3>
    <table class="table table-bordered">
        <thead>
        <th>Задача</th>
        <th>Описание</th>
        <th>Статус</th>
        <th>Создана</th>
        </thead>

        @foreach ($owner_tasks as $task)

            <tr>
                <td><a href="task/{{ $task->id }}"> {!!  $task->title  !!} </a></td>
                <td>{!!  str_limit($task->description, 50)  !!}</td>
                <td>{!! App\Http\Helper::taskStatus($task->id)  !!}</td>
                <td>{!!  $task->created_at  !!}</td>
            </tr>
        @endforeach
    </table>

    <h3>Задачи, созданные мной</h3>
    <table class="table table-bordered">
        <thead>
        <th>Задача</th>
        <th>Описание</th>
        <th>Статус</th>
        <th>Создана</th>
        </thead>

        @foreach ($mover_tasks as $task)

            <tr>
                <td><a href="task/{{ $task->id }}"> {!!  $task->title  !!} </a></td>
                <td>{!! str_limit($task->description, 50)  !!}</td>
                <td>{!!  $task->is_active  !!}</td>
                <td>{!!  $task->id  !!}</td>
            </tr>
        @endforeach
    </table>

    <h3>Задачи под моим контролем</h3>
    <table class="table table-bordered">
        <thead>
        <th>Задача</th>
        <th>Описание</th>
        <th>Статус</th>
        <th>Создана</th>
        </thead>

        @foreach ($supervisor_tasks as $task)

            <tr>
                <td><a href="task/{{ $task->id }}"> {!!  $task->title  !!} </a></td>
                <td>{!! str_limit($task->description, 50)  !!}</td>
                <td>{!!  $task->is_active  !!}</td>
                <td>{!!  $task->id  !!}</td>
            </tr>
        @endforeach
    </table>

  @stop