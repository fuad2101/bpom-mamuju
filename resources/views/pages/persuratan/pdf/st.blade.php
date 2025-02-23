@extends('layouts.template_surat')

@section('jns-surat','Surat Tugas')

@push('style')
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
        margin: 0px;
    }
    table.petugas td,table.petugas th{
        border: 1px solid black;
        padding: 10px;
    }
    table.petugas{
        border-spacing: 0px;
    }
    table{
        width: 100%;
        overflow:wrap;
    }
    .poin{
        padding-top: 7px;
        vertical-align: top;
    }
    td.poin{
        /* padding-left: 20px; */
    }
    .ttd,.lampiran{
        margin-top: 50px;
        margin-left: 50%;
    }
    .container{
        margin: 0px;
        padding: 0px;
    }
</style>
@endpush

@section('content')
<header>
        <img id="kop" src="{{public_path('/storage/images/header.jpg')}}" alt="kop">
</header>

<p style="text-align: center">SURAT TUGAS <br> NOMOR : PM.01.02.10B.01.24.15</p>

<div>
    <div class="container">
        <table style="" cellpadding="0">
            <tbody class="table">
                <tr >
                    <td class="poin">Menimbang:</td>
                    <td>
                    <ol>
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
                    <td class="poin">Dasar:&nbsp;</td>
                    <td >
                        <ol>
                            <li>Undang &amp;ndash; Undang N0. 36 Tahun 2009 tentang Kesehatan</li>
                            <li> Undang - Undang No.18 Tahun 2012 tentang Pangan</li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td class="poin">Kepada:&nbsp;</td>
                    <td >
                        Nama-nama terlampir
                    </td>
                </tr>
                <tr>
                    <td class="poin">Untuk:&nbsp;</td>
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
                    <td colspan="2">Agar yang bersangkutan melaksanakan tugas dengan baik dan penuh tanggung jawab.</td>
                </tr>
            </tbody>
        </table>
        <div class="ttd">
            <p>Mamuju, <?php echo date('d M Y') ?><br>Plt. Kepala Balai POM Di Mamuju </p>
            <br>
            <br>
            <p>${ttd_pengirim}</p>
            <br>
            <br>
            <p>Suliyanto, SH.,MH</p>
        </div>
        <p style="border:1px solid black;padding:1px;text-align:center; ">Petugas tidak diperkenankan menerima gratifikasi dalam bentuk apapun</p>
    </div>
</div>

<div class="lampiran">
    <p>Lampiran<br>Surat Tugas<br>Nomor:<br>Tanggal:<?php echo date('d M Y') ?> </p>
</div>
<p style="text-align:center;margin-top:20px;">DAFTAR NAMA YANG DIBERI PERINTAH</p>
<table class="petugas">
    <thead>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>NIP</th>
            <th>PANGKAT/GOL.RUANG</th>
            <th>JABATAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
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
            <p>${ttd_pengirim}</p>
            <br>
            <br>
            <p>Suliyanto, SH.,MH</p>
</div>

@endsection
