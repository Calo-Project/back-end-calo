<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table        = 'event';
    protected $primaryKey   = 'id_event';
    protected $fillable = [
        'slug',
        'nama_event',
        'deskripsi_event',
        'nama_tempat',
        'provinsi',
        'kota_kabupaten',
        'kecamatan',
        'kelurahan',
        'detail_alamat',
        'link_alamat',
        'poster',
        'link_instagram',
        'link_website',
        'status_event',
        'vendor_id',
        'kategori_event_id'
    ];
}
