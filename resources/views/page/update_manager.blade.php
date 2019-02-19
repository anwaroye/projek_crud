@extends('home')
@section('table')
        <div class="container-fluid">
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{route('dashboard')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Update pengelola</li>
                </ol>
                <div class="card col-sm-10 offset-sm-1 mb-3">
                    <div class="card-body">
                      <div class="container-fluid">
                        <form method="post" action="{{route('updateManager',$EditManager->id)}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{-- @method('PUT') --}}
                          <div class="row">
                              <div class="form-group col-sm-5">
                                  <label>Nama</label>
                                  <input value="{{$EditManager->name_manager}}" type="text" class="form-control"  required="required" placeholder="Enter nama " name="name_manager">
                              </div>
                              <div class="form-group col-sm-4">
                                      <label>tempat Lahir</label>
                                      <input value="{{$EditManager->place_of_birth}}" type="text" class="form-control"  required="required" placeholder="Tempat lahir" name="place_of_birth">
                                  </div>
                              <div class="form-group col-sm-3">
                                      <label>Tanggal Lahir</label>
                                      <input value="{{$EditManager->birth_manager}}" type="date" class="form-control"  required="required" placeholder="( 22121997 )" name="birth_manager">
                                  </div>
                          </div>
                          <div class="row">
                            <div class="form-group col-sm-5">
                                <label>jenis kelamin</label>
                                <select name="gender" data-placeholder="Please select..." class="form-control" tabindex="1" type="text">


                                    @foreach($jk as $jks)
                                    <option value="{{$jks->jenis_kelamin}}">{{$jks->jenis_kelamin}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-sm-5">
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
                            <textarea name="address" class="form-control" required="required" rows="8" cols="50">{{$EditManager->address}}</textarea>

                          </div>
                          <div class="form-group col-sm-4">
                              <label>Posisi</label>
                              {{-- <input type="text" class="form-control" id="status_event" required="required" placeholder="Enter status event" name="status_event"> --}}
                              <div class="col-sm-12">
                                  <select name="position_manager" data-placeholder="Please select..." class="form-control" tabindex="1" type="text">
                                      @foreach($PositionManager as $Poss)
                                      <option value="{{$Poss->position_manag}}">{{$Poss->position_manag}}</option>
                                      @endforeach
                                  </select>
                              </div>
                      </div>
                        </div>
                        <label >deskripsi</label>
                        <textarea name="desc_manager" type="text" class="form-control" required="required" rows="8" cols="80">{{$EditManager->desc_manager}}</textarea>
                          {{-- <textarea class="form-control" type="text" name="desc_manager" required="required" rows="10">
                          {{$EditManager->desc_manager}}</textarea> --}}
                          <br>
                          <div class="form-grup">
                              <div class="row justify-content-sm-center">
                                <div class="form-grup col-sm-5">
                                    <img src="{{ asset('image/img_manager/'.$EditManager->img_manager) }}" id="showgambar" style="max-width:200px;max-height:200px;float:left;" />

                                </div>

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
                        </form>
                      </div>
                </div>
            </div>
            </div>




<div class="card-body">
</div>
</div>
</div>
</div>
</div>

@endsection
