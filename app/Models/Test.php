<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/5 0005
 * Time: 14:32
 */

namespace App\Models;


use Illuminate\Support\Facades\DB;
use Jenssegers\Mongodb\Eloquent\Model;

class Test extends Model
{
    protected $collection = 'users';
    protected $connection = 'test';

    public static function test() {
        $users = DB::collection('users')->get();
        var_dump($users);
    }

}