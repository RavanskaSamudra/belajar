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
    public function formulir()
    {
        return view('formulir');
    }
    public function proses(Request $request)
    {
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        return "Nama: " . $nama . ", Alamat: " . $alamat;
    }
    public function tambah()
    {
        return view('tambah');
    }
    public function store(Request $request)
    {
        DB::table('pegawai')->insert([
            'nama_pegawai' => $request->nama,
            'nama_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'alamat' => $request->alamat,


        ]);
        return redirect('pegawai');
    }
    public function edit($id)
    {
        $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();
        return view('edit', ['pegawai' => $pegawai]);
    }
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('pegawai')->where('pegawai_id', $request->id)->update([
            'nama_pegawai' => $request->nama,
            'nama_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }
    public function hapus($id)
    {
        DB::table('pegawai')->where('pegawai_id', $id)->delete();
        return redirect('/pegawai');
    }
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $pegawai = DB::table('pegawai')->where('nama_pegawai', 'like', "%" . $cari . "%")->paginate();
        return view('index', ['pegawai' => $pegawai]);
    }
}
