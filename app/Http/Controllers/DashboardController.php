<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\User;
use App\Models\Rute;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::all();
        $rute = Rute::all();
        $jumlah = (object) ['bus' => Bus::all()->count(), 'lokasi' => Lokasi::all()->count()];
        return view('admin.dashboard', ['user' => $user, 'rute' => $rute, 'jumlah' => $jumlah]);
    }
}
