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
        $users = DB::collection('news')->orderBy('create_time', 'desc')->get();

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
        $user = DB::collection('news')->where('_id', $id)->delete();


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
     *
     * @param array $arrInput
     * @return array
     */
    public static function add(array $arrInput = [])
    {
        if (count($arrInput) == 0) {
            return ['1', 'parameter is empty'];
        }
        $result = DB::collection("news")->insert($arrInput);
        return $result;
    }

}