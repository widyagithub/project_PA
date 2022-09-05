@extends('layout.admin')
@push('css')
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@endpush

@section('content')
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Warga</h1>
        </div>

      </div>
    </div>
  </div>
  <div class="container">
    <div class="container">
      <div class="row">
        @if(auth()->user()->name == 'admin')
        <div class="col-sm-9">
          <div class="btn-group" role="group" aria-label="Third group">
            <a href="/tambahwarga" class="btn btn-success">Tambah Data +</a>
          </div>
        </div>
        @endif

      </div>

      <div class="row g-3 align-items-center mt-2">

        <table class="table table-striped table-bordered">
          <thead>
            <tr style="background-color:darkgray;">
              <th scope="col"><center>No</center></th>
              <th scope="col"><center>NO KK</center></th> 
              <th scope="col"><center>NIK</center></th> 
              <th scope="col"><center>Nama</center></th>
              <th scope="col"><center>Alamat</center></th>
              @if(auth()->user()->name == 'admin')
              <th scope="col"><center>Aksi</center></th>
              @endif
            </tr>
          </thead>
          <tbody>
           

            @foreach ($datasurveys as $key => $rowx) <!--key index array, rowx = aliasnya-->
            @php
            $orang_sudah_survey[] = $rowx->id_warga; 
            @endphp            
            @endforeach

            @foreach ($data as $key => $row)
            <tr>
              <th scope="row"><center>{{$key+1}}</center></th> 
              <td>{{$row->no_kk}}</td>
              <td>{{$row->nik}}</td>
              <td>{{$row->nama}}</td>
              <td>{{$row->alamat}}</td>
              @if(auth()->user()->name == 'admin')
              <td align="center">
                @if(!in_array($row->id, $orang_sudah_survey))
                <a href="/tambahsurvey/{{$row->id}}" class="btn btn-success">Survey+</a>
                @endif
                <a href="/tampilkandata/{{$row->id}}" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-danger delete_warga" data-id="{{$row->id}}" data-nama="{{$row->nama}}">Delete</a>
              </td>
              @endif

            </tr>

            @endforeach
          </tbody>
        </table>
      </div>
    </div> 
  </div>
</div>   

@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script
src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
crossorigin="anonymous"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

<script>
  $('.delete_warga').click(function(){
    var wargaid = $(this).attr('data-id');
    var nama_warga = $(this).attr('data-nama');

    swal({
      title: "Are you sure?",
      text: "Kamu akan menghapus data warga dengan nama "+nama_warga+" ",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        window.location = "/delete_warga/"+wargaid+""
        swal("Data berhasil di hapus", {
          icon: "success",
        });
      } else {
        swal("Data tidak jadi di hapus");
      }
    });
  });
  
</script>
<script>
  @if (Session::has('success'))
  toastr.success("{{Session::get('success')}}")
  @endif
</script>

@endpush