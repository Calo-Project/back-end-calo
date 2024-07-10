<?php

namespace App\Http\Controllers\Api\Customer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthCustomerController extends Controller
{
    public function logged()
    {
        $user = auth()->user();

        if ($user->role === 'Pengguna') {
            return response()->json([
                'status' => 'success',
                'message' => 'Anda login',
                'data' => $user
            ]);
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Akun tidak ditemukan'
            ], 401);
        }

        if ($user->role === 'Pengguna') {
            $token = $user->createToken('mobile', ['role:Pengguna'])->plainTextToken;
        } else {
            return response()->json([
                'status' => 'failed',
                'message' => 'You do not have authorization',
            ], 403);
        }

        $user->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Login successful',
            'token' => $token,
            'data' => $user
        ]);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'nama_pengguna' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Pendaftaran gagal dilakukan!'
            ]);
        }

        $data = User::create([
            'name' => $request->name,
            'nama_pengguna' => $request->nama_pengguna,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'Pengguna',
        ]);

        if($data){
            return response()->json([
                'status' => 'success',
                'message' => 'Pendaftaran berhasil dilakukan!',
                'data' => $data
            ]);
        }else{
            return response()->json([
                'status' => 'failed',
                'message' => 'Pendaftaran gagal dilakukan!'
            ]);
        }

    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Logout successful',
        ]);
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = auth()->user();

        if (Hash::check($request->old_password, $user->password)) {
           return response()->json([
            'status' => 'failed',
            'message' => 'Harap masukkan password lama yang sesuai!'
           ], 401);
        }

        $user->password = Hash::make($request->password);

        $user->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Password berhasil diubah'
        ]);
    }
}
