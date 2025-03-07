<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <style>
            body{
                font-family: 'Bookman Old Style';
                break-after: avoid;
            }
            #kop,#kop-footer{
                width: 100%;
                /* margin: -20px; */
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
                line-height:20pt;
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
                bottom: -43px;
                /* border: 2px solid red; */
                height: 30%;
                width: 115%;
                margin: 0 -45px;
                background-image: url('storage/images/footer.png');
                background-repeat:no-repeat;
                background-attachment: fixed;
                background-position: center bottom;
                background-size: cover;
                z-index: 0;


                /* display: flex; */
                /* margin: 0px -90px 0px -30px; */
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
            .footer-petugas{
                position: absolute;
                bottom:5px;
                left:50px;
                z-index: 1;
            }
            .footer-petugas p{
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
        <img id="kop" src="{{public_path('/storage/images/header.jpg')}}" alt="kop">
</header>

<p style="text-align: center">SURAT TUGAS <br> NOMOR : PM.01.02.10B.01.24.15</p>

<div>
    <div class="container">
        <table class="dasar" cellpadding="0">
            <tbody class="">
                <tr>
                    <td class="">Menimbang</td>
                    <td>:</td>
                    <td>
                        <ol type="a">
                            <li>
                            bahwa dalam rangka Pemberdayaan pada Masyarakat Tahun 2024 perlu dilaksanakan kegiatan Komunikasi Informasi dan Edukasi Bersama Tokoh Masyarakat (KIE)
                            </li>
                            <li>
                            bahwa yang namanya tercantum dalam lampiran surat ini telah memenuhi syarat yang diperlukan untuk diserahi tugas dimaksud
                            </li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td class="">Dasar:&nbsp;</td>
                    <td>:</td>
                    <td >
                        <ol>
                            <li>Undang – Undang N0. 36 Tahun 2009 tentang Kesehatan</li>
                            <li>Undang - Undang No.18 Tahun 2012 tentang Pangan</li>
                            <li>Peraturan Pemerintah No. 86 Tahun 2019 tentang Keamanan Pangan</li>
                            <li>Peraturan Menteri Kesehatan Republik Indonesia Nomor 17 Tahun 2020 Tentang Pasar Sehat</li>
                        </ol>
                    </td>
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
                            <li>Menjadi Petugas Pelaksana Kegiatan Forum Konsultasi Publik Tahun 2025</li>
                            <li>Melaksanakan tugas dengan penuh tanggung jawab;</li>
                            <li>Melaporkan hasil kegiatan kepada Kepala Balai POM di Mamuju</li>
                            <li>Surat tugas ini berlaku pada tanggal 25 Februari 2025</li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">Agar yang bersangkutan melaksanakan tugas dengan baik dan penuh tanggung jawab.</td>
                </tr>
            </tbody>
        </table>
        <div class="ttd">
            <p>Mamuju, <?php echo date('d M Y') ?><br>Plt. Kepala Balai POM Di Mamuju </p>
            <br>
            <p style="padding-left: 25px;">${ttd_pengirim}</p>
            <br>
            <br>
            <p>Suliyanto, SH.,MH</p>
        </div>

    </div>
</div>

<div class="footer-petugas">
    <p class="">Petugas tidak diperkenankan menerima gratifikasi dalam bentuk apapun</p>
</div>

<footer>
    {{-- <img id="kop-footer" src="{{public_path('/storage/images/footer.png')}}" alt=""> --}}
</footer>

<div class="page-break"></div>

<div class="lampiran">
    <p>Lampiran<br>Surat Tugas<br>Nomor:<br>Tanggal:<?php echo date('d M Y') ?> </p>
</div>

<p style="text-align:center;margin-top:35px;margin-bottom:35px">DAFTAR NAMA YANG DIBERI PERINTAH</p>

<table class="petugas">
    <thead>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>NIP</th>
            <th>PANGKAT/<br>GOL.RUANG</th>
            <th>JABATAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>Nurul Mukhlisah Syahrul</td>
            <td>76041465487548</td>
            <td>VII/a</td>
            <td>Pengawas Farmasi dan Makanan</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>Muh.Fuad</td>
            <td>-</td>
            <td>-</td>
            <td>Tenaga Administrasi Substansi Infokom</td>
        </tr>
    </tbody>
</table>

<div class="ttd">
    <p>Mamuju, <?php echo date('d M Y') ?><br>Plt. Kepala Balai POM Di Mamuju </p>
    <br>
    <br>
    <p style="padding-left: 25px;">${ttd_pengirim}</p>
    <br>
    <br>
    <p>Suliyanto, SH.,MH</p>
</div>

<body>
</html>
