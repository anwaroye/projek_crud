@extends('home')
@section('table')
  <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">kritik saran</li>
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
                      <th>No</th>
                      <th>Aksi</th>
                      <th>nama</th>
                      <th>Email</th>
                      <th>kritik</th>
                      <th>saran</th>

                    </tr>
                  </thead>

                  <tbody>
                    @php $no =1;
                    @endphp

                    @foreach ($kritik as  $kritiks)
                      <tr>
                        <td>{{$no++ }}</td>
                        <td style="width:100px; text-align: center;">
                          <form method="POST" action="{{route('deletekritik',[$kritiks->id])}}" style="display: inline-block;">
                            {{ csrf_field() }}
                               <button type="submit" onClick="return confirm('Yakin ingin menghapus data ini ?');" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
                             </form>
                            {{-- <a href="{{route('deleteEvent')}}"><i class="fa fa-1x fa-trash text-danger"></i></a> --}}
                            {{-- <a href=""><i class="fa fa-1x fa-edit text-green"></i></a> --}}
                        </td>
                        <td>{{$kritiks->name_cs}}</td>
                        <td>{{$kritiks->email_cs}}</td>
                        <td>{{$kritiks->criticism}}</td>
                        <td>{{$kritiks->sugestion}}</td>




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
