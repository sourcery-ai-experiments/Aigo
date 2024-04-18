<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKonsultasi extends Model
{
    use HasFactory;
    protected $table = 'jadwal_konsultasi';
    
    protected $fillable = [
        'patient_id',
        'doctor_id',
        'tanggal',
        'jam',
        'transkrip',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
