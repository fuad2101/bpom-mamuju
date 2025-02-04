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
        margin: -20px;
    }
    .head{
        text-align: center;

    }
    .head~p{
        line-height: 0%;
    }
</style>
@endpush

@section('content')
<header>
        <img id="kop" src="{{public_path('/storage/images/header.jpg')}}" alt="kop">
</header>

<p class="head">SURAT TUGAS</p>
<p class="head" >NOMOR : PM.01.02.10B.01.24.15</p>

<div>
<p style="text-align: left;">&nbsp;</p>

<div class="container">
    <table style="height: 56px; width: 1033px;" cellpadding="0">
        <tbody>
        <tr style="text-align: center; height: 73px;">
        <td style="width: 111px; text-align: right; vertical-align: top; height: 73px;">Menimbang :&nbsp;</td>
        <td style="width: 906px; text-align: left; vertical-align: top; height: 73px;">
        <ol>
        <li>
        <div>bahwa dalam rangka Pemberdayaan pada Masyarakat Tahun 2024 perlu dilaksanakan kegiatan Komunikasi Informasi dan Edukasi Bersama Tokoh Masyarakat (KIE)</div>
        </li>
        <li>
        <div>bahwa yang namanya tercantum dalam lampiran surat ini telah memenuhi syarat yang diperlukan untuk diserahi tugas dimaksud</div>
        </li>
        </ol>
        </td>
        </tr>
        <tr style="text-align: center; height: 73px;">
        <td style="width: 111px; text-align: right; vertical-align: top; height: 73px;">Dasar:&nbsp;</td>
        <td style="width: 906px; text-align: left; vertical-align: top; height: 73px;">
        <div>
        <ol>
        <li>Undang &amp;ndash; Undang N0. 36 Tahun 2009 tentang Kesehatan</li>
        <li>
        <div>
        <div>Undang - Undang No.18 Tahun 2012 tentang Pangan</div>
        </div>
        </li>
        </ol>
        </div>
        </td>
        </tr>
        </tbody>
    </table>
</div>
</div>
</div>


    {{-- <div class="container">
        <p class="center">SURAT TUGAS</p>
        <p class="center">NOMOR : PM.01.02.10B.01.24.15</p>
        <p><br /></p>
        <p>Menimbang :&nbsp;</p>
        <ol style="list-style-type: lower-alpha">
            <li>
                bahwa dalam rangka Pemberdayaan pada Masyarakat Tahun 2024
                perlu dilaksanakan kegiatan Komunikasi Informasi dan Edukasi
                Bersama Tokoh Masyarakat (KIE)
            </li>
            <li>
                bahwa yang namanya tercantum dalam &nbsp;lampiran
                &nbsp;surat ini telah memenuhi syarat yang diperlukan untuk
                diserahi tugas dimaksud.
            </li>
        </ol>
        <p>Dasar :&nbsp;</p>
        <ol>
            <li>
                Undang &ndash; Undang N0. 36 Tahun 2009 tentang Kesehatan
            </li>
            <li>2. Undang - Undang No.18 Tahun 2012 tentang Pangan</li>
            <li>
                3. Peraturan Pemerintah No. 86 Tahun 2019 tentang Keamanan
                Pangan
            </li>
            <li>
                Peraturan Menteri Kesehatan Republik Indonesia Nomor 17
                Tahun 2020 Tentang Pasar Sehat
            </li>
        </ol>
        <p>Kepada : Nama-nama terlampir.</p>
        <p>Untuk:&nbsp;</p>
        <p>
            1. Menjadi Petugas Pelaksana Kegiatan KIE Bersama Tomas di
            Kabupaten Polewali Mandar;
        </p>
        <p>2. Melaksanakan tugas dengan penuh tanggung jawab;</p>
        <p>
            3. Melaporkan hasil kegiatan kepada Kepala Balai POM di Mamuju;
        </p>
        <p>4. Surat tugas ini berlaku pada tanggal 22 - 25 Januari 2024</p>
        <p>
            Agar &nbsp; yang &nbsp; bersangkutan &nbsp; melaksanakan &nbsp;
            tugas &nbsp; dengan baik dan penuh tanggung jawab.
        </p>
        <p><br /></p>
        <p><br /></p>
    </div> --}}
@endsection
