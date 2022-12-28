<?php

namespace App\Http\Controllers;

use App\Models\Rute;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $lokasi = Lokasi::all()->groupBy('kode');
        return view('welcome', ['lokasi' => $lokasi]);
    }
    
    public function search(Request $request)
    {
        $lokasi = Lokasi::all()->groupBy('kode');
        $rute = Rute::where('id_pemberangkatan', $request->id_pemberangkatan)
                    ->where('id_pemberhentian', $request->id_pemberhentian)
                    ->get();
        return view('search', ['lokasi' => $lokasi, 'rute' => $rute]);
    }
}
