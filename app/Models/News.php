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

    public $collection = 'news';

    /**
     * The name of the "created at" column.
     *
     * @var string
     */
    const CREATED_AT = 'created_time';

    /**
     * The name of the "updated at" column.
     *
     * @var string
     */
    const UPDATED_AT = 'updated_time';


    /**
     * 获取所有的新闻
     *
     * @return mixed
     */
    public static function getAllNews()
    {
        $users = DB::collection('news')->orderBy('create_time', 'desc')->get();

        // 验证查库结果

        // 返回结果
        return $users;
    }


    /**
     * 编辑新闻
     *
     * @param News $news
     */
    public static function edit(News $news)
    {

    }

}