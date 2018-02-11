<?php


namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Country;
use App\Models\Editor;
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
        $newsModel = new News();
        $news = $newsModel->all();

        return view('news.list', ["news" => $news]);
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
            return redirect("/admin/news/index")->with("success", "删除成功");
        } else {
            return redirect("/admin/news/index")->with("error", "删除失败");
        }
    }

    /**
     * 根据id重新编辑该新闻
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function editNews($id)
    {
        $news = News::find($id);
        return view('news.edit', ["news" => $news]);
    }

    public function modifyNews(Request $request)
    {
        $arrInput = $request->input("News");
        $News = new News();
        $result = $News->where("_id", $arrInput["id"])->update($arrInput);
        if ($result > 0) {
            return redirect("/news/index");
        }
        return redirect("/news/index");
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
            $category = Category::all();
            $editor = Editor::all();
            $country = Country::all();

            return view("news.add",[
                "categorys"=>$category,
                "editors"=>$editor,
                "countrys"=>$country
            ]);
        }

        $arrInput = $request->input("News");

        $News = new News();
        $News->new_title = $arrInput["title"];
        $News->new_content = $arrInput["content"];
        $News->new_editor = $arrInput["editor"];
        $News->new_country = $arrInput["country"];
        $News->new_category = $arrInput["category"];
        $News->new_status = 0;
        $result = $News->save();
        if ($result) {
            return redirect("/news/index");
        } else {
            return redirect("/news/add");
        }
    }

    /**
     *  改变新闻状态
     * @param Request $request
     * @return array
     */
    public function changeStatus(Request $request)
    {
        $id = $request->input("id");
        $objNews = News::find($id);
        $oldStatus = $objNews->new_status;
        $updateStatus = $oldStatus === 1 ? 2 : 1;
        $objNews->new_status = $updateStatus;
        $objNews->save();
        return $objNews;

    }

    public function getListNews()
    {
        $newModel = new Category();
        $news = $newModel->all();
        $arrNews = [];
        foreach ($news as $new){
            $item = [
                "uId"=>$new->category_nu,
                "title"=>$new->category_name,
                "date"=>$new->category_name,
                "read_count"=>"0",
                "comment_count"=>"0",
                "author_name"=>$new->category_name,
                "author_id"=>$new->category_name,
            ];
            array_push($arrNews,$item);
        }
        return response()->json([
            "error_code"=>0,
            "result_code"=>200,
            "message"=>"Success",
            "result"=>["data"=>$arrNews]
        ]);
    }

}