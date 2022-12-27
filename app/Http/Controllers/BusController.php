<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contohData = [
            (object) ['id' => 1, 'nama' => 'Budiman', 'kelas' => 'Eksekutif'],
            (object) ['id' => 2, 'nama' => 'Budiman', 'kelas' => 'Super Eksekutif'],
            (object) ['id' => 3, 'nama' => 'Budiman', 'kelas' => 'Best In Class'],
            (object) ['id' => 4, 'nama' => 'Budiman', 'kelas' => 'Bisnis AC'],
            (object) ['id' => 5, 'nama' => 'Budiman', 'kelas' => 'Bisnis AC First Class'],
            (object) ['id' => 6, 'nama' => 'Budiman', 'kelas' => 'Ekonomi Bisnis AC'],
            (object) ['id' => 7, 'nama' => 'Primajasa', 'kelas' => 'Eksekutif'],
            (object) ['id' => 8, 'nama' => 'Primajasa', 'kelas' => 'Super Eksekutif'],
            (object) ['id' => 9, 'nama' => 'Primajasa', 'kelas' => 'AC Bisnis'],
            (object) ['id' => 1, 'nama' => 'Primajasa', 'kelas' => 'AC Ekonomi']
        ];
        return view('admin.bus.home', ['data' => $contohData]);
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
        dd('hapus data bus ke ' . $id);
    }
}
