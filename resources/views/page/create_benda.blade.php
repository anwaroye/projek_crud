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
                    @foreach($types as $type)
                    <option value="{{$type->kat_benda}}">{{$type->kat_benda}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <textarea class="form-control" type="text" name="object_desc" required="required" id=""></textarea>
        <br>
        <div class="row">
            <div class="input-field col s6">
                <input type="file" name="object_img" />

            </div>
        </div>
        {{-- <div class="">
        <input type="file" class="filepond" name="object_img">
        </div> --}}
        <br>
        <button type="submit" class="btn btn-primary" value="simpandata">Submit</button>
    </form>
</div>

</div>
</div>
</div>
@endsection
