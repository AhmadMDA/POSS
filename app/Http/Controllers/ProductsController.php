<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan daftar produk
        return view('products');
    }

    public function foodBeverage()
    {
        // Logika untuk menampilkan produk kategori makanan & minuman
        return view('food_beverage');
    }

    public function beautyHealth()
    {
        // Logika untuk menampilkan produk kategori kecantikan & kesehatan
        return view('beauty_health');
    }

    public function homeCare()
    {
        // Logika untuk menampilkan produk kategori perawatan rumah
        return view('home_care');
    }

    public function babyKid()
    {
        // Logika untuk menampilkan produk kategori bayi & anak-anak
        return view('baby_kid');
    }
}
