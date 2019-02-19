@extends('home')
@section('table')
  <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Create informasi</li>
          </ol>
<div class="card col-sm-10 offset-sm-1 mb-3">

    <div class="card-body">
<div class="container-fluid">
    <form action="{{route('createmuseum')}}" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
          <div class="row">
            <div class="col-sm-3">
              <label>nama museum</label>
            </div>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Enter data" name="title_inf">
            </div>
          </div>

        </div>

        <label> deskripsi museum</label>

        <textarea class="form-control" type="text" name="desc_inf" required="required" rows="12"></textarea>
        <br>

        <div class="row">
            <div class="input-field col s6">
                <input type="file" name="img_inf" />

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
