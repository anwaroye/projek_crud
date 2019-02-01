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
<br />
<br />
<div class="container-fluid">
    <form action="" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label>nama benda</label>
            <input type="text" class="form-control" placeholder="Enter Nama Benda" name="object_name">
        </div>
        <div class="form-group">
            <label>type benda</label>
            <input type="text" class="form-control" placeholder="Enter Nama Benda" name="object_name">
        </div>

        <textarea class="form-control" type="text" name="object_desc" required="required" id="deskripsi"></textarea>
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

@endsection
