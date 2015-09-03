<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'stages';

    public static function statusCreate()
    {
        $stage = Stage::where('id', '=', 1)->firstOrFail();;
        return  $stage->stage;
    }

}
