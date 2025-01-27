<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        @stack('style')
        <title>@yield('jns-surat')</title>
    </head>
<body>

<div class="container">
    @yield('content')
</div>

<footer>
    <img id="kop-footer" src="{{public_path('/storage/images/footer.png')}}" alt="">
</footer>

<body>
</html>

