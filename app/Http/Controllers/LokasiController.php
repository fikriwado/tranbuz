<?php

namespace App\Http\Controllers;

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
        $contohData = [
            (object) ['id' => 1, 'nama' => 'Manonjaya', 'kota' => 'Tasikmalaya', 'kode' => 'TSM'],
            (object) ['id' => 2, 'nama' => 'Salopa', 'kota' => 'Tasikmalaya', 'kode' => 'TSM'],
            (object) ['id' => 3, 'nama' => 'Pool', 'kota' => 'Tasikmalaya', 'kode' => 'TSM'],
            (object) ['id' => 4, 'nama' => 'Cibiru', 'kota' => 'Bandung', 'kode' => 'BDG'],
            (object) ['id' => 5, 'nama' => 'Lembang', 'kota' => 'Bandung', 'kode' => 'BDG'],
            (object) ['id' => 6, 'nama' => 'Pool', 'kota' => 'Bandung', 'kode' => 'BDG'],
            (object) ['id' => 7, 'nama' => 'Kp.Rambutan', 'kota' => 'Jakarta', 'kode' => 'JKT'],
            (object) ['id' => 8, 'nama' => 'Tanjung Priok', 'kota' => 'Jakarta', 'kode' => 'JKT'],
            (object) ['id' => 9, 'nama' => 'Lebak Bulus', 'kota' => 'Jakarta', 'kode' => 'JKT'],
            (object) ['id' => 10, 'nama' => 'Pool', 'kota' => 'Jakarta', 'kode' => 'JKT']
        ];

        return view('admin.lokasi.home', ['data' => $contohData]);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd('hapus data lokasi ke ' . $id);
    }
}
