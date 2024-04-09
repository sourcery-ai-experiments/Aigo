<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhysicalActivity extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'users_id',
        'date',
        'type',
        'distance',
        'duration',
        'avg_speed',
        'avg_steps',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
