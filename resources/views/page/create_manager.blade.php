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
                    <input type="text" class="form-control"  required="required" placeholder="Enter nama event" name="title_event">
                </div>
                <div class="form-group col-sm-2">
                        <label>Tanggal Lahir</label>
                        <input type="text" class="form-control"  required="required" placeholder="( 22121997 )" name="status_event">
                    </div>
                    <div class="form-group col-sm-2">
                        <label>jenis kelamin</label>
                        <input type="text" class="form-control" id="status_event" required="required" placeholder="Enter status event" name="status_event">
                    </div>
                    <div class="form-group col-sm-2">
                        <label>Agama</label>
                        <input type="text" class="form-control" id="status_event" required="required" placeholder="Enter status event" name="status_event">
                        <div class="col-sm-12">
                            <select name="type_object" data-placeholder="Please select..." class="form-control" tabindex="1" type="text">
                                @foreach($Posreligions as $PosTwo)
                                <option value="{{$PosTwo->option_religion}}">{{$PosTwo->option_religion}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

            </div>

            <div class="row">
            <div class="form-group col-sm-8">
              <label>Alamat</label>
                <input type="text" class="form-control" id="status_event" required="required" placeholder="Enter status event" name="status_event">
            </div>
            <div class="form-group col-sm-4">
                <label>Posisi</label>
                {{-- <input type="text" class="form-control" id="status_event" required="required" placeholder="Enter status event" name="status_event"> --}}
                <div class="col-sm-12">
                    <select name="type_object" data-placeholder="Please select..." class="form-control" tabindex="1" type="text">
                        @foreach($Posmanager as $Pos)
                        <option value="{{$Pos->position_manag}}">{{$Pos->position_manag}}</option>
                        @endforeach
                    </select>
                </div>

        </div>
          </div>
            <textarea class="form-control" type="text" name="desc_event" required="required" id="deskripsi"></textarea>
            <br>
            <div class="form-grup">
                <div class="row justify-content-sm-center">

                </div>
                <br>
                <div class="row">
                    <div class="input-field col s6">
                        <input type="file" name="img_event" />

                    </div>
                </div>
            </div>



            <br>
            <button type="submit" class="btn btn-primary">Submit</button>

        </div>
    </form>
</div>

@endsection
