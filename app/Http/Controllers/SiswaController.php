<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Siswa;
class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas =Siswa::all();
        return view('siswa.index',compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
              'nama'=>'required|unique:siswas|max:255',
              'nis'=>'required|min:6',
              'kelas'=>'required|min:6',
        ]);
        
        $siswas = new Siswa;
        $siswas->nama = $request->nama;
        $siswas->nis = $request->nis;
        $siswas->kelas = $request->kelas;
        $siswas->save();
        return redirect()->route('siswas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswas = Siswa::findOrFail($id);
        return view('siswa.show',compact('siswas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $siswas = Siswa::findOrFail($id);
        return view('siswa.edit',compact('siswas'));
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
         $this->validate($request,[
            'nama'=>'required|unique:siswas|max:255',
              'nis'=>'required|min:6',
              'kelas'=>'required|min:6',       
              ]);

        // update data berdasarkan id
        $siswas = Siswa::findOrFail($id);
       $siswas->nama = $request->nama;
        $siswas->nis = $request->nis;
        $siswas->kelas = $request->kelas;
        $siswas->save();
        return redirect()->route('siswas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $siswas = Siswa::findOrFail($id);
        $siswas->delete();
        return redirect()->route('siswa.index'); 
    }
}
