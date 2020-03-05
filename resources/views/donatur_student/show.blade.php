<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ar Rabwah</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('imagine/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('imagine/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
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
                <li><a href="{{ route('donaturStudent.create') }}" class="nav-link">Kembali</a></li>
                <li><a href="{{ route('login') }}" class="nav-link">Login</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 col-md-9 d-inline-block d-lg-none ml-md-0" ><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
    </header>

    <div class="site-section" id="features-section">
      <div class="container">
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row mb-2 justify-content-center text-center">
              <div class="col-7 text-center  mb-5">
                <h2 class="section-title">Data Santri Asuh</h2>
              </div>
            </div>
            <div class="row align-items-stretch">
              <div class="table-responsive">
                <table id="datatable" class="table table-hover table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NIS</th>
                      <th>Nama</th>
                      <th>TTL</th>
                      <th class="disabled-sorting text-right">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Modal title</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      <i class="material-icons">clear</i>
                    </button>
                  </div>
                  <div class=" modal-body">
                    <div class="row align-items-stretch">
                      <div class="table-responsive">
                        <table id="sppdatatable" class="table table-hover table-striped table-bordered">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Kategori</th>
                              <th>Pencatat</th>
                              <th>Tanggal Bayar</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-link">Nice Button</button>
                    <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
                  </div>
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
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript">
    var table;
    $(function() {
        table = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{$ajax}}',
            order: [[0,'desc']],
            columns: [
                { data: 'id', searchable: false, orderable: false},
                { data: 'nis', searchable: true, orderable: true},
                { data: 'name', searchable: true, orderable: true},
                { data: 'birth', searchable: false, orderable: false},
                { data: 'action', searchable: false, orderable: false}
            ],
            columnDefs: [{
              "targets": 0,
              "searchable": false,
              "orderable": false,
              "data": null,
              "title": 'No',
              "render": function (data, type, full, meta) {
                  return meta.settings._iDisplayStart + meta.row + 1;
              }
            }],
        });
    });
  </script>
  </body>
</html>
