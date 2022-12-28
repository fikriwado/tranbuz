<!doctype html>
<html lang="en">
  <head>
    <title>Tranbuz - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('templates/site/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/site/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/site/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/site/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/site/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/site/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('templates/site/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/site/css/style.css') }}">
    <style>
      .ftco-cover-1, .ftco-cover-1 .container > .row {
        height: auto;
      }
      .ftco-cover-1.overlay::before {
        background: #22242a;
        opacity: .8;
      }
    </style>
  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap" id="home-section">
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

      @include('layouts.site.partials.header')
      @yield('content')
    </div>

    <footer class="site-footer py-5">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <p class="mb-0">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
          </div>
        </div>
      </div>
    </footer>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('templates/site/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('templates/site/js/popper.min.js') }}"></script>
    <script src="{{ asset('templates/site/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('templates/site/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('templates/site/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('templates/site/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('templates/site/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('templates/site/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('templates/site/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('templates/site/js/aos.js') }}"></script>
    <script src="{{ asset('templates/site/js/main.js') }}"></script>
  </body>
</html>
