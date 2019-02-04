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
            <label>Nama event</label>
            <input value="" type="text" class="form-control" id="title_event" required="required" placeholder="Enter nama event" name="title_event">
        </div>
        <div class="form-group">
            <label>status event</label>
            <input value="" type="text" class="form-control" id="status_event" required="required" placeholder="Enter status event" name="status_event">
        </div>
        <div class="form-group">
          <textarea value="" class="form-control" type="textarea" name="desc_event" required="required" id="deskripsi" rows="7"></textarea>

        </div>



        <div class="form-grup">
            <label for="file">Select File</label>
            {{-- <input value="{{$events->img_event}}" type="file" name="img_event" id="file" value=""> --}}
             <img src="" id="showgambar" style="max-width:200px;max-height:200px;float:left;" />

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
