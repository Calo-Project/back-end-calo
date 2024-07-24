<?php

namespace App\Http\Controllers\Api\Main;

use App\Http\Controllers\Controller;
use App\Models\KategoriEvent;
use Illuminate\Http\Request;

class KategoriEventController extends Controller
{
    public function getAll()
    {
        $status             = '';
        $message            = '';
        $data               = '';
        $code               = 200;

        try {
            $data = KategoriEvent::all();
            if (count($data) != 0) {
                $status = 'success';
                $message = 'Berhasil mendapatkan data kategori event';
            } else {
                $status = 'success';
                $message = 'Data kategori event kosong';
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
