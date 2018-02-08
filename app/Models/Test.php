<?php


namespace App\Models;


use Illuminate\Support\Facades\DB;
use Jenssegers\Mongodb\Eloquent\Model ;

class Test extends Model
{
    /**
     * 获取所有的数据
     */
    public static function index() {

       $arr = [
           'name'=>"gao",
           'age'=>12,
           'sex'=>0,
           'city'=>"chengdu",
           'hobby'=>"football",
       ];

       $result_insert = DB::collection("test")->insert($arr);
       var_dump($result_insert);
        $result_get = DB::collection("test")->get();
        var_dump($result_get);
        exit;
    }

}