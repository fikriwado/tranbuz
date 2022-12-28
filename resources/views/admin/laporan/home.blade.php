@extends('layouts.admin.app')

@section('title', 'Rute')

@section('content')
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Laporan</h1>
  </div>
  <div class="row">
    <div class="col-lg-8">
      <div class="card shadow mb-4">
        <div
          class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Buat Laporan</h6>
        </div>
        <div class="card-body">
          <form class="form-inline border-bottom mb-4 pb-3" action="{{ route('muatLaporan') }}" method="POST">
            @csrf
            <input type="hidden" name="type" value="all">
            <button type="submit" class="btn btn-danger mb-2" formtarget="_blank">Cetak Semua</button>
          </form>

          <form class="form-inline" action="{{ route('muatLaporan') }}" method="POST">
            <div class="form-group mb-2">
              <label for="staticEmail2" class="sr-only">Email</label>
              <select name="id_pemberangkatan" class="form-control" required>
                <option selected disabled value="">Pemberangkatan</option>
                @foreach ($lokasi as $item)
                  <optgroup label="{{ $item[0]->kode }}">
                    @foreach ($item as $row)
                    <option value="{{ $row->id }}">{{ $row->nama }}, {{ $row->kota }}</option>
                    @endforeach
                  </optgroup>
                @endforeach
              </select>
            </div>
            <div class="form-group mx-sm-3 mb-2">
              <label for="inputPassword2" class="sr-only">Password</label>
              <select name="id_pemberhentian" class="form-control" required>
                <option selected disabled value="">Pemberhentian</option>
                @foreach ($lokasi as $item)
                  <optgroup label="{{ $item[0]->kode }}">
                    @foreach ($item as $row)
                    <option value="{{ $row->id }}">{{ $row->nama }}, {{ $row->kota }}</option>
                    @endforeach
                  </optgroup>
                @endforeach
              </select>
            </div>
            @csrf
            <button type="submit" class="btn btn-primary mb-2" formtarget="_blank">Cetak</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection