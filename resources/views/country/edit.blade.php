@extends("layouts.base")
@section("content")
    <div id="content" class="col-lg-10 col-sm-10">
        <!-- content starts -->
        <div>
            <ul class="breadcrumb">
                <li>
                    <a href="#">国家管理</a>
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
                        <form role="form" method="post" action="{{ url('/country/edit') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="country[id]" value="{{ $country->_id }}">
                            <div class="form-group">
                                <label for="exampleInputEmail1">国家编号</label>
                                <input type="text" name="country[country_id]" value="{{ $country->country_id }}" class="form-control" id="exampleInputEmail1" placeholder="填写国家编号" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">国家名称</label>
                                <input type="text" name="country[country_name]" class="form-control" value="{{ $country->country_name }}" id="exampleInputPassword1" placeholder="填写国家名称" required>
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