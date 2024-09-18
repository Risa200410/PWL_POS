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

        // PRAKTIKUM 2.4
        // $user = UserModel::firstOrNew(
        //     [
        //         'username'=>'manager33',
        //         'nama'=>'Manager Tiga Tiga',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ],
        // );
        // $user->save();
        // return view ('Pertemuan3.user', ['data' => $user]);

        // PRAKTIKUM 2.5.1
        // $user = UserModel::create([
        //     'username' => 'manager55',
        //     'nama' => 'Manager55',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2,

        // ]);

        // $user->username = 'manager56';

        // $user->isDirty(); // true
        // $user->isDirty('username'); // true
        // $user->isDirty('nama'); // false
        // $user->isDirty(['nama', 'username']); // true

        // $user->isClean(); // false
        // $user->isClean('username'); // false
        // $user->isClean('nama'); // true
        // $user->isClean(['nama', 'username']); // false

        // $user->save();

        // $user->isDirty(); // false
        // $user->isClean(); // true
        // dd($user->isDirty());


        // PRAKTIKUM 2.5.3
        $user = UserModel::create([
            'username' => 'manager11',
            'nama' => 'Manager11',
            'password' => Hash::make('12345'),
            'level_id' => 2,

        ]);

        $user->username = 'manager12';

        $user->save();

        $user->wasChanged(); // true
        $user->wasChanged('username'); // true
        $user->wasChanged(['username', 'level_id']); // true
        $user->wasChanged('nama'); // false
        dd($user->wasChanged(['nama', 'username'])); // true
    }
}
