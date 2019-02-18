
@extends('home')
@section('table')
  <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Create event</li>
          </ol>
<div class="card col-sm-10 offset-sm-1 mb-3">

    <div class="card-body">
<div class="container-fluid">
    <form method="post" action="{{route('createevent')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Nama event</label>
            <input type="text" class="form-control" id="title_event" required="required" placeholder="Enter nama event" name="title_event">
        </div>
        <div class="form-group">
            <label>status event</label>
            <input type="text" class="form-control" id="status_event" required="required" placeholder="Enter status event" name="status_event">
        </div>
        <label>deskripsi event</label>
        <textarea class="form-control" type="text" name="desc_event" required="required" rows="12"></textarea>
        <br>
        <div class="form-grup">
            <div class="row">
    </div>
            <br>
            <div class="row">
                <div class="input-field col s6">
                    <input type="file" name="img_event"/>

                </div>
            </div>
        </div>
</div>
<br>
<button type="submit" class="btn btn-primary">Submit</button>


</form>
</div>
</div>
</div>
</div>



@endsection
