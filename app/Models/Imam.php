<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imam extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'username',
        'password',
    ];

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }
}
