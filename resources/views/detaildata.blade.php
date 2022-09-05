@extends('layout.admin')
@section('content')

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Detail Data Survey</h1>
      </div>
  </div>
</div>
</div>

<section class="content">
    <div class="container-fluid">
     <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                    <table style="width:100%">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td> <input type="text" name="" class="form-control" value="{{$data[0]->nama}}" disabled></td>
                        </tr>
                        <tr>
                            <td>No KK</td>
                            <td>:</td>
                            <td><input type="text" name="" class="form-control" value="{{$data[0]->no_kk}}" disabled></td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>:</td>
                            <td><input type="text" name="" class="form-control" value="{{$data[0]->nik}}" disabled></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><input type="text" name="" class="form-control" value="{{$data[0]->alamat}}" disabled></td>
                        </tr>
                    </table>
                    <hr>
                    <table width="100%">
                     <tr style="background-color:darkgray; height: 40px;">
                        <td align="center"><b>No</b></td>
                        <td width="40%" align="center"><b>Kriteria</b></td>
                        <td width="40%" align="center"><b>Sub Kriteria</b></td>
                        <td align="center"><b>Bobot</b></td>
                    </tr>
                    <?php 
                    $i = 1;
                    foreach (unserialize($data[0]->sub_kriteria) as $key => $value) {
                        $exp = explode("-", $value);
                        $jml_bobot[] = $exp[1];
                        $skor[] = round(floatval($exp[2])*floatval($exp[3]),3);
                        ?>

                        <tr>
                            <td><center>{{$i}}</center></td>
                            <td>
                                <input type="text" class="form-control" name="" value="<?php echo $key; ?>">
                            </td>
                            <td> <input type="text" class="form-control" name="" value="<?php echo $exp[0]; ?>">
                            </td>
                            <td>
                             <input type="text" class="form-control" name="" value="<?php echo $exp[1]; ?>">
                         </td>
                         <td>
                         </td>
                     </tr>
                     <?php $i++; }  ?>
                     <tr>
                        <td align="center" colspan="3"><b>TOTAL BOBOT SUB KRITERIA</b></td>
                        <td>
                            <input type="text" class="form-control" name="" value="{{array_sum($jml_bobot)}}">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>
</div>

@endsection