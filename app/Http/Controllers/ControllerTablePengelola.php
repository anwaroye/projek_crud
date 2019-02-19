<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
            $manager = table_manager::orderBy('id', 'DESC')->paginate(100);
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
            return view($manager)->with(compact('Posmanager', 'Posreligion', 'jk'));
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

          'name_manager'=>'required',
          'gender'=>'required',
          'place_of_birth'=>'required',
          'birth_manager'=>'required',
          'religion'=>'required',
          'position_manager'=>'required',
          'img_manager'=>'required',
          'address'=>'required',
          'desc_manager'=>'required'
        ]);
        $manager = new table_manager();
        $manager->id_manager=Uuid::uuid4();
        $manager->name_manager = $request->get('name_manager');
        $manager->gender = $request->get('gender');
        $manager->place_of_birth = $request->get('place_of_birth');
        $manager->birth_manager = $request->get('birth_manager');
        $manager->religion = $request->get('religion');
        $manager->position_manager = $request->get('position_manager');
        $manager->address = $request->get('address');
        $manager->desc_manager= $request->get('desc_manager');
        $file =$request->file('img_manager');
        $fillName =$file->getClientOriginalName();
        $request->file('img_manager')->move("image/img_manager/", $fillName);
        $manager->img_manager = $fillName;

        $manager->save();
        // dd($manager);
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
        if(Auth::user())
        {
          $manager = 'page.update_manager';
          $jk = jeniskelamin::all();
          $PositionManager = position_manager::all();
          $Posreligion = religion::all();
          $EditManager = table_manager::findOrFail($id);
          return view($manager)->with(compact('EditManager','jk','Posreligion','PositionManager'));
        }
        return view('auth.login');


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
      $updateManager = table_manager::findOrFail($id);
      $updateManager->name_manager=$request->name_manager;
      $updateManager->place_of_birth=$request->place_of_birth;
      $updateManager->birth_manager=$request->birth_manager;
      $updateManager->gender=$request->gender;
      $updateManager->religion=$request->religion;
      $updateManager->address=$request->address;
      $updateManager->position_manager=$request->position_manager;
      $updateManager->desc_manager=$request->desc_manager;

      if (empty($request->file('img_manager')))
       {
         $updateManager->img_manager=$updateManager->img_manager;
      }
      else {
        unlink('image/img_manager/'.$updateManager->img_manager); //menghapus file lama
        $file = $request->file('img_manager');
        $ext = $file->getClientOriginalName();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('image/img_manager/', $newName);
        $updateManager->img_manager= $newName;
      }
      // $updateManager->update();
      // dd($updateManager);
      // $updateManager->img_event->$request->img_event;
      $success = $updateManager->save();
      // dd($updateManager);
      if ($success){
        //return untuk $success
        return redirect()->route('manager')->with('alert', 'Data Berhasil dimasukan');

      }else{
        return redirect()->route('editManager')->with('alert', 'Data tidak berhasil dimasukan');
      }
      $updateManager->reset();
      return redirect()->route('editManager');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyManager($id)
    {
        $deleteManager = table_manager::findOrFail($id);
        $deleteManager->delete();
        return redirect()->route('manager')->with('alert-danger', 'anda yakin ingin menghapusnya');
    }
}
