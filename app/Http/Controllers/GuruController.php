<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Guru;
class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $gurus =Guru::all();
        return view('guru.index',compact('gurus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.create');
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
              'nama'=>'required|max:255',
              'nik'=>'required|unique:gurus|min:10',
              'mapel'=>'required|min:6',
        ]);
        
        $gurus = new Guru;
        $gurus->nama = $request->nama;
        $gurus->nik = $request->nik;
        $gurus->mapel = $request->mapel;
        $gurus->save();
        return redirect()->route('gurus.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $gurus = Guru::findOrFail($id);
        return view('guru.show',compact('gurus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          // memanggil data pos berdasrkan id di halaman pos edit
        $gurus = Guru::findOrFail($id);
        return view('guru.edit',compact('gurus'));
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
       // unique dihapus karena ketika update data title tidak diubah juga tidak apa-apa
        $this->validate($request,[
            'nama'=>'required|max:255',
              'nik'=>'required|unique:gurus|min:10',
              'mapel'=>'required|min:6',        
              ]);

        // update data berdasarkan id
        $gurus = Guru::findOrFail($id);
       $gurus->nama = $request->nama;
        $gurus->nik = $request->nik;
        $gurus->mapel = $request->mapel;
        $gurus->save();
        return redirect()->route('gurus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete data beradasarkan id
        $gurus = Guru::findOrFail($id);
        $gurus->delete();
        return redirect()->route('guru.index');      
    }
}
