<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NotifController extends Controller
{
    public function index()
    {
        return view('notifikasi');
    }
    public function sukses()
    {
        Session::flash('sukses', 'Ini notifikasi SUKSES');
        return redirect('pesan');
    }
    public function warning()
    {
        Session::flash('warning', 'Ini notifikasi Warning');
        return redirect('pesan');
    }
    public function gagal()
    {
        Session::flash('gagal', 'Ini notifikasi gagal');
        return redirect('pesan');
    }
}
