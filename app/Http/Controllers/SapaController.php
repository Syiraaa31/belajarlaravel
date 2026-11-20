<?php

namespace App\Http\Controllers;

class SapaController extends Controller
{
    public function index()
    {
        $nama = 'Syira Putra Alegra';

        return view('pages.sapa', [
            'nama' => $nama,
        ]);
    }
}
