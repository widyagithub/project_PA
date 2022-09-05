<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Models\Subkriteria;
use App\Models\Kriteria;
use App\Models\Subkriteria;
use Illuminate\Support\Facades\DB;


class SubkriteriaController extends Controller{
    // public function create(){
    //     $subkriteria = Subkriteria::all();
    //     return view('subkriteria.create', compact('subkriteria'));
    // }

    public function index(Request $request){

        if($request->has('search')){
            $data = Subkriteria::where('nama', 'LIKE', '%' .$request->search. '%')->paginate();
        }else{
            $data = Subkriteria::all();
        }

        
        return view('subkriteria', compact('data'));
        // $data['nama_kriteria'] =\DB::table('kriterias')->get();
        // $data = Subkriteria::paginate(5);
        // return view('page.index', $data);
        // return view('subkriteria', $data);
        // if($request->has('search')){
        //     $data = Subkriteria::where('nama', 'LIKE', '%' .$request->search. '%')->paginate(5);
        // }else{
        //     $data = Subkriteria::paginate(5);
        // }

        
        // return view('subkriteria', compact('data'));

        // return view('subkriteria');
    } 

    public function tambahsubkriteria(){
        // $data = tambahkriteria::all();
        $datakriteria = Kriteria::all();
        // return view(view:'tambahsubkriteria', ['data'=>$data]);
        return view('tambahsubkriteria', compact('datakriteria'));
    }

    public function insertsubkriteria(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'nama_subkriteria' => 'required|min:5|max:25',
            'bobot_subkriteria' => 'required|min:1|max:5',
        ]);

        Subkriteria::create($request->all());
        return redirect()->route('subkriteria')->with('success', 'Data Subkriteria Berhasil Di Tambahkan');
    }

    public function tampilkansubkriteria($id){
        // $data = Subkriteria::find($id);
        $datakriteria = Kriteria::all();

        $data = DB::table('subkriterias')
            ->join('kriterias', 'kriterias.id', '=', 'subkriterias.id_kriteria')
            ->where('subkriterias.id',$id)
            ->select('subkriterias.id as ids', 'subkriterias.nama_subkriteria', 'subkriterias.bobot_subkriteria','subkriterias.nilai_sub_kriteria', 'kriterias.id as idk', 'kriterias.nama_kriteria')
            ->get();

            // print_r($data);

        return view('tampilsubkriteria', compact('datakriteria','data'));
    }

    public function updatesubkriteria(Request $request, $id){
        $data = Subkriteria::find($id);
        $data->update($request->all());

        return redirect()->route('subkriteria')->with('success', 'Data Subkriteria Berhasil Di Update');
    }

    public function delete_subkriteria($id){
        $data = Subkriteria::find($id);
        $data->delete();

        return redirect()->route('subkriteria')->with('success', 'Data Kriteria Berhasil Di Hapus');
    }
}