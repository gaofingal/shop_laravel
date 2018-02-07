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


    /**
     * 获取所有的新闻
     *
     * @return mixed
     */
    public static function getAllNews()
    {
        $users = DB::collection('news')->get();

        // 验证查库结果

        // 返回结果
        return $users;
    }

    /**
     * 移除新闻
     *
     * @param $id
     */
    public static function remove($id)
    {
        $user = DB::collection('users')->where('_id', $id)->first();
        DB::collection("news")->get();
    }

    /**
     * 编辑新闻
     *
     * @param News $news
     */
    public static function edit(News $news)
    {

    }

    /**
     * 增加新闻
     */
    public static function add()
    {

    }
}