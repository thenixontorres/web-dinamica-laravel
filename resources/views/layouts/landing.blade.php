<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Espacio Pisanu</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="{{ url('css/main.css') }}" rel="stylesheet">
    <link href="{{ url('css/font-awesome.min.css') }}" rel="stylesheet">

    <link href="{{ url('plugins/Nivo-Slider/themes/default/default.css') }}" type="text/css" rel="stylesheet"/>
    <link href="{{ url('plugins/Nivo-Slider/themes/light/light.css') }}" type="text/css" rel="stylesheet"/>
    <link href="{{ url('plugins/Nivo-Slider/themes/dark/dark.css') }}" type="text/css" rel="stylesheet"/>
    <link href="{{ url('plugins/Nivo-Slider/themes/bar/bar.css') }}" type="text/css" rel="stylesheet"/>
    <link href="{{ url('plugins/Nivo-Slider/nivo-slider.css') }}" type="text/css" rel="stylesheet"/>

    @yield('css')
</head>

<body>

    <div id="wrapper" class="divided"></div>
        @yield('content')
    </div>

    <!-- jQuery 3.1.1 -->
    <script src="{{ url('js/home/jquery.min.js') }}"></script>
    <script src="{{ url('js/home/jquery.scrollex.min.js') }}"></script>
    <script src="{{ url('js/home/jquery.scrolly.min.js') }}"></script>
    <script src="{{ url('js/home/skel.min.js') }}"></script>
    <script src="{{ url('js/home/util.js') }}"></script>
    <script src="{{ url('plugins/Nivo-Slider/jquery.nivo.slider.js') }}"></script>
    <script src="{{ url('js/home/main.js') }}"></script>

    @yield('scripts')
</body>
</html>