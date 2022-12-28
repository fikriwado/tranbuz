<?php

namespace App\Http\Controllers;

use Pdf;
use App\Models\Rute;
use App\Models\Lokasi;
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
        $rute = Rute::all();
        return view('admin.rute.home', ['data' => $rute]);
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

    public function laporan()
    {
        $lokasi = Lokasi::all()->groupBy('kode');
        return view('admin.laporan.home', ['lokasi' => $lokasi]);
    }

    public function muatLaporan(Request $request)
    {
        $rute = Rute::where('id_pemberangkatan', $request->id_pemberangkatan)
                    ->where('id_pemberhentian', $request->id_pemberhentian)
                    ->get();
        if ($request->type) $rute = Rute::all();
        $pdf = Pdf::loadView('pdf.rute', ['rute' => $rute]);
        return $pdf->setPaper('a4', 'landscape')->stream('rute.pdf');
    }
}
