@extends('layouts.admin.app')

@section('title', 'Bus')

@section('content')
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pegawai</h1>
  </div>
  <div class="row">
    <div class="col-lg-10">
      <div class="card shadow mb-4">
        <div
          class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Data Pegawai</h6>
        </div>
        <div class="card-body">
          <div class="mb-4 pb-3 border-bottom">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahBus">
              <i class="fas fa-fw fa-plus"></i>
              Tambah
            </button>

            <div class="modal fade" id="tambahBus" tabindex="-1" role="dialog" aria-labelledby="tambahBusLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="tambahBusLabel">Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="{{ route('pegawai.store') }}" method="POST">
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" name="name" id="name" :value="old('name')" placeholder="Masukkan nama bus">
                      </div>
                      <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email" :value="old('email')" placeholder="Masukkan kelas bus">
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan kelas bus">
                      </div>
                      <div class="form-group">
                        <label for="password_confirmation">Konfirmasi Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Masukkan kelas bus">
                      </div>
                    </div>
                    <div class="modal-footer">
                      @csrf
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          @if (session('message'))
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="alert alert-success mb-1" role="alert">
                  {{ session('message') }}
                </div>
              </div>
            </div>
          @endif

          @if ($errors->any())
            <div class="alert alert-danger">
              <ul class="mb-0">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <div class="table-responsive">
            <table class="table table-bordered" id="dataBus" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Foto</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Foto</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
              <tbody>
                @php $i = 1 @endphp
                @foreach ($data as $item)
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td class="text-center" width="80"><img class="rounded-circle" width="60" src="{{ $item->profile_photo_url }}"></td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->status === '0' ? 'Pegawai' : 'Admin' }}</td>
                    <td>
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editBus_{{ $item->id }}">
                        <i class="fas fa-fw fa-pen"></i>
                      </button>

                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusBus_{{ $item->id }}">
                        <i class="fas fa-fw fa-trash-alt"></i>
                      </button>

                      <div class="modal fade" id="editBus_{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editBusLabel_{{ $item->id }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="editBusLabel_{{ $item->id }}">Edit</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="{{ route('pegawai.update', $item->id) }}" method="POST">
                              <div class="modal-body">
                                <div class="form-group">
                                  <label for="name">Nama</label>
                                  <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan nama bus" value="{{ $item->name }}">
                                </div>
                                <div class="form-group">
                                  <label for="email">E-mail</label>
                                  <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan kelas bus" value="{{ $item->email }}">
                                </div>
                                <div class="form-group">
                                  <label for="status">Status</label>
                                  <select name="status" id="status" class="form-control">
                                    <option {{ $item->status === '1' ? 'selected' : '' }} value="1">Admin</option>
                                    <option {{ $item->status === '0' ? 'selected' : '' }} value="0">Pegawai</option>
                                  </select>
                                </div>
                              </div>
                              <div class="modal-footer">
                                @csrf
                                @method('put')
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>

                      <div class="modal fade" id="hapusBus_{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="hapusBusLabel_{{ $item->id }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="hapusBusLabel_{{ $item->id }}">Hapus</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              Apakah anda yakin akan menghapus data?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                              <form id="logout-form" action="{{ route('pegawai.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-primary">Hapus</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
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
@endsection

@section('style')
  <link href="{{ asset('templates/admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('script')
<script src="{{ asset('templates/admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('templates/admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script>
  $(document).ready(() => $('#dataBus').DataTable({
    "pageLength": 5,
    "lengthMenu": [5, 10],
    "language": {
      "emptyTable":       "Tak ada data yang tersedia pada tabel ini",
      "info":             "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
      "infoEmpty":        "Menampilkan 0 sampai 0 dari 0 data",
      "infoFiltered":     "(difilter dari total _MAX_ entri)",
      "infoPostFix":      "",
      "lengthMenu":       "Menampilkan _MENU_ data",
      "loadingRecords":   "Memuat...",
      "processing":       "Pengolahan...",
      "search":           "Cari:",
      "zeroRecords":      "Tidak ditemukan data yang cocok",
      "paginate": {
        "first":        "Awal",
        "previous":     "Sebelumnya",
        "next":         "Selanjutnya",
        "last":         "Akhir"
      },
      "aria": {
        "sortAscending":    ": aktifkan untuk mengurutkan kolom naik",
        "sortDescending":   ": aktifkan untuk mengurutkan kolom menurun"
      }
    }
  }));
</script>
@endsection