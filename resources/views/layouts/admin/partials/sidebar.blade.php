<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('admin') }}">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-bus"></i>
    </div>
    <div class="sidebar-brand-text mx-3">{{ config('app.name', 'Tranbuz') }}</div>
  </a>
  <hr class="sidebar-divider my-0">
  <li class="nav-item">
    <a class="nav-link" href="{{ url('admin/dashboard') }}">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
  </li>
  <hr class="sidebar-divider">
  <div class="sidebar-heading">
    Master Data
  </div>
  @if (auth()->user()->status === '1')
  <li class="nav-item">
    <a class="nav-link" href="{{ url('admin/pegawai') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Pegawai</span></a>
    </li>
  @endif
  <li class="nav-item">
    <a class="nav-link" href="{{ url('admin/bus') }}">
    <i class="fas fa-fw fa-bus"></i>
    <span>Bus</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('admin/lokasi') }}">
    <i class="fas fa-fw fa-street-view"></i>
    <span>Lokasi</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('admin/rute') }}">
    <i class="fas fa-fw fa-map-marked-alt"></i>
    <span>Rute</span></a>
  </li>
  <div class="sidebar-heading">
    Laporan
  </div>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('admin/rute/laporan') }}">
    <i class="fas fa-fw fa-map-marked-alt"></i>
    <span>Laporan Rute</span></a>
  </li>
  <hr class="sidebar-divider d-none d-md-block">
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>