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
                    <div class="box-header well" data-original-title="">
                        <h2><i class="glyphicon glyphicon-user"></i> Datatable + Responsive</h2>

                        <div class="box-icon">
                            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                        class="glyphicon glyphicon-chevron-up"></i></a>
                            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                            <thead>
                            <tr>
                                <th>标题</th>
                                <th>时间</th>
                                <th>内容</th>
                                <th>状态</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($arrNews as $new)
                                <tr>
                                    <td>{{ $new["title"]}}</td>
                                    <td>{{ $new["create_time"] }}</td>
                                    <td>{{ $new["content"] }}</td>
                                    <td>
                                        @switch($new["status"])
                                            @case(0)
                                            <span class="label-default label label-danger">Banned</span>
                                            @break
                                            @case(1)
                                            <span class="label-success label label-default">Active</span>
                                            @break
                                            @case(3)
                                            <span class="label-warning label label-default">Pending</span>
                                            @default
                                            <span class="label-default label label-danger">Banned</span>
                                        @endswitch
                                    </td>
                                    <td>
                                        <a class="btn btn-success" href="#">
                                            <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                            详情
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="glyphicon glyphicon-edit icon-white"></i>
                                            编辑
                                        </a>
                                        <a class="btn btn-danger" href="#">
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