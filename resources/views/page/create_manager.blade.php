
@extends('home')
@section('table')

<br />
<br />
<div class="container-fluid">
    <form method="post" action="{{route('createevent')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="container-fluid">
          <div class="row">
            <div class="form-group col-sm-5">
                <label>Nama</label>
                <input type="text" class="form-control" id="title_event" required="required" placeholder="Enter nama event" name="title_event">
            </div>


            <div class="form-group col-sm-5">
                <label>tanggal lahir</label>
                <!-- datedropper-init class -->
<input class="datedropper-init" type="date">
<!-- data-datedropper attribute -->
<input type="date" data-datedropper>
            <div class="form-group col-sm-2">
                <label>jenis kelamin</label>
                <input type="text" class="form-control" id="status_event" required="required" placeholder="Enter status event" name="status_event">
            </div>
          </div>
          <div class="row">

            <div class="form-group col-sm-3">
                <label>agama</label>
                <input type="text" class="form-control" id="status_event" required="required" placeholder="Enter status event" name="status_event">
            </div>

            <div class="form-group col-sm-4">
                <label>posisi</label>
                <input type="text" class="form-control" id="status_event" required="required" placeholder="Enter status event" name="status_event">
            </div>

            <div class="form-group col-sm-5">
                <label>alamat</label>
                <input type="text" class="form-control" id="status_event" required="required" placeholder="Enter status event" name="status_event">
            </div>
          </div>

        </div>
          <textarea class="form-control" type="text" name="desc_event" required="required" id="deskripsi"></textarea>
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



<br>
<button type="submit" class="btn btn-primary">Submit</button>


</form>
</div>

@endsection
