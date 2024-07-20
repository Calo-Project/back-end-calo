<?php

namespace App\Http\Controllers\Api\Partner;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class EventController extends Controller
{
    public function index()
    {
        $status             = '';
        $message            = '';
        $data               = '';
        $code               = 200;

        try {
            $data = Event::all();
            if (count($data) != 0)
            {
                $status = 'success';
                $message = 'Berhasil mendapatkan data event';
            }
            else {
                $status = 'success';
                $message = 'Data event kosong';
            }
        }
        catch (\Exception $e) {
            $status         = 'failed';
            $message        = 'Gagal. ' . $e->getMessage();
            $code           = 400;
        }
        catch (\Illuminate\Database\QueryException $e) {
            $status         = 'failed';
            $message        = 'Gagal. ' . $e->getMessage();
            $code           = 400;
        }
        finally {
            return response()->json([
                'status'    => $status,
                'message'   => $message,
                'data'      => $data,
            ], $code);
        }
    }

    public function create(Request $request)
    {
        $status             = '';
        $message            = '';
        $data               = '';
        $code               = 200;

        $date = date('H-i-s');
        $random = Str::random(5);

        try
        {
            $validator = Validator::make($request->all(),[
                'nama_event' => 'required',
                'nama_tempat' => 'required',
                'provinsi' => 'required',
                'kota_kabupaten' => 'required',
                'poster' => 'required|file|mimes:jpeg,jpg,png|max:2048',
                'vendor_id' => 'required',
                'kategori_event_id' => 'required',
            ]);

            if ($validator->fails()) {
                $status     = 'failed';
                $message    = 'Validasi salah';
                $data       = $validator->errors();
                $code       = 422;
            }
            else{
                $namafile = $date.$random.$request->file('poster')->getClientOriginalName();
                $request->file('poster')->move('img/event/', $namafile);
                $slug = strtolower($request->nama_event);
                $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);
                $slug = preg_replace('/[\s-]+/', '-', $slug);
                $slug = trim($slug, '-');


                $data = Event::create([
                    'slug' => $slug,
                    'nama_event' => $request->nama_event,
                    'deskripsi_event' => $request->deskripsi_event,
                    'nama_tempat' => $request->nama_tempat,
                    'provinsi' => $request->provinsi,
                    'kota_kabupaten' => $request->kota_kabupaten,
                    'kecamatan' => $request->kecamatan,
                    'kelurahan' => $request->kelurahan,
                    'detail_alamat' => $request->detail_alamat,
                    'link_alamat' => $request->link_alamat,
                    'poster' => '/img/event/'.$namafile,
                    'link_instagram' => $request->link_instagram,
                    'link_website' => $request->link_website,
                    'vendor_id' => $request->vendor_id,
                    'kategori_event_id' => $request->kategori_event_id
                ]);

                $status     = 'success';
                $message    = 'berhasil menambahkan data event';
            }
        }
        catch (\Exception $e)
        {
            $status         = 'failed';
            $message        = 'Gagal. ' . $e->getMessage();
            $code           = 400;
        }
        catch(\Illuminate\Database\QueryException $e)
        {
            $status         = 'failed';
            $message        = 'Gagal. '. $e->getMessage();
            $code           = 400;
        }
        finally
        {
            return response()->json([
                'status'    => $status,
                'message'   => $message,
                'data'      => $data,
            ], $code);
        }

    }

    public function update(Request $request)
    {
        $status             = '';
        $message            = '';
        $data               = '';
        $code               = 200;

        $date = date('H-i-s');
        $random = Str::random(5);

        try
        {
            if ($request->file('poster'))
            {
                $validator = Validator::make($request->all(),[
                    'id_event' => 'required',
                    'nama_event' => 'required',
                    'nama_tempat' => 'required',
                    'provinsi' => 'required',
                    'kota_kabupaten' => 'required',
                    'poster' => 'required|file|mimes:jpeg,jpg,png|max:2048',
                    'vendor_id' => 'required',
                    'kategori_event_id' => 'required',
                ]);
            }
            else {
                $validator = Validator::make($request->all(),[
                    'id_event' => 'required',
                    'nama_event' => 'required',
                    'nama_tempat' => 'required',
                    'provinsi' => 'required',
                    'kota_kabupaten' => 'required',
                    'vendor_id' => 'required',
                    'kategori_event_id' => 'required',
                ]);
            }

            if ($validator->fails()) {
                $status     = 'failed';
                $message    = 'Validasi salah';
                $data       = $validator->errors();
                $code       = 422;
            }
            else{
                $slug = strtolower($request->nama_event);
                $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);
                $slug = preg_replace('/[\s-]+/', '-', $slug);
                $slug = trim($slug, '-');

                if ($request->file('poster')){
                    $namafile = $date.$random.$request->file('poster')->getClientOriginalName();
                    $request->file('poster')->move('img/event/', $namafile);
                    $data = Event::where('id_event', $request->id_event)->update([
                        'slug' => $slug,
                        'nama_event' => $request->nama_event,
                        'deskripsi_event' => $request->deskripsi_event,
                        'nama_tempat' => $request->nama_tempat,
                        'provinsi' => $request->provinsi,
                        'kota_kabupaten' => $request->kota_kabupaten,
                        'kecamatan' => $request->kecamatan,
                        'kelurahan' => $request->kelurahan,
                        'detail_alamat' => $request->detail_alamat,
                        'link_alamat' => $request->link_alamat,
                        'poster' => '/img/event/'.$namafile,
                        'link_instagram' => $request->link_instagram,
                        'link_website' => $request->link_website,
                        'vendor_id' => $request->vendor_id,
                        'kategori_event_id' => $request->kategori_event_id
                    ]);
                }
                else {
                    $data = Event::where('id_event', $request->id_event)->update([
                        'slug' => $slug,
                        'nama_event' => $request->nama_event,
                        'deskripsi_event' => $request->deskripsi_event,
                        'nama_tempat' => $request->nama_tempat,
                        'provinsi' => $request->provinsi,
                        'kota_kabupaten' => $request->kota_kabupaten,
                        'kecamatan' => $request->kecamatan,
                        'kelurahan' => $request->kelurahan,
                        'detail_alamat' => $request->detail_alamat,
                        'link_alamat' => $request->link_alamat,
                        'link_instagram' => $request->link_instagram,
                        'link_website' => $request->link_website,
                        'vendor_id' => $request->vendor_id,
                        'kategori_event_id' => $request->kategori_event_id
                    ]);
                }

                $status     = 'success';
                $message    = 'berhasil mengubah data event';
            }
        }
        catch (\Exception $e)
        {
            $status         = 'failed';
            $message        = 'Gagal. ' . $e->getMessage();
            $code           = 400;
        }
        catch(\Illuminate\Database\QueryException $e)
        {
            $status         = 'failed';
            $message        = 'Gagal. '. $e->getMessage();
            $code           = 400;
        }
        finally
        {
            return response()->json([
                'status'    => $status,
                'message'   => $message,
                'data'      => $data,
            ], $code);
        }

    }
}
