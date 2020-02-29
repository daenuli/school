<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ar Rabwah</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('imagine/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('imagine/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('imagine/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('imagine/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('imagine/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('imagine/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('imagine/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('imagine/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('imagine/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('imagine/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('imagine/css/style.css') }}">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

  <div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-3 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-md-3 col-xl-4  d-block">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-black h2 mb-0">Ar Rabwah<span class="text-primary">.</span> </a></h1>
          </div>

          <div class="col-12 col-md-9 col-xl-8 main-menu">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block ml-0 pl-0">
                <li><a href="" class="nav-link">Home</a></li>
                <li><a href="{{ route('login') }}" class="nav-link">Login</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 col-md-9 d-inline-block d-lg-none ml-md-0" ><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
    </header>

    <div class="site-blocks-cover" style="overflow: hidden;">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-md-12" style="position: relative;" data-aos="fade-up" data-aos-delay="200">

            <img src="{{ asset('imagine/images/undraw_investing_7u74.svg') }}" alt="Image" class="img-fluid img-absolute">

            <div class="row mb-4" data-aos="fade-up" data-aos-delay="200">
              <div class="col-lg-6 mr-auto">
                <h1>Cari Riwayat Santri</h1>
                <p class="mb-5">Anda bisa melihat sekaligus memantau hasil perkembangan hafalan santri dan juga mengecek SPP bulanan santri.</p>
                <div>
                  @if (session('notif'))
                    <div class="alert alert-danger" role="alert">
                        {{session('notif')}}
                    </div>
                  @endif
                  <form action="{{route('donaturStudent.show')}}">
                    <div class="d-flex flex-row">
                        <input type="text" name="nik" autocomplete="off" class="form-control rounded-0" placeholder="Masukan NIK">
                        <input type="text" name="date_birth" autocomplete="off" class="form-control rounded-0 ml-1" placeholder="Tanggal Lahir 2002-07-20">
                        <button type="submit" class="btn rounded-0 btn-sm btn-primary px-3 py-1"><span class="icon-search"></span></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer pb-4 text-center">
      <div class="container">
        <div class="row mb-3">
          <div class="col-12">
            <p class="mb-0">
              <a href="#" class="p-3"><span class="icon-facebook"></span></a>
              <a href="#" class="p-3"><span class="icon-twitter"></span></a>
              <a href="#" class="p-3"><span class="icon-instagram"></span></a>
              <a href="#" class="p-3"><span class="icon-linkedin"></span></a>
              <a href="#" class="p-3"><span class="icon-pinterest"></span></a>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p class="mb-0">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="http://mahirtechno.com/" target="_blank" >MahirTechno.com</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- .site-wrap -->

  <script src="{{ asset('imagine/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('imagine/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('imagine/js/popper.min.js') }}"></script>
  <script src="{{ asset('imagine/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('imagine/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('imagine/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('imagine/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('imagine/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('imagine/js/aos.js') }}"></script>
  <script src="{{ asset('imagine/js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('imagine/js/jquery.sticky.js') }}"></script>
  <script src="{{ asset('imagine/js/main.js') }}"></script>
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

  </body>
</html>
