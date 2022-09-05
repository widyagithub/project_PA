@extends('layout.admin')

@section('content')
<body>
  <h1 class="text-center mb-4">EDIT DATA SUBKRITERIA</h1>

  <div class="container">
      <div class="row justify-content-center">
         <div class="col-8">
          <div class="card">
              <div class="card-body">
               <form action="/updatesubkriteria/{{$data[0]->ids}}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <h3 class="text-center mb-4">EDIT DATA SUBKRITERIA</h3>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Kriteria</label>
                    <select class="form-select" name="id_kriteria" aria-label="Default select example">
                      <option selected value="{{$data[0]->idk}}">{{$data[0]->nama_kriteria}}</option>
                      <option >Pilih Kriteria</option>
                      @foreach ($datakriteria as $datax)
                        <option value="{{$datax->id}}">{{$datax->nama_kriteria}}</option>   
                      @endforeach
                    </select>
                  </div>
                 <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama SubKriteria</label>
                    <input type="text" name="nama_subkriteria" class="form-control" value="{{$data[0]->nama_subkriteria}}" >
                  </div>
                 <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Bobot</label>
                    <input type="number" name="bobot_subkriteria" class="form-control" value="{{$data[0]->bobot_subkriteria}}">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nilai Subkriteria</label>
                    <input type="float" name="nilai_sub_kriteria" class="form-control" value="{{$data[0]->bobot_subkriteria}}">
                  </div>
                   <button type="submit" class="btn btn-primary">Submit</button>
                   <a href="/subkriteria" class="btn btn-danger">Batal</a>
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