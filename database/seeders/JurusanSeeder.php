<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new = new Jurusan();
        $new->name = "Teknik Komputer dan Jaringan";
        $new->singkatan="TKJ";
        $new->slug="teknik-komputer-jaringan";
        $new->save();

        $new = new Jurusan();
        $new->name = "Teknik Kendaraan Ringan Otomotif";
        $new->singkatan="TKR";
        $new->slug="teknik-kendaraan-ringan";
        $new->save();

        $new = new Jurusan();
        $new->name = "Teknik dan Bisnis Sepeda Motor";
        $new->slug="teknik-bisnis-sepeda-motor";
        $new->singkatan="TBSM";
        $new->save();
    }
}
