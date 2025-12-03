<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Providers\FoundationServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {

        $pegawai = Pegawai::all();

        // mengirim data pegawai ke view index
        return view('pegawai', ['pegawai' => $pegawai]);
    }
    public function tambah()
    {
        return view('tambah_pegawai');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        Pegawai::create([
            'nama' =>  $request->nama,
            'alamat' => $request->alamat
        ]);

        return redirect('/pegawai');
    }
    public function edit($id)
    {
        $pegawai = Pegawai::find($id);
        return view('edit_pegawai', ['pegawai' => $pegawai]);
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required'
        ]);
        $pegawai = Pegawai::find($id);
        $pegawai->nama = $request->nama;
        $pegawai->alamat = $request->alamat;
        $pegawai->save();
        return redirect('/pegawai');
    }
    public function hapus($id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        return redirect('/pegawai');
    }
}
