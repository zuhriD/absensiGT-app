<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        'imam_id',
        'masjid_id',
        'activities_id',
        'keterangan',
        'bukti',
        'date',
        'status',
    ];

    public function imam()
    {
        return $this->belongsTo(Imam::class);
    }

    public function masjid()
    {
        return $this->belongsTo(Masjid::class);
    }

    public function activities()
    {
        return $this->belongsTo(Activities::class);
    }
}
