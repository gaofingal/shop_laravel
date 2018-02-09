<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>东亚新闻后端管理</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="{{ asset('charisma/css/bootstrap-cerulean.min.css') }}" rel="stylesheet">

    <link href="{{ asset('charisma/css/charisma-app.css') }}" rel="stylesheet">
    <link href="{{ asset('charisma/bower_components/fullcalendar/dist/fullcalendar.css') }}" rel='stylesheet'>
    <link href="{{ asset('charisma/bower_components/fullcalendar/dist/fullcalendar.print.css') }}" rel='stylesheet'
          media='print'>
    <link href="{{ asset('charisma/bower_components/chosen/chosen.min.css') }}" rel='stylesheet'>
    <link href="{{ asset('charisma/bower_components/colorbox/example3/colorbox.css') }}" rel='stylesheet'>
    <link href="{{ asset('charisma/bower_components/responsive-tables/responsive-tables.css') }}" rel='stylesheet'>
    <link href="{{ asset('charisma/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css') }}"
          rel='stylesheet'>
    <link href="{{ asset('charisma/css/jquery.noty.css') }}" rel='stylesheet'>
    <link href="{{ asset('charisma/css/noty_theme_default.css') }}" rel='stylesheet'>
    <link href="{{ asset('charisma/css/elfinder.min.css') }}" rel='stylesheet'>
    <link href="{{ asset('charisma/css/elfinder.theme.css') }}" rel='stylesheet'>
    <link href="{{ asset('charisma/css/jquery.iphone.toggle.css') }}" rel='stylesheet'>
    <link href="{{ asset('charisma/css/uploadify.css') }}" rel='stylesheet'>
    <link href="{{ asset('charisma/css/animate.min.css') }}" rel='stylesheet'>

    <!-- UMeditor Css -->
    <link href="{{ asset('umeditor/themes/default/css/umeditor.css') }}" type="text/css" rel="stylesheet">

    <!-- jQuery -->
    <script src="{{ asset('charisma/bower_components/jquery/jquery.min.js') }}"></script>


    <!-- The fav icon -->
    <link rel="shortcut icon" href="{{ asset('charisma/img/favicon.ico') }}">

</head>

<body>
<!-- topbar starts -->
<div class="navbar navbar-default" role="navigation">

    <div class="navbar-inner">
        <button type="button" class="navbar-toggle pull-left animated flip">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"> <img alt="Charisma Logo"
                                               src="{{ asset('charisma/img/logo20.png') }}"
                                               class="hidden-xs"/>
            <span>Charisma</span></a>

        <!-- user dropdown starts -->
        <div class="btn-group pull-right">
            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">Profile</a></li>
                <li class="divider"></li>
                <li><a href="">Logout</a></li>
            </ul>
        </div>

    </div>
</div>

<!-- topbar ends -->
<div class="ch-container">
    <div class="row">

        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> 新闻</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="{{ url("/admin/news/index") }}">新闻汇总</a></li>
                                <li class="accordion">
                                    <a href="#"><i class="glyphicon glyphicon-plus"></i><span> 新闻分类</span></a>
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#">社会</a></li>
                                        <li><a href="#">国际</a></li>
                                        <li><a href="#">体育</a></li>
                                        <li><a href="#">民生</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> 新闻管理</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="{{ url('/admin/news/add') }}">添加</a></li>
                            </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> 账号管理</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">账号列表</a></li>
                            </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Accordion Menu</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Child Menu 1</a></li>
                                <li><a href="#">Child Menu 2</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->
        <!-- content start -->
    @yield('content')
    <!-- content end -->


    </div><!--/fluid-row-->


    <hr>


    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://usman.it" target="_blank">Muhammad
                Usman</a> 2012 - 2015</p>
        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                    href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
    </footer>

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="{{ asset('charisma/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- library for cookie management -->
<script src="{{ asset('charisma/js/jquery.cookie.js') }}"></script>
<!-- calender plugin -->
<script src="{{ asset('charisma/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('charisma/bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
<!-- data table plugin -->
<script src="{{ asset('charisma/js/jquery.dataTables.min.js') }}"></script>

<!-- select or dropdown enhancer -->
<script src="{{ asset('charisma/bower_components/chosen/chosen.jquery.min.js') }}"></script>
<!-- plugin for gallery image view -->
<script src="{{ asset('charisma/bower_components/colorbox/jquery.colorbox-min.js') }}"></script>
<!-- notification plugin -->
<script src="{{ asset('charisma/js/jquery.noty.js') }}"></script>
<!-- library for making tables responsive -->
<script src="{{ asset('charisma/bower_components/responsive-tables/responsive-tables.js') }}"></script>
<!-- tour plugin -->
<script src="{{ asset('charisma/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js') }}"></script>
<!-- star rating plugin -->
<script src="{{ asset('charisma/js/jquery.raty.min.js') }}"></script>
<!-- for iOS style toggle switch -->
<script src="{{ asset('charisma/js/jquery.iphone.toggle.js') }}"></script>
<!-- autogrowing textarea plugin -->
<script src="{{ asset('charisma/js/jquery.autogrow-textarea.js') }}"></script>
<!-- multiple file upload plugin -->
<script src="{{ asset('charisma/js/jquery.uploadify-3.1.min.js') }}"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="{{ asset('charisma/js/jquery.history.js') }}"></script>
<!-- application script for Charisma demo -->
<script src="{{ asset('charisma/js/charisma.js') }}"></script>

<!-- Umeditor script start-->
<script type="text/javascript" charset="umeditor/utf-8" src="{{ asset('umeditor/umeditor.config.js') }}"></script>
<script type="text/javascript" charset="umeditor/utf-8" src="{{ asset('umeditor/umeditor.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('umeditor/lang/zh-cn/zh-cn.js') }}"></script>
<!-- Umeditor script end-->
</body>
</html>
