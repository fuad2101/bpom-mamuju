@extends('layouts.bpom')

@section('content')
    <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h1 class="h3 mb-0 text-gray-800">Buat Nota Dinas</h1>
              <a
                href="#"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                ><i class="fas fa-download fa-sm text-white-50"></i> Tambah Pegawai</a
              >
            </div>

                <form action="" method="get" class="">
                <div class="col-md-4 mb-3">
                    <label for="no_surat" class="form-label">Nomor Surat</label>
                    <input type="text" name="" id="no_surat" class="form-control">

                </div>

                <div class="col-md-4 mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" name="" id="tanggal" class="form-control">

                </div>

                <div class="col-md-4 mb-3">
                    <label for="tujuan" class="form-label">Tujuan</label>
                    <select class="form-control" name="tujuan" id="">
                        <option value="">Kepala Sub Bagian Tata Usaha</option>
                        <option value="">Kepala Sub Bagian Infokom</option>
                        <option value="">Kepala Sub Bagian Pengujian</option>
                        <option value="">Kepala Sub Bagian Penindakan</option>
                        <option value="">Kepala Sub Bagian Pemeriksaan</option>
                    </select>

                </div>

                <div class="col-md-4 form-floating">
                    <label for="isi_surat">Isi Surat</label>
                    <textarea class="form-control" name="" id="isi_surat" rows="20" placeholder="Masukkan Isi Surat" ></textarea>
                </div>
                    <button class="btn btn-primary mb-5 mt-3">Cetak Surat</button>
                </form>


          </div>

@endsection


