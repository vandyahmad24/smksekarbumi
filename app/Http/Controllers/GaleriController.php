<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Gallery::orderBy('created_at','desc')->paginate(5);
        return view('adminpage.galeri.index',compact('galeri'));
    }
    public function add()
    {
        return view('adminpage.galeri.add');
    }
    public function post(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $file = $request->file('photo');
        if(isset($file)){
            $rand = Str::random(10);
            $namefile = $rand.".".$file->getClientOriginalExtension();
            $tujuan_upload = 'images/kegiatan';
            $file->move($tujuan_upload,$namefile);
            $image = $namefile;
        }else{
            $image=null;
        }

        $galeri = new Gallery;
        $galeri->name=$request->name;
        $galeri->photo = $image;
        $galeri->id_category=$request->id_category;
        $galeri->save();
        return redirect('admin/galeri')->with('status', 'Galeri Berhasil dibuat!');
    }
    public function edit($id)
    {
        $galeri = Gallery::find($id);
        return view('adminpage.galeri.edit',compact('galeri'));
    }
    public function put(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $galeri = Gallery::find($request->id);
        $file = $request->file('photo');
        if(isset($file)){
            $rand = Str::random(10);
            $namefile = $rand.".".$file->getClientOriginalExtension();
            $tujuan_upload = 'images/kegiatan';
            $file->move($tujuan_upload,$namefile);
            $image = $namefile;
        }else{
            $image=$galeri->photo;
        }

       
        $galeri->name=$request->name;
        $galeri->photo = $image;
        $galeri->id_category=$request->id_category;
        $galeri->save();
        return redirect('admin/galeri')->with('status', 'Galeri Berhasil dibuat!');
    }
    public function delete($id)
    {
        $galeri = Gallery::find($id);
        $galeri->delete();
        return redirect('admin/galeri')->with('status', 'Galeri Berhasil dihapus!');
    }
}
