<?php

namespace App\Providers;

use App\Models\Config;
use App\Models\Jurusan;
use App\Models\Page;
use Illuminate\Support\ServiceProvider;

class ConfigProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {


    // Check if the application is running in the web context
        if ($this->app->runningInConsole()) {
            return;
        }

        $email = Config::where('title','email')->first();
        view()->share('email',$email->isi);

        $telepon = Config::where('title','telepon')->first();
        view()->share('telepon',$telepon->isi);

        $alamat = Config::where('title','alamat')->first();
        view()->share('alamat',$alamat->isi);

        $jurusan = Jurusan::all();
        view()->share('jurusan',$jurusan);

        $profil = Page::where('category','profil')->orderBy('created_at','desc')->get();
        view()->share('profil',$profil);

    }
}
