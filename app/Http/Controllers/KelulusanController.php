<?php

namespace App\Http\Controllers;

use App\Models\Kelulusan;
use Illuminate\Http\Request;

class KelulusanController extends Controller
{
    public function index(Request $request)
    {
       $kelulusan = Kelulusan::all();
       return view('adminpage.kelulusan.index',compact('kelulusan'));
       

    }
    public function add()
    {
        return view('adminpage.kelulusan.add');
    }
    public function post(Request $request)
    {
        // dd($request->all())
        $request->validate([
            'nama' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'orang_tua'=>'required|string',
            'nis'=> 'required|integer',
            'nisn'=> 'required|integer',
            'id_jurusan'=> 'required|integer',
            'tahun_lulus'=>'required|integer',
            'kelulusan'=>'required'
        ]);
      
        $data = $request->all();
        Kelulusan::create($data);
        return redirect('admin/kelulusan')->with('status', 'Siswa Berhasil dibuat!');
        


    }
    public function edit($id)
    {
        $kelulusan = Kelulusan::find($id);
        return view('adminpage.kelulusan.edit',compact('kelulusan'));

    }
    public function put(Request $request)
    {
        $data = $request->all();
        $kelulusan = Kelulusan::find($request->id);
        $kelulusan->update($data);
        return redirect('admin/kelulusan')->with('status', 'Siswa Berhasil diupdate!');
    }
    public function delete($id)
    {
        $kelulusan = Kelulusan::find($id);
        $kelulusan->delete();
        return redirect('admin/kelulusan')->with('status', 'Siswa Berhasil dihapus!');
    }
}
