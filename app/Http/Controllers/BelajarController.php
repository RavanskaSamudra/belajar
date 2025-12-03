<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function input()
    {
        return view('input');
    }
    public function proses(Request $request)
    {
        $messages = [
            'required' => 'attribute Wajib Di Isi',
            'min' => 'attribute Jangan kurang dari 5 Lah',
            'max' => 'attribute Jangan lebih dari 20 Lah'
        ];
        $request->validate([
            'nama' => 'required|min:5|max:20',
            'pekerjaan' => 'required',
            'usia' => 'required|numeric'
        ], $messages);
        return view('proses', ['data' => $request]);
    }
}
