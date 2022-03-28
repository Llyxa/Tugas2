<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SpotifySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spotifies')->insert([
            'judul' => 'Apaya',
            'penyanyi' => 'Siapa ya',
            'lirik' => 'banyak'
        ]);
    }
}
