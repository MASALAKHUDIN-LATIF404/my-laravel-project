<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Photo;
use Illuminate\Http\Request;
use Str;

class PhotoController extends Controller
{
    public function index()
    {
        return view('admin.photo.index', [
        'photos' => Photo::orderBy('id', 'desc')->get()
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
            'image' => 'required|max:1000|mimes:jpg,jpeg,png,webp',
        ];

        $messages = [
            'judul.required' => 'judul wajib di isi',
            'image.required' => 'Image wajib di isi',
        ];

        $this->validate($request, $rules, $messages);

        // IMAGE
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('public/photo', $fileName);

        Photo::create([
            'judul' => $request->judul,
            'image' => $fileName,
        ]);

        return redirect(route('photo'))->with('success','data foto berhasil di simpan');
    }


    public function update(Request $request, $id)
    {
        $photo = Photo::find($id);

        # JIK ADA IMAGE BARU
        if ($request->hasFile('image')) {
            $fileCheck = 'required|max:1000|mimes:jpg,jpeg,png,webp';
        } else {
            $fileCheck = '';
        }

        $rules = [
            'judul' => 'required',
            'image' => $fileCheck,
        ];

        $messages = [
            'judul.required' => 'Judul wajib di isi',
            'image.required' => 'Image wajib di isi',
        ];

        $this->validate($request, $rules, $messages);

        // CEK JIK ADA IMAGE BARU
        if ($request->hasFile('image')) {
            if (\File::exists('storage/photo/' . $photo->image)) {
                \File::delete('storage/photo/' . $request->old_image);
            }
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/photo', $fileName);
        }

        if ($request->hasFile('image')) {
            $checkFileName = $fileName;
        } else {
            $checkFileName = $request->old_image;
        }

        $photo->update([
            'judul' => $request->judul,
            'image' => $checkFileName,
        ]);

        return redirect(route('photo'))->with('succes','data foto berhasil di upddate');
    }

    public function destroy($id)
    {
        $photo = Photo::find($id);
        if (\File::exists('storage/photo/' . $photo->image)) {
            \File::delete('storage/photo/' . $photo->image);
        }

        $photo->delete();

        return redirect(route('photo'))->with('success','Data berhasil di hapus');
    }
}
