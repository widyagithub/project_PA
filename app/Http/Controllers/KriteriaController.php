<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kriteria;

class KriteriaController extends Controller{
    public function index(Request $request){ 
        $data = Kriteria::all();
        return view('kriteria', compact('data'));
    }

    public function tambahkriteria(){
        return view('tambahkriteria');
    }

    public function insertkriteria(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'nama_kriteria' => 'required|min:5|max:25',
            'bobot_kriteria' => 'required|min:1|max:5',
        ]);

        Kriteria::create($request->all());
        return redirect()->route('kriteria')->with('success', 'Data Kriteria Berhasil Di Tambahkan');
    }

    public function tampilkankriteria($id){
        $data = Kriteria::find($id);
        // dd($data);
        return view('tampilkriteria', compact('data'));
    }

    public function updatekriteria(Request $request, $id){
        $data = Kriteria::find($id);
        $data->update($request->all());

        return redirect()->route('kriteria')->with('success', 'Data Kriteria Berhasil Di Update');
    }

    public function delete_kriteria($id){
        $data = Kriteria::find($id);
        $data->delete();

        return redirect()->route('kriteria')->with('success', 'Data Kriteria Berhasil Di Hapus');
    }
}