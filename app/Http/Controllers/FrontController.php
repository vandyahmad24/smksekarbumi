<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Banner;
use App\Models\Config;
use App\Models\Gallery;
use App\Models\Jurusan;
use App\Models\Kelulusan;
use App\Models\Page;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $banner = Banner::first();
        $kepala = Page::where('slug','prakata-kepala-sekolah')->first();

        // $terbaru = Article::orderBy('created_at','desc')->first();
        $berita = Article::orderBy('created_at','desc')->limit(3)->get();
        $photos = Gallery::orderBy('created_at','desc')->limit(10)->get();
     
        return view('front.index',compact('banner','kepala','berita','photos'));
    }
    public function article($slug)
    {
       $article = Article::where('slug',$slug)->first();
       if(!isset($article)){
           return view('front.notfound');
       }
       
       return view('front.article',compact('article'));
    }
    public function page($slug)
    {
       $page = Page::where('slug',$slug)->first();
       if(!isset($page)){
           return view('front.notfound');
       } 
       return view('front.page',compact('page'));
    }
    public function articleAll()
    {
       $articles = Article::orderBy('created_at','desc')->paginate(5);
       return view('front.all_article', compact('articles'));
    }
    public function photoAll()
    {
        $gallery = Gallery::orderBy('created_at')->paginate(20);
        return view('front.gallery', compact('gallery'));
    }
    public function jurusan($slug)
    {
      $jrn = Jurusan::where('slug',$slug)->first();
      return view('front.jurusan',compact('jrn'));
    }
    public function kelulusan()
    {
        $config = Config::where('title','links')->first();
        $conf_buka = Config::where('title','tgl_buka')->first();
        $now = Carbon::now();
        // echo($tgl_buka->tgl_buka);
        // die();
        return view('front.kelulusan',compact('config','conf_buka','now'));
    }
    public function cekNilai(Request $request)
    {
        $request->validate([
            'nis' => 'required|integer',
        ]);
        // dd($request->all());
        $kelulusan = Kelulusan::where('nis',$request->nis)->first();
        if(!isset($kelulusan)){
            return back()->withErrors('NIS yang anda masukan tidak terdaftar disekolah kami');
        }
        if($kelulusan->kelulusan==0){
            $nama = ucwords($kelulusan->nama);
            return redirect('kelulusan')->with('gagal', "Mohon Maaf atas nama <b>$nama</b> dengan NIS $kelulusan->NIS dinyatakan <b>TIDAK LULUS</b> ");
        }else{
            $link = Config::where('title','links')->first();
            $nama = ucwords($kelulusan->nama);
            return redirect('kelulusan')->with('lulus', "Selamat, atas nama <b>$nama</b> dengan NIS <b>$kelulusan->nis</b> dinyatakan <b>LULUS</b> <br>"); 
        }
    }
}
