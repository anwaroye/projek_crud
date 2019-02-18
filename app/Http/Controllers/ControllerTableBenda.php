<?php
// use App\Http\Requests;

namespace App\Http\Controllers;

use App\Http\Controllers\ControllerTableBenda;
// use App\Benda;
use Illuminate\Support\Facades\DB;

use App\table_object;
use App\TypeBenda;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

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
            // $benda = table_object::all();
            // $benda = table_object::orderBy('id','DESC')->get;
            // $benda = table_object::lates();
            $benda = table_object::orderBy('id','DESC')->paginate(100);


            return view('page.table_benda', compact('benda'));
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
        if (Auth::user()) {
            $benda = 'page.create_benda';
            $types = TypeBenda::all();
            return view ($benda)->with(compact('types'));
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
        'object_name'=>'required',
        'object_desc'=>'required',
        'type_object'=>'required',
       'object_img'=>'required',
      ]);
        $benda = new table_object();
        $benda->id_object=Uuid::uuid4();
        $benda->object_name= $request->get('object_name');
        $benda->type_object= $request->get('type_object');
        $benda->object_desc = $request->get('object_desc');
        $file =$request->file('object_img');
        $fillName =$file->getClientOriginalName();
        $request->file('object_img')->move("image/img_object/", $fillName);
        $benda->object_img = $fillName;
        $benda->save();
        // dd($benda);
        return redirect()->route('benda')->with('alert-succes', 'Data berhasil disimpan');
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
    public function editBenda($id)
    {
      if(Auth::user())
        {
          $benda = 'page.update_benda';
          $types = TypeBenda::all();
          $EditBenda = table_object::findOrFail($id);
          return view($benda)->with(compact('EditBenda','types'));
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
    public function updateBenda(Request $request, $id)
    {
      $updateBenda = table_object::findOrFail($id);
      $updateBenda->object_name=$request->object_name;
      $updateBenda->type_object=$request->type_object;
      $updateBenda->object_desc=$request->object_desc;
      if (empty($request->file('object_img')))
       {
         $updateBenda->object_img=$updateBenda->object_img;
      }
      else {
        unlink('image/img_object/'.$updateBenda->object_img); //menghapus file lama
        $file = $request->file('object_img');
        $ext = $file->getClientOriginalName();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('image/img_object/', $newName);
        $updateBenda->object_img= $newName;
      }
      // $updateBenda->update();
      // dd($updateBenda);
      // $updateBenda->img_event->$request->img_event;
      $success = $updateBenda->save();
      // dd($updateBenda);
      if ($success){
        //return untuk $success
        return redirect()->route('benda')->with('alert', 'Data Berhasil dimasukan');

      }else{
        return redirect()->route('EditBenda')->with('alert', 'Data tidak berhasil dimasukan');
      }
      $updateBenda->reset();
      return redirect()->route('EditBenda');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyBenda($id)
    {
        {
          $deleteBenda = table_object::findOrFail($id);
          $deleteBenda ->delete();
          return redirect()->route('benda')->with('alert', 'anda yakin ingin menghapus');
        }
    }
}
