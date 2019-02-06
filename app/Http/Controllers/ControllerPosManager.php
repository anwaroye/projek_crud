<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\position_manager;
use Illuminate\Support\Facades\Auth;
class ControllerPosManager extends Controller
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
         $manager = position_manager::all();
         return view('page.position_manager', compact('manager'));
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
      if (Auth::user())
       {
         $manager = 'page.create_postManager';
         return view($manager);
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
        'position_manag'=>'required'
      ]);
      $manager =new position_manager();
        $manager->position_manag= $request->get('position_manag');
        $manager->save();
        // dd($manager);
        return redirect()->route('posManger')->with('alert-success', 'data masuk');
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
    public function destroyPost($id)
    {

        $manager = position_manager::findOrFail($id);
        $manager->delete();
        return redirect()->route('posManger')->with('alert', 'anda yakin ingin menghapus');
      }

}
