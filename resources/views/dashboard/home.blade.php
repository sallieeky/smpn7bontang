@extends("root.dashboard")
@section('dashboard-active','active')
@section("content")

<main class="content">
  <div class="container-fluid p-0">


    <div class="row">
      <h1 class="h3 mb-3">Dashboard Sistem Informasi Profile Company SMPN 7 Bontang</h1>
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">Deskripsi SMPN 7 Bontang</h5>
          </div>
          <div class="card-body d-flex">
            <img src="logo.png" alt="Logo SMPN 7 Bontang">
            <p style="text-align: justify; margin: 0 0 0 12px; font-size: 1.2em">
              Sekolah Menengah Pertama Negeri 7 Kota Bontang merupakan salah satu 
              institusi pendidikan negeri tingkat menengah pertama yang sudah berdiri sejak 
              16 Juli 2007. Sekolah Menengah Pertama Negeri 7 Kota Bontang berlokasi di
              Jl. K.S. Tubun No.29 Kecamatan Bontang Selatan, Kota Bontang yang telah 
              terakreditasi A. Sekolah Menengah Pertama Negeri 7 Kota Bontang memiliki 
              staf pengajar guru yang kompeten pada bidang pelajarannya sehingga 
              berkualitas dan menjadi salah satu yang terbaik di Kota Bontang. Tersedia juga 
              berbagai fasilitas sekolah seperti ruang kelas yang nyaman, perpustakaan, 
              lapangan olahraga, kantin dan lainnya. Adapun pelajaran yang diberikan 
              meliputi semua mata pelajaran wajib sesuai kurikulum yang berlaku.
            </p>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <h1 class="h3 mb-3">Kelola Website SMPN 7 Bontang</h1>
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">Menu Kelola</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <a style="font-size: 1.2em" href="/kelola-informasi"><i class="far fa-file-alt align-middle me-2"></i><span class="align-middle">Kelola Informasi</span></a>
              </div>
              <div class="col-md-4">
                <a style="font-size: 1.2em" href="/kelola-karya"><i class="align-middle me-2" data-feather="image"></i><span class="align-middle">Kelola Karya Siswa</span></a>
              </div>
              <div class="col-md-4">
                <a style="font-size: 1.2em" href="#"><i class="align-middle me-2" data-feather="image"></i><span class="align-middle">Kelola Karya Siswa</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <h1 class="h3 mb-3">Statistik Pengunjung</h1>
      <div class="col-xl-12 col-xxl-12 d-flex">
        <div class="w-100">
          <div class="row">
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col mt-0">
                      <h5 class="card-title">Penjualan</h5>
                    </div>
                    <div class="col-auto">
                      <div class="stat text-primary">
                        <i class="align-middle" data-feather="truck"></i>
                      </div>
                    </div>
                  </div>
                  <h4 class="mt-1 mb-3">12312</h1>
                  <div class="mb-0">
                    <span class="text-muted"><small>Data di hitung secara otomatis</small></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col mt-0">
                      <h5 class="card-title">Pengunjung</h5>
                    </div>
                    <div class="col-auto">
                      <div class="stat text-primary">
                        <i class="align-middle" data-feather="users"></i>
                      </div>
                    </div>
                  </div>
                  <h4 class="mt-1 mb-3">1231231</h4>
                  <div class="mb-0">
                    <span class="text-muted"><small>Data di hitung secara otomatis</small></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col mt-0">
                      <h5 class="card-title">Pendapatan</h5>
                    </div>
                    <div class="col-auto">
                      <div class="stat text-primary">
                        <i class="align-middle" data-feather="dollar-sign"></i>
                      </div>
                    </div>
                  </div>
                  <h4 class="mt-1 mb-3">12313</h4>
                  <div class="mb-0">
                    <span class="text-muted"><small>Data di hitung secara otomatis</small></span>                  
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col mt-0">
                      <h5 class="card-title">Pesanan</h5>
                    </div>
                    <div class="col-auto">
                      <div class="stat text-primary">
                        <i class="align-middle" data-feather="shopping-cart"></i>
                      </div>
                    </div>
                  </div>
                  <h4 class="mt-1 mb-3">123123</h4>
                  <div class="mb-0">
                    <span class="text-muted"><small>Data di hitung secara otomatis</small></span>                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>

@endsection