<?php


namespace App\Http\Controllers;


use App\Models\News;

class NewsController extends Controller
{

    /**
     * 获取所有的新闻
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $result = News::getAllNews();

        // 验证获取的数据


        // 验证成功返回数据并渲染
        return view('news',["arrNews"=>$result]);
    }

    public function removeNewsById($id)
    {
        $result = News::deleted($id);

        // 删除结果

        return view("news");
    }


    public function editNewsById()
    {

    }


    public function addNew()
    {

    }

}