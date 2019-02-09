@extends('home')
@section('table')

<br />
<br />
<div class="container-fluid">
    <form method="post" action="{{route('createmanager')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="container-fluid">
            <div class="row">
                <div class="form-group col-sm-5">
                    <label>Nama</label>
                    <input type="text" class="form-control"  required="required" placeholder="Enter nama " name="name_manager">
                </div>
                <div class="form-group col-sm-2">
                        <label>tempat Lahir</label>
                        <input type="text" class="form-control"  required="required" placeholder="Tempat lahir" name="place_of_birth">
                    </div>
                <div class="form-group col-sm-2">
                        <label>Tanggal Lahir</label>
                        <input type="text" class="form-control"  required="required" placeholder="( 22121997 )" name="birth_manager">
                    </div>
                    <div class="form-group col-sm-2">
                        <label>jenis kelamin</label>
                        <select name="gender" data-placeholder="Please select..." class="form-control" tabindex="1" type="text">
                            @foreach($jk as $jks)
                            <option value="{{$jks->jenis_kelamin}}">{{$jks->jenis_kelamin}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-sm-3">
                        <label>Agama</label>

                            <select name="religion" data-placeholder="Please select..." class="form-control" tabindex="1" type="text">
                                @foreach($Posreligion as $PosTwo)
                                <option value="{{$PosTwo->option_religion}}">{{$PosTwo->option_religion}}</option>
                                @endforeach
                            </select>
                    </div>
            </div>

            <div class="row">
            <div class="form-group col-sm-8">
              <label>Alamat</label>
                <textarea type="text"  class="form-control" id="status_event" required="required" placeholder="Alamat" name="address">
                </textarea>
            </div>
            <div class="form-group col-sm-4">
                <label>Posisi</label>
                {{-- <input type="text" class="form-control" id="status_event" required="required" placeholder="Enter status event" name="status_event"> --}}
                <div class="col-sm-12">
                    <select name="position_manager" data-placeholder="Please select..." class="form-control" tabindex="1" type="text">
                        @foreach($Posmanager as $Pos)
                        <option value="{{$Pos->position_manag}}">{{$Pos->position_manag}}</option>
                        @endforeach
                    </select>
                </div>

        </div>
          </div>
            <textarea class="form-control" type="text" name="desc_manager" required="required" id="deskripsi"></textarea>
            <br>
            <div class="form-grup">
                <div class="row justify-content-sm-center">

                </div>
                <br>
                <div class="row">
                    <div class="input-field col s6">
                        <input type="file" name="img_manager" />

                    </div>
                </div>
            </div>



            <br>
            <button type="submit" class="btn btn-primary">Submit</button>

        </div>
    </form>
</div>

@endsection
