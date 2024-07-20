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
        'tempat',
        'provinsi',
        'kota',
        'harga',
        'detail_alamat',
        'link_alamat',
        'maks_tiket',
        'tiket_tersedia',
        'poster',
        'link_sosmed',
        'waktu_mulai',
        'waktu_berakhir',
        'tanggal',
        'vendor_id',
        'kategori_event_id'
    ];
}
