@extends('home')
@section('table')
  <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">kategori benda</li>
          </ol>
  <div class="card mb-3">
      <div class="card-header">
          <i class="fas fa-table"></i>
          Data Table Example</div>
      <div class="card-body">
          <div class="table-responsive">
              <a href="" class="btn btn-info btn-sm">+ Tambah  data</a>
              <hr>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                  <thead>

                      <tr>
                          <th>no.</th>
                          <th>Action</th>
                          <th>kategori pengelola</th>

                      </tr>
                  </thead>

                  <tbody>
                    @php $no = 1; @endphp
                    @foreach($manager as $managers)
                      <tr>
                        <td>{{$no++}}</td>
                        <td>  <center><a href="">
                                <button type="button" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i></button>
                              </a>
                              <form method="POST" action="" style="display: inline-block;">
                              {{ csrf_field() }}
                                 <button type="submit" onClick="return confirm('Yakin ingin menghapus data ini ?');" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
                               </form>
                                </center>
                        </td>
                        <td>{{$managers->position_manag}}</td>

                      </tr>
                    @endforeach
                  </tbody>
              </table>
          </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>
</div>

@endsection
