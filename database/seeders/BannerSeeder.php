<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banner = new Banner();
        $banner->title="Unggul Dalam Prestasi";
        $banner->body="berbudi pekerti luhur";
        $banner->photo="slider1.jpg";
        $banner->save();

    }
}
