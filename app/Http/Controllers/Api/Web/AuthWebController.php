<?php

namespace App\Http\Controllers\api\web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthWebController extends Controller
{
    public function login(Request $request)
    {
        $status             = '';
        $message            = '';
        $data               = '';
        $token              = '';
        $credentials        = $request->only('email', 'password');
        $code               = 200;

        try {
            if (Auth::attempt($credentials)) {
                $data       = Auth::user();
                $token      = $data->createToken('token-name')->plainTextToken;
                $status     = 'success';
                $message    = 'berhasil';
            } else {
                $data       = "";
                $token      = "";
                $status     = 'failed';
                $message    = 'Email atau password salah';
                $code       = 401;
            }
        } catch (\Exception $e) {
            $status         = 'failed';
            $message        = 'Gagal. ' . $e->getMessage();
            $code           = 400;
        } catch (\Illuminate\Database\QueryException $e) {
            $status         = 'failed';
            $message        = 'Gagal. ' . $e->getMessage();
            $code           = 400;
        } finally {
            return response()->json([
                'status'    => $status,
                'message'   => $message,
                'data'      => $data,
                'token'     => $token
            ], $code);
        }
    }

    public function register(Request $request)
    {
        $status             = '';
        $message            = '';
        $data               = '';
        $code               = 200;

        try {
            $validator      = Validator::make($request->all(), [
                'nama_pengguna' => 'required|unique:users,nama_pengguna',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|same:konfirmasi_password',
                'konfirmasi_password' => 'required|same:password'
            ]);
            if ($validator->fails()) {
                $status     = 'failed';
                $message    = 'Validasi salah';
                $data       = $validator->errors();
                // $token      = "";
                $code       = 422;
            }
            else {
                $username = $this->generateUsername($request->nama_pengguna);
                $data = User::create([
                    'name' => $username,
                    'nama_pengguna' => $request->nama_pengguna,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'role' => 'Pengguna',
                ]);


                // dd($sekolah);
                $status     = 'success';
                $message    = 'berhasil';
                $token = $data->createToken('token-name')->plainTextToken;
            }
        } catch (\Exception $e) {
            $status         = 'failed';
            $message        = 'Gagal. ' . $e->getMessage();
            $code           = 400;
        } catch (\Illuminate\Database\QueryException $e) {
            $status         = 'failed';
            $message        = 'Gagal. ' . $e->getMessage();
            $code           = 400;
        } finally {
            return response()->json([
                'status'    => $status,
                'message'   => $message,
                'data'      => $data,
                'token'     => $token
            ], $code);
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
        $status          = '';
        $message         = '';
        $data            = '';
        $code            = 200;

        try {
            if ($request->user() && $request->user()->currentAccessToken()) {
                $request->user()->currentAccessToken()->delete();
                $status  = 'success';
                $message = 'Logout berhasil';
            } else {
                $status  = 'failed';
                $message = 'User tidak sedang login atau token tidak valid';
                $code    = 401;
            }
        } catch (\Exception $e) {
            $status      = 'failed';
            $message     = 'Gagal logout. ' . $e->getMessage();
            $code        = 400;
        } catch (\Illuminate\Database\QueryException $e) {
            $status      = 'failed';
            $message     = 'Gagal logout. ' . $e->getMessage();
            $code        = 400;
        } finally {
            return response()->json([
                'status'  => $status,
                'message' => $message,
                'data'    => $data,
            ], $code);
        }
    }
}
