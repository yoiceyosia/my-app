<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lokasi = Lokasi::latest()->get();
        return view('lokasi.index', compact('lokasi')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lokasi.create'); 
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
            'tanggal'=>'required',
            'alamat'=>'required',
            'jenis_vaksin'=>'required',
            'kapasitas'=>'required',
            ]);

        $lokasi = Lokasi::create([
            'tanggal' => $request->input('tanggal'),
            'alamat' => $request->input('alamat'),
            'jenis_vaksin' => $request->input('jenis_vaksin'),
            'kapasitas' => $request->input('kapasitas')
            ]);

            return redirect('/lokasi')->with('success','Lokasi telah disimpan!');
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
    public function edit(Lokasi $lokasi)
    {
        return view('lokasi.edit', compact('lokasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lokasi $lokasi)
    {
        $request->validate([
            'tanggal'=>'required',
            'alamat'=>'required',
            'jenis_vaksin'=>'required',
            'kapasitas'=>'required',
            ]);
            
        $lokasi = Lokasi::whereId($lokasi->id)->update([
            'tanggal' => $request->input('tanggal'),
            'alamat' => $request->input('alamat'),
            'jenis_vaksin' => $request->input('jenis_vaksin'),
            'kapasitas' => $request->input('kapasitas')
            ]);

            return redirect('/lokasi')->with('success','Lokasi telah diubah!');            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lokasi $lokasi)
    {
        $lokasi = Lokasi::find($lokasi->id);
        $lokasi->delete();

        return redirect('/lokasi')->with('success','Lokasi telah dihapus!');
    }
}
