<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" href="" />
        <style>
            body{
                font-family: 'Bookman Old Style';
                break-after: avoid;
            }
            #kop,#kop-footer{
                width: 100%;
            }
            /* footer{
                break-after: avoid;
            } */

        </style>
        <title>@yield('jns-surat')</title>
    </head>
<body>
    <header>
    <img id="kop" src="{{public_path('images/header.jpg')}}" alt="kop">
    </header>

@yield('content')


<footer>
    <img id="kop-footer" src="{{public_path('images/footer.png')}}" alt="">
</footer>

<body>
    </html>

