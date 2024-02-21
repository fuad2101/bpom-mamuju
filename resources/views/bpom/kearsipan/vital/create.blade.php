@extends('layouts.bpom')

@section('content')
<h1 class="h2 ml-3">Input Arsip Vital</h1>
<form action="" class="px-4">
    <div class="form-group">
        <label for="jenis_arsip">Jenis Arsip</label>
        <input class="form-control form-control-sm" type="text" name="jenis_arsip">
        <small class="form-text text-muted">Jenis Arsip Vital Tercipta</small>
    </div>
    <div class="form-group">
        <label for="unit_pengolah">Unit Pengolah</label>
        <input type="text" class="form-control form-control-sm" name="unit_pengolah" value="Substansi Infokom" readonly>
    </div>
    <div class="form-group">
        <label for="kurun_waktu">Kurun Waktu</label>
        <input type="text" class="form-control form-control-sm" name="kurun_waktu" >
        <small class="text-muted form-text">Tahun Arsip Vital Tercipta</small>
    </div>
    <div class="form-group">
        <label for="media">Media</label>
        <select class="form-control form-control-sm" name="media" id="media">
            <option value="">Cetak/Asli</option>
        </select>
    </div>
    <div class="form-group">
        <label for="jumlah_berkas">Jumlah Berkas</label>
        <input type="text" name="jumlah_berkas" class=" form-control form-control-sm">
        <small class="text-muted form-text">Diisi dengan banyaknya arsip vital misalnya : 1 Berkas</small>
    </div>
    <div class="form-group">
        <label for="jangka_simpan">Jangka Simpan</label>
        <input type="text" class="form-control form-control-sm">
        <small class="text-muted form-text">Batas waktu sebagai arsip vital</small>
    </div>
    <div class="form-group">
        <label for="metode_perlind">Metode Perlindungan</label>
        <select class="form-control form-control-sm" name="" id="metode_perlind">
            <option value="">Duplikasi</option>
        </select>
    </div>
    <div class="form-group">
        <label for="lokasi">Lokasi Simpan</label>
        <input class="form-control form-control-sm" name="lokasi" type="text" value="Lemari khusus arsip vital" readonly>
        <small class="text-muted form-text">Tempat Arsip vital disimpan</small>
    </div>
    <div class="form-group">
        <textarea class="form-control form-control-sm" name="" id="" cols="30" rows="10"></textarea>
        <small class="text-muted form-text">Informasi spesifik yang belum/tidak ada dalam kolom yang tersedia</small>
    </div>
    <button class="btn btn-primary btn-lg" type="submit">Simpan</button>
</form>
@endsection
