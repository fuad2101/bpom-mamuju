<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $export = $request->exportType;
        $data = $request->all();
        if($export == 'nodin'){
            //dd($data);
            $pdf = Pdf::loadview('bpom.persuratan.pdf.nodin',['data'=>$data]);
            return $pdf->download('nodin.pdf');
            //return view('bpom.persuratan.pdf.nodin',['data'=>$data]);
        }elseif($export == 'st'){
            $pdf = Pdf::loadview('bpom.persuratan.pdf.st');
            return $pdf->download('st.pdf');
            //return view('bpom.persuratan.pdf.st',['data'=>$data]);
        }
    }
    public function docx(){
        return "Docs Generate ";
    }
    public function xls(){
        return "xls Generate ";
    }
}
