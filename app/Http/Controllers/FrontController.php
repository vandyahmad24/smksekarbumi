<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Banner;
use App\Models\Config;
use App\Models\Gallery;
use App\Models\Jurusan;
use App\Models\Kelulusan;
use App\Models\Page;
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
        return view('front.kelulusan');
    }
    public function cekNilai(Request $request)
    {
        $request->validate([
            'nisn' => 'required|integer',
        ]);

        $kelulusan = Kelulusan::where('nisn',$request->nisn)->first();
        if(!isset($kelulusan)){
            return back()->withErrors('NISN yang anda masukan tidak terdaftar disekolah kami');
        }
        if($kelulusan->kelulusan==0){
            $nama = ucwords($kelulusan->nama);
            return redirect('kelulusan')->with('gagal', "Mohon Maaf atas nama <b>$nama</b> dengan NISN $kelulusan->nisn dinyatakan <b>Tidak Lulus</b> ");
        }else{
            $link = Config::where('title','links')->first();
            $nama = ucwords($kelulusan->nama);
            return redirect('kelulusan')->with('lulus', "Selamat, atas nama <b>$nama</b> dengan NISN <b>$kelulusan->nisn</b> dinyatakan <b>Lulus</b> <br> Anda Dapat Download SKL dengan klik link berikut <a href='//$link->isi' target='_blank'>Download SKL</a> "); 
        }
    }
}