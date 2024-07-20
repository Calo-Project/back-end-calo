<?php

namespace App\Http\Controllers\Api\Customer;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TicketCustomerController extends Controller
{
    public function trueScan($id_user)
    {
        $status             = '';
        $message            = '';
        $data               = '';
        $code               = 200;

        try {
            $data = Transaksi::where('user_id', $id_user)
                                ->where('is_scan', '1')
                                ->get();
            if (count($data) != 0) {
                $status = 'success';
                $message = 'Berhasil mendapatkan data tiket';
            } else {
                $status = 'success';
                $message = 'Data tiket kosong';
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
            ], $code);
        }
    }

    public function falseScan($id_user)
    {
        $status             = '';
        $message            = '';
        $data               = '';
        $code               = 200;

        try {
            $data = Transaksi::where('user_id', $id_user)
                                ->where('is_scan', '0')
                                ->get();
            if (count($data) != 0) {
                $status = 'success';
                $message = 'Berhasil mendapatkan data tiket';
            } else {
                $status = 'success';
                $message = 'Data tiket kosong';
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
            ], $code);
        }
    }

    public function detailTiketUser($id_transaksi)
    {
        $status             = '';
        $message            = '';
        $data               = '';
        $code               = 200;

        try {
            $data = Transaksi::join('event', 'transaksi.event_id', '=', 'event.id_event')
                                ->join('users', 'transaksi.user_id', '=', 'users.id')
                                ->where('id_transaksi', $id_transaksi)
                                ->get();
            if (count($data) != 0) {
                $status = 'success';
                $message = 'Berhasil mendapatkan data transaksi';
            } else {
                $status = 'failed';
                $message = 'Data transaksi tidak ditemukan';
                $code = 400;
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
            ], $code);
        }
    }
}
