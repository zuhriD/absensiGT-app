@extends('layouts.base')
@section('title')
    Home
@endsection
@section('content-header')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-12">
      <h1>Selamat Datang di Sistem Informasi Managemen Absensi Imam Griya Tilawah</h1>
    </div>
    
  </div>
  <!-- Info boxes -->
  <div class="row">
    <div class="col-12 col-sm-6 col-md-6">
      <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-mosque"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Mitra Masjid</span>
          <span class="info-box-number">
           {{ $masjid }} Masjid
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-6">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Imam</span>
          <span class="info-box-number">{{ $imam }} Imam</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

    <!-- Main row -->
    {{-- Make card scroll horizontal masjid --}}
    {{-- make title --}}
    <div class="row">
      <div class="col-sm-12 mt-2 mb-2">
        <h1>Masjid Mitra</h1>
      </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img src="gambar1.jpg" class="card-img-top" alt="Gambar Masjid 1">
            <div class="card-body">
              <h5 class="card-title">Masjid 1</h5>
              <p class="card-text">Deskripsi Masjid 1</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img src="gambar2.jpg" class="card-img-top" alt="Gambar Masjid 2">
            <div class="card-body">
              <h5 class="card-title">Masjid 2</h5>
              <p class="card-text">Deskripsi Masjid 2</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img src="gambar3.jpg" class="card-img-top" alt="Gambar Masjid 3">
            <div class="card-body">
              <h5 class="card-title">Masjid 3</h5>
              <p class="card-text">Deskripsi Masjid 3</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <img src="gambar3.jpg" class="card-img-top" alt="Gambar Masjid 3">
              <div class="card-body">
                <h5 class="card-title">Masjid 3</h5>
                <p class="card-text">Deskripsi Masjid 3</p>
              </div>
            </div>
          </div>
        <!-- Tambahkan card lainnya sesuai kebutuhan -->
      </div>

  
</div><!-- /.container-fluid -->
@endsection
@section('content')
@endsection