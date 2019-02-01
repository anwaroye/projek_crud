<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ControllerTableEvent;
use Illuminate\Support\Facades\DB;
use App\table_event;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;



class ControllerTableEvent extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (Auth::user()) {
        $event = table_event::all();
        return view('page.table_event',compact('event'));
        // code...
      }
      return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addevent()
    {
      if (Auth::user()){
        $event = table_event::all();
        return view ('page.create_event',compact('event'));
      }
      return vew ('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // $data = new table_event;
      //
      // $data->id_event= request('id_event');
      // $data->title_event = request('title_event');
      // $data->status_event= request('status_event');
      // $data->desc_event= request('desc_event');
      // $data->img_event= request('img_event');
      // $data->save();
      //
      //


      //
      //
      // (request('id'));
      // var_dump(request('id_event'));
      //
      // var_dump(request('title_event'));
      // var_dump(request('status_event'));
      // var_dump(request('desc_event'));
      // var_dump(request('img_event'));


      $this->validate($request,[
        // 'id_event' =>'required',
        'title_event'=>'required',
        'status_event'=>'required',
        'desc_event'=>'required',
       'img_event'=>'required',
      ]);
        $event = new table_event();
        $event->id_event =Uuid::uuid4(); // toString()
        $event->title_event = $request->get('title_event');
        $event->status_event = $request->get('status_event');
        $event->desc_event = $request->get('desc_event');
        // proses penampilan gambar
        $file =$request->file('img_event');
        $fillName =$file->getClientOriginalName();
        $request->file('img_event')->move("image/", $fillName);
        // ennddddd
        $event->img_event = $fillName;
        $event->save();
       // dd($event);
        return redirect()->route('event')->with('alert-succes', 'data berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editEvent($id)
    {
      if(Auth::user())
        {
          $page = 'page.update_event';
          $EditEvent = table_event::findOrFail($id);
          return view($page)->with(compact('EditEvent'));
        }
        return view('auth.login');
        // code...
      }
      // $event ="page.update_event";
      // return view($event);


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateEvent(Request $request, $id)
    {
      $updateEvent = table_event::findOrFail($id);
      $updateEvent->title_event->$request->title_event;
      $updateEvent->status_event->$request->status_event;
      $updateEvent->desc_event->$request->desc_event;
      if ($request->file('img_event')=="")
       {
         $updateEvent->img_event =$updateEvent->img_event;
      }
      else {
        $file = $request->file('img_event');
        $fillName = $file->getClientOriginalName();
        $request->file('img_event')->move("image/", $fillName);
        $updateEvent->img_event= $fillName;
      }
      // dd('$updateEvent');
      // $updateEvent->img_event->$request->img_event;
      $success = $updateEvent->save();
      if ($success){
        //return untuk $success
        return redirect()->route('event')->with('alert', 'Data Berhasil dimasukan');

      }else{
        return redirect()->route('EditEvent')->with('alert', 'Data tidak berhasil dimasukan');
      }

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyEvent($id)
    {

       {
         $deleteEvent = table_event::findOrFail($id);
         $deleteEvent->delete();
         return redirect()->route('event')->with('alert', 'data berhasil di hapus');
        // code...
      }
        //
    }
  }
