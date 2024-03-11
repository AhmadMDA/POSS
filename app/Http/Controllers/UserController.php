<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class UserController extends Controller
{
    public function index()
    {
      $user = UserModel::all();
      return view('user', ['data' => $user]);
    }

    public function tambah(){
      return view ('user_tambah');
    }

    public function tambah_simpan(Request $request){
      UserModel::create([
        'username'=> $request->username,
        'nama'=> $request->nama,
        'password'=> Hash::make('$request->password'),
        'level_id'=> $request->level_id,
      ]);
      return redirect('/user');
    }

    public function ubah($id){
      $user = UserModel::find($id);
      return view ('user_ubah', ['data'=> $user]);
    }

    public function ubah_simpan($id, Request $request){
      $user = UserModel::find($id);
  
      if ($request->has('username')) {
          $user->username = $request->username;
      }
      if ($request->has('nama')) {
          $user->nama = $request->nama;
      }
      if ($request->has('password')) {
          $user->password = Hash::make($request->password);
      }
      if ($request->has('level_id')) {
          $user->level_id = $request->level_id;
      }
  
      $user->save();
      return redirect('/user');
  }
  public  function hapus($id){
    $user = UserModel::find($id);
    $user->delete();

    return redirect('/user');
  }

  public function bersama()
  {
    $user = UserModel::with('level')->get();
    dd($user);
  }
}