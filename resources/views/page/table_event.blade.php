@extends('home')
@section('table')
  <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">event</li>
          </ol>
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Data Table Example</div>
    <div class="card-body">
        <div class="table-responsive">
            <a href="{{route('addevent')}}" class="btn btn-info btn-sm">+ Tambah event</a>
            <hr>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>no.</th>
                        <th>Action</th>
                        <th>Id Event</th>
                        <th>Nama Event</th>
                        <th>Deskripsi event</th>
                        <th>Status Event</th>
                        <th>Image Event</th>
                    </tr>
                </thead>

                <tbody>
                    @php $no =1;
                    @endphp
                    @foreach ($event as $events)

                    <tr>
                        <td>{{$no++ }}</td>
                        <td style="width:100px; text-align: center;">
                          <form method="POST" action="{{route('deleteEvent',[$events->id])}}" style="display: inline-block;">
                            {{ csrf_field() }}
                               <button type="submit" onClick="return confirm('Yakin ingin menghapus data ini ?');" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
                             </form>
                            {{-- <a href="{{route('deleteEvent')}}"><i class="fa fa-1x fa-trash text-danger"></i></a> --}}
                            <a href="{{route('EditEvent',[$events->id])}}"><i class="fa fa-1x fa-edit text-green"></i></a>
                        </td>
                        <td>{{$events->id_event}}</td>
                        <td>{{$events->title_event}}</td>
                        <td>{{$events->desc_event}}</td>
                        <td>{{$events->status_event}}</td>
                        <td><img src="{{asset('image/img_event/'.$events->img_event)}}" style="max-height:200px;max-width:100px;margin-top:10px;"></td>

                        </td>






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
