<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Tambahkan ini
use App\Models\Blog; // Pastikan model diimport
use App\Models\Photo;
use App\Models\Video;

/* KARYA CHAT GPT
/*class AppController extends Controller
{
    public function index()
    {
        $artikels = Blog::orderBy('id', 'desc')->get(); // Ambil data dari database
        return view('welcome', compact('artikels')); // Kirim ke view
    }
}*/
/* KARYA CHAT GPT*/





class AppController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'artikels' => Blog::orderBy('id','desc')->limit(3)->get(),
            'photos' => Photo::orderBy('id','desc')->limit(4)->get(),
            'videos' => Video::orderBy('id','desc')->limit(3)->get(),
        ]);
    }

    public function berita()
    {
        return view('berita.berita', [
            'artikels' => Blog::orderBy('id','desc')->get()
        ]);
    }

    public function detail($slug)
    {
        $artikel = Blog::where('slug', $slug)->first();
        return view('berita.detail', [
            'artikel' => $artikel
        ]);
    }
}