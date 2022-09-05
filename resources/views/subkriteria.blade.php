@extends('layout.admin')
@section('content')

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Subkriteria</h1>
        </div>

    </div>
</div>
</div>
<div class="container">
    <div class="container">
      @if(auth()->user()->name == 'admin')
      <div class="btn-group" role="group" aria-label="Third group">
          <a href="/tambahsubkriteria" class="btn btn-info">Subkrteria +</a>
      </div>
      @endif
      <div class="row g-3 align-items-center mt-2">
        <table class="table table-striped table-bordered" style="width:90%">
            <thead>
                <tr style="background-color:darkgray;">
                    <th scope="col">No</th>
                    <th scope="col" width="40%">Nama Kriteria</th>
                    <th scope="col">Nama Subkriteria</th>
                    <th scope="col" width="15%">Bobot Subkriteria</th>
                    <th scope="col" width="15%">Nilai Subkriteria</th>
                    
                    @if(auth()->user()->name == 'admin')
                    <th scope="col" width="15%"><center>Aksi</center></th>
                    @endif
                </tr>
            </thead>
            <tbody>
               @php
               $no = 1;
               @endphp
               @foreach ($data as $index => $row)
               <tr>
                <th scope="row"><center>{{$index+1}}</center></th>
                <td>{{$row->kriteria->nama_kriteria}}</td>
                <td>{{$row->nama_subkriteria}}</td>
                <td>{{$row->bobot_subkriteria}}</td>
                <td>{{$row->nilai_sub_kriteria}}</td>
                @if(auth()->user()->name == 'admin')
                <td><center>
                    <a href="/tampilkansubkriteria/{{$row->id}}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger delete_subkriteria btn-sm" data-id="{{$row->id}}" data-nama="{{$row->nama}}">Delete</a>
                </center>
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
  $('.delete_subkriteria').click(function(){
      var subkriteriaid = $(this).attr('data-id');
      var nama_subkriteria = $(this).attr('data-nama');

      swal({
        title: "Are you sure?",
        text: "Kamu akan menghapus data kriteria "+nama_subkriteria+" ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
      .then((willDelete) => {
        if (willDelete) {
            window.location = "/delete_subkriteria/"+subkriteriaid+""
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