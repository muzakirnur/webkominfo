<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_tiket',
        'kategori',
        'judul',
        'pterkait',
        'prioritas',
        'status',
        'progres'
    ];
}
