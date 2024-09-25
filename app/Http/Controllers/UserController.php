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
        // $user = UserModel::create([
        //     'username' => 'manager11',
        //     'nama' => 'Manager11',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2,

        // ]);

        // $user->username = 'manager12';

        // $user->save();

        // $user->wasChanged(); // true
        // $user->wasChanged('username'); // true
        // $user->wasChanged(['username', 'level_id']); // true
        // $user->wasChanged('nama'); // false
        // dd($user->wasChanged(['nama', 'username'])); // true

        // PRAKTIKUM 2.6.2
        // $user = UserModel::all();
        // return view('Pertemuan3.user', ['data' => $user]);

        // P2 PRAKTIKUM 2.7
        // $user = UserModel::with('level')->get();
        // dd($user);
        $user = UserModel::with('level')->get();
        return view('Pertemuan4.user', ['data' => $user]);
    }

    // PRAKTIKUM 2.6.6
    public function tambah()
    {
        return view('user_tambah');
        // return view('Pertemuan4.user_ubah');
    }

    // PRAKTIKUM 2.6.9
    public function tambah_simpan(Request $request)
    {

        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make('$request->password'),
            'level_id' => $request->level_id
        ]);
        return redirect('/user');
    }

    // PRAKTIKUM 2.6.13
    public function ubah($id)
    {
        // return view ("hello");
        // var_dump($id);
        // die();
        $user = UserModel::find($id);
        // var_dump($user);
        // die();
        return view('user_ubah', ['data' => $user]);
        
    }

    // PRAKTIKUM 2.6.16
    public function ubah_simpan($id, Request $request)
    {
        $user = UserModel::find($id);
        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->password = Hash::make('$request->password');
        $user->level_id = $request->level_id;

        return redirect('/user');
    }

    // PRAKTIKUM 2.6.19
    public function hapus($id)
    {
        $user = UserModel::find($id);
        $user->delete();

        return redirect('/user');
    }
}
