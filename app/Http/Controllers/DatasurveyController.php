<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datasurvey;
use App\Models\Warga;
use App\Models\Kriteria;
use App\Models\Subkriteria;
use Illuminate\Support\Facades\DB;

class DatasurveyController extends Controller{
    public function index(Request $request){
            $data = Datasurvey::join('wargas', 'datasurveys.id_warga', '=', 'wargas.id')
            ->orderBy('datasurveys.id','Desc')->get();
       
        return view('datasurvey', compact('data'));
    }

    public function tampilkandatasurvey($id){
      $datakriteria = Kriteria::all();
      $datasubkriteria = Subkriteria::all();
      $data = Warga::find($id);

      $data_survey = DB::table('datasurveys')
      ->where('id_warga',$id)
      ->get();

      return view('tampilkandatasurvey', compact('data', 'datakriteria', 'datasubkriteria','data_survey'));
  }

  public function edit_survey(Request $request){
    $data =  serialize($request->sub_kriteria);
    foreach (unserialize($data) as $key => $value) {
        $exp = explode("-",$value);
        $jml[$key]= round(floatval($exp[2])*floatval($exp[3]),3);
    }

Datasurvey::where('id_warga',$request->id)->first()->update([
        'id_warga'          => $request->id,
        'sub_kriteria'      => serialize($request->sub_kriteria),
        'skor_spk'          => array_sum($jml),
        'sts_rekomendasi'   => 0,
        'created_at'        => date("Y-m-d"),
        'updated_at'        => date("Y-m-d")
    ]);

    // $survey = DB::table('datasurveys')->where('id_warga',$request->id)->get();
    // $survey->update([
    //     'id_warga'          => $request->id,
    //     'sub_kriteria'      => serialize($request->sub_kriteria),
    //     'bobot_subkriteria' => serialize($request->bobot_subkriteria),
    //     'skor_spk'          => array_sum($jml),
    //     'sts_rekomendasi'   => 0,
    //     'created_at'        => date("Y-m-d"),
    //     'updated_at'        => date("Y-m-d")
    // ]);

    return redirect()->route('datasurvey')->with('success', 'Data Survey Berhasil Di Edit');
}

    // public function tambahsurvey(){
    //     // $datawarga = Warga::all();
    //     $datakriteria = Kriteria::all();
    //     // dd($data);
    //     // return view('tambahsurvey', compact('datawarga'));
    //     return view('tambahsurvey', compact('datakriteria'));
    //     // return view('tambahsurvey');
    // }

    // public function insertsurvey(Request $request){
    //     // dd($request->all());
    //     Datasurvey::create($request->all());
    //     return redirect()->route('datasurvey')->with('success', 'Data Survey Berhasil Di Tambahkan');
    // }

    // public function datawarga($id){
    //     $data = Warga::find($id);
    //     // dd($data);
    //     // return view('data.detailsdata')->with('data', $data);
    //     return view('datawarga', compact('data'));
    // }
}