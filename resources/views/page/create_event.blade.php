@section('js')
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#showgambar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputgambar").change(function() {
        readURL(this);
    });
</script>
@stop
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
        <textarea class="form-control" type="text" name="desc_event" required="required" id="deskripsi"></textarea>
        <br>
        <div class="form-grup">
            <div class="row">
        <div class="col s6">
            <img src="http://placehold.it/100x150" id="showgambar" style="max-width:200px;max-height:200px;float:left;" />
        </div>
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
