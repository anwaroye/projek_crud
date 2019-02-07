<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\religion;
class ControllerReligion extends Controller
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
         $Posreligion = religion::all();
         return view('page.religion', compact('Posreligion'));
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
        if(Auth::user())
        {
           $Posreligion='page.create_religion';
          return view($Posreligion);
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
          'option_religion'=>'required'
        ]);
        $Posreligion = new religion();
        $Posreligion->option_religion= $request->get('option_religion');
        $Posreligion->save();
        // dd($Posreligion);
        return redirect()->route('religion')->with('alert-success', 'data masuk');


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
    public function destroyReligion($id)
    {
        $Posreligion = religion::findOrFail($id);
        $Posreligion->delete();
        return redirect()->route('religion')->with('alert', 'anda yakin ingin menghapus');
    }
}
