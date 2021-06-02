<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Config;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function konfigurasi()
    {
        $configs = Config::all();
        $banner = Banner::first();
        return view('adminpage.konfigurasi.konfigurasi', compact('configs','banner'));
    }
    public function konfigurasiEdit($id)
    {
        $config = Config::find($id);
        return view('adminpage.konfigurasi.konfigurasi_edit', compact('config'));
    }
    public function konfigurasiPut(Request $request)
    {
        $request->validate([
            'isi'      => 'required',
        ]);
        $config = Config::find($request->id);
        if($config->title=='tgl_buka'){
            $config->isi="";
            $config->tgl_buka=$request->isi;
        }else{
            $config->isi = $request->isi;
        }
       
        $config->save();
        return redirect('/admin/konfigurasi')->with('status', 'Konfigurasi Berhasil Terupdate!');
    }
    public function profileSekolah()
    {
        return view('adminpage.profil.all');
    }
    public function profileSekolahEdit($id)
    {
        $profil = Page::find($id);
        return view('adminpage.profil.edit',compact('profil'));
    }
    public function profileSekolahPut(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'body' => 'required|string|min:100',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $profil = Page::find($request->id);
        $file = $request->file('photo');
        if(isset($file)){
            $rand = Str::random(10);
            $namefile = $rand.".".$file->getClientOriginalExtension();
            $tujuan_upload = 'images/berita';
            $file->move($tujuan_upload,$namefile);
            $image = $namefile;
        }else{
            $image=$profil->image;
        }
        $excerpt= Str::words($request->body,100);

        $profil->title=$request->title;
        $profil->body=$request->body;
        $profil->excerpt=$excerpt;
        $profil->image = $image;
        $profil->save();
        return redirect('admin/profile-sekolah')->with('status', 'Profil Berhasil diperbarui!');
    
    }
    public function profileSekolahAdd()
    {
        return view('adminpage.profil.add');
    }
    public function profileSekolahPost(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'body' => 'required|string|min:100',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

      
        $file = $request->file('photo');
        if(isset($file)){
            $rand = Str::random(10);
            $namefile = $rand.".".$file->getClientOriginalExtension();
            $tujuan_upload = 'images/berita';
            $file->move($tujuan_upload,$namefile);
            $image = $namefile;
        }else{
            $image=null;
        }
        $excerpt= Str::words($request->body,100);

        $profil = new Page();
        $profil->title=$request->title;
        $profil->body=$request->body;
        $profil->excerpt=$excerpt;
        $profil->slug= Str::slug($request->title);
        $profil->image = $image;
        $profil->category="profil";
        $profil->save();
        return redirect('admin/profile-sekolah')->with('status', 'Profil Berhasil diperbarui!');
    }
    public function profileSekolahDelete($id)
    {
        $profil = Page::find($id);
        $profil->delete();
        return redirect('admin/profile-sekolah')->with('status', 'Profil Berhasil dihapus!');
    }
    public function bannerEdit($id)
    {
        $banner = Banner::find($id);
        return view('adminpage.konfigurasi.konfigurasi_banner',compact('banner'));
    }
    public function bannerPut(Request $request)
    {
        $banner = Banner::find($request->id);
        $banner->title=$request->title;
        $banner->body=$request->body;
        $file = $request->file('photo');
        if(isset($file)){
            $rand = Str::random(10);
            $namefile = $rand.".".$file->getClientOriginalExtension();
            $tujuan_upload = 'images/slider';
            $file->move($tujuan_upload,$namefile);
            $image = $namefile;
        }else{
            $image=$banner->photo;
        }
        $banner->photo = $image;
        $banner->save();
        return redirect('/admin/konfigurasi')->with('status', 'Konfigurasi Berhasil Terupdate!');
    }
}
