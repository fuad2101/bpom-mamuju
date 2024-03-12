<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Document</title>
        <style>
            * {
                font-family: "Bookman Old Style";
            }
            .center {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <p class="center">BALAI PENGAWAS OBAT DAN MAKANAN</p>
        <p class="center">BALAI POM DI MAMUJU</p>
        <p class="center">MEMORANDUM</p>
        <p class="center">NOMOR : {{$data['nomor']}}</p>
        <br /><br /><br />

        <table>
            <tr>
                <td>Yth.</td>
                    <td>
                        {{$data['tujuan']}}
                        <br />
                    </td>
                    <br />
            </tr>
            <tr>
                <td>Hal</td>
                <td>{{$data['hal']}}</td>
            </tr>

        </table>
        <hr>
        <p>{{$data['isi']}}</p>
    </body>
</html>
