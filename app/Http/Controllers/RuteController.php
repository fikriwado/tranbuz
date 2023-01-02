<?php

namespace App\Http\Controllers;

use Pdf;
use App\Models\Bus;
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
        $bus = Bus::all();
        $rute = Rute::all();
        $lokasi = Lokasi::all();
        return view('admin.rute.home', [
            'bus' => $bus,
            'data' => $rute,
            'lokasi' => $lokasi
        ]);
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
        // dd($request);
        // $validatedData = $request->validate([
        //     'nama' => 'required|max:255',
        //     'kelas' => 'required|max:255',
        // ]);

        Rute::create([
            'id_bus' => $request->id_bus,
            'id_pemberangkatan' => $request->id_pemberangkatan,
            'id_pemberhentian' => $request->id_pemberhentian,
            'jam_berangkat' => $request->jam_berangkat,
            'jam_sampai' => $request->jam_sampai,
            'jam_transit' => $request->jam_transit
        ]);

        return redirect('/admin/bus')->with('message', 'Data bus berhasil ditambahkan');
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
