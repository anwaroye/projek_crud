@section('js')
<script type="text/javascript">

      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#showgambar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputgambar").change(function () {
        readURL(this);
    });

</script>
@stop

@extends('home')
@section('table')
<br />
<br />
<div class="container-fluid">
    <form method="post" action="" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{-- @method('PUT') --}}
        <div class="form-group">
            <label>Nama benda</label>
            <input value={{$EditBenda->object_name}} type="text" class="form-control"  required="required"  name="object_name
            ">
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
          <textarea value="{{$EditBenda->object_desc}}" class="form-control" type="textarea" name="object_desc" required="required" id="object_desc" rows="7"></textarea>

        </div>
        <div class="form-grup">
            <label for="file">Select File</label>
            {{-- <input value="{{$events->img_event}}" type="file" name="img_event" id="file" value=""> --}}
             <img src="{{ asset('image/'.$EditBenda->object_img) }}" id="showgambar" style="max-width:200px;max-height:200px;float:left;" />

        </div>
        <div class="row">
       <div class="input-field col s6">
         <input type="file" id="inputgambar" name="gambar" class="validate"/ >
       </div>
        <br>



        <button type="submit" class="btn btn-primary">Submit</button>


    </form>
</div>

@endsection
