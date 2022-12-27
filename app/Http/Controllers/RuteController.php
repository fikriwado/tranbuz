<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contohData = [
            (object) [
                'id' => 1,
                'bus' => 'Budiman Eksekutif',
                'pemberangkatan' => 'Manonjaya, Tasikmalaya',
                'pemberhentian' => 'Cibiru, Bandung',
                'jam_berangkat' => '08:00',
                'jam_sampai' => '12:30',
                'jam_transit' => '08:45'
            ],
            (object) [
                'id' => 2,
                'bus' => 'Budiman Super Eksekutif',
                'pemberangkatan' => 'Pool, Tasikmalaya',
                'pemberhentian' => 'Lebak Bulus, Jakarta',
                'jam_berangkat' => '08:00',
                'jam_sampai' => '14:30',
                'jam_transit' => '08:20'
            ],
            (object) [
                'id' => 1,
                'bus' => 'Primajasa AC Bisnis',
                'pemberangkatan' => 'Salopa, Tasikmalaya',
                'pemberhentian' => 'Pool, Bandung',
                'jam_berangkat' => '08:00',
                'jam_sampai' => '13:30',
                'jam_transit' => '11:30'
            ],
        ];

        return view('admin.rute.home', ['data' => $contohData]);
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
        dd('hapus data rute ke ' . $id);
    }
}
