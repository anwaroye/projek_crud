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
                      <th>kritik</th>
                      <th>Deskripsi</th>
                      <th>Gambar</th>

                    </tr>
                  </thead>

                  <tbody>
                    @php $no =1;
                    @endphp

                    @foreach ($museum as  $museums)
                      <tr>
                        <td>{{$no++ }}</td>
                        <td style="width:100px; text-align: center;">
                          <form method="POST" action="{{route('deletemus',[$museums->id])}}" style="display: inline-block;">
                            {{ csrf_field() }}
                               <button type="submit" onClick="return confirm('Yakin ingin menghapus data ini ?');" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
                             </form>
                            {{-- <a href="{{route('deleteEvent')}}"><i class="fa fa-1x fa-trash text-danger"></i></a> --}}
                            {{-- <a href=""><i class="fa fa-1x fa-edit text-green"></i></a> --}}
                        </td>
                        <td>{{$museums->title_inf}}</td>
                        <td>{{$museums->desc_inf}}</td>
                        <td><img src="{{asset('image/'.$museums->img_inf)}}" style="max-height:200px;max-width:100px;margin-top:10px;"></td>


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
