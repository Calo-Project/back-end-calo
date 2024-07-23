<?php

namespace App\Http\Controllers\Api\Web;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function getEvent()
    {
        $status             = '';
        $message            = '';
        $data               = '';
        $code               = 200;

        try {
            $data = Event::join('kategori_event', 'event.kategori_event_id', '=', 'kategori_event.id_kategori_event')
                            ->select("id_event", "event.slug", "nama_event", "deskripsi_event", "tempat", "provinsi", "kota", "harga", "detail_alamat", "link_alamat", "maks_tiket", "tiket_tersedia", "poster", "link_sosmed", "waktu_mulai", "waktu_berakhir", "tanggal", "vendor_id", "kategori_event_id", "id_kategori_event", "nama_kategori_event", "deskripsi_kategori_event")
                            ->paginate(5);
            if (count($data) != 0) {
                $status = 'success';
                $message = 'Berhasil mendapatkan data event';
            } else {
                $status = 'success';
                $message = 'Data event kosong';
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

    public function getAllEvent()
    {
        $status             = '';
        $message            = '';
        $data               = '';
        $code               = 200;

        try {
            $data = Event::join('kategori_event', 'event.kategori_event_id', '=', 'kategori_event.id_kategori_event')
                            ->select("id_event", "event.slug", "nama_event", "deskripsi_event", "tempat", "provinsi", "kota", "harga", "detail_alamat", "link_alamat", "maks_tiket", "tiket_tersedia", "poster", "link_sosmed", "waktu_mulai", "waktu_berakhir", "tanggal", "vendor_id", "kategori_event_id", "id_kategori_event", "nama_kategori_event", "deskripsi_kategori_event")
                            ->get();
            if (count($data) != 0) {
                $status = 'success';
                $message = 'Berhasil mendapatkan data event';
            } else {
                $status = 'success';
                $message = 'Data event kosong';
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

    public function getDetailEvent($slug)
    {
        $status             = '';
        $message            = '';
        $data               = '';
        $code               = 200;

        try {
            $data = Event::join('kategori_event', 'event.kategori_event_id', '=', 'kategori_event.id_kategori_event')
                            ->select("id_event", "event.slug", "nama_event", "deskripsi_event", "tempat", "provinsi", "kota", "harga", "detail_alamat", "link_alamat", "maks_tiket", "tiket_tersedia", "poster", "link_sosmed", "waktu_mulai", "waktu_berakhir", "tanggal", "vendor_id", "kategori_event_id", "id_kategori_event", "nama_kategori_event", "deskripsi_kategori_event")
                            ->where('event.slug', $slug)
                            ->first();
            if ($data->slug != "") {
                $status = 'success';
                $message = 'Berhasil mendapatkan detail event';
            } else {
                $status = 'failed';
                $message = 'Detail event tidak ada';
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

    public function getRekomendasi()
    {
        $status             = '';
        $message            = '';
        $data               = '';
        $code               = 200;

        try {
            $data = Event::join('kategori_event', 'event.kategori_event_id', '=', 'kategori_event.id_kategori_event')
                            ->select("id_event", "event.slug", "nama_event", "deskripsi_event", "tempat", "provinsi", "kota", "harga", "detail_alamat", "link_alamat", "maks_tiket", "tiket_tersedia", "poster", "link_sosmed", "waktu_mulai", "waktu_berakhir", "tanggal", "vendor_id", "kategori_event_id", "id_kategori_event", "nama_kategori_event", "deskripsi_kategori_event")
                            ->orderBy('tanggal', 'DESC')
                            ->paginate(5);
            if (count($data) != 0) {
                $status = 'success';
                $message = 'Berhasil mendapatkan data event';
            } else {
                $status = 'success';
                $message = 'Data event kosong';
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

    public function getEventByDate(Request $request)
    {
        $status             = '';
        $message            = '';
        $data               = '';
        $code               = 200;

        try {
            $data = Event::join('kategori_event', 'event.kategori_event_id', '=', 'kategori_event.id_kategori_event')
                            ->select("id_event", "event.slug", "nama_event", "deskripsi_event", "tempat", "provinsi", "kota", "harga", "detail_alamat", "link_alamat", "maks_tiket", "tiket_tersedia", "poster", "link_sosmed", "waktu_mulai", "waktu_berakhir", "tanggal", "vendor_id", "kategori_event_id", "id_kategori_event", "nama_kategori_event", "deskripsi_kategori_event")
                            ->where('tanggal', $request->tanggal)
                            ->paginate(5);
            if (count($data) != 0) {
                $status = 'success';
                $message = 'Berhasil mendapatkan data event';
            } else {
                $status = 'success';
                $message = 'Data event kosong';
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

    public function getEventByName(Request $request)
    {
        $status             = '';
        $message            = '';
        $data               = '';
        $code               = 200;

        try {
            $data = Event::join('kategori_event', 'event.kategori_event_id', '=', 'kategori_event.id_kategori_event')
                            ->select("id_event", "event.slug", "nama_event", "deskripsi_event", "tempat", "provinsi", "kota", "harga", "detail_alamat", "link_alamat", "maks_tiket", "tiket_tersedia", "poster", "link_sosmed", "waktu_mulai", "waktu_berakhir", "tanggal", "vendor_id", "kategori_event_id", "id_kategori_event", "nama_kategori_event", "deskripsi_kategori_event")
                            ->where('nama_event', $request->nama)
                            ->paginate(5);
            if (count($data) != 0) {
                $status = 'success';
                $message = 'Berhasil mendapatkan data event';
            } else {
                $status = 'success';
                $message = 'Data event kosong';
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

    public function getEventByKategori(Request $request)
    {
        $status             = '';
        $message            = '';
        $data               = '';
        $code               = 200;

        try {
            $data = Event::join('kategori_event', 'event.kategori_event_id', '=', 'kategori_event.id_kategori_event')
                            ->select("id_event", "event.slug", "nama_event", "deskripsi_event", "tempat", "provinsi", "kota", "harga", "detail_alamat", "link_alamat", "maks_tiket", "tiket_tersedia", "poster", "link_sosmed", "waktu_mulai", "waktu_berakhir", "tanggal", "vendor_id", "kategori_event_id", "id_kategori_event", "nama_kategori_event", "deskripsi_kategori_event")
                            ->where('nama_kategori_event', $request->kategori)
                            ->paginate(5);
            if (count($data) != 0) {
                $status = 'success';
                $message = 'Berhasil mendapatkan data event';
            } else {
                $status = 'success';
                $message = 'Data event kosong';
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

    public function getEventByDateKategori(Request $request)
    {
        $status             = '';
        $message            = '';
        $data               = '';
        $code               = 200;

        try {
            $data = Event::join('kategori_event', 'event.kategori_event_id', '=', 'kategori_event.id_kategori_event')
                            ->select("id_event", "event.slug", "nama_event", "deskripsi_event", "tempat", "provinsi", "kota", "harga", "detail_alamat", "link_alamat", "maks_tiket", "tiket_tersedia", "poster", "link_sosmed", "waktu_mulai", "waktu_berakhir", "tanggal", "vendor_id", "kategori_event_id", "id_kategori_event", "nama_kategori_event", "deskripsi_kategori_event")
                            ->where('nama_kategori_event', $request->kategori)
                            ->orWhere('tanggal', request()->tanggal)
                            ->paginate(5);
            if (count($data) != 0) {
                $status = 'success';
                $message = 'Berhasil mendapatkan data event';
            } else {
                $status = 'success';
                $message = 'Data event kosong';
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

