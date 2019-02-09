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
              <hr>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                  <thead>

                      <tr>
                          <th>no.</th>

                          <th><center>jenis kelamin</center></th>

                      </tr>
                  </thead>

                  <tbody>
                    @php $no = 1; @endphp
                    @foreach($jk as $jks)
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$jks->jenis_kelamin}}</td>

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
