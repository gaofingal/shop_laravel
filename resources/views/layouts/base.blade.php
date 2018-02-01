<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Free HTML5 Bootstrap Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="{{ asset('css/bootstrap-cerulean.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/charisma-app.css') }}" rel="stylesheet">
    <link href="{{ asset('charisma/fullcalendar/dist/fullcalendar.css') }}" rel='stylesheet'>
    <link href="{{ asset('charisma/fullcalendar/dist/fullcalendar.print.css') }}" rel='stylesheet' media='print'>
    <link href="{{ asset('charisma/chosen/chosen.min.css') }}" rel='stylesheet'>
    <link href="{{ asset('charisma/colorbox/example3/colorbox.css') }}" rel='stylesheet'>
    <link href="{{ asset('charisma/responsive-tables/responsive-tables.css') }}" rel='stylesheet'>
    <link href="{{ asset('charisma/bootstrap-tour/build/css/bootstrap-tour.min.css') }}" rel='stylesheet'>
    <link href="{{ asset('css/jquery.noty.css') }}" rel='stylesheet'>
    <link href="{{ asset('css/noty_theme_default.css') }}" rel='stylesheet'>
    <link href="{{ asset('css/elfinder.min.css') }}" rel='stylesheet'>
    <link href="{{ asset('css/elfinder.theme.css') }}" rel='stylesheet'>
    <link href="{{ asset('css/jquery.iphone.toggle.css') }}" rel='stylesheet'>
    <link href="{{ asset('css/uploadify.css') }}" rel='stylesheet'>
    <link href="{{ asset('css/animate.min.css') }}" rel='stylesheet'>

    <!-- jQuery -->
    <script src="{{ asset('charisma/jquery/jquery.min.js') }}"></script>


    <!-- The fav icon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

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
        <a class="navbar-brand" href="{{ route('home') }}"> <img alt="Charisma Logo"
                                                                 src="{{ asset('images/logo20.png') }}"
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
                                <li><a href="{{ asset('news') }}">新闻汇总</a></li>
                                <li><a href="{{ asset('category') }}">新闻分类</a></li>
                                <li><a href="{{ asset('category') }}">新闻编辑</a></li>
                            </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> 账号管理</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">账号列表</a></li>
                                <li><a href="#"></a></li>
                            </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> 信息管理</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">采集</a></li>
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


        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <!-- content start -->
    @yield('content')
    <!-- content end -->


    </div><!--/fluid-row-->


    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://usman.it" target="_blank">Muhammad
                Usman</a> 2012 - 2015</p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                    href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
    </footer>

</div><!--/.fluid-container-->


<!-- external javascript -->

<script src="{{ asset('charisma/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- library for cookie management -->
<script src="{{ asset('js/jquery.cookie.js') }}"></script>
<!-- calender plugin -->
<script src="{{ asset('charisma/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('charisma/fullcalendar/dist/fullcalendar.min.js') }}"></script>
<!-- data table plugin -->
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>

<!-- select or dropdown enhancer -->
<script src="{{ asset('charisma/chosen/chosen.jquery.min.js') }}"></script>
<!-- plugin for gallery image view -->
<script src="{{ asset('charisma/colorbox/jquery.colorbox-min.js') }}"></script>
<!-- notification plugin -->
<script src="{{ asset('js/jquery.noty.js')}}"></script>
<!-- library for making tables responsive -->
<script src="{{ asset('charisma/responsive-tables/responsive-tables.js') }}"></script>
<!-- tour plugin -->
<script src="{{ asset('charisma/bootstrap-tour/build/js/bootstrap-tour.min.js') }}"></script>
<!-- star rating plugin -->
<script src="{{ asset('js/jquery.raty.min.js') }}"></script>
<!-- for iOS style toggle switch -->
<script src="{{ asset('js/jquery.iphone.toggle.js') }}"></script>
<!-- autogrowing textarea plugin -->
<script src="{{ asset('js/jquery.autogrow-textarea.js') }}"></script>
<!-- multiple file upload plugin -->
<script src="{{ asset('js/jquery.uploadify-3.1.min.js') }}"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="{{ asset('js/jquery.history.js') }}"></script>
<!-- application script for Charisma demo -->
<script src="{{ asset('js/charisma.js') }}"></script>


</body>
</html>
