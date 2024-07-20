<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table        = 'transaksi';
    protected $primaryKey   = 'id_transaksi';
    protected $fillable = [
        'slug',
        'kode_transaksi',
        'waktu_transaksi',
        'is_scan',
        'event_id',
        'user_id'
    ];
}
