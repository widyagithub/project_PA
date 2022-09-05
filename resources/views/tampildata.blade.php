@extends('layout.admin')

@section('content')
<body>
  <h1 class="text-center mb-4">EDIT DATA WARGA</h1>

  <div class="container">
    <div class="row justify-content-center">
     <div class="col-8">
      <div class="card">
        <div class="card-body">
         <form action="/updatedata/{{$data->id}}" method="POST" enctype="multipart/form-data">
          @csrf
          <h3 class="text-center mb-4">EDIT DATA WARGA</h3>

          <table class="table" style="width:100%">
            <tr>
              <td>No. KK</td>
              <td>:</td>
              <td>
                <input type="number" name="no_kk" class="form-control" placeholder="Masukkan No. KK" value="{{$data->no_kk}}">
               
              </td>
            </tr>
            <tr>
              <td>NIK</td>
              <td>:</td>
              <td>
                <input type="number" name="nik" class="form-control" placeholder="Masukkan NIK" value="{{$data->nik}}">
               
              </td>
            </tr>
            <tr>
              <td>Nama Lengkap</td>
              <td>:</td>
              <td>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap" value="{{$data->nama}}">
                
              </td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td>:</td>
              <td>
                <textarea name="alamat" class="form-control" placeholder="Masukkan Alamat">{{$data->alamat}}</textarea>
               
              </td>
            </tr>                   
          </table>
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="/warga" class="btn btn-danger">Batal</a>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
</body>    
@endsection