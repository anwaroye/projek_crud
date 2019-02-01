<?php
// use App\Http\Requests;

namespace App\Http\Controllers;

use App\Http\Controllers\ControllerTableBenda;
// use App\Benda;
use Illuminate\Support\Facades\DB;

use App\table_object;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ControllerTableBenda extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (Auth::user()) {
        $benda = table_object::all();
        return view('page.table_benda',compact('benda'));
      }
      return view('auth.login');


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addbenda()
    {
      if (Auth::user()){
        $benda = 'crud.create_benda';
        return view ('page.create_benda',compact('benda'));

      }
return view('auth.login');

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
        'namabenda'=>'required',
        'deskripsi'=>'required',
       // 'gambar'=>'required',
      ]);
    $page = new table_object();
    $page-> object_name = $request->namabenda;
    $page-> object_desc = $request->deskripsi;
    $page->save();
    return redirect('')->route('addbenda')->with('alert-succes', 'Data berhasil disimpan');
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
    public function updateBenda(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
