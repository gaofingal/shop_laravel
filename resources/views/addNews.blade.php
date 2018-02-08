@extends("layouts.base")
@section("content")
    <div id="content" class="col-lg-10 col-sm-10">
        <!-- content starts -->
        <div>
            <ul class="breadcrumb">
                <li>
                    <a href="#">新闻管理</a>
                </li>
                <li>
                    <a href="#">添加</a>
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
                        <form role="form" method="post" action="{{ route('add') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">新闻标题</label>
                                <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="填写标题" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">编辑人</label>
                                <input type="text" name="editor" class="form-control" id="exampleInputPassword1" placeholder="填写编辑人" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="selectError">新闻分类</label>

                                <div class="controls">
                                    <select id="selectError" data-rel="chosen" class="box-content" name="category">
                                        <option value="0" selected>热点</option>
                                        <option value="1">社会</option>
                                        <option value="2">国际</option>
                                        <option value="3">体育</option>
                                        <option value="4">民生</option>
                                    </select>
                                </div>
                            </div>
                            <!-- UMeditor start -->
                            <div class="form-group">
                                <label for="exampleInputPassword1">内容编辑</label>
                                <!-- 加载编辑器的容器 -->
                                <script id="container" name="content" type="text/plain">

                                </script>
                                <!-- 实例化编辑器 -->
                                <script type="text/javascript">
                                    $(function () {
                                        // 实例化编辑器
                                        var um = UM.getEditor('container');
                                        // 设置编辑器的宽
                                        um.setWidth(1400);
                                    });
                                </script>
                            </div>
                            <!-- UMeditor end -->
                            <button type="submit" class="btn btn-default">提交</button>
                        </form>

                    </div>
                </div>
            </div>
            <!--/span-->

        </div><!--/row-->

    </div>
    @endsection