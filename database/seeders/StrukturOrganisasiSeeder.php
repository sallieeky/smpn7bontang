<?php

namespace Database\Seeders;

use App\Models\StrukturOrganisasi;
use Illuminate\Database\Seeder;

class StrukturOrganisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StrukturOrganisasi::create([
            "user_id" => 1,
            "gambar" => "strukturorganisasi.jpg"
        ]);
    }
}
