<?php

namespace App\Http\Controllers;


use App\Models\Editor;
use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function getList()
    {
        $editor = Editor::all();

        return view("editor.list",["editors"=>$editor]);
    }

    public function addEditor(Request $request)
    {
        if($request->isMethod("GET"))
        {
            return view("editor.add");
        }

        $editor = new Editor();
        $arrInput = $request->input('Editor');
        $editor->editor_nu = $arrInput['editor_nu'];
        $editor->editor_name = $arrInput['editor_name'];
        $editor->save();
        return redirect("/editor/index");
    }

    public function delEditor($id)
    {
        $editor = Editor::find($id);
        $result = $editor->delete();
        if($result)
        {
            return redirect("/editor/index");
        }
        return redirect("/editor/index");
    }

    public function editEditor($id)
    {
        $editor = Editor::find($id);
        return view("editor.edit",["editor"=>$editor]);

    }

    public function modifyEditor(Request $request)
    {
        $editors = $request->input("editor");
        $objeditor = new Editor();
        $objeditor->where("_id",$editors['id'])->update($editors);
        return redirect("/editor/index");
    }
}