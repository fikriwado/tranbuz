@extends('layouts.site.app')

@section('title', 'Search')

@section('content')
<div class="site-section bg-light text-dark" id="transit-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-6">
        <p class="font-weight-bold mb-2">Tasikmalaya <i class="fa-solid fa-arrow-right"></i> Jakarta</p>
        <p class="mb-0">Sunday, 18 December 2022</p>
      </div>
      <div class="col-md-6 text-right">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-sm btn-primary font-weight-bold h-100 px-4" data-toggle="modal" data-target="#exampleModal">
        Ubah Tujuan
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-capitalize" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="container-fluid">
                  <form id="find_schedule">
                    <div class="col-md-12">
                      <div class="form-group mb-2">
                        <select class="form-control">
                          <option selected disabled>Pemberangkatan</option>
                          <optgroup label="TSM">
                            <option value="TSM manonjaya">Manonjaya, Tasikmalaya</option>
                            <option value="TSM salopa">Salopa, Tasikmalaya</option>
                            <option value="TSM tasikmalaya">Tasikmalaya</option>
                          </optgroup>
                          <optgroup label="BDG">
                            <option value="BDG cibiru">Cibiru, Bandung</option>
                            <option value="BDG lembang">Lembang, Bandung</option>
                            <option value="BDG bandung">Bandung</option>
                          </optgroup>
                          <optgroup label="JKT">
                            <option value="JKT rambutan">Kp.Rambutan, Jakarta</option>
                            <option value="JKT tanjung priok">Tanjung Priok, Jakarta</option>
                            <option value="JKT lebak bulus">Lebak Bulus, Jakarta</option>
                            <option value="JKT jakarta pusat">Jakarta Pusat</option>
                          </optgroup>
                        </select>
                      </div>
                      <div class="form-group mb-2">
                        <select class="form-control">
                          <option selected disabled>Pemberhentian</option>
                          <optgroup label="TSM">
                            <option value="TSM manonjaya">Manonjaya, Tasikmalaya</option>
                            <option value="TSM salopa">Salopa, Tasikmalaya</option>
                            <option value="TSM tasikmalaya">Tasikmalaya</option>
                          </optgroup>
                          <optgroup label="BDG">
                            <option value="BDG cibiru">Cibiru, Bandung</option>
                            <option value="BDG lembang">Lembang, Bandung</option>
                            <option value="BDG bandung">Bandung</option>
                          </optgroup>
                          <optgroup label="JKT">
                            <option value="JKT rambutan">Kp.Rambutan, Jakarta</option>
                            <option value="JKT tanjung priok">Tanjung Priok, Jakarta</option>
                            <option value="JKT lebak bulus">Lebak Bulus, Jakarta</option>
                            <option value="JKT jakarta pusat">Jakarta Pusat</option>
                          </optgroup>
                        </select>
                      </div>
                      <div class="form-group mb-2">
                        <input type="date" class="form-control" placeholder="Your tracking number">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="border-top mx-auto mt-4" style="width: calc(100% - 30px)"></div>
    </div>
    @php
      $bus = [
        "BUDIMAN PREMIERE CLASS",
        "BUDIMAN FISRT CLASS",
        "PRIMAJASA AC EKONOMI",
        "PRIMAJASA AC BISNIS"
      ];
    @endphp
    @for ($i=0; $i < 5; $i++)
    <div class="row mb-3">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <p class="font-weight-bold mb-4" style="font-size: 20px;"><i class="fa-solid fa-bus"></i> <?= $bus[rand(0,3)] ?></p>
            <div class="row align-items-center">
              <div class="col">
                <h4>08:00</h4>
                <i class="fa-solid fa-location-dot"></i> Pool budiman
              </div>
              <i class="fa-solid fa-arrow-right"></i>
              <div class="col font-weight-bold">
                <h4 style="font-weight: 700 !important;">08:15</h4>
                <i class="fa-solid fa-location-dot"></i> Terminal Indihiang, Tasikmalaya
              </div>
              <i class="fa-solid fa-arrow-right"></i>
              <div class="col">
                <h4>14:30</h4>
                <i class="fa-solid fa-location-dot"></i> Kp.Rambutan, Jakarta
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endfor
  </div>
</div>
@endsection