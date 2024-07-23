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
            $profilePictureUrl = asset('profile/' . $user->foto_profile);
            $user = $user->toArray();
            $user['foto_profile_url'] = $profilePictureUrl;

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
        $status = '';
        $message = '';
        $data = '';
        $code = 200;

        try {
            $validator = Validator::make($request->all(), [
                'nama_pengguna' => 'required|unique:users,nama_pengguna',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|same:konfirmasi_password',
                'konfirmasi_password' => 'required|same:password',
            ], [
                'nama_pengguna.required' => 'Nama wajib diisi',
                'nama_pengguna.unique' => 'Nama sudah dipakai',
                'email.required' => 'Email wajib diisi',
                'email.email' => 'Harus berformat email',
                'email.unique' => 'Email sudah dipakai',
                'password.required' => 'Password wajib diisi',
                'password.same' => 'Password dan konfirmasi password tidak cocok',
                'konfirmasi_password.required' => 'Konfirmasi password wajib diisi',
                'konfirmasi_password.same' => 'Konfirmasi password dan password tidak cocok'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 'failed',
                    'message' => 'Gagal',
                    'errors' => $validator->errors(),
                    'code' => 400,
                ], 400);
            }

            $username = $this->generateUsername($request->nama_pengguna);
            // dd($username);

            $data = User::create([
                'name' => $username,
                'nama_pengguna' => $request->nama_pengguna,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'Pengguna',
            ]);

            if ($data) {
                $token = $data->createToken('mobile', ['role:Pengguna'])->plainTextToken;
                return response()->json([
                    'status' => 'success',
                    'message' => 'Pendaftaran berhasil dilakukan!',
                    'data' => $data,
                    'token' => $token,
                ]);
            } else {
                return response()->json([
                    'status' => 'failed',
                    'message' => 'Pendaftaran gagal dilakukan!'
                ]);
            }
        } catch (\Exception $e) {
            $status = 'failed';
            $message = 'Gagal. ' . $e->getMessage();
            $code = 400;
        }
    }

    function generateUsername($nama_pengguna)
    {
        $username = strtolower($nama_pengguna);
        $username = str_replace(' ', '', $username);
        return $username;
    }

    public function logout(Request $request)
    {
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
