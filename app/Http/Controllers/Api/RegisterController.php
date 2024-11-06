<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {
        // set validation
        $validator = Validator::make($request->all(), [
            'username'  => 'required',
            'nama'      => 'required',
            'password'  => 'required|min:5|confirmed',
            'level_id'  => 'required',
            'avatar' => 'nullable|mimes:jpeg,png,jpg|max:40968'
        ]);

        // jika balidator gagal
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // membuat user
        $avatar = $request->avatar;
        $user = UserModel::create([
            'username'  => $request->username,
            'nama'      => $request->nama,
            'password'  => bcrypt($request->password),
            'level_id'  => $request->level_id,
            'avatar' => $avatar->hashName()
        ]);

        // return respons JSON pembuatan user 
        if ($user) {
            return response()->json([
                'success'   => true,
                'user'      => $user,
            ],201);
        }

        // return respons JSON saat input gagal
        return response()->json([
            'success'   => false,
        ],409);
    }
}