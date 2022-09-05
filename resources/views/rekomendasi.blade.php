@extends('layout.admin')
@section('content')

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Rekomendasi</h1>
        </div>
    </div>
</div>
</div>
<div class="container">
    <div class="container">
        <div class="row g-3 align-items-center mt-2">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr style="background-color:darkgray;">
                        <th scope="col"><center>Ranking</center></th>
                        <th scope="col"><center>No KK</center></th>
                        <th scope="col"><center>Nik</center></th>
                        <th scope="col"><center>Nama</center></th>
                        <th scope="col"><center>Alamat</center></th>
                        <th scope="col"><center>Nilai</center></th>
                        <th scope="col"><center>sts</center></th>
                        @if(auth()->user()->name != 'admin')
                        <th scope="col"><center>Aksi</center></th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                 <?php foreach ($data as $key => $value) { ?>
                  <tr>
                    <th scope="row"><center>{{$key+1}}</center></th>
                    <td>{{$value->no_kk}}</td>
                    <td>{{$value->nik}}</td>
                    <td>{{$value->nama}}</td>
                    <td>{{$value->alamat}}</td>
                    <td>{{$value->skor_spk}}</td>
                    <td>
                        <center>
                            @if($value->sts_rekomendasi ==0)         
                            x        
                            @else
                            <svg width="10px" height="10px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>              @endif
                        </center>
                    </td>
                    @if(auth()->user()->name != 'admin')

                    <td><center>
                        <a href="/detailsdata/{{$value->id_warga}}" class="btn btn-info btn-sm">Detail</button>
                            @if($value->sts_rekomendasi ==1)
                            <a href="/cancel/{{$value->id}}" class="btn btn-warning btn-sm" style="margin-left: 5px;">Cancel</a>
                            @else
                            <a href="/approve/{{$value->id}}" class="btn btn-success btn-sm" style="margin-left: 5px;">Approve</a>
                            @endif

                        </center>
                    </td>
                    @endif
                </tr>  
            <?php } ?>    
        </tbody>
    </table>
</div>
</div>
</div>
</div>
@endsection