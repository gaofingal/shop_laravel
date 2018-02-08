<?php


namespace App\Http\Controllers;


use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{

    /**
     * 获取所有的新闻
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $result = News::getAllNews();

        // 验证获取的数据


        // 验证成功返回数据并渲染
        return view('news', ["arrNews" => $result]);
    }

    /**
     * 根据新闻id删除一条新闻
     *
     * @param Request $request
     * @param $id
     * @return void
     */
    public function removeNewsById(Request $request, $id)
    {
        $news = News::find($id);
        // 删除结果
        if ($news->delete()) {
            return redirect("/news")->with("success","删除成功");
        }else{
            return redirect("/news")->with("error","删除失败");
        }
    }

    /**
     * 根据id重新编辑该新闻
     */
    public function editNewsById()
    {

    }

    /**
     * 添加一条新闻
     *
     * @param Request $request
     * @return bool|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function addNews(Request $request)
    {
        $strMethod = $request->getMethod();
        if (strtolower($strMethod) === "get") {
            return view("addNews");
        }

        $strTitle = $request->input("title");
        $strEditor = $request->input("editor");
        $intCategory = $request->input("category");
        $textContent = $request->input("content");

        $arrInput = [
            "title" => $strTitle,
            "editor" => $strEditor,
            "content" => $textContent,
            "create_time" => date("Y-m-d H:i:s"),
            "category_id" => $intCategory,
            "status" => 0
        ];
        $result = News::add($arrInput);


        if ($result) {
            return view('addNews');
        }
        return false;
    }

    /**
     *  改变新闻状态
     * @param Request $request
     */
    public function changeStatus(Request $request)
    {
        $id = $request->input("id");
        $objNews = News::find($id);
        $oldStatus = $objNews->status;
        $updateStatus = $oldStatus === 1 ? 2 : 1;
        $objNews->status = $updateStatus;
        $objNews->save();
        return $objNews;

    }


    public function getList()
    {
        $result = News::getAllNews();

        // 验证获取的数据


        // 验证成功返回数据并渲染
        return view('news', ["arrNews" => $result]);
    }

}