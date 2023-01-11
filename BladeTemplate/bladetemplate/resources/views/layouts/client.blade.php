<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') - Lubacode</title>
    <link rel="stylesheet" href="{{asset('assets/client/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/style.css')}}">
    <style>
        @yield('css')
    </style>
</head>
<body>
<header>
    @include('clients.blocks.header')
</header>
<main>
    <div class="container py-4">
        <div class="row">
            <div class="col-4">
                <aside>
                    {{--        sidebar mở rộng--}}
                    @section('sidebar')
                        @include('clients.blocks.sidebar')
                    @show
                </aside>
            </div>
            <div class="col-8">
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    @include('clients.blocks.footer')
</footer>
</body>
<script src="{{asset('assets/client/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/client/js/custom.js')}}"></script>
<script type="text/javascript">
    @yield('js')

</script>
@stack('script')
</html>
