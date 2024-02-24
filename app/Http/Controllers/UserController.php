<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id, $name)
    {
        // Logika untuk menampilkan profil pengguna
        return view('user', ['id' => $id, 'name' => $name]);
    }
}
