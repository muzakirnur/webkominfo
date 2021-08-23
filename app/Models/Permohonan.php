<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_tiket',
        'user_id',
        'topik',
        'judul',
        'deskripsi',
        'lampiran',
        'status',
        'progres',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function state()
    {
        return $this->belongsTo('App\Models\State');
    }
}
