<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeBenda;
use Illuminate\Support\Facades\Auth;


class ControllerKatBenda extends Controller
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
         $type = TypeBenda::all();
         return view('page.table_kat_benda', compact('type'));
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
      if (Auth::user()) {
          $types = 'page.create_kategori_benda';
          return view ($types);
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
        'kat_benda'=>'required'
      ]);
      $types = new TypeBenda();
      $types->kat_benda= $request->get('kat_benda');
      $types->save();
      // dd($Posreligion);
      return redirect()->route('data.benda')->with('alert-success', 'data masuk');
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
    public function destroykat($id)
    {

        $typesDelete = TypeBenda::findOrFail($id);
        $typesDelete->delete();
        return redirect()->route('data.benda')->with('alert', 'anda yakin ingin menghapus');

    }
}
