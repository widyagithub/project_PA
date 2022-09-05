@extends('layout.admin')

@section('content')
<body>

    <h1 class="text-center mb-4">TAMBAH DATA WARGA</h1>

    <div class="container">
        <div class="row justify-content-center">
           <div class="col-8">
            <div class="card">
                <div class="card-body">
                 <form action="/insertdata" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h3 class="text-center mb-4">TAMBAH DATA WARGA</h3>

                    <table class="table" style="width:100%">
                        <tr>
                            <td>No. KK</td>
                            <td>:</td>
                            <td>
                                <input type="number" name="no_kk" class="form-control" placeholder="Masukkan No. KK">
                                @error('no_kk')
                                <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>:</td>
                            <td>
                                <input type="number" name="nik" class="form-control" placeholder="Masukkan NIK">
                                @error('nik')
                                <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap">
                                @error('nama')
                                <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>
                                <textarea name="alamat" class="form-control" placeholder="Masukkan Alamat"></textarea>
                                @error('alamat')
                                <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                            </td>
                        </tr>                   
                    </table>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/warga" class="btn btn-danger">Batal</a>
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