<?php

namespace Database\Seeders;

use App\Models\Config;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $config = new Config();
        $config->title="telepon";
        $config->isi="082322587817";
        $config->save();

        $config = new Config();
        $config->title="email";
        $config->isi="smk.sbn@gmail.com";
        $config->save();
        
        $config = new Config();
        $config->title="alamat";
        $config->isi=" Jl. Plelen – Ketanggan KM 2 Ds. Sawangan Kec. Gringsing Kab. Batang";
        $config->save();

        $date = Carbon::now();
        $date->addDays(5);
        $config = new Config();
        $config->title="tgl_buka";
        $config->tgl_buka=$date;
        $config->save();

        $config = new Config();
        $config->title="links";
        $config->isi="https://drive.google.com/drive/folders/1rWyjzNfPMxTsEBXgZhser3cqYpAIXKQz?usp=sharing";
        $config->save();

       
    }
}
