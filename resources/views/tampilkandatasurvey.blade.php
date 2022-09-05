@extends('layout.admin')
@section('content')
<body>
    <h1 class="text-center mb-4">DATA SURVEY</h1>
    <div class="container">
        <div class="row justify-content-center" >
           <div class="col-8" style="width: 80%;">
            <div class="card" style=" margin-left:200px; ">
                <div class="card-body">

                    <form action="/edit_survey/{{$data->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h3 class="text-center mb-4">EDIT DATA SURVEY</h3>
                        <div class="mb-3">
                            <input type="hidden" name="id_warga" value="{{$data->id}}">
                            <label for="exampleInputEmail1" class="form-label">NIK</label>
                            <input type="number" name="nik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->nik}}"readonly>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>

                            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->nama}}"readonly>
                        </div>
                        <?php foreach (unserialize($data_survey[0]->sub_kriteria) as $key => $value) {
                            $exp = explode("-",$value);
                            $data_awal_surveyx[] = $exp[0];     
                            $data_awal_surveyy[] = $value;     
                        }
                        ?>
                        <table width="100%">
                            <tr>
                                <td style="background-color:; width:50%" valign="top">
                                    <center><b>Kriteria</b></center>
                                    <?php  foreach ($datakriteria as $key => $value) {
                                        echo "<input type='text' class='form-control' style='margin-bottom:5px;;' disabled='disabled' value='".$value->nama_kriteria."'>";
                                    } ?></td>
                                    <td style="background-color:" valign="top">
                                        <center><b>Sub Kriteria</b></center>
                                        <?php  foreach ($datakriteria as $key => $valuex) {?>
                                            <select class="form-control" name="sub_kriteria[<?php echo $valuex->nama_kriteria;?>]" style="margin-bottom:5px">
                        

                        <option value="{{$data_awal_surveyy[$key]}}">{{$data_awal_surveyx[$key]}}</option>
                        


                                              <?php foreach ($datasubkriteria as $key => $value) {  
                                                if($valuex->id==$value->id_kriteria){ ?>

                                                    <option value="<?php echo $value->nama_subkriteria."-".$value->bobot_subkriteria."-".$value->nilai_sub_kriteria."-".$valuex->bobot_kriteria; ?>"><?php echo $value->nama_subkriteria;?> </option>
                                                <?php } } ?>
                                            </select>
                                        <?php } ?>
                                    </td>
                                </tr>
                            </table>

                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="/datasurvey" class="btn btn-danger">Batal</a><br><br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
@endsection