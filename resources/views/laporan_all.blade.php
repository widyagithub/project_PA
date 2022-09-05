<style type="text/css">
    td, th{
        padding: 5px;
        border-bottom-style: solid;
        border-bottom-width: 1px;
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
<span style="font-size: 20pt; font-weight: bold;">            Laporan Rekomendasi Calon Warga Penerima Bantuan Sembako</span><br>
           <span style="font-size: 16pt;">Desa Mangir, Kecamatan Rogojampi, Kab. Banyuwangi</span><br><br>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<div class="container">
    <div class="container">
<!-- <button class="btn btn-primary">Cetak Laporan Excel</button>
-->    <div class="row g-3 align-items-center mt-2">
    <table class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr style="background-color:darkgray;">
                <th scope="col"><center>Ranking</center></th>
                <th scope="col"><center>No KK</center></th>
                <th scope="col"><center>KK</center></th>
                <th scope="col"><center>Nama</center></th>
                <th scope="col"><center>Alamat</center></th>
                <th scope="col"><center>Nilai</center></th>
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
      </tr>  
  <?php } ?>    
</tbody>
</table>
</div>
</div>
</div>
</div>
