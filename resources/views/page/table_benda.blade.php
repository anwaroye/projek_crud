@extends('home')
@section('table')
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Data Table Example</div>
    <div class="card-body">
        <div class="table-responsive">
            <a href="{{route('addbenda')}}" class="btn btn-info btn-sm">+ Tambah Benda</a>
            <hr>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>Id benda</th>
                        <th>Nama benda</th>
                        <th>Image benda</th>
                        <th>Descripsi benda</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($benda as $bendas)
                    <tr>



                        <td style="width:100px; text-align: center;">
                            <a href="#"><i class="fa fa-1x fa-trash text-danger"></i></a>
                            <a href="#"><i class="fa fa-1x fa-edit text-green"></i></a>

                            {{-- <a href="#"><i class="fa fa-5x fa-pencil-square-o"></i></i></a> --}}
                        </td>
                        <td>{{$bendas->id_object}}</td>
                        <td>{{$bendas->object_name}}</td>
                        {{-- <td>{{$pages->type_object}}</td> --}}
                        <td>{{$bendas->object_img}}</td>
                        {{-- <td>{{$pages->created_at}}</td> --}}
                        <td>{{$bendas->object_desc}}</td>

                        </td>
                    </tr>
                    @endforeach

                <tbody>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
@endsection
