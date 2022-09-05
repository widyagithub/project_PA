<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rekomendasi;
use App\Models\Datasurvey;
use App\Models\Warga;
use App\Models\Kriteria;

class RekomendasiController extends Controller
{
    public function index(){
        $data = Datasurvey::join('wargas', 'datasurveys.id_warga', '=', 'wargas.id')->select('datasurveys.*','wargas.no_kk', 'wargas.nik','wargas.nama','wargas.alamat','wargas.id as id_warga')->orderBy('skor_spk', 'DESC')->get();
        return view('rekomendasi', compact('data'));
    } 

    public function approve($id){
        $data = Datasurvey::find($id);
        $data->sts_rekomendasi = '1';
        $data->save();
        return redirect()->route('laporan');
    }

    public function cancel($id){
        $data = Datasurvey::find($id);
        $data->sts_rekomendasi = '0';
        $data->save();
        return redirect()->route('rekomendasi');
    }
}
