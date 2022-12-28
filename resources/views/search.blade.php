@extends('layouts.site.app')

@section('title', 'Search')

@section('content')
<div class="site-section bg-light text-dark" id="transit-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-6 d-flex align-items-center">
        <p class="font-weight-bold mb-2">Tasikmalaya <i class="fa-solid fa-arrow-right"></i> Jakarta</p>
      </div>
      <div class="col-md-6 text-right">
        <button type="button" class="btn btn-sm btn-primary font-weight-bold h-100 px-4 py-2" data-toggle="modal" data-target="#ubahTujuan">
        Ubah Tujuan
        </button>
        <div class="modal fade" id="ubahTujuan" tabindex="-1" aria-labelledby="ubahTujuanLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-capitalize" id="ubahTujuanLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form id="find_schedule" action="{{ url('search') }}" method="POST">
                <div class="modal-body">
                  <div class="container-fluid">
                    <div class="col-md-12">
                      <div class="form-group mb-2">
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
                      <div class="form-group mb-2">
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
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  @csrf
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="border-top mx-auto mt-3" style="width: calc(100% - 30px)"></div>
    </div>

    @if (count($rute) > 0)
      @foreach ($rute as $item)
        <div class="row mb-3">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <p class="font-weight-bold text-uppercase mb-4" style="font-size: 20px;"><i class="fa-solid fa-bus"></i> {{ $item->bus->nama }} {{ $item->bus->kelas }}</p>
                <div class="row align-items-center">
                  <div class="col">
                    <h4>{{ date('g:ia', strtotime($item->jam_berangkat)) }}</h4>
                    <i class="fa-solid fa-location-dot"></i> {{ $item->pemberangkatan->nama }}, {{ $item->pemberangkatan->kota }}
                  </div>
                  <i class="fa-solid fa-arrow-right"></i>
                  <div class="col font-weight-bold">
                    <h4 style="font-weight: 700 !important;">{{ date('g:ia', strtotime($item->jam_transit)) }}</h4>
                    <i class="fa-solid fa-location-dot"></i> Terminal Indihiang, Tasikmalaya
                  </div>
                  <i class="fa-solid fa-arrow-right"></i>
                  <div class="col">
                    <h4>{{ date('g:ia', strtotime($item->jam_sampai)) }}</h4>
                    <i class="fa-solid fa-location-dot"></i> {{ $item->pemberhentian->nama }}, {{ $item->pemberhentian->kota }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    @else
      <h4 class="text-lowercase text-center">Maaf rute tidak ditemukan</h1>
    @endif
  </div>
</div>
@endsection