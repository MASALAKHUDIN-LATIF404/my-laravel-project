@extends('layouts.layouts')

@section('content')
    <section class="py-5" style="margin-top: 100px">
        <div class="container col-xl-8">

            {{-- UNTUK NAVIGASI --}}
            <div class="d-flex">
                <a href="{{ route('blog') }}">Blog</a>
                <div class="mx-1"> . </div>
                <a href="">Edit Artikel</a>
            </div>

            <h4>Halaman Edit Artikel</h4>

            <form action="{{ route('blog.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-4">
                    <label for="">Masukan Judul Kegiatan</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                        value="{{ old('judul', $artikel->judul) }}">

                    @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="">Pilih Foto Kegiatan</label>
                    <input type="hidden" name="old_image" value="{{ $artikel->image }}">
                    <div>
                        {{-- CODE <img src="{{ asset('storage/artikel/' . $artikel->image) }}" class="col-lg-4" alt=""> INI ADALAH FUNGSI UNTUK MENAMPILKAN PREVIEW FOTO DI ATAS TABEL PILIH FILE --}}
                        <img src="{{ asset('storage/artikel/' . $artikel->image) }}" height="250" class="py-3"
                            alt="">
                    </div>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="">Artikel Berita</label>
                    <textarea name="desc" id="summernote">
                        {!! $artikel->desc !!}
                    </textarea>

                    @error('desc')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </section>
@endsection
