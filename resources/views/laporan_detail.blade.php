<style type="text/css">
    .tabelx td{
        padding: 5px;
        border-bottom-style: solid;
        border-bottom-width: 1px;
    }
</style>
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
                    <table style="width:70%">
                        <tr>
                            <td width="25%">Nama</td>
                            <td>:</td>
                            <td width="70%"> <input type="text" name="" class="form-control" value="{{$data[0]->nama}}" disabled></td>
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
                    <table style="width:100%" class="tabelx">
                       <tr style="background-color:darkgray; height: 40px;">
                        <td align="center"><b>No</b></td>
                        <td width="45%" align="center"><b>Kriteria</b></td>
                        <td width="45%" align="center"><b>Sub Kriteria</b></td>
                        <td width="5%" align="center"><b>Bobot</b></td>
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
                            <td><?php echo $key; ?></td>
                            <td> <?php echo $exp[0]; ?></td>
                            <td align="center"><?php echo $exp[1]; ?></td>
                        </tr>
                        <?php $i++; } ?>
                        <tr>
                            <td align="center" colspan="3"><b>TOTAL BOBOT SUB KRITERIA</b></td>
                            <td align="center">{{array_sum($jml_bobot)}}</td>
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