<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use DOMDocument;

class BlogController extends Controller
{
    // INDEX
    public function index()
    {
        return view('admin.blog.index', [
            'artikels' => Blog::orderBy('id', 'desc')->get()
        ]);
    }

    // CREATE
    public function create()
    {
        return view('admin.blog.create');
    }

    // STORE
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'image' => 'required|max:1000|mimes:jpg,jpeg,png,webp',
            'desc'  => 'required|min:20'
        ], [
            'judul.required' => 'Judul Wajib Di Isi',
            'image.required' => 'Image Wajib Di Isi',
            'desc.required'  => 'Isi artikel minimal 20 karakter'
        ]);
        

        // Simpan gambar utama ke folder 'artikel'
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('public/artikel', $fileName);

        // Proses konten dan gambar di folder 'content-artikel'
        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');
        $contentImages = [];

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                // Generate nama unik untuk gambar konten
                $mimeType = explode('/', mime_content_type($src))[1];
                $imageName = substr(md5(uniqid()), 0, 6) . '_' . time() . '.' . $mimeType;
                
                // Simpan gambar ke folder content-artikel
                Image::make($src)
                    ->resize(1440, 720)
                    ->save(public_path("storage/content-artikel/$imageName"));

                // Update atribut src di HTML
                $img->setAttribute('src', asset("storage/content-artikel/$imageName"));
                $contentImages[] = $imageName;
            }
        }

        // Simpan ke database
        Blog::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul, '-'),
            'image' => $fileName,
            'content_images' => json_encode($contentImages),
            'desc' => $dom->saveHTML()
        ]);

        return redirect()->route('blog')->with('success', 'Data berhasil disimpan');
    }

    // EDIT
    public function edit($id)
    {
        return view('admin.blog.edit', [
            'artikel' => Blog::findOrFail($id)
        ]);
    }

    // FUNGSI UPDATE
    public function update(Request $request, $id)
    {
        $artikel = Blog::findOrFail($id);

        /*$request->validate([
            'judul' => 'required',
            'image' => $request->hasFile('image') ? 'required|max:1000|mimes:jpg,jpeg,png,webp' : '',
            'desc'  => 'required|min:20'
        ]);*/

        $request->validate([
            'judul' => 'required',
            'image' => $request->hasFile('image') ? 'required|max:1000|mimes:jpg,jpeg,png,webp' : '',
            'desc'  => 'required|min:20'
        ], [
            'judul.required' => 'Judul Wajib Di Isi',
            'image.required' => 'Image Wajib Di Isi',
            'desc.required'  => 'Isi artikel minimal 20 karakter'
        ]);

        // Update gambar utama
        if ($request->hasFile('image')) {
            // Hapus file lama
            Storage::delete("public/artikel/{$artikel->image}");
            
            // Simpan file baru
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/artikel', $fileName);
            $artikel->image = $fileName;
        }

        // Proses konten dan gambar
        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');
        $contentImages = [];

        // Hapus gambar konten lama jika ada perubahan
        if ($request->desc != $artikel->desc) {
            foreach (json_decode($artikel->content_images) as $oldImage) {
                Storage::delete("public/content-artikel/$oldImage");
            }
        }

        // Proses gambar baru
        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                // Generate nama unik
                $mimeType = explode('/', mime_content_type($src))[1];
                $imageName = substr(md5(uniqid()), 0, 6) . '_' . time() . '.' . $mimeType;

                // Simpan gambar
                Image::make($src)
                    ->resize(1440, 720)
                    ->save(public_path("storage/content-artikel/$imageName"));

                // Update atribut src
                $img->setAttribute('src', asset("storage/content-artikel/$imageName"));
                $contentImages[] = $imageName;
            }
        }

        // Update database
        $artikel->update([
            'judul' => $request->judul,
            'desc' => $dom->saveHTML(),
            'content_images' => json_encode($contentImages)
        ]);

        return redirect()->route('blog')->with('success', 'Data berhasil diupdate');
    }

    // DESTROY
    public function destroy($id)
    {
        $artikel = Blog::findOrFail($id);

        // Hapus gambar utama
        Storage::delete("public/artikel/{$artikel->image}");

        // Hapus gambar konten
        foreach (json_decode($artikel->content_images) as $contentImage) {
            Storage::delete("public/content-artikel/$contentImage");
        }

        // Hapus record
        $artikel->delete();

        return redirect()->route('blog')->with('success', 'Data berhasil dihapus');
    }
}