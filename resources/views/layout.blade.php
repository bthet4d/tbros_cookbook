<!doctype html>
<html>
<head>
    @include('head')
</head>
<body>
<div id="app" class="container">

    <header class="row">
        @include('header')
    </header>

    <div id="main" class="row">

            @yield('content')

    </div>

    <footer class="row">
        @include('footer')
    </footer>

</div>
</body>
</html>

<script type="text/javascript" src="{{URL::asset('js/app.js')}}"></script>