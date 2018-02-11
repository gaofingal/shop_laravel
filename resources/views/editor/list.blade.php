@extends('layouts.base')
@section('content')
    <div id="content" class="col-lg-10 col-sm-10">
        <div>
            <ul class="breadcrumb">
                <li>
                    <a href="#">主菜单</a>
                </li>
                <li>
                    <a href="#">新闻汇总</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="box col-md-12">
                <div class="box-inner">
                    <div class="box-header well">
                        <h2><i class="glyphicon glyphicon-th-list"></i> 新闻列表</h2>
                    </div>
                    <div class="box-content">
                        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                            <thead>
                            <tr>
                                <th>栏目号</th>
                                <th>栏目名称</th>
                                <th>时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($editors as $editor)
                                <tr>
                                    <input type="hidden" id="news_id" name="id" value="{{ $editor["_id"] }}" />
                                    <td>{{ $editor->editor_nu}}</td>
                                    <td>{{ $editor->editor_name }}</td>
                                    <td>{{ $editor->updated_time}}</td>
                                    <td>
                                        <a class="btn btn-success op_view" href="{{ url('/category/view',['id'=>$editor['_id']]) }}">
                                            <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                            详情
                                        </a>
                                        <a class="btn btn-info  op_edit" href="{{ url('/category/edit',['id'=>$editor['_id']]) }}">
                                            <i class="glyphicon glyphicon-edit icon-white"></i>
                                            编辑
                                        </a>
                                        <a class="btn btn-danger op_delete" href="{{ url('/category/del',['id'=>$editor['_id']]) }}">
                                            <i class="glyphicon glyphicon-trash icon-white"></i>
                                            删除
                                        </a>
                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
