<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/11 0011
 * Time: 10:40
 */

namespace App\Http\Controllers;


use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getList()
    {
        $category = Category::all();

        return view("category.list",["categorys"=>$category]);
    }

    public function addCate(Request $request)
    {
        if($request->isMethod("GET"))
        {
            return view("category.add");
        }

        $category = new Category();
        $arrInput = $request->input('Category');
        $category->category_nu = $arrInput['category_nu'];
        $category->category_name = $arrInput['category_name'];
        $category->save();
        return redirect("/category/index");
    }

    public function delCate($id)
    {
        $category = Category::find($id);
        $result = $category->delete();
        if($result)
        {
            return redirect("/category/index");
        }
        return redirect("/category/index");
    }

    public function editCate($id)
    {
        $category = Category::find($id);
        return view("category.edit",["category"=>$category]);

    }

    public function modifyCate(Request $request)
    {
        $categorys = $request->input("Category");
        $objCategory = new Category();
        $objCategory->where("_id",$categorys['id'])->update($categorys);
        return redirect("/category/index");
    }

    public function getListCategory()
    {
        $categoryModel = new Category();
        $categorys = $categoryModel->all();
        $arrCategorys = [];
        foreach ($categorys as $category){
            $item = [
                "uId"=>$category->category_nu,
                "name"=>$category->category_name,
            ];
            array_push($arrCategorys,$item);
        }
        return response()->json([
            "error_code"=>0,
            "result_code"=>200,
            "message"=>"Success",
            "result"=>["data"=>$arrCategorys]
        ]);
    }
}
