<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusan = Jurusan::all();
        return view('adminpage.jurusan.index',compact('jurusan'));
    }
    public function add()
    {
        return view('adminpage.jurusan.add');
    }
    public function post(Request $request)
    {
        $request->validate([
            'name' => ['required','string'],
            'deskripsi' => ['required','string','min:20'],
            'singkatan' => ['required','string'],
        ]);
        $jurusan = new Jurusan;
        $jurusan->name = $request->name;
        $jurusan->singkatan=$request->singkatan;
        $jurusan->deskripsi=$request->deskripsi;
        $jurusan->slug=Str::slug($request->name);
        $jurusan->save();
        return redirect('admin/jurusan')->with('status', 'Jurusan Berhasil ditambah!');
    }
    public function edit($id)
    {
        $jurusan = Jurusan::find($id);
        return view('adminpage.jurusan.edit',compact('jurusan'));
    }
    public function put(Request $request)
    {
        $request->validate([
            'name' => ['required','string'],
            'deskripsi' => ['required','string','min:20'],
            'singkatan' => ['required','string'],
        ]);
        $jurusan = Jurusan::find($request->id);
        $jurusan->name = $request->name;
        $jurusan->singkatan=$request->singkatan;
        $jurusan->deskripsi=$request->deskripsi;
        $jurusan->slug=Str::slug($request->name);
        $jurusan->save();
        return redirect('admin/jurusan')->with('status', 'Jurusan Berhasil diupdate!');

    }
    public function delete($id)
    {
        $jurusan = Jurusan::find($id);
        $jurusan->delete();
        return redirect('admin/jurusan')->with('status', 'Jurusan Berhasil dihapus!');
    }
}

