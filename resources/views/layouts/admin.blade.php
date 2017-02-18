<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}" />
    <title> {{  trans(Route::getCurrentRoute()->getName()) . ' | ' .  trans('admin.title')  }} </title>
    <link rel="stylesheet" type="text/css" href="{{ mix('dist/css/admin.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.4.0/css/bootstrap-colorpicker.min.css">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{ asset('dist/js/admin.js') }}" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.4.0/js/bootstrap-colorpicker.min.js" type="text/javascript"></script>
</head>
<body class="skin-blue">
<div class="wrapper">
    @include('partials.admin.top')
    @include('partials.admin.sidebar')
    <div class="content-wrapper">
        @include('partials.admin.header')
        <section class="content">
            <div class="row">
                @if(!isset($no_boxes))<div class="col-xs-12"><div class="box"><div class="box-body">@endif
                @include('flash::message')
                @yield('content')
                @if(!isset($no_boxes))</div></div> </div>@endif
            </div>
        </section>
    </div>
</div>
</body>
</html>
