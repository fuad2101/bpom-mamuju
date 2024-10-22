@extends('layouts.bpom')

@section('content')

<h1 class="h3 mb-0 text-gray-800">Cetak Kelengkapan PJB</h1>
<table class="table">
    <thead>
        <tr>
            <th>Jenis Surat</th>
            <th>Tanggal pembuatan</th>
            <th>Pembuat Surat</th>
            <th>Cetak Kelengkapan PJB</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="row">Surat Tugas</td>
            <td>22 October 2024</td>
            <td>Mirza-Infokom</td>
            <td>
                <a name="" id="" class="btn btn-primary" href="#" role="button">SPPD</a>
                <a name="" id="" class="btn btn-danger" href="#" role="button">SPTJM</a>
            </td>
        </tr>
    </tbody>
</table>

@endsection
