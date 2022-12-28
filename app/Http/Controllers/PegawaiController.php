<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StorePegawai;
use App\Http\Requests\UpdatePegawai;
use Illuminate\Support\Facades\Hash;

class PegawaiController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('admin.pegawai.home', ['data' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePegawai $request)
    {
        $validate = $request->validated();

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('pegawai.index')->with('message', 'Pegawai berhasil ditambahkan');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePegawai $request, $id)
    {
        $validate = $request->validated();

        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'status' => $request->status
        ]);

        return redirect()->route('pegawai.index')->with('message', 'Pegawai berhasil diupdate');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('pegawai.index')->with('message', 'Pegawai berhasil dihapus');
    }
}
