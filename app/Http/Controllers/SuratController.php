<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use PhpOffice\PhpWord\PhpWord as phpword;
use Barryvdh\DomPDF\Facade\Pdf;
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

    public function pdf(Request $request){
        $exportType = $request->exportType;
        $data = $request->all();

        if($exportType == 'nodin'){

            $pdf = Pdf::loadview('pages.persuratan.nodin.export',['data'=>$data]);
            return $pdf->stream('nodin.pdf');

        }elseif($exportType == 'st'){

            $kegiatan = null;
            $menimbang = null;
            switch ($request->kegiatan) {
                case 'kie_tomas':
                    $kegiatan = 'Komunikasi Informasi dan Edukasi (KIE) Bersama Tokoh Masyarakat';
                    $menimbang = 'bahwa dalam rangka Pemberdayaan pada Masyarakat Tahun
                                2024 perlu dilaksanakan kegiatan Komunikasi Informasi dan
                                Edukasi (KIE) Bersama Tokoh Masyarakat ';
                    break;
                case 'bimtek_pasar':
                     $kegiatan = 'Bimtek dan Penyuluhan Komunitas Pasar';
                     $menimbang='bahwa dalam bahwa dalam rangka Pengawasan Bahan Berbahaya pada Pangan perlu dilaksanakan kegiatan Bimtek dan Penyuluhan Komunitas Pasar';
                    break;
                case 'intens_ramadhan':
                     $kegiatan = 'KIE Keliling';
                     $menimbang='bahwa dalam rangka menjamin keamanan dan mutu produk  selama  Bulan ramadhan perlu dilaksanakan kegiatan KIE Keliling ';
                    break;
                case 'lainnya':
                     $kegiatan = $request->desc_kegiatan;
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

            $petugas = [
                'nama'=>'Muh.Fuad, ST',
                'nip'=>'604142405940002',
                'jabatan'=>'Tenaga Administrasi Substansi Infokom',
                'pangkat'=>'-',
            ];

            $pdf = Pdf::loadview('pages.persuratan.surat-tugas.export',['data'=>$data,'kegiatan'=>$kegiatan,'menimbang'=>$menimbang,'petugas'=>$petugas,'tanggal_berlaku'=>$tanggal_berlaku,'tanggal_surat'=>$tanggal_surat]);
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
