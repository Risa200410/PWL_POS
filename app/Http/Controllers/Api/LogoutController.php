<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class LogoutController extends Controller
{
    //  metode khusus di PHP yang memungkinkan kelas untuk dipanggil sebagai fungsi.
    public function __invoke(Request $request)
    {
        // membatalkan atau menghapus
        $removeToken = JWTAuth::invalidate(JWTAuth::getToken());
        // mengambil token JWT dari header request.

        // jika token berhasil dibatalkan
        if ($removeToken) {
            return response()->json([
                'success'   => true,
                'message'   => 'Logout Berhasil',
            ]);
        }
    }
}