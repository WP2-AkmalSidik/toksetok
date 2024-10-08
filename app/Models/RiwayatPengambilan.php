<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPengambilan extends Model
{
    use HasFactory;

    protected $fillable = [
        'barang_id',
        'jumlah',
        'nama_penerima',
        'jenis_pengeluaran',
        'keterangan',
    ];
    /**
     * Get the barang that owns the riwayat pengambilan.
     */
    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}