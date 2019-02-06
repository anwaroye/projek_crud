
@extends('home')
@section('table')

<br />
<br />
<div class="container-fluid">
    <form method="post" action="{{route('createpostmanager')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="container-fluid">
          <div class="row">
            <div class="form-group col-sm-5">
                <label>posisi</label>
                <input type="text" class="form-control" id="position_manag" required="required" placeholder="Enter nama event" name="position_manag">
            </div>
          </div>
        </div>








<br>
<button type="submit" class="btn btn-primary">Submit</button>


</form>
</div>

@endsection
