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
        'state_id',
        'topik',
        'judul',
        'deskripsi',
        'lampiran',
        'progres',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

<<<<<<< HEAD
    public function status()
    {
        return $this->belongsTo(State::class);
=======
    public function state()
    {
        return $this->belongsTo('App\Models\State');
>>>>>>> 38becfa42095ffa285faa51f81a62c1e12ebd300
    }
}
