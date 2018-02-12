@extends('layouts.base')
@section('content')
    <div id="content" class="col-lg-10 col-sm-10">
        <div>
            <ul class="breadcrumb">
                <li>
                    <a href="#">国家管理</a>
                </li>
                <li>
                    <a href="#">国家列表</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="box col-md-12">
                <div class="box-inner">
                    <div class="box-header well">
                        <h2><i class="glyphicon glyphicon-th-list"></i> 国家列表</h2>
                    </div>
                    <div class="box-content">
                        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                            <thead>
                            <tr>
                                <th>国家号</th>
                                <th>国家名称</th>
                                <th>时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($countrys as $country)
                                <tr>
                                    <input type="hidden" id="news_id" name="id" value="{{ $country["_id"] }}" />
                                    <td>{{ $country->country_nu}}</td>
                                    <td>{{ $country->country_name }}</td>
                                    <td>{{ $country->updated_time}}</td>
                                    <td>
                                        <a class="btn btn-info  op_edit" href="{{ url('/country/edit',['id'=>$country['_id']]) }}">
                                            <i class="glyphicon glyphicon-edit icon-white"></i>
                                            编辑
                                        </a>
                                        <a class="btn btn-danger op_delete" href="{{ url('/country/del',['id'=>$country['_id']]) }}">
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
