@extends('layouts.admin.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </div>
  <div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Pengelola Tranbuz
              </div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $user->count() }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-fw fa-user fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                Mitra Bus
              </div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlah->bus }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-fw fa-bus fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                Lokasi
              </div>
              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $jumlah->lokasi }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-fw fa-street-view fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                Rute
              </div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $rute->count() }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-fw fa-map-marked-alt fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-7">
      <div class="card shadow mb-4">
        <div
          class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Rute <a href="{{ route('rute.index') }}" class="btn btn-sm btn-primary ml-2">Cek Detail</a></h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataRute" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Bus</th>
                  <th>Pemberangkatan</th>
                  <th>Pemberhentian</th>
                  <th><small>(Terminal Indihiang)</small> <br> Jam Transit</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Bus</th>
                  <th>Pemberangkatan</th>
                  <th>Pemberhentian</th>
                  <th>Jam Transit</th>
                </tr>
              </tfoot>
              <tbody>
                @php $i = 1 @endphp
                @foreach ($rute as $item)
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->bus->nama }} {{ $item->bus->kelas }}</td>
                    <td>{{ $item->pemberangkatan->nama }}, {{ $item->pemberangkatan->kota }}</td>
                    <td>{{ $item->pemberhentian->nama }}, {{ $item->pemberhentian->kota }}</td>
                    <td>{{ $item->jam_transit }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-5">
      <div class="card shadow mb-4">
        <div
          class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Pengelola <a href="{{ route('pegawai.index') }}" class="btn btn-sm btn-primary ml-2">Cek Detail</a></h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataPegawai" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Status</th>
                </tr>
              </tfoot>
              <tbody>
                @php $i = 1 @endphp
                @foreach ($user as $item)
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->status === '0' ? 'Pegawai' : 'Admin' }}</td>
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
  $(document).ready(function() {
    $('#dataRute').DataTable({
      "pageLength": 5,
      "lengthMenu": [5, 10],
      "language": {
        "emptyTable":       "Tak ada data yang tersedia pada tabel ini",
        "info":             "Menampilkan _START_ - _END_ dari _TOTAL_ data",
        "infoEmpty":        "Menampilkan 0 - 0 dari 0 data",
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
    });
    $('#dataPegawai').DataTable({
      "pageLength": 5,
      "lengthMenu": [5, 10],
      "language": {
        "emptyTable":       "Tak ada data yang tersedia pada tabel ini",
        "info":             "Menampilkan _START_ - _END_ dari _TOTAL_ data",
        "infoEmpty":        "Menampilkan 0 - 0 dari 0 data",
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
    });
  });
</script>
@endsection