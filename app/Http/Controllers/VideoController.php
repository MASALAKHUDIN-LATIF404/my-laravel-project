<?php

namespace App\Http\Controllers;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        return view('admin.video.index', [
        'videos' => video::orderBy('id', 'desc')->get()
        ]);
    }




    /*public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'image' => 'required|max:1000|mimes:jpg,jpeg,png,webp',
        ], [
            'judul.required' => 'Judul Wajib Di Isi',
            'image.required' => 'Image Wajib Di Isi',
        ]);
        
        // Simpan gambar utama ke folder 'photo'
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('public/photo', $fileName);
        
        Photo::create([
            'judul' => $request->judul,
            'image' => $fileName,
        ]);
        
        return redirect()->route('photo')->with('success', 'Data Foto berhasil disimpan');
        
    }*/



    public function store(Request $request)
    {
        $rules = [
            'judul' => 'required',
            'youtube_code' => 'required',
        ];

        $messages = [
            'judul.required' => 'judul wajib di isi',
            'youtube_code.required' => 'Code youtube wajib di isi',
        ];

        $this->validate($request, $rules, $messages);

        video::create([
            'judul' => $request->judul,
            'youtube_code' => $request->youtube_code,
        ]);

        return redirect(route('video'))->with('success','data video berhasil di simpan');
    }


    public function update(Request $request, $id)
    {
    $video = Video::find($id);

    $rules = [
        'judul' => 'required',
        'youtube_code' => 'required',
    ];

    $messages = [
        'judul.required' => 'judul wajib di isi',
        'youtube_code.required' => 'Code youtube wajib di isi',
    ];

    $this->validate($request, $rules, $messages);

    $video->update([
        'judul' => $request->judul,
        'youtube_code' => $request->youtube_code,
    ]);

    return redirect(route('video'))->with('success', 'data video berhasil di update');
    }

    public function destroy($id)
    {
        $video = Video::find($id);
        
        $video->delete();

        return redirect(route('video'))->with('success','Data berhasil di hapus');
    }
}
