<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use PhpOffice\PhpWord\PhpWord as phpword;
//use Illuminate\Support\Facades\Request;
//use PhpOffice\PhpWord\IOFactory as iofactory ;


class SuratController extends Controller
{
    public function create(){
        $phpword = new phpword();
        $section = $phpword->addSection();

        $section->addText('Lorem Ipsum Dolor Sit Amet');

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpword,'Word2007');
        $objWriter->save('TestWord2.docx');

        //return response()->download(public_path('TestWord.docx'));

    }

    public function createST(){

        // $petugas_terpilih = Pegawai::whereIn('id', $selectedPetugasIds)->get();
        // return view('pages.persuratan.surat-tugas.index', compact('petugas_terpilih'));
        $pegawai = Pegawai::all();
        return view('pages.persuratan.surat-tugas.index',['pegawai'=>$pegawai]);
    }

    public function ajaxPegawai(Request $request){
        $search = $request->q;
        $pegawai = Pegawai::where('nama', 'like', '%' . $search . '%')
            ->select('id', 'nama','pangkat','golongan','jabatan','substansi')
            ->limit(10)
            ->get();

        return response()->json($pegawai);
    }

    public function pdf(Request $request){

        $exportType = $request->exportType;
        $data = $request->all();
        $petugas = $request->input('petugas');

        if($exportType == 'nodin'){

            $pdf = Pdf::loadview('pages.persuratan.nodin.export',['data'=>$data]);
            return $pdf->stream('nodin.pdf');

        }elseif($exportType == 'st'){

            $kegiatan = null;
            $menimbang = null;
            $tahun = date('Y');

            switch ($request->kegiatan) {

                case 'kie_tomas':
                    $kegiatan = 'Komunikasi Informasi dan Edukasi (KIE) Bersama Tokoh Masyarakat';
                    $menimbang = 'bahwa dalam rangka Pemberdayaan pada Masyarakat Tahun '.$tahun.' perlu dilaksanakan kegiatan Komunikasi Informasi dan Edukasi (KIE) Bersama Tokoh Masyarakat ';
                    break;
                case 'bimtek_pasar':
                     $kegiatan = 'Bimtek dan Penyuluhan Komunitas Pasar';
                     $menimbang='bahwa dalam bahwa dalam rangka Pengawasan Bahan Berbahaya pada Pangan Tahun '.$tahun.' perlu dilaksanakan kegiatan Bimtek dan Penyuluhan Komunitas Pasar';
                    break;
                case 'intens_ramadhan':
                     $kegiatan = 'KIE Keliling';
                     $menimbang='bahwa dalam rangka menjamin keamanan dan mutu produk yang beredar dimasyarakat Tahun '.$tahun.' perlu dilaksanakan kegiatan KIE Keliling ';
                    break;
                case 'bimtek_komunitas_desa':
                     $kegiatan = 'Bimtek Komunitas Desa';
                     $menimbang='bahwa dalam rangka menjamin keamanan dan mutu produk di desa Tahun '.$tahun.' , perlu dilaksanakan kegiatan Bimtek Komunitas Desa ';
                    break;
                case 'kie_keliling':
                     $kegiatan = 'KIE Keliling';
                     $menimbang='bahwa dalam rangka menjamin keamanan dan mutu produk obat dan makanan yang beredar dimasyarakat Tahun '.$tahun.' , perlu dilaksanakan Komunikasi Informasi dan Edukasi Keliling';
                    break;
                case 'lainnya':
                     $kegiatan = $request->desc_kegiatan;
                     $menimbang= $request->menimbang;
                    break;
                default:
                    $kegiatan = 'Default kegiatan';
                    break;
            }

            $tanggal_surat = Carbon::now()->isoFormat('D MMMM YYYY');
            $tanggal_berlaku = NULL;
            $tanggal_mulai = $request->tanggal_mulai ;
            $tanggal_akhir = $request->tanggal_akhir ;

            if ($tanggal_mulai != $tanggal_akhir) {
                $carbonMulai = Carbon::parse($tanggal_mulai);
                $carbonAkhir = Carbon::parse($tanggal_akhir);
                $tanggal_mulai = $carbonMulai->isoFormat('D MMMM YYYY');
                $tanggal_akhir = $carbonAkhir->isoFormat('D MMMM YYYY');
                $tanggal_berlaku = 'mulai tanggal '.$tanggal_mulai.' s/d '.$tanggal_akhir;
            }else {
                $carbonDate = Carbon::parse($tanggal_mulai);
                $isoFormat = $carbonDate->isoFormat('D MMMM YYYY');
                $tanggal_berlaku = 'pada tanggal '.$isoFormat;
            }

            $ids = $request->input('petugas');
            $petugases = Pegawai::whereIn('id', $ids)->get();

            $pdf = Pdf::loadview('pages.persuratan.surat-tugas.export',
            [
                'data'=>$data,
                'kegiatan'=>$kegiatan,
                'menimbang'=>$menimbang,
                'petugas'=>$petugases,
                'tanggal_berlaku'=>$tanggal_berlaku,
                'tanggal_surat'=>$tanggal_surat
            ]);

            return $pdf->stream('st.pdf');
        }
    }
    public function docx(){
        return "Docs Generate ";
    }
    public function xls(){
        return "xls Generate ";
    }
}
