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
                                <th>标题</th>
                                <th>编辑</th>
                                <th>分类</th>
                                <th>内容</th>
                                <th>国家</th>
                                <th>时间</th>
                                <th>状态</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($news as $new)
                                <tr>
                                    <input type="hidden" id="news_id" name="id" value="{{ $new["_id"] }}"/>
                                    <td>{{ $new["new_title"]}}</td>
                                    <td>{{ $new["new_editor"]}}</td>
                                    <td>{{ $new["new_category"]}}</td>
                                    <td>{{ $new["new_content"] }}</td>
                                    <td>{{ $new["new_country"] }}</td>
                                    <td>{{ $new["updated_time"] }}</td>
                                    <td>{{ $new["new_status"] }}</td>
                                    <td>
                                        @switch($new["new_status"])
                                            @case(0)
                                            <span class="btn-default btn btn-danger op_changeStatus">禁用</span>
                                            @break
                                            @case(1)
                                            <span class="btn-success btn btn-default op_changeStatus">启用</span>
                                            @break
                                            @case(3)
                                            <span class="btn-warning btn btn-default op_changeStatus">待审核</span>
                                            @default
                                            <span class="btn-default btn btn-danger op_changeStatus">禁用</span>
                                        @endswitch
                                    </td>
                                    <td>
                                        <a class="btn btn-success op_view"
                                           href="{{ url('/news/view',['id'=>$new['_id']]) }}">
                                            <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                            详情
                                        </a>
                                        <a class="btn btn-info  op_edit"
                                           href="{{ url('/news/edit',['id'=>$new['_id']]) }}">
                                            <i class="glyphicon glyphicon-edit icon-white"></i>
                                            编辑
                                        </a>
                                        <a class="btn btn-danger op_delete"
                                           href="{{ url('/news/del',['id'=>$new['_id']]) }}">
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
    <script type="text/javascript">
        $(function () {
            // 更改状态
            $(".op_changeStatus").on("click", function () {
                var id = $(this).parent().siblings("#news_id").val();
                $.get("{{ route('changeStatus') }}", {id: id}, function (data) {
                    alert("更改成功！")
                    window.location.reload();
                });
            })
        });

    </script>
@endsection
