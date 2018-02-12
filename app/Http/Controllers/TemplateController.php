<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/11 0011
 * Time: 15:51
 */

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Models\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function getList()
    {
        $template = Template::all();

        return view("template.list",["templates"=>$template]);
    }

    public function addTemplate(Request $request)
    {
        if($request->isMethod("GET"))
        {
            return view("template.add");
        }

        $template = new Template();
        $arrInput = $request->input('template');
        $template->template_nu = $arrInput['template_nu'];
        $template->template_name = $arrInput['template_name'];
        $template->save();
        return redirect("/template/index");
    }

    public function delTemplate($id)
    {
        $template = Template::find($id);
        $result = $template->delete();
        if($result)
        {
            return redirect("/template/index");
        }
        return redirect("/template/index");
    }

    public function editTemplate($id)
    {
        $template = Template::find($id);
        return view("template.edit",["template"=>$template]);

    }

    public function modifyTemplate(Request $request)
    {
        $templates = $request->input("template");
        $objTemplate = new Template();
        $objTemplate->where("_id",$templates['id'])->update($templates);
        return redirect("/template/index");
    }


}