<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\Pengguna;
use App\Models\Lokasi;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftaran = Pendaftaran::latest()->get();
        return view('pendaftaran.index', compact('pendaftaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penggunas = Pengguna::get();
        $lokasis = Lokasi::get();

        return view('pendaftaran.create', compact('penggunas', 'lokasis'));
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
            'pengguna_id' => 'required',
            'lokasi_id' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
            'no_kartu' => 'required',
        ]);

        $pendaftaran = Pendaftaran::create([
            'pengguna_id' => $request->input('pengguna_id'),
            'lokasi_id' => $request->input('lokasi_id'),
            'tanggal' => $request->input('tanggal'),
            'jam' => $request->input('jam'),
            'no_kartu' => $request->input('no_kartu'),
            ]);

            return redirect('/pendaftaran')->with('success','Pendaftaran telah disimpan!');
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
    public function edit(Pendaftaran $pendaftaran)
    {
        $penggunas = Pengguna::get();
        $lokasis = Lokasi::get();

        return view('pendaftaran.edit', compact('pendaftaran', 'penggunas', 'lokasis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        $request->validate([
            'pengguna_id' => 'required',
            'lokasi_id' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
            'no_kartu' => 'required',
        ]);

        $pendaftaran = Pendaftaran::whereId($pendaftaran->id)->update([
            'pengguna_id' => $request->input('pengguna_id'),
            'lokasi_id' => $request->input('lokasi_id'),
            'tanggal' => $request->input('tanggal'),
            'jam' => $request->input('jam'),
            'no_kartu' => $request->input('no_kartu'),
            ]);

            return redirect('/pendaftaran')->with('success','Pendaftaran telah diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendaftaran $pendaftaran)
    {
        $pendaftaran = Pendaftaran::find($pendaftaran->id);
        $pendaftaran->delete();

        return redirect('/pendaftaran')->with('success','Pendaftaran telah dihapus!');
    }
}
