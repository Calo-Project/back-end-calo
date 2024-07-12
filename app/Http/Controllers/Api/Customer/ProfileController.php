<?php

namespace App\Http\Controllers\Api\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function update_profile(Request $request)
    {
        $status = '';
        $message = '';
        $data = '';
        $code = 200;

        try {
            $user = auth()->user();
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'nama_pengguna' => 'required',
            ], [
                'email.required' => 'Wajib diisi',
                'email.email' => 'Harus berformat email'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 'failed',
                    'message' => 'Gagal',
                    'errors' => $validator->errors(),
                    'code' => 400,
                ], 400);
            }

            $input = $request->except(['_token', '_method']);

            if ($request->hasFile('foto_profile')) {
                if ($user->foto_profile) {
                    File::delete('profile/' . $user->foto_profile);
                }

                $gambar = $request->file('foto_profile');
                $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('profile', $nama_gambar);
                $input['foto_profile'] = $nama_gambar;
            } else {
                unset($input['foto_profile']);
            }

            $user->update($input);

            return response()->json([
                'status' => 'success',
                'message' => 'Selamat, profile berhasil diubah!',
                'data' => $user,
                'code' => 200,
            ], 200);
        } catch (\Exception $e) {
            $status = 'failed';
            $message = 'Gagal. ' . $e->getMessage();
            $code = 400;
        } catch (\Illuminate\Database\QueryException $e) {
            $status = 'failed';
            $message = 'Gagal. ' . $e->getMessage();
            $code = 400;
        } finally {
            return response()->json([
                'status' => $status,
                'message' => $message,
                'data' => $data,
            ], $code);
        }
    }

    public function update_password(Request $request)
    {
        $status = '';
        $message = '';
        $data = '';
        $code = 200;

        try {
            $user = auth()->user();

            $validator = Validator::make($request->all(), [
                'password' => 'required|same:konfirmasi_password',
                'konfirmasi_password' => 'required|same:password',
            ], [
                'password.required' => 'Wajib diisi!'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    $status = 'failed',
                    $message = 'Gagal',
                    $code = 400,
                ]);
            }

            $input = $request->except(['_token', '_method']);

            $input['password'] = bcrypt($request->password);

            $user->update($input);

            if ($user) {
                return response()->json([
                    $status = 'success',
                    $message = 'Selamat, password berhasil diubah!',
                    $data = $user,
                    $code = 200,
                ]);
            } else {
                return response()->json([
                    $status = 'failed',
                    $message = 'Yah, password gagal diubah!',
                    $code = 400,
                ]);
            }
        } catch (\Exception $e) {
            $status = 'failed';
            $message = 'Gagal. ' . $e->getMessage();
            $code = 400;
        } catch (\Illuminate\Database\QueryException $e) {
            $status = 'failed';
            $message = 'Gagal. ' . $e->getMessage();
            $code = 400;
        } finally {
            return response()->json([
                'status' => $status,
                'message' => $message,
                'data' => $data,
            ], $code);
        }
    }

    public function update_wallet(Request $request)
    {
        $status = '';
        $message = '';
        $data = '';
        $code = 200;

        try {
            $user = auth()->user();

            $validator = Validator::make($request->all(), [
                'wallet' => 'required',
            ], [
                'wallet.required' => 'Wajib diisi!'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    $status = 'failed',
                    $message = 'Gagal',
                    $code = 400,
                ]);
            }

            $input = $request->except(['_token', '_method']);

            $input['wallet'] = bcrypt($request->wallet);

            $user->update($input);

            if ($user) {
                return response()->json([
                    $status = 'success',
                    $message = 'Selamat, wallet berhasil diubah!',
                    $data = $user,
                    $code = 200,
                ]);
            } else {
                return response()->json([
                    $status = 'failed',
                    $message = 'Yah, wallet gagal diubah!',
                    $code = 400,
                ]);
            }
        } catch (\Exception $e) {
            $status = 'failed';
            $message = 'Gagal. ' . $e->getMessage();
            $code = 400;
        } catch (\Illuminate\Database\QueryException $e) {
            $status = 'failed';
            $message = 'Gagal. ' . $e->getMessage();
            $code = 400;
        } finally {
            return response()->json([
                'status' => $status,
                'message' => $message,
                'data' => $data,
            ], $code);
        }
    }
}
