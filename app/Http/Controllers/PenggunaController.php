<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengguna = Pengguna::latest()->get();
        return view('pengguna.index', compact('pengguna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penggunas = Pengguna::get();

        return view('pengguna.create', compact('penggunas'));
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
            'nama'=>'required',
            'alamat_pengguna'=>'required',
            'username'=>'required',
            'password'=>'required',
            'email'=>'required',
            'jenis_kelamin'=>'required',
            ]);

        $pengguna = Pengguna::create([
            'nama' => $request->input('nama'),
            'alamat_pengguna' => $request->input('alamat_pengguna'),
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'email' => $request->input('email'),
            'jenis_kelamin' => $request->input('jenis_kelamin')
            ]);

            return redirect('/pengguna')->with('success','Pengguna telah disimpan!');
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
    public function edit(Pengguna $pengguna)
    {
        $penggunas = Pengguna::get();

        return view('pengguna.edit', compact('pengguna', 'penggunas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengguna $pengguna)
    {
        $request->validate([
            'nama'=>'required',
            'alamat_pengguna'=>'required',
            'username'=>'required',
            'password'=>'required',
            'email'=>'required',
            'jenis_kelamin'=>'required',
            ]);

        $pengguna = Pengguna::whereId($pengguna->id)->update([
            'nama' => $request->input('nama'),
            'alamat_pengguna' => $request->input('alamat_pengguna'),
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'email' => $request->input('email'),
            'jenis_kelamin' => $request->input('jenis_kelamin')
            ]);

            return redirect('/pengguna')->with('success','pengguna telah diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengguna $pengguna)
    {
        $pengguna = Pengguna::find($pengguna->id);
        $pengguna->delete();

        return redirect('/pengguna')->with('success','Pengguna telah dihapus!');
    }
}
