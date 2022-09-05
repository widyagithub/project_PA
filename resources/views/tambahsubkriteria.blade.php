@extends('layout.admin')

@section('content')
<body>
    <h1 class="text-center mb-4">TAMBAH DATA SUBKRITERIA</h1>

    <div class="container">
        <div class="row justify-content-center">
           <div class="col-8">
            <div class="card">
                <div class="card-body">
                 <form action="/insertsubkriteria" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h3 class="text-center mb-4">TAMBAH DATA SUBKRITERIA</h3>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Kriteria</label>
                        <select class="form-select" name="id_kriteria" aria-label="Default select example">
                          <option selected>Pilih Kriteria</option>
                          @foreach ($datakriteria as $data)
                            <option value="{{$data->id}}">{{$data->nama_kriteria}}</option>   
                          @endforeach
                          {{-- <option value="One">Status Penguasaan Bangunan</option>
                          <option value="Two">Luas Lantai Bangunan</option> --}}
                          {{-- <option value="3">Three</option> --}}
                        </select>
                      </div>
                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama SubKriteria</label>
                        <input type="text" name="nama_subkriteria" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('nama_subkriteria')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                      </div>
                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Bobot</label>
                        <input type="number" name="bobot_subkriteria" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('bobot_subkriteria')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nilai Subkriteria</label>
                        <input type="float" name="nilai_sub_kriteria" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('nilai_sub_kriteria')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                      </div>
                      {{-- <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div> --}}
                      {{-- <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div> --}}
                     <button type="submit" class="btn btn-primary">Submit</button>
                     <a href="/subkriteria" class="btn btn-danger">Batal</a>
                     <br>
                     <br>
                   </form>
                </div>
            </div>
           </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
@endsection