<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\TaskRequest;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tasks =  Task::orderBy('created_at', 'DESC')->get();

        return view('task.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(TaskRequest $request)
    {
       // dd($request->input());
       $task = Task::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'is_active' => $request->input('is_active'),
        ]);

        $taskId = $task->id;
        foreach( $request->input('implementer') as $implementer){
            \DB::table('task_implementer')->insert([
                ['task_id' => $taskId, 'user_id' => $implementer],
            ]);
        }

        foreach( $request->input('owner') as $owner){
            \DB::table('task_owner')->insert([
                ['task_id' => $taskId, 'user_id' => $owner],
            ]);
        }

        // insert moverId into tables task_mover
        \DB::table('task_mover')->insert([
            ['task_id' => $taskId, 'user_id' => $request->input('mover')],
        ]);

        // insert supervisorId into tables task_supervisor
        foreach( $request->input('supervisor') as $supervisor) {
            \DB::table('task_supervisor')->insert([
                ['task_id' => $taskId, 'user_id' => $supervisor],
            ]);
        }

        return redirect('tasks');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $task = Task::findOrFail($id);

        return view('task.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $task = Task::findOrFail($id);

        return view('task.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(TaskRequest $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->update($request->all());

        return redirect('tasks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect('tasks');
    }

    public function toJson()
    {
       $tasks =  Task::orderBy('created_at', 'DESC')->get();
       return $tasks->toJson();
    }

}
