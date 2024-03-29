<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        return view('skill');
    }

    public function hasil(Request $request)
    {
        // Mengambil data dari form
        
        $data = [
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'lokasi' => $request->input('lokasi'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'skill' => $request->input('skill'),
        ];

        return view('skillhasil', $data);
    }
}