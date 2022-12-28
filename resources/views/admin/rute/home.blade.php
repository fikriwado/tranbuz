@extends('layouts.admin.app')

@section('title', 'Rute')

@section('content')
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Rute</h1>
  </div>
  <div class="row">
    <div class="col-lg-10">
      <div class="card shadow mb-4">
        <div
          class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Data Rute</h6>
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
                        <label for="idPemberangkatan">Pemberangkatan</label>
                        <select class="form-control" id="idPemberangkatan">
                          <option value="">Pool, Tasikmalaya</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="idPemberangkatan">Pemberangkatan</label>
                        <select class="form-control" id="idPemberangkatan">
                          <option value="">Cibiru, Bandung</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="jamBerangkat">Jam Berangkat</label>
                        <input type="time" class="form-control" id="jamBerangkat" placeholder="Masukkan kelas bus">
                      </div>
                      <div class="form-group">
                        <label for="jamSampai">Jam Sampai</label>
                        <input type="time" class="form-control" id="jamSampai" placeholder="Masukkan kelas bus">
                      </div>
                      <div class="form-group">
                        <label for="jamTransit">Jam Transit</label>
                        <input type="time" class="form-control" id="jamTransit" placeholder="Masukkan kelas bus">
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
          </div>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataRute" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Bus</th>
                  <th>Pemberangkatan</th>
                  <th>Pemberhentian</th>
                  <th>Jam Berangkat</th>
                  <th>Jam Sampai</th>
                  <th><small>(Terminal Indihiang)</small> <br> Jam Transit</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Bus</th>
                  <th>Pemberangkatan</th>
                  <th>Pemberhentian</th>
                  <th>Jam Berangkat</th>
                  <th>Jam Sampai</th>
                  <th>Jam Transit</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
              <tbody>
                @php $i = 1 @endphp
                @foreach ($data as $item)
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->bus->nama }}</td>
                    <td>{{ $item->pemberangkatan->nama }}, {{ $item->pemberangkatan->kota }}</td>
                    <td>{{ $item->pemberhentian->nama }}, {{ $item->pemberhentian->kota }}</td>
                    <td>{{ $item->jam_berangkat }}</td>
                    <td>{{ $item->jam_sampai }}</td>
                    <td>{{ $item->jam_transit }}</td>
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
                                  <label for="idPemberangkatan">Pemberangkatan</label>
                                  <select class="form-control" id="idPemberangkatan">
                                    <option value="">Pool, Tasikmalaya</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="idPemberangkatan">Pemberangkatan</label>
                                  <select class="form-control" id="idPemberangkatan">
                                    <option value="">Cibiru, Bandung</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="jamBerangkat">Jam Berangkat</label>
                                  <input type="time" class="form-control" id="jamBerangkat" placeholder="Masukkan kelas bus" value="{{ $item->jam_berangkat }}">
                                </div>
                                <div class="form-group">
                                  <label for="jamSampai">Jam Sampai</label>
                                  <input type="time" class="form-control" id="jamSampai" placeholder="Masukkan kelas bus" value="{{ $item->jam_sampai }}">
                                </div>
                                <div class="form-group">
                                  <label for="jamTransit">Jam Transit</label>
                                  <input type="time" class="form-control" id="jamTransit" placeholder="Masukkan kelas bus" value="{{ $item->jam_transit }}">
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
                              <form id="logout-form" action="{{ route('rute.destroy', $item->id) }}" method="POST">
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
  $(document).ready(() => $('#dataRute').DataTable({
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