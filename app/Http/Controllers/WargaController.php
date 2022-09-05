<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Models\Datasurveys;
use App\Models\Kriteria;
use App\Models\Subkriteria;
use Illuminate\Http\Request;

class WargaController extends Controller{
    public function index(Request $request){
        $data = Warga::all();
        $datasurveys = Datasurveys::all();
        return view('datawarga', compact('data','datasurveys'));
    }

    public function tambahwarga(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'no_kk' => 'required|min:16|max:25',
            'nik' => 'required|min:16|max:25',
            'nama' => 'required|min:3|max:25',
            'alamat' => 'required|min:10|max:25',
        ]);

        Warga::create($request->all());
        return redirect()->route('warga')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function tampilkandata($id){
        $data = Warga::find($id);
        // dd($data);
        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Warga::find($id);
        $data->update($request->all());

        return redirect()->route('warga')->with('success', 'Data Berhasil Di Update');
    }

    public function delete_warga($id){
        $data = Warga::find($id);
        $data->delete();

        return redirect()->route('warga')->with('success', 'Data Berhasil Di Hapus');
    }

    public function detailsdata($id){
        // $data = Warga::find($id);

       $data = Warga::join('datasurveys', 'wargas.id', '=', 'datasurveys.id_warga')
       ->where('wargas.id',$id)->get();


        // dd($data);
        // return view('data.detailsdata')->with('data', $data);
       return view('detaildata', compact('data'));
   }

   public function tambahsurvey($id){
        // // $datawarga = Warga::all();
    $datakriteria = Kriteria::all();
    $datasubkriteria = Subkriteria::all();
        // // dd($data);
        // // return view('tambahsurvey', compact('datawarga'));
        // return view('tambahsurvey', compact('datakriteria'));
        // // return view('tambahsurvey');

    $data = Warga::find($id);
    return view('tambahsurvey', compact('data', 'datakriteria', 'datasubkriteria'));
}

public function insertsurvey(Request $request){
    $data =  serialize($request->sub_kriteria); //dijadikan satu
    foreach (unserialize($data) as $key => $value) { //utk menghitung nilai akhir skor_spk
        $exp = explode("-",$value); //memecah menjadi array
        $jml[$key]= round(floatval($exp[2])*floatval($exp[3]),3); //array dr nilai unserialize

    }

    $blog = Datasurveys::create([
        'id_warga'          => $request->id,
        'sub_kriteria'      => serialize($request->sub_kriteria),
        'skor_spk'          => array_sum($jml), //jml dari semua hasil array yg dikali
        'sts_rekomendasi'   => 0,
        'created_at'        => date("Y-m-d"),
        'updated_at'        => date("Y-m-d")
    ]);

    return redirect()->route('datasurvey')->with('success', 'Data Survey Berhasil Di Tambahkan');
}
}


