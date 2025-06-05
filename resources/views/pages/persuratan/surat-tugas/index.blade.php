@extends('layouts.bpom')

@push('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <div
      class="d-sm-flex align-items-center justify-content-between mb-4"
    >
      <h1 class="h3 mb-0 text-gray-800">Buat Surat Tugas</h1>
    </div>
        <form action="/exp/pdf" method="post" class="">
            @csrf
            <input type="hidden" name="exportType" value="st">
            <div class="row mb-3">
                <div class="col">
                    <label for="no_surat" class="form-label">Nomor Surat</label>
                    <input type="text" name="nomor" id="no_surat" class="form-control" >
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label for="desc_kegiatan" class="form-label">Kegiatan</label>
                    <select class="form-control" name="kegiatan" id="" >
                        <option value="bimtek_pasar">Bimtek Pasar</option>
                        <option value="kie_tomas">KIE Tomas</option>
                        <option value="bimtek_komunitas_desa">Bimtek Komunitas Desa</option>
                        <option value="kie_keliling">KIE Keliling</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                    <input type="text" name="desc_kegiatan" class="form-control form-control-sm mt-2" placeholder="Isi deskripsi kegiatan" disabled>
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
                    <input class="form-control ml-2" type="date" name="tanggal_mulai" id="tanggal" class="form-control" >
                </div>
                <div class="col">
                    <label for="tanggal" class="form-label">Sampai</label>
                    <input class="form-control ml-2" type="date" name="tanggal_akhir" id="" class="form-control" >
                </div>
            </div>
            {{-- <div class="col mb-3">
                <label for="menimbang" class="form-label">Menimbang Poin A</label>
                <textarea class="form-control" name="menimbang" id="" cols="30" rows="10"></textarea>
            </div> --}}
            <div class="row mb-3">
                <label for="contoh" class="form-label">Nama Petugas</label>
                <select class="form-control mb-3" name="petugas[]" id="contoh" multiple="multiple">
                    @foreach ($pegawai as $petugas)
                        <option value="{{$petugas['id']}}">{{$petugas['nama']}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary mb-5">Cetak Surat</button>
        </form>
  </div>

@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
                $('#contoh').select2({
                    placeholder: 'Pilih Petugas',
                    // ajax: {
                    //     url: '{{ route("pegawai.ajax") }}',
                    //     dataType: 'json',
                    //     delay: 250,
                    //     data: function (params) {
                    //         return { q: params.term };
                    //     },
                    //     processResults: function (data) {
                    //         return {
                    //             results: $.map(data, function (item) {
                    //                 return {
                    //                     id: item.id,
                    //                     text: [item.nama+' - '+item.substansi],
                    //                 }
                    //             })
                    //         };
                    //         cache:true;
                    //     }
                    // }
                });


        // $(document).ready(function () {
        //         $('#contoh').select2({
        //         placeholder: 'Pilih Petugas',
        //         ajax: {
        //             url: '{{route("createST")}}',
        //             dataType: 'json',
        //             data: function (params) {
        //                 return {
        //                     q: params.term
        //                 };
        //             },
        //             processResults: function (data) {
        //                 return {
        //                     results: $.map(data, function (item) {
        //                         return {
        //                             id: item.id,
        //                             text: item.nama
        //                         };
        //                     })
        //                 };
        //             }
        //         }
        //     })

        //     const nama=[];
        //     $('[name="desc_kegiatan"]').attr('disabled',true);

            $('[name="kegiatan"]').change(function() {
                if ($(this).val() != 'lainnya') {
                    $('[name="desc_kegiatan"]').attr('disabled',true);
                }else{
                    $('[name="desc_kegiatan"]').removeAttr('disabled');
                }
            })
        });
    </script>
@endpush

