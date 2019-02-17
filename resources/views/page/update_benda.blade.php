
@extends('home')
@section('table')
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('dashboard')}}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Create benda</li>
    </ol>
    <div class="card col-sm-10 offset-sm-1 mb-3">
        <div class="card-body">
            <div class="container-fluid">
                <form method="post" action="{{route('updateBenda',$EditBenda->id)}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{-- @method('PUT') --}}
                    <div class="form-group">
                        <label>Nama benda</label>
                        <input value={{$EditBenda->object_name}} type="text" class="form-control" name="object_name">
                    </div>
                    <div class="form-group">
                        <label>Type Benda</label>
                        <select name="type_object" data-placeholder="Please select..." class="form-control" tabindex="1" type="text">
                            @foreach($types as $type)
                            <option value="{{$type->kat_benda}}">{{$type->kat_benda}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Benda</label>
                        <textarea value="{{$EditBenda->object_desc}}" class="form-control" type="textarea" name="object_desc" required="required" id="object_desc" rows="12">{{$EditBenda->object_desc}}</textarea>

                    </div>
                    <br>
                    <div class="col-sm-12">
                      <div class="row">
                        <div class="form-grup col-sm-5">
                            <img src="{{ asset('image/'.$EditBenda->object_img) }}" id="showgambar" style="max-width:200px;max-height:200px;float:left;" />

                        </div>

                          <div class="input-field col s5">
                            <label for="file">Select File</label>

                              <input type="file" id="inputgambar" name="object_img" class="validate"/>
                          </div>
                          <div class="col s2">
                            <button type="submit" class="btn btn-primary">Submit</button>

                          </div>
                      </div>



                    </div>

                    <div class="row">

                        <br>

            </div>
        </div>
    </div>
</div>
</div>



@endsection
