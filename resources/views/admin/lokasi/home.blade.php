@extends('layouts.admin.app')

@section('title', 'Lokasi')

@section('content')
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Lokasi</h1>
  </div>
  <div class="row">
    <div class="col-lg-10">
      <div class="card shadow mb-4">
        <div
          class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Data Lokasi</h6>
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
                  <form>
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="namaLokasi">Nama</label>
                        <input type="text" class="form-control" id="namaLokasi" placeholder="Masukkan nama lokasi">
                      </div>
                      <div class="form-group">
                        <label for="kotaLokasi">Kota</label>
                        <input type="text" class="form-control" id="kotaLokasi" placeholder="Masukkan kota lokasi">
                      </div>
                      <div class="form-group">
                        <label for="kodeLokasi">Kode</label>
                        <input type="text" class="form-control" id="kodeLokasi" placeholder="Masukkan kode lokasi">
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                      <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataLokasi" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Kota</th>
                  <th>Kode</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Kota</th>
                  <th>Kode</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
              <tbody>
                @php $i = 1 @endphp
                @foreach ($data as $item)
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->kota }}</td>
                    <td>{{ $item->kode }}</td>
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
                            <form>
                              <div class="modal-body">
                                <div class="form-group">
                                  <label for="namaLokasi">Nama</label>
                                  <input type="text" class="form-control" id="namaLokasi" placeholder="Masukkan nama bus" value="{{ $item->nama }}">
                                </div>
                                <div class="form-group">
                                  <label for="kotaLokasi">Kota</label>
                                  <input type="text" class="form-control" id="kotaLokasi" placeholder="Masukkan kelas bus" value="{{ $item->kota }}">
                                </div>
                                <div class="form-group">
                                  <label for="kodeLokasi">Kode</label>
                                  <input type="text" class="form-control" id="kodeLokasi" placeholder="Masukkan kelas bus" value="{{ $item->kode }}">
                                </div>
                              </div>
                              <div class="modal-footer">
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
                              <form id="logout-form" action="{{ route('lokasi.destroy', $item->id) }}" method="POST">
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
  $(document).ready(() => $('#dataLokasi').DataTable({
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