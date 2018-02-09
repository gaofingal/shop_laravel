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
    public function getList()
    {
        $result = News::getAllNews();

        // 验证获取的数据
//        var_dump($result);exit;
        // 验证成功返回数据并渲染
        return view('news.list', ["arrNews" => $result]);
    }

    /**
     * 根据新闻id删除一条新闻
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delNews($id)
    {
        $news = News::find($id);
        // 删除结果
        if ($news->delete()) {
            return redirect("/admin/news/index")->with("success","删除成功");
        }else{
            return redirect("/admin/news/index")->with("error","删除失败");
        }
    }

    /**
     * 根据id重新编辑该新闻
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function editNews(Request $request, $id)
    {
        dd($request);exit;
        if($request->isMethod("POST"))
        {
            $arrInput = $request->input("News");
            $News = new News();
            $News->title = $arrInput["title"];
            $News->content = $arrInput["content"];
            $News->editor = $arrInput["editor"];
            $News->country = $arrInput["country"];
            $News->category = $arrInput["category"];
            $result = $News->save();
            var_dump($result);exit;
            if($result)
            {
                return redirect('/admin/news/index');
            }
        }
        $news = News::find($id);
        return view('news.edit',["news"=>$news]);
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
            return view("news.add");
        }

        $arrInput = $request->input("News");

        $News = new News();
        $News->title = $arrInput["title"];
        $News->content = $arrInput["content"];
        $News->editor = $arrInput["editor"];
        $News->country = $arrInput["country"];
        $News->category = $arrInput["category"];
        $News->status = 0;
        $result = $News->save();
        if($result)
        {
            return redirect("/admin/news/index");
        }else{
            return redirect("/admin/news/add");
        }
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

}