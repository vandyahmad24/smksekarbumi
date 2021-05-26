<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('created_at','desc')->paginate(5);
        return view('adminpage.article.index',compact('articles'));
    }
    public function add()
    {
        return view('adminpage.article.add');
    }
    public function post(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required|string',
            'body' => 'required|string|min:100',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        // $profil = Article::find($request->id);
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
      
        $excerpt= Str::words($request->body,100); //will show first 10 words
        $profil = new Article;
        $profil->title=$request->title;
        $profil->body=$request->body;
        $profil->excerpt=$excerpt;
        $profil->image = $image;
        $profil->slug = Str::slug($request->title);
        $profil->id_category=$request->id_category;
        $profil->save();
        return redirect('admin/article')->with('status', 'Article Berhasil dibuat!');
    }
    public function edit($id)
    {
       $article = Article::find($id);
       return view('adminpage.article.edit',compact('article'));
    }
    public function put(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'body' => 'required|string|min:100',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $profil = Article::find($request->id);
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
      
        $excerpt= Str::words($request->body,100); //will show first 10 words
        // $profil = new Article;
        $profil->title=$request->title;
        $profil->body=$request->body;
        $profil->excerpt=$excerpt;
        $profil->image = $image;
        $profil->slug = Str::slug($request->title);
        $profil->id_category=$request->id_category;
        $profil->save();
        return redirect('admin/article')->with('status', 'Article Berhasil diperbarui!');
    }
    public function delete($id)
    {
       $article = Article::find($id);
       $article->delete();
       return redirect('admin/article')->with('status', 'Article Berhasil dihapus!');
    }
}
