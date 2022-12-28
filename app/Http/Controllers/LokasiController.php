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
        $lokasi = Lokasi::all();
        return view('admin.lokasi.home', ['data' => $lokasi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'kota' => 'required|max:255',
            'kode' => 'required|max:255',
        ]);

        Lokasi::create([
            'nama' => $request->nama,
            'kota' => $request->kota,
            'kode' => $request->kode,
        ]);

        return redirect('/admin/lokasi')->with('message', 'Data lokasi berhasil ditambahkan');
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
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'kota' => 'required|max:255',
            'kode' => 'required|max:255',
        ]);

        Lokasi::where('id', $id)->update([
            'nama' => $request->nama,
            'kota' => $request->kota,
            'kode' => $request->kode,

        ]);

        return redirect('/admin/lokasi')->with('message', 'data lokasi berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lokasi::destroy($id);
        return redirect('/admin/lokasi')->with('message', 'data Lokasi  berhasil dihapus');
    }
}
