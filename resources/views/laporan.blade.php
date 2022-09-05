@extends('layout.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Laporan</h1>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<div class="container">
    <div class="container">
        <a href="<?php echo url('/perhitungan');?>" class="btn btn-primary"  >AHP Proses</a>
        <a href="<?php echo url('/laporan_all');?>" class="btn btn-primary"  >Cetak Laporan PDF</a>
<!-- <button class="btn btn-primary">Cetak Laporan Excel</button>
-->    <div class="row g-3 align-items-center mt-2">
    <table class="table table-striped table-bordered">
        <thead>
            <tr style="background-color:darkgray;">
                <th scope="col"><center>Ranking</center></th>
                <th scope="col"><center>No KK</center></th>
                <th scope="col"><center>Nik</center></th>
                <th scope="col"><center>Nama</center></th>
                <th scope="col"><center>Alamat</center></th>
                <th scope="col"><center>Nilai</center></th>
                <th scope="col"><center>Detail</center></th>
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
            <td><a href="laporan_detail/{{$value->id}}" class="btn btn-success btn-sm">
                <svg width="15" height="15" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                  <path fill="var(--ci-primary-color, currentColor)" d="M420,128.1V16H92V128.1A80.1,80.1,0,0,0,16,208V400H84V368H48V208a48.054,48.054,0,0,1,48-48H416a48.054,48.054,0,0,1,48,48V368H420v32h76V208A80.1,80.1,0,0,0,420,128.1Zm-32-.1H124V48H388Z" class="ci-primary"/>
                  <rect width="32" height="32" x="396" y="200" fill="var(--ci-primary-color, currentColor)" class="ci-primary"/>
                  <path fill="var(--ci-primary-color, currentColor)" d="M116,264H76v32h40V496H388V296h40V264H116ZM356,464H148V296H356Z" class="ci-primary"/>
              </svg>

          Cetak Detail</a></td>
      </tr>  
  <?php } ?>    
</tbody>
</table>





</div>
</div>
</div>



</div>


@endsection

