<?php

namespace App\Http\Controllers;
use App\table_event;
use Illuminate\Http\Request;

class ControllerEvent extends Controller
{
  public function create(Request $request)
  {
    $this->validate($request,[
      'id_event' =>'required',
      'title_event'=>'required',
      'status_event'=>'required',
      'desc_event'=>'required',

     'img_event'=>'required',
    ]);
    // $event = table_event::create();
      $data = new table_event();
      $data->id_event = $request->get('id_event');
      $data->title_event = $request->get('title_event');
      $data->status_event = $request->get('status_event');
      $data->desc_event = $request->get('desc_event');
      $data->img_event = $request->get('img_event');
      $data->save();
    //  dd($event);
      return redirect()->route('event')->with('alert-succes', 'data berhasil');
  }
}
