<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Ramsey\Uuid\Uuid;
use App\table_manager;
use App\position_manager;
use App\religion;
use App\jeniskelamin;



class ControllerTablePengelola extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (Auth::user()) {

          $manager = table_manager::orderBy('id','DESC')->paginate(100);
          return view('page.table_pengelola', compact('manager'));
      }
      return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addmanager()
    {

        if (Auth::user()) {
            $manager = 'page.create_manager';
            $Posmanager = position_manager::all();
            $Posreligion = religion::all();
            $jk = jeniskelamin::all();
            return view ($manager)->with(compact('Posmanager','Posreligion','jk'));
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
        $this->validate($request, [

          'name_manager',
          'gender',
          'place_of_birth',
          'birth_manager',
          'religion',
          'position_manager',
          'img_manager',
          'address',
          'desc_manager'
        ]);
        $manager = new table_manager();
        $manager->id_manager=Uuid::uuid4();
        $manager->name_manager = $request->get('name_manager');
        $manager->gender = $request->get('gender');
        $manager->place_of_birth = $request->get('place_of_birth');
        $manager->birth_manager = $request->get('birth_manager');
        $manager->religion = $request->get('religion');
        $manager->position_manager = $request->get('position_manager');
        $manager->img_manager = $request->get('img_manager');
        $manager->address = $request->get('address');
        $manager->desc_manager= $request->get('desc_manager');
        $manager->save();
        dd($manager);
        return redirect()->route('manager')->with('alert-succes', 'data berhasil dimaskukan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        //
    }
}
