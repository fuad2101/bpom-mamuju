@extends('layouts.bpom')

@section('content')
    <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h1 class="h3 mb-0 text-gray-800">Tambah Pegawai</h1>

            </div>

                <form action="{{route('pegawai.store')}}" method="post" >
                    @csrf
                <div class="col-md-4 mb-3">
                    <label for="nama" class="form-label">Nama Pegawai</label>
                    <input type="text" name="nama" id="nama" class="form-control">

                </div>
                <div class="col-md-4 mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" name="nip" id="nip" class="form-control">

                </div>
                <div class="col-md-4 mb-3">
                    <label for="jabatan" class="form-label">Jabatan</label>
                    <input type="text" name="jabatan" id="jabatan" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="pangkat" class="form-label">Pangkat/Gol</label>
                    <input type="text" name="pangkat" id="pangkat" class="form-control">
                </div>
                <div>
                    <label for="golongan">Golongan</label>
                    <select name="golongan" id="golongan">
                        <option value="III/a">III/a</option>
                        <option value="III/b">III/b</option>
                        <option value="III/c">III/c</option>
                        <option value="III/d">III/d</option>
                        <option value="IV/a">IV/a</option>
                        <option value="IV/b">IV/b</option>
                        <option value="IV/c">IV/c</option>
                        <option value="IV/d">IV/d</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="substansi" class="form-label">Substansi</label>
                    <select class="form-control" name="substansi" id="">
                        <option value="Tata Usaha">Tata Usaha</option>
                        <option value="Infokom">Infokom</option>
                        <option value="Pengujian">Pengujian</option>
                        <option value="Penindakan">Penindakan</option>
                        <option value="Pemeriksaan">Pemeriksaan</option>
                    </select>
                </div>
                    <button class="btn btn-primary mb-5">Tambah Pegawai</button>
                </form>


          </div>

@endsection


