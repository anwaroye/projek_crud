{{-- @extends('layouts.app') --}}

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="{{asset('ckeditor/ckeditor.js')}}">

    </script>

    <title>SB Admin - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('assets/css/sb-admin.css')}}" rel="stylesheet">



  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="{{url('home')}}">Admin Museum</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item ">
          <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-archive"></i>
            <span>Master Data Benda</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Data:</h6>
            <a class="dropdown-item" href="{{route('benda')}}">Benda museum</a>
            <a class="dropdown-item" href="{{route('data.benda')}}">Benda Category</a>

          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('event')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Table event</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('informasi')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Informasi Museum</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('pengelola')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Pengelola</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('kritikdansaran')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Kritik Dan Saran</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('user_android')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>User</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-archive"></i>
            <span>Data dropdown</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Data:</h6>
            <a class="dropdown-item" href="{{route('religion')}}">Agama</a>
            <a class="dropdown-item" href="{{route('posManger')}}">Pengelola</a>
            <a class="dropdown-item" href="{{route('jeniskelamin')}}">jenis kelamin</a>



          </div>
        </li>





      </ul>
{{--=================================================CONTENT==========  --}}
<div id="content-wrapper">
  <script type="text/javascript">
  (function($){
    $(function(){
      $('.button-collapse').sideNav();
    });
  })(jQuery);

  </script>
    @yield('table')

    <!-- DataTables Example -->


  </div>
  <!-- /.container-fluid -->

  <!-- Sticky Footer -->
  <footer class="sticky-footer">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright © Admin Projek 1 2019</span>
      </div>
    </div>
  </footer>

</div>


{{-- ===============================================END CONTENT====== --}}


    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit(); ">Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
          </div>
        </div>
      </div>


    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('app.js')}}">

    </script>
    <script src="{{asset('bootstrap.js')}}">

    </script>
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Page level plugin JavaScript-->
    <script src="{{asset('assets/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('assets/vendor/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/vendor/datatables/dataTables.bootstrap4.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('assets/js/sb-admin.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <!-- Demo scripts for this page-->
    <script src="{{asset('assets/js/demo/datatables-demo.js')}}"></script>
    <script src="{{asset('assets/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.js')}}"></script>
    <script src="{{asset('filepond-master/dist/filepond.js')}}">
    </script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> --}}



    <script type="text/javascript">
    (function($){
      $(function(){
        $('.button-collapse').sideNav();
      });
    })(jQuery);

    </script>


    <!-- Load FilePond library -->
  {{-- <script src="https://unpkg.com/filepond/dist/filepond.js"></script> --}}

  <!-- Turn all file input elements into ponds -->
  {{-- <script>
  FilePond.parse(document.body);
  </script>
 --}}

  </body>

</html>


{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
