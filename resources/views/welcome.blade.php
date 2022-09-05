@extends('layout.admin')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
       
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-address-book"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Data Warga</span>
              <span class="info-box-number">
                {{$jumlahwarga}}
                <small>Orang</small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-edit"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Data Kriteria</span>
              <span class="info-box-number">{{$jumlahkriteria}} <small>Kriteria</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-thumbs-up"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Laporan</span>
              <span class="info-box-number">{{$jumlahlaporan}} <small>Orang</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!--pengertian-->
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Sistem Pendukung Keputusan</h5>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <p class="text-center">
                    <strong>Sistem Pendukung Keputusan bertujuan untuk menyediakan informasi, 
                      membimbing, memberikan prediksi serta mengarahkan pengguna informasi agar 
                      dapat melakukan pengambilan keputusan dengan lebih baik. Dengan demikian
                      dapat disimpulkan bahwa Sistem Pendukung Keputusan (SPK) bukanlah alat 
                      pengambil keputusan, tetapi merupakan sistem yang membantu dalam 
                      pengambilan keputusan dengan informasi dari data yang telah diolah dengan 
                    relevan dan sebagai pembuat keputusan dengan lebih cepat serta akurat.</strong>
                  </p>
                  <p class="text-center">
                    <strong>Analytical Hierarchy Process (AHP) merupakan teori tentang pengukuran 
                      untuk menemukan skala rasio, mulai dari perbandingan berpasangan yang diskrit 
                    maupun kotinyu.</strong>
                  </p>
                  <p class="text-center">
                    <strong>Bab 1 Ketentuan Umum Pasal 1 ayat 5 dijelaskan bahwa “Program Sembako adalah 
                      program Bantuan Sosial pangan yang merupakan pengembangan dari program BPNT dengan 
                    perubahan nilai bantuan dan jenis bahan pangan”. (Indonesia, 2021).</strong>
                  </p>


                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./card-body -->

          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!--akhir pengertian-->

      
      <!-- /.row -->
    </div><!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>

@endsection