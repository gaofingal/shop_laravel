<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>Free HTML5 Bootstrap Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- The styles -->
    <link id="bs-css" href="{{  asset('css/ootstrap-cerulean.min.css')  }}" rel="stylesheet">
    <link href="{{asset( 'css/charisma-app.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery.noty.css')}}" rel='stylesheet'>
    <link href="{{asset('css/noty_theme_default.css')}}" rel='stylesheet'>
    <link href="{{asset('css/elfinder.min.css')}}" rel='stylesheet'>
    <link href="{{asset('css/elfinder.theme.css')}}" rel='stylesheet'>
    <link href="{{asset('css/jquery.iphone.toggle.css')}}" rel='stylesheet'>
    <link href="{{asset('css/uploadify.css')}}" rel='stylesheet'>
    <link href="{{asset('css/animate.min.css')}}" rel='stylesheet'>

    <!-- jQuery -->
    <script src="{{asset('charisma/jquery/jquery.min.js')}}"></script>



    <!-- The fav icon -->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

</head>

<body>
<div class="ch-container">
    <div class="row">

        <div class="row">
            <div class="col-md-12 center login-header">
                <h2>Welcome to Charisma</h2>
            </div>
            <!--/span-->
        </div><!--/row-->

        <div class="row">
            <div class="well col-md-5 center login-box">
                <div class="alert alert-info">
                    Please login with your Username and Password.
                </div>
                <form class="form-horizontal" action="{{ route('login') }}" method="post">
                    <fieldset>

                        {{--用户名--}}
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                            <input type="text" class="form-control" name="username" placeholder="Username" required>
                        </div>
                        <div class="clearfix"></div>
                        <br>

                        {{--密码--}}
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <div class="clearfix"></div>

                        {{--记住账号--}}
                        {{--<div class="input-prepend">--}}
                            {{--<label class="remember" for="remember"><input type="checkbox" id="remember"> Remember--}}
                                {{--me</label>--}}
                        {{--</div>--}}
                        {{--<div class="clearfix"></div>--}}

                        {{--CSRF--}}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                        <p class="center col-md-5">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </p>
                    </fieldset>
                </form>
            </div>
            <!--/span-->
        </div><!--/row-->
    </div><!--/fluid-row-->

</div><!--/.fluid-container-->


</body>
</html>
