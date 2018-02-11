<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Wali;
class WaliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $walis =Wali::all();
        return view('wali.index',compact('walis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('wali.create');
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
              'nama'=>'required|unique:walis|max:255',
              'alamat'=>'required|min:6',
        ]);
        
        $walis = new Wali;
        $walis->nama = $request->nama;
        $walis->alamat = $request->alamat;
        $walis->save();
        return redirect()->route('walis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $walis = Wali::findOrFail($id);
        return view('wali.show',compact('walis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $walis = Wali::findOrFail($id);
        return view('wali.edit',compact('walis'));
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
             'nama'=>'required|unique:walis|max:255',
              'alamat'=>'required|min:6',    
               ]);

        // update data berdasarkan id
        $walis = Wali::findOrFail($id);
       $walis->nama = $request->nama;
        $walis->alamat = $request->alamat;
        $walis->save();
        return redirect()->route('walis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $walis = Wali::findOrFail($id);
        $walis->delete();
        return redirect()->route('walis.index');
    }
}
