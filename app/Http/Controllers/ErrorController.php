<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function index($nama)
    {
        if ($nama == "ngawur") {
            return abort(403, 'Anda tidak punya akses karena anda Ngodingnya Ngawur');
        } elseif ($nama == "rava") {
            return "Halo, " . $nama;
        } else {
            return abort(404);
        }
    }
}
