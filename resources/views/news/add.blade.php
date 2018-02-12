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
                        <form role="form" method="post" action="{{ url('/news/add') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">新闻标题</label>
                                <input type="text" name="News[title]" class="form-control" id="exampleInputEmail1" placeholder="填写标题" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="selectError">新闻分类</label>
                                <div class="controls">

                                    <select id="selectError" data-rel="chosen" class="box-content" name="News[editor]">
                                        @foreach($editors as $editor )
                                            <option value="{{$editor->editor_nu}}">{{ $editor->editor_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="control-label" for="selectError">新闻分类</label>

                                <div class="controls">
                                    <select id="selectError" data-rel="chosen" class="box-content" name="News[category]">
                                        @foreach($categorys as $category )
                                        <option value="{{$category->category_nu}}">{{ $category->category_name }}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="selectError">新闻发生地</label>

                                <div class="controls">
                                    <select id="selectError" data-rel="chosen" class="box-content" name="News[country]">
                                        @foreach($countrys as $country)
                                        <option value="{{ $country->country_nu }}">{{ $country->country_name }}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- UMeditor start -->
                            <div class="form-group">
                                <label for="exampleInputPassword1">内容编辑</label>
                                <!-- 加载编辑器的容器 -->
                                <script id="container" name="News[content]" type="text/plain">

                                </script>
                                <!-- 实例化编辑器 -->
                                <script type="text/javascript">
                                    $(function () {
                                        // 实例化编辑器
                                        var um = UM.getEditor('container');
                                        // 设置编辑器的宽
                                        um.setWidth(1400);
                                        // 编辑器获得焦点
                                        um.focus();
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