<?php

namespace App\Http\Controllers;

use App\Skripsi;
use Illuminate\Http\Request;

class SkripsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skripsi = Skripsi::all();
        return view('skripsi.index', compact('skripsi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skripsi.create');
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
            'nim' => 'required',
            'nama_mahasiswa' => 'required',
            'judul' => 'required',
            'tempat_penelitian' => 'required',
            'alamat' => 'required',
        ]);

        Skripsi::create($request->all());
        return redirect()->route('skripsi.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Skripsi  $skripsi
     * @return \Illuminate\Http\Response
     */
    public function show(Skripsi $skripsi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Skripsi  $skripsi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skripsi = Skripsi::find($id)->first();
        return view('skripsi.edit', compact('skripsi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Skripsi  $skripsi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skripsi $skripsi)
    {
        $request->validate([
            'nama_mahasiswa' => 'required',
            'judul' => 'required',
            'tempat_penelitian' => 'required',
            'alamat' => 'required',
        ]);
        $skripsi
            ->update($request->all());
        return redirect()->route('skripsi.index')->with('success', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Skripsi  $skripsi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Skripsi::destroy($id);
        return redirect()->route('skripsi.index')->with('success', 'Data Berhasil Dihapus');
    }
}
