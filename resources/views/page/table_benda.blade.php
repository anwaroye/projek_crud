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
                        <th>no</th>
                        <th>Action</th>
                        <th>id benda</th>
                        <th>nama benda</th>
                        <th>type benda</th>
                        <th>descripsi benda</th>
                        <th>image benda</th>


                    </tr>
                </thead>
                <tbody>
                  @php $no =1;
                  @endphp
                    @foreach ($benda as $bendas)
                    <tr>
                      <td>{{$no++ }}</td>
                        <td style="width:100px; text-align: center;">
                          <form  action="{{route('deleteBenda',[$bendas->id])}}"  method="POST" style="display: inline-block;">
                            {{ csrf_field() }}
                            <button type="submit" onclick="return confirm('yakin ingi menghapus data ini ?');" class="btn btn-outline-danger btn-sm"><i class="fa fa-1x fa-trash text-danger"></i></button>
                          </form>
                          <a href="#"><i class="fa fa-1x fa-edit text-green"></i></a>

                        </td>
                        <td>{{$bendas->id_object}}</td>
                        <td>{{$bendas->object_name}}</td>
                        <td>{{$bendas->type_object}}</td>
                        <td>{{$bendas->object_desc}}</td>
                        <td><img src="{{asset('image/'.$bendas->object_img)}}" style="max-height:200px;max-width:100px;margin-top:10px;"></td>


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
