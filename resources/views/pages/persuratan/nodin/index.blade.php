@extends('layouts.bpom')

@section('content')
    <!-- Begin Page Content -->
          <div class="container">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Buat Nota Dinas</h1>
            </div>
                <form action="/exp/pdf" method="POST" class="">
                    @csrf
                    <div class="row">
                        <input type="hidden" name="exportType" value="nodin">
                        <div class="col mb-3">
                            <label for="no_surat" class="form-label">Nomor Surat</label>
                            <input type="text" name="nomor" id="no_surat" class="form-control">
                        </div>
                        <div class="col mb-3">
                            <label for="tujuan" class="form-label">Dari</label>
                            <input type="text" name="dari" id="tujuan" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="tujuan" class="form-label">Tujuan</label>
                            <input type="text" name="tujuan" id="tujuan" class="form-control">
                        </div>
                        <div class="col mb-3">
                            <label for="hal" class="form-label">Hal</label>
                            <input type="text" name="hal" id="hal" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="hal" class="form-label">Lampiran</label>
                            <input type="text" name="lampiran" id="hal" class="form-control">
                        </div>
                        <div class="col mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" name="tanggal" id="tanggal" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="penandatangan" class="form-label">Penandatangan</label>
                            <select class="form-control" name="penandatangan" id="">
                                <option value="Besse Tenri Wawo">Besse Tenri Wawo</option>
                                <option selected value="Suliyanto, SH., MH.">Suliyanto, SH., MH.</option>
                            </select>
                        </div>
                    </div>
                    <div class="col form-floating">
                        <label for="isi_surat">Isi Surat</label>
                        <textarea class="form-control" name="isi" id="isi_surat" rows="20" placeholder="Masukkan Isi Surat">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde rerum facere nostrum dolores. Autem odio voluptatum praesentium nihil itaque reiciendis deleniti tenetur similique, doloremque explicabo voluptatibus velit reprehenderit delectus? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus, dicta consequatur, nihil quibusdam veniam architecto libero accusantium eaque non magni similique exercitationem deserunt saepe. Architecto, praesentium. Harum nostrum perspiciatis consectetur!</textarea>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary mb-5 mt-3">Cetak Surat</button>
                        </div>
                    </div>
                </form>
          </div>


@endsection
