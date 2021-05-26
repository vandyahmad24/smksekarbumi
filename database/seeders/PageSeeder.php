<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $body="Bismillahirohmannirrohim
        <br>
        Assalamualaikum Warahmatullah Wabarakatuh
        <br>
        Kami mengucapkan selamat datang di Website kami Sekolah Menengah Kejuruan Negeri (SMKN) Sekar Bumi Nusantara yang saya tujukan untuk seluruh unsur pimpinan, guru, karyawan dan siswa masyarakat guna dapat mengakses seluruh informasi tentang segala profil, aktifitas/kegiatan serta fasilitas sekolah kami.
        <br>
        Kami selaku pimpinan sekolah mengucapkan terima kasih kepada tim pembuat Website ini yang telah berusaha untuk dapat lebih memperkenalkan segala perihal yang dimiliki oleh sekolah. Dan tentunya Website sekolah kami masih terdapat banyak kekurangan, oleh karena itu kepada seluruh civitas akademika dan masyarakat umum dapat memberikan saran dan kritik yang membangun demi kemajuan Website ini lebih lanjut.
        <br>
        Saya berharap Website ini dapat dijadikan sarana interaksi yang positif baik antar warga sekolah maupun masyarakat pada umumnya sehingga sehingga informasi dapat tersampaikan dengan baik. Semoga Allah SWT memberikan kekuatan bagi kita semua untuk mencerdaskan anak-anak bangsa.
        <br>
        Wassalamualikum wrwb
        <br>
        ";
        $pos=strpos($body, ' ', 400);
        $excerpt= substr($body,0,$pos );   

        $title="Prakata Kepala Sekolah";
        $slug = Str::slug($title);
        $page = new Page();
        $page->title=$title;
        $page->slug=$slug;
        $page->excerpt=$excerpt;
        $page->body=$body;
        $page->category="profil";
        $page->save();
    }
}
