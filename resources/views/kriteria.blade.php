@extends('layout.admin')
@push('css')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@endpush

@section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Kriteria</h1>
        </div>
        
    </div>
</div>
</div>
<div class="container">
    <div class="container">
                    @if(auth()->user()->name == 'admin')
        <div class="btn-group" role="group" aria-label="Third group">
          <a href="/tambahkriteria" class="btn btn-primary">Kriteria +</a>
      </div>
      @endif

      <div class="row g-3 align-items-center mt-2">
        <table class="table table-striped table-bordered" style="width:70%">
            <thead>
                <tr style="background-color:darkgray;">
                    <th scope="col"><center>No</center></th>
                    <th scope="col"><center>Nama Kriteria</center></th>
                    <th scope="col"><center>Bobot Kriteria</center></th>
                                 @if(auth()->user()->name == 'admin')
                    <th scope="col"><center>Aksi</center></th>
 @endif
                </tr>
            </thead>
            <tbody>

               @php
               $no = 1;
               @endphp
               @foreach ($data as $index => $row)

               <tr>
                <th scope="row">
                    <center>{{$no}}</center>
                </th> 
                <td>
                    {{$row->nama_kriteria}}
                </td>
                <td>
                    {{$row->bobot_kriteria}}
                </td>
                              @if(auth()->user()->name == 'admin')
                <td>
                    <center>
                        <a href="/tampilkankriteria/{{$row->id}}" class="btn btn-warning">Edit</a>

                        <a href="#" class="btn btn-danger delete_kriteria" data-id="{{$row->id}}" data-nama="{{$row->nama}}">Delete</a>
                    </center>
                </td>
                @endif
            </tr>      
            <?php $no++;?>
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
  $('.delete_kriteria').click(function(){
      var kriteriaid = $(this).attr('data-id');
      var nama_kriteria = $(this).attr('data-nama');

      swal({
        title: "Are you sure?",
        text: "Kamu akan menghapus data kriteria "+nama_kriteria+" ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
      .then((willDelete) => {
        if (willDelete) {
            window.location = "/delete_kriteria/"+kriteriaid+""
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
// Set a success toast, with a title
toastr.success("{{Session::get('success')}}")
@endif
</script>

@endpush