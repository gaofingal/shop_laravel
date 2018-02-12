@extends("layouts.base")
@section("content")
    <div id="content" class="col-lg-10 col-sm-10">
        <!-- content starts -->
        <div>
            <ul class="breadcrumb">
                <li>
                    <a href="#">分类管理</a>
                </li>
                <li>
                    <a href="#">编辑</a>
                </li>
            </ul>
        </div>

        <div class="row">
            <div class="box col-md-12">
                <div class="box-inner">
                    <div class="box-header well" data-original-title="">
                        <h2><i class="glyphicon glyphicon-edit"></i> 添加 </h2>
                    </div>
                    <div class="box-content">
                        <form role="form" method="post" action="{{ url('/editor/edit') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="Editor[id]" value="{{ $editor->_id }}">
                            <div class="form-group">
                                <label for="exampleInputEmail1">分类编号</label>
                                <input type="text" name="Editor[editor_id]" value="{{ $editor->editor_id }}" class="form-control" id="exampleInputEmail1" placeholder="填写分类编号" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">分类名称</label>
                                <input type="text" name="Editor[editor_name]" class="form-control" value="{{ $editor->editor_name }}" id="exampleInputPassword1" placeholder="填写分类名称" required>
                            </div>

                            <button type="submit" class="btn btn-default">提交</button>
                        </form>

                    </div>
                </div>
            </div>
            <!--/span-->

        </div><!--/row-->

    </div>
@endsection