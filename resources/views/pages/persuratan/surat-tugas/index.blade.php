@extends('layouts.bpom')
@section('header')
@laravelViewsStyles
@endsection

@push('style')
<link rel="stylesheet" href="/css/tagify.css">
@endpush

@section('content')
    <!-- Begin Page Content -->
    {{-- @livewire() --}}
          <div class="container-fluid">
            <!-- Page Heading -->
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h1 class="h3 mb-0 text-gray-800">Buat Surat Tugas</h1>
            </div>
                <form action="/exp/pdf" method="post" class="">
                    @csrf
                    <div class="row">
                        <input name='input-custom-dropdown' class='tagify--custom-dropdown' placeholder='Type an English letter' value=''>
                    </div>
                    <input type="hidden" name="exportType" value="st">
                    <div class="row mb-3">
                        <div class="col">
                            <label for="no_surat" class="form-label">Nomor Surat</label>
                            <input type="text" name="nomor" id="no_surat" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="desc_kegiatan" class="form-label">Kegiatan</label>
                            <select class="form-control" name="kegiatan" id="" >
                                <option value="kie_tomas">KIE Tomas</option>
                                <option value="bimtek_pasar">Bimtek Pasar</option>
                                <option value="bimtek_komunitas_desa">Bimtek Komunitas Desa</option>
                                <option value="kie_keliling">KIE Keliling</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                            <input type="text" name="desc_kegiatan" class="form-control form-control-sm mt-2" placeholder="Isi deskripsi kegiatan" >
                        </div>
                        <div class="col mb-3">
                            <label for="">Lokasi</label>
                            <select class="form-control" name="kabupaten" id="">
                                <option value="Mamuju">Mamuju</option>
                                <option value="Mamuju Tengah">Mamuju Tengah</option>
                                <option value="Polewali Mandar">Polewali Mandar</option>
                                <option value="Majene">Majene</option>
                                <option value="Pasangkayu">Pasangkayu</option>
                                <option value="Mamasa">Mamasa</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="tanggal" class="form-label">Mulai</label>
                            <input class="form-control ml-2" type="date" name="tanggal_mulai" id="tanggal" class="form-control" required>
                        </div>
                        <div class="col">
                            <label for="tanggal" class="form-label">Sampai</label>
                            <input class="form-control ml-2" type="date" name="tanggal_akhir" id="" class="form-control" required>
                        </div>
                    </div>
                    {{-- <div class="col mb-3">
                        <label for="menimbang" class="form-label">Menimbang Poin A</label>
                        <textarea class="form-control" name="menimbang" id="" cols="30" rows="10"></textarea>
                    </div> --}}
                    <div class="row mb-3">
                        <div class="col">
                            <label for="nama" class="form-label">Nama Petugas</label>
                            <input type="text" name="nama" id="nama" class="form-control">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mb-5">Cetak Surat</button>
                </form>
          </div>
@endsection


@push('script')
<script src="/js/tagify.js"></script>
<script>
    $(document).ready(function () {

        const nama=[];
        $('[name="desc_kegiatan"]').attr('disabled',true);

        $('[name="kegiatan"]').change(function() {
            if ($(this).val() === 'lainnya') {
                $('[name="desc_kegiatan"]').removeAttr('disabled');
            }else{
            // $('[name="desc_kegiatan"]').hide(1000);
            }
        })

        $('[name="input-custom-dropdown"]').tagify({
            placeholder:'Masukkan Nama',
            callback:{
                function () {
                    alert('Nama Masuk');
                }
            }
        });
    })
</script>
@endpush



