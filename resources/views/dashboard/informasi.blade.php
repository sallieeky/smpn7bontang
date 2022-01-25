@extends("root.dashboard")
@section('informasi-active','active')
@section("content")

<main class="content">
  <div class="container-fluid p-0">

    <div class="row">
      <h1 class="h3 mb-3">Kelola Informasi</h1>
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">Tambah Informasi Baru</h5>
          </div>
          <div class="card-body d-flex">
            <div class="col-12">
              <form action="/kelola-informasi/tambah" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                  <label for="judul">Judul</label>
                  <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Informasi" required>
                </div>
                <div class="form-group mb-3">
                  <label for="isi">Isi</label>
                  <textarea class="form-control" id="isi" rows="15" name="isi" placeholder="Isi Informasi" required></textarea>
                </div>
                <div class="form-group mb-3">
                  <label for="gambar">Gambar</label>
                  <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Daftar Informasi</h5>
            </div>
            <div class="card-body">
              <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Di Upload Oleh</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th style="width: 50%">Isi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($informasi as $i)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $i->user->name }}</td>
                    <td>
                      <img src="{{ asset("upload/informasi/" . $i->gambar) }}" alt="{{ $i->judul }}" style="max-height: 100px" class="img-responsive img-thumbnail">
                    </td>
                    <td>{{ $i->judul }}</td>
                    <td>{{ substr(str_replace('<br />', '', $i->isi), 0, 100) . '. . .' }}</td>
                    <td class="table-action">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-modal-{{ $i->id }}">Edit</button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus-modal-{{ $i->id }}">Hapus</button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>


@foreach ($informasi as $i)
  <!-- Edit Modal -->
  <div class="modal fade" id="edit-modal-{{ $i->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Informasi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body m-3">
          <form action="/kelola-informasi/edit" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
              <label for="judul">Judul</label>
              <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Informasi" value="{{ $i->judul }}" required>
            </div>
            <div class="form-group mb-3">
              <label for="isi">Isi</label>
              <textarea class="form-control" id="isi" rows="10" name="isi" placeholder="Isi Informasi" required>{{ str_replace('<br />', '', $i->isi) }}</textarea>
            </div>
            <div class="form-group mb-3">
              <label for="gambar">Gambar</label>
              <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary" name="id" value="{{ $i->id }}">Edit</button>
        </div>
      </div>
    </div>
  </div>
  <!-- END Edit Modal -->

  <!-- Hapus Modal -->
  <div class="modal fade" id="hapus-modal-{{ $i->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Hapus Informasi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body m-3">
          <p class="mb-0">Apakah anda yakin untuk menghapus informasi ini?</p>
          <h5><strong>{{ $i->judul }}</strong></h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <a href="/kelola-informasi/hapus/{{ $i->id }}" class="btn btn-danger">Hapus</a>
        </div>
      </div>
    </div>
  </div>
  <!-- END Hapus Modal -->
  
@endforeach

@endsection