<?php
namespace App\Http;

use App\User;
use App\Http\Requests;
use DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;

class  Helper {

    public static function getDepartments()
    {
        $departments = DB::table('departments')->lists('title');

        return $departments;
    }

    /**
     * Returns active users list
     *
     * @return array
     */
    public static function getUsers()
    {
        // $users = \DB::table('users')->lists('last_name', 'id');
        //$users = \DB::table('users')->get();
        $users = DB::table('users')->select(DB::raw('concat (last_name," ",name) as full_name,id'))->lists('full_name', 'id');

        return $users;
    }


    /**
     * Get users for views of tasks
     *
     * @param $task_id
     * @param $table_name
     * @param string $btn
     * @return null|string
     */
    public static function getEmployers($task_id, $table_name, $btn = 'default')
    {
        $tasks = DB::table($table_name)->where('task_id', $task_id)->get();
        foreach ($tasks as $task) {
            $users[] = DB::table('users')->where('id', $task->user_id)->first();
        }

        $output = null;
        foreach ($users as $user) {
            $output .= '<a class="btn btn-'.$btn.'" href="/user/'. $user->id .'"  >' . $user->last_name . ' ';
            $output .= $user->name. '</a> ';
        }
        return $output;
    }
    /**
     * Return name of user which a task's mover
     *
     * @param $task_id
     * @param $table_name
     * @return mixed
     */
    public static function getEmployeName( $task_id, $table_name)
    {

        $row = DB::table($table_name)->where('task_id', $task_id)->first();
        $user = DB::table('users')->where('id', $row->user_id)->first();

        return $user->name;
    }

    /**
     * Return name of user which a task's mover
     *
     * @param $task_id
     * @param $table_name
     * @return mixed
     */
    public static function getEmployeLastName($task_id, $table_name)
    {
        $row = DB::table($table_name)->where('task_id', $task_id)->first();
        $user = DB::table('users')->where('id', $row->user_id)->first();

        return $user->last_name;
    }


    /**
     * Return a department title
     *
     * @param $department_id
     * @return mixed
     */
    public static function getDepartmentName($department_id)
    {

        $row = DB::table('departments')->where('id', $department_id)->first();

        return $row->title;
    }

    /**
     * @param User $user
     * @return null|string
     */
    public static function getUserTasks(User $user)
    {
        $rows = [];
        $tasks = DB::table('task_implementer')->where('user_id', $user->id)->get();
        foreach ($tasks as $task) {
            $rows[] = DB::table('tasks')->where('id', $task->task_id)->first(); //$task->task_id;
        }
        $output = null;
        foreach($rows as $task) {
            $output .=  '<a href="/task/'. $task->id .'" class="btn btn-info">' . $task->title .'</a> ';
        }

        return $output;
    }

    public static function UserListId($table_name, $task_id)
    {
        $output = DB::table($table_name)->where('task_id', $task_id)->lists('user_id');

        //$output = [3,5];

        return $output;
    }

}


