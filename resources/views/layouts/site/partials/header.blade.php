<header class="site-navbar js-sticky-header site-navbar-target" role="banner">
  <div class="container">
    <div class="row align-items-center position-relative">
      <div class="site-logo">
        <a href="{{ url('/') }}" class="text-black"><span class="text-primary">{{ config('app.name', 'Tranbuz') }}</a>
      </div>
      <div class="col-12">
        <nav class="site-navigation text-right ml-auto " role="navigation">
          <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
            <li><a href="{{ Request::is('/') ? '#home-section' : url('/#home-section') }}" class="nav-link">Beranda</a></li>
            <li><a href="{{ Request::is('/') ? '#services-section' : url('/#services-section') }}" class="nav-link">Layanan</a></li>
            <li><a href="{{ Request::is('/') ? '#about-section' : url('/#about-section') }}" class="nav-link">Tentang Kami</a></li>
            <li><a href="{{ Request::is('/') ? '#testimonials-section' : url('/#testimonials-section') }}" class="nav-link">Testimoni</a></li>
            <li><a href="{{ Request::is('/') ? '#contact-section' : url('/#contact-section') }}" class="nav-link">Kontak</a></li>
          </ul>
        </nav>
      </div>
      <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
    </div>
  </div>
</header>