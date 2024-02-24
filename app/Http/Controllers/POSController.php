<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class POSController extends Controller
{
    public function index()
    {
        // Menampilkan halaman transaksi POS
        return view('pos');
    }

    public function processTransaction(Request $request)
    {
        // Logika untuk memproses transaksi
        $product = $request->input('product');
        $quantity = $request->input('quantity');

        // Lakukan sesuatu dengan data transaksi, seperti menyimpan ke database

        // Redirect atau tampilkan kembali halaman transaksi dengan pesan sukses
        return redirect()->route('pos')->with('success', 'Transaksi berhasil!');
    }
}
