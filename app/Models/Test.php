<?php


namespace App\Models;


use Illuminate\Support\Facades\DB;
use Jenssegers\Mongodb\Eloquent\Model ;

class Test extends Model
{
    /**
     * 获取所有的数据
     */
    public static function getAllNews() {

        $users = parent::all();
        $users = DB::collection('users')->get();
        var_dump($users);
    }

}