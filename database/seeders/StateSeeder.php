<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\State;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\State::create([
            'name'    => 'Dikirim',
        ]);
        \App\Models\State::create([
            'name'    => 'Diterima',
        ]);
        \App\Models\State::create([
            'name'    => 'Diproses',
        ]);
        \App\Models\State::create([
            'name'    => 'Ditolak',
        ]);
        \App\Models\State::create([
            'name'    => 'Selesai',
        ]);
    }
}
