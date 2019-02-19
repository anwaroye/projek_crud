@extends('home')
@section('table')
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">pengelola</li>
    </ol>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="{{route('addmanager')}}" class="btn btn-info btn-sm">+ Data</a>
                <hr>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>no</th>
                            <th>action</th>
                            <th>id pengelola</th>
                            <th>nama pengelola</th>
                            <th>posisi</th>
                            <th>jenis kelamin</th>
                            <th>tahun lahir</th>
                            <th>agama</th>
                            <th>alamat</th>

                            <th>descripsi</th>
                            <th>poto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no =1;
                        @endphp
                        @foreach ($manager as $managers)
                        <tr>
                            <td>{{$no++ }}</td>
                            <td style="width:100px; text-align: center;">
                                <form action="{{route('deletemanager',[$managers->id])}}" method="POST" style="display: inline-block;">
                                    {{ csrf_field() }}
                                    <button type="submit" onclick="return confirm('yakin ingi menghapus data ini ?');" class="btn btn-outline-danger btn-sm"><i class="fa fa-1x fa-trash text-danger"></i></button>
                                </form>
                                <a href="{{route('editManager',$managers->id)}}"><i class="fa fa-1x fa-edit text-green"></i></a>

                            </td>
                            <td>{{$managers->id_manager}}</td>
                            <td>{{$managers->name_manager}}</td>
                            <td>{{$managers->position_manager}}</td>
                            <td>{{$managers->gender}}</td>
                            <td>{{$managers->birth_manager}}</td>
                            <td>{{$managers->religion}}</td>
                            <td>{{$managers->address}}</td>
                            <td>{{$managers->desc_manager}}</td>
                            <td><img src="{{asset('image/'.$managers->img_manager)}}" style="max-height:200px;max-width:100px;margin-top:10px;"></td>


                            </td>
                        </tr>
                        @endforeach

                    <tbody>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at </div>
    </div>
</div>



@endsection
