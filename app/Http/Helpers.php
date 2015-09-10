<?php
namespace App\Http;

use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;

class  Helper {

    public static function getImplementersSelect()
    {
        $users = User::orderBy('last_name')->where('department', '=', 'ОПР')->get();
        $implementers = '<select multiple="multiple" class="form-control" name="implementer" id="implementer" size="2"><optgroup label="ОПР">';
        foreach ($users as $user => $value)
        {
            $implementers .= '<option>'. $value->last_name .' '. $value->name .'</option>';
        }
        $implementers .= '</optgroup></select>';

        return $implementers;
    }

    /**
     * @return string
     */
    public static function getOwnerSelect()
    {
        $users = User::orderBy('department')->get();
        $owners = '<select multiple="multiple" class="form-control" name="owners" id="owners" size="2">';
        foreach ($users as $user => $value)
        {
            $owners .= '<option>' . $value->last_name .' '. $value->name . '</option>';
        }
        $owners .= '</select>';

        return $owners;
    }

    public static function getUsersListSelect()
    {
        $departments = self::departmentsList();
        $output = '';
        foreach ($departments as $key => $value)
        {

            $users = User::orderBy('last_name')->where('department', '=', $value)->get();

            $output .= '<optgroup label= "'. $value .'">';
            foreach ($users  as $user => $val)
            {
                $output .= '<option>' . $val->last_name . ' '. $val->name . ' - ' . $val->position .'</option>';
            }
            $output .= '</optgroup>';
        }

        return $output;
    }

    public function getOwner()
    {

    }
    /**
     * Getting a list of department
     *
     * @return array
     */
    private static function departmentsList()
    {
        $users = User::orderBy('department')->where('department', '!=', '')->groupBy('department')->get();
        $departments = [];
        foreach ($users as $user => $value )
        {
            $departments[] = $value->department;
        }

        return $departments;
    }

}


