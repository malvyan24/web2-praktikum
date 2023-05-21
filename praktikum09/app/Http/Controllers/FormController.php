<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //bikin fungdi untuk menampilkan form view form
    public function index()
    {
        return view('form');
    }
    //bikin fungsi menampilkan hasil inputan form
    public function hasil(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
            'hobi' => 'required',
        ]);
        return view ('hasil', ['data' => $request]);
    }
}
