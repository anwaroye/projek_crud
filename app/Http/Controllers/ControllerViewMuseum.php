<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\table_inf_museum;

use Illuminate\Http\Request;

class ControllerViewMuseum extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (Auth::user())
      {
        $museum = table_inf_museum::orderBy('id','DESC')->paginate(100);
        return view('page.table_inf_museum',compact('museum'));
        // code...
      }
      return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if (Auth::user()){
        $addmuseum = table_inf_museum::all();
        return view ('page.create_inf_museum',compact('addmuseum'));
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
      $this->validate($request,[
        // 'id_event' =>'required',
        'title_inf'=>'required',
        'desc_inf'=>'required',
       'img_inf'=>'required',
      ]);
        $museum = new table_inf_museum();

        $museum->title_inf = $request->get('title_inf');
        $museum->desc_inf = $request->get('desc_inf');

        // proses penampilan gambar

        $file =$request->file('img_inf');
        $fillName =$file->getClientOriginalName();
        $request->file('img_inf')->move("image/", $fillName);
        // ennddddd
        $museum->img_inf = $fillName;
        // dd($museum);

        $museum->save();
        return redirect()->route('museum')->with('alert-succes', 'data berhasil');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      {
        $deleteMus = table_inf_museum::findOrFail($id);
        $deleteMus->delete();
        return redirect()->route('museum')->with('alert', 'data berhasil di hapus');
       // code...
     }
    }
}
