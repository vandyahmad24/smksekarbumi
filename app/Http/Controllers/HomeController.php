<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Gallery;
use App\Models\Kelulusan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $artikel = Article::count();
        $galeri = Gallery::count();
        $siswa = Kelulusan::count();
        $siswa_lulus = Kelulusan::where('kelulusan',1)->count();
        $siswa_tidak_lulus = Kelulusan::where('kelulusan',0)->count();
        // dd($artikel);
        return view('adminpage.index',compact('artikel','galeri','siswa','siswa_lulus','siswa_tidak_lulus'));
    }
}
