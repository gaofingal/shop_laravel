<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/11 0011
 * Time: 11:24
 */

namespace App\Models;


use Jenssegers\Mongodb\Eloquent\Model;

class Editor extends Model
{
    public $collection = 'editor';

    public $timestamps  = true;


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

    protected function getDateFormat()
    {
        return time();
    }

    protected function asDateTime($value)
    {
        return $value;
    }
}