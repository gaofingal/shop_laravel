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

    public $timestamps = true;


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
        $result = DB::collection('news')
            ->leftjoin("country", "news.new_country", "=", "country.country_nu")
            ->leftjoin("editor", "news.new_editor", "=", "country.editor_nu")
            ->leftjoin("category", "news.new_country", "=", "country.category_nu")
            ->select("news.*","country.country_name","editor.editor_name","category.category_name")
            ->get();
//        $result = DB::collection('news')->select("new_title","_id","new_content")->get();

        // 验证查库结果

        // 返回结果
        return $result;
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