
@extends('home')
@section('table')

<br />
<br />
<div class="container-fluid">
    <form method="post" action="{{route('addreligion')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="container-fluid">
          <div class="row">
            <div class="form-group col-sm-5">
                <label>agama</label>
                <input type="text" class="form-control"  required="required" placeholder="Enter data" name="position_religion">
            </div>
          </div>
        </div>








<br>
<button type="submit" class="btn btn-primary">Submit</button>


</form>
</div>

@endsection
