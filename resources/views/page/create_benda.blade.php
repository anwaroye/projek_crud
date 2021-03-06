
@extends('home')
@section('table')
  <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Create benda</li>
          </ol>
<div class="card col-sm-10 offset-sm-1 mb-3">

    <div class="card-body">
<div class="container-fluid">
    <form action="{{route('createbenda')}}" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
          <div class="row">
            <div class="col-sm-3">
              <label>nama benda</label>
            </div>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Enter Nama Benda" name="object_name">
            </div>
          </div>

        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="select" class=" form-control-label">Kategori benda</label></div>
            <div class="col-12 col-md-9">
                <select name="type_object" data-placeholder="Please select..." class="form-control" tabindex="1" type="text">
                  <option value="">-- pilih kategori benda --</option>
                    @foreach($types as $type)
                    <option value="{{$type->kat_benda}}">{{$type->kat_benda}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <label> deskripsi benda</label>

        <textarea class="form-control" type="text" name="object_desc" required="required" rows="12"></textarea>
        <br>

        <div class="row">
            <div class="input-field col s6">
                <input type="file" name="object_img" />

            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary" value="simpandata">Submit</button>
    </form>
</div>

</div>
</div>
</div>
@endsection
