<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'residence_id',
        'aksesibilitas_jalan_utama',
        'aksesibilitas_sekolah',
        'aksesibilitas_rumah_sakit',
        'aksesibilitas_pusat_perbelanjaan',
        'lebar_jalan',
        'kelebihan_tanah',
        'fasilitas_umum',
        'harga',
        'jaringan_listrik',
        'keamanan',
        'kenyamanan',
        'luas_tanah',
        'tipe_rumah',
        'bukan_daerah_banjir',
        'overall',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function residence()
    {
        return $this->belongsTo(Residence::class);
    }
}
