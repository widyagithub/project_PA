<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use App\Models\Rekomendasi;
use App\Models\Datasurvey;
use App\Models\Warga;
use App\Models\Kriteria;
use PDF;

class LaporanController extends Controller
{
    public function index(){
        $data = Datasurvey::join('wargas', 'datasurveys.id_warga', '=', 'wargas.id')->where('sts_rekomendasi',1)->orderBy('skor_spk', 'DESC')->get();
        return view('laporan', compact('data'));
    } 

    public function perhitungan(){
        $data = Datasurvey::join('wargas', 'datasurveys.id_warga', '=', 'wargas.id')->get();
        return view('perhitungan', compact('data'));
    }

    public function laporan_detail($id){
     $data = Warga::join('datasurveys', 'wargas.id', '=', 'datasurveys.id_warga')
     ->where('wargas.id',$id)->get();

       $pdf = PDF::loadView('laporan_detail',compact('data')) ->setPaper('a4', 'portrait');
    return $pdf->stream('laporan_detail', $data);
 }

 public function laporan_all(){

  $data = Datasurvey::join('wargas', 'datasurveys.id_warga', '=', 'wargas.id')->where('sts_rekomendasi',1)->orderBy('skor_spk', 'DESC')->get();
  $pdf = PDF::loadView('laporan_all',compact('data')) ->setPaper('a4', 'portrait');
    return $pdf->stream('laporan_all', $data);




    // $data = Datasurvey::join('wargas', 'datasurveys.id_warga', '=', 'wargas.id')->where('sts_rekomendasi',1)->orderBy('skor_spk', 'DESC')->get();
    // return view('laporan_all', compact('data'));
} 



}
