@extends('home')
<form class="form-horizontal" action="{{route('createevent')}}" enctype="application/json" method="post">
{{ csrf_field() }}
  <input type="text" name="id_event" value="">
  <input type="text" name="title_event" value="">

  <input type="text" name="status_event" value="">

  <input type="text" name="desc_event" value="">

<button type="submit" name="button"></button>
</form>
