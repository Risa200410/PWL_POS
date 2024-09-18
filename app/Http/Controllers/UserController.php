<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function User()
    {
        //     return view('Soal_JS2.user')
        //     ->with('id','2241760119') 
        //     ->with('nama','Maritza Ulfa Huriyah');
    }

    public function index()
    {
        // $user = UserModel::all(); // ambil semua data dari tabel m user
        // return view('Pertemuan3.user', ['data' => $user]);

        // tambah data user dengan Eloquent Model
        // $data = [
        //     'username' => 'manager_3',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2
        // ];
        // UserModel::create($data); // tambahkan data ke tabel m_user

        // tambah data user dengan Eloquent Model
        // $data = [
        //     'nama' => 'Pelanggan Pertama',
        // ];
        // UserModel::where('username', 'customer-1')->update($data); // update data user        

        // coba akses model UserModel
        // $user = UserModel::where('level_id', 2)->count(); // ambil semua data dari tabel m_user
        // // dd($user);
        // return view('Pertemuan3.user', ['data' => $user]);
        
        $user = UserModel::firstOrNew(
            [
                'username'=>'manager33',
                'nama'=>'Manager Tiga Tiga',
                'password' => Hash::make('12345'),
                'level_id' => 2
            ],
        );
        $user->save();
        return view ('Pertemuan3.user', ['data' => $user]);
    }
}
