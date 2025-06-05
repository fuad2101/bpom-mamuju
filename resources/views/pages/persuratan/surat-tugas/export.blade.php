<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <style>
            @font-face {
                font-family: 'Bookman Old Style_bold';
                src: url('./storage/fonts/bookmanoldstyle_bold.ttf'),
                font-weight: bold;
                font-style: normal;
            }
            body{
                font-family: 'Bookman Old Style';
                break-after: avoid;
            }
            #kop,#kop-footer{
                width: 100%;
            }
            .head{
                text-align: center;
            }
            .head~p{
                line-height: 0%;
            }
            header{
                margin: -60px -10px 0px -20px;
            }
            table.petugas th,table.petugas td{
                border: 0.5px solid black;
                padding: 10px;
            }
            table.petugas{
                border-spacing: 0px;
            }
            table{
                width: 100%;
            }
            table.dasar td{
                padding-top: 7px;
                vertical-align: top;
                border-collapse: collapse;
            }
            table.dasar ol{
                margin-top: 0;
            }
            .dasar li{
                /* line-height:20pt; */
                text-align: justify;
            }
            .ttd,.lampiran{
                margin-top: 25px;
                margin-left: 50%;
            }
            .container{
                margin: 0px;
                padding: 0px 30px;
            }
            footer{
                position: absolute;
                bottom: -75px;
                height: 30%;
                width: 115%;
                margin: 0 -45px;
                background-image: url('storage/images/footer.png');
                background-repeat:no-repeat;
                background-attachment: fixed;
                background-position: center bottom;
                background-size: cover;
                z-index: 0;
            }
            /* footer img{
                position: relative;
                top: -595px;
                widows: 100%;
                right: 5px;
                margin:0%;
                z-index: 1;
                border: 2px solid green;
                object-fit: fill;


            } */
            /* footer p{

                border:1px solid black;
                padding:1px;
                text-align:center;
            } */
            .footer-teks{
                position: absolute;
                bottom:5px;
                left:50px;
                z-index: 1;
            }
            .footer-teks p, {
                /* position: absolute; */
                /* bottom: 2px; */
                text-align: center;
                border: 1px solid black;
                padding: 5px 55px 5px 55px;
            }
            .page-break {
                page-break-after: always;
            }
        </style>
        <title>Surat Tugas</title>
    </head>
<body>

<header>
        <img id="kop" src="{{public_path('/images/header.jpg')}}" alt="kop">
</header>

<p style="text-align: center">SURAT TUGAS <br> NOMOR : {{$data['nomor']}}</p>

<div>
    <div class="container" style="padding-left:50px;padding-right:50px;">
        <table class="dasar" cellpadding="0">
            <tbody class="">
                <tr>
                    <td class="">Menimbang</td>
                    <td>:</td>
                    <td>
                        <ol type="a">
                            <li>
                            {{$menimbang}}
                            </li>
                            <li>
                            bahwa yang namanya tercantum dalam lampiran surat ini telah memenuhi syarat yang diperlukan untuk diserahi tugas dimaksud
                            </li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td class="">Dasar</td>
                    <td>:</td>
                    <td >
                        <ol>
                            <li>Undang – Undang N0. 36 Tahun 2009 tentang Kesehatan</li>
                            <li>Undang - Undang No.18 Tahun 2012 tentang Pangan</li>
                            <li>Peraturan Pemerintah No. 86 Tahun 2019 tentang Keamanan Pangan</li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align:center;padding-top:10px;padding-bottom:10px;">Memberi Perintah</td>
                </tr>
                <tr>
                    <td class="">Kepada</td>
                    <td>:</td>
                    <td style="padding-left: 20px">Nama-nama terlampir</td>
                </tr>
                <tr>
                    <td class="">Untuk</td>
                    <td>:</td>
                    <td >
                        <ol>
                            <li>Menjadi Petugas Pelaksana Kegiatan {{$kegiatan}} di Kabupaten {{$data['kabupaten']}}</li>
                            <li>Melaksanakan tugas dengan penuh tanggung jawab;</li>
                            <li>Melaporkan hasil kegiatan kepada Kepala Balai POM di Mamuju</li>
                            <li>Surat tugas ini berlaku {{$tanggal_berlaku}}</li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">Agar yang bersangkutan melaksanakan tugas dengan baik dan penuh tanggung jawab.</td>
                </tr>
            </tbody>
        </table>
        <div class="ttd">
            <p>Mamuju, {{$tanggal_surat}}<br>Kepala Balai POM Di Mamuju </p>
            <p style="padding-left: 25px;margin-top:50px;margin-bottom:50px;">${ttd_pengirim}</p>
            <p>BURHAM SIDOBEJO, SH.,MH</p>

        </div>

    </div>
</div>

<div class="footer-teks">
    <p class="">Petugas tidak diperkenankan menerima gratifikasi dalam bentuk apapun</p>
</div>

<footer>
    <img id="kop-footer" src="{{public_path('/images/footer.png')}}" alt="">
</footer>

<div class="page-break"></div>
<p style="text-align:center">-2-</p>
<div class="lampiran">
    <table>
        <tr>
            <td style="font-family:'Bookman Old Style_bold';">Lampiran</td>
        </tr>
        <tr>
            <td>Surat Tugas</td>
        </tr>
        <tr>
            <td>Nomor</td>
            <td>:</td>
            <td>{{$data['nomor']}}</td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td>{{$tanggal_surat}}</td>
        </tr>
    </table>
</div>

<p style="text-align:center;margin-top:35px;margin-bottom:35px">DAFTAR NAMA YANG DIBERI PERINTAH</p>

<table class="petugas">
    <thead style="text-align:center;background-color:#F2F2F2;">
        <tr>
            <td>NO</td>
            <td>NAMA</td>
            <td>NIP</td>
            <td>PANGKAT/<br>GOL.RUANG</td>
            <td>JABATAN</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($petugas as $petugas)
            <tr>
                <td style="text-align:center;">{{$loop->iteration}}.</td>
                <td style="max-width: 200px; overflow:inherit; white-space:normal;">{{$petugas['nama']}}</td>
                <td style="text-align:center;">{{$petugas['nip']}}</td>
                <td style="text-align:center;">{{$petugas['pangkat']}}</td>
                <td style="text-align:center;">{{$petugas['jabatan']}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="ttd">
    <p>Mamuju, {{$tanggal_surat}} <br> Kepala Balai POM Di Mamuju </p>
    <p style="padding-left: 25px;margin-top:50px;margin-bottom:50px;">${ttd_pengirim}</p>
    <p>BURHAM SIDOBEJO, SH.,MH</p>
</div>

<body>
</html>
