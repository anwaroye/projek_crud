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
        $request->file('object_img')->move("image/", $fillName);
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
    public function destroyBenda($id)
    {
        {
          $deleteBenda = table_object::findOrFail($id);
          $deleteBenda ->delete();
          return redirect()->route('benda')->with('alert', 'anda yakin ingin menghapus');
        }
    }
}
