<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/6 0006
 * Time: 14:27
 */

namespace App\Models;


use Illuminate\Support\Facades\DB;
use Jenssegers\Mongodb\Eloquent\Model;

class News extends Model
{

    protected $collection = 'news';


    public static function getAllNews()
    {
        $users = DB::collection('news')->get();

        // 验证查库结果

        // 返回结果
        return $users;
    }

    public static function remove($id)
    {
        $user = DB::collection('users')->where('_id', $id)->first();
        DB::collection("news")->get();
    }

    public static function edit()
    {

    }
}