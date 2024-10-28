<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Document</title>
        <style>
            * {
                font-family: Arial, Helvetica, sans-serif;
                /* font-size: 12px; */
                margin: 16px;
            }
        </style>
    </head>
    <body>
        <p style="text-align: center; margin: 0px">
            BADAN PENGAWAS OBAT DAN MAKANAN
        </p>
        <p style="text-align: center; margin: 0px">
            BALAI PENGAWAS OBAT DAN MAKANAN DI MAMUJU
        </p>
        <p style="text-align: center; margin-bottom: 0px">NOTA DINAS</p>
        <p style="text-align: center; margin-top: 0px">
            NOMOR: {{$data['nomor']}}
        </p>
        <p>&nbsp;</p>
        <table style="height: 37px; width: 1023px">
            <tbody>
                <tr>
                    <td
                        style="
                            width: 10px;
                            vertical-align: top;
                            text-align: left;
                        "
                    >
                        Yth
                    </td>
                    <td
                        style="
                            width: 10px;
                            vertical-align: top;
                            text-align: left;
                        "
                    >
                        :
                    </td>
                    <td
                        style="
                            width: 520px;
                            vertical-align: top;
                            text-align: left;
                        "
                        scope="row"
                    >
                        <span style="text-align: left"
                            >{{$data['tujuan']}}</span
                    </td>
                </tr>
                <tr>
                    <td
                        style="
                            width: 10px;
                            vertical-align: top;
                            text-align: left;
                        "
                    >
                        Dari
                    </td>
                    <td
                        style="
                            width: 10px;
                            vertical-align: top;
                            text-align: left;
                        "
                    >
                        :
                    </td>
                    <td
                        style="
                            width: 520px;
                            vertical-align: top;
                            text-align: left;
                        "
                        scope="row"
                    >
                        <span style="text-align: left"
                            >{{$data['dari']}}</span
                        >
                    </td>
                </tr>
                <tr>
                    <td
                        style="
                            width: 10px;
                            vertical-align: top;
                            text-align: left;
                        "
                    >
                        Hal
                    </td>
                    <td
                        style="
                            width: 10px;
                            vertical-align: top;
                            text-align: left;
                        "
                    >
                        :
                    </td>
                    <td
                        style="
                            width: 520px;
                            vertical-align: top;
                            text-align: left;
                        "
                        scope="row"
                    >
                        <span style="text-align: left"
                            >{{$data['hal']}}</span
                        >
                    </td>
                </tr>
                <tr>
                    <td
                        style="
                            width: 10px;
                            vertical-align: top;
                            text-align: left;
                        "
                    >
                        Lampiran
                    </td>
                    <td
                        style="
                            width: 10px;
                            vertical-align: top;
                            text-align: left;
                        "
                    >
                        :
                    </td>
                    <td
                        style="
                            width: 520px;
                            vertical-align: top;
                            text-align: left;
                        "
                        scope="row"
                    >
                        <span style="text-align: left">{{$data['lampiran']}}</span>
                    </td>
                </tr>
                <tr>
                    <td
                        style="
                            width: 10px;
                            vertical-align: top;
                            text-align: left;
                        "
                    >
                        Tanggal
                    </td>
                    <td
                        style="
                            width: 10px;
                            vertical-align: top;
                            text-align: left;
                        "
                    >
                        :
                    </td>
                    <td
                        style="
                            width: 520px;
                            vertical-align: top;
                            text-align: left;
                        "
                        scope="row"
                    >
                        <span style="text-align: left">{{$data['tanggal']}}</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <hr
            style="margin: 15px 0px 15px 0px; color: black; outline-width: 5px"
        />
        <div style="text-align: justify; line-height: 1.5">
            {{$data['isi']}}
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div style="padding-left: 65%">{{$data['penandatangan']}}</div>
        </div>
    </body>
</html>
