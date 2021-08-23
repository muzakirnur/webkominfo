<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

<<<<<<< HEAD
    public function permohonan()
    {
        return $this->hasMany(permohonan::class);
=======
    public function state()
    {
        return $this->hasMany('App\Models\State');
>>>>>>> 38becfa42095ffa285faa51f81a62c1e12ebd300
    }
}
