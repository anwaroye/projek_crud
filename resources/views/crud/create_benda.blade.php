@extends('home')
@section('table')
  <a href="/pegawai"> Kembali</a>

  	<br/>
  	<br/>
<div class="container-fluid">
  <form action="{{route('addbenda')}}" method="POST">
    {{ csrf_field() }}


    <div class="form-group">
       <label >Id benda</label>
       <input type="text" class="form-control"  placeholder="Enter id benda" name="idbenda">
     </div>
     <div class="form-group">
       <label >Nama benda</label>
       <input type="" class="form-control"  placeholder="Enter Nama Benda" name="namabenda">
     </div>
     <textarea class="form-control" name="deskripsi" form="usform" id ="text-ckeditor"></textarea>
     <script> CKEDITOR.replace('text-ckeditor');

     </script>
     <br>


     <button type="submit" class="btn btn-primary" value="simpandata">Submit</button>

    {{--
    Nama
    <input type="text" name="nama" required="required"> <br/>
    Jabatan <input type="text" name="jabatan" required="required"> <br/>
    Umur <input type="number" name="umur" required="required"> <br/>
    Alamat <textarea name="alamat" required="required"></textarea> <br/>
    <input type="submit" value="Simpan Data"> --}}
  </form>
</div>

@endsection
