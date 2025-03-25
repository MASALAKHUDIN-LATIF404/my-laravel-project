@extends('layouts.layouts')

@section('content')
    <section class="py-5" style="margin-top: 100px">
        <div class="container col-xl-8">


            <h4>Halaman Video Kegiatan</h4>

            <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahVideo">Tambah Video</a>


            {{-- AWAL PESAN SUKSES --}}
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Informasi</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
            @endif
            {{-- AKHIR PESAN SUKSES --}}


            <!-- AWAL UNTUK MENAMPILJAN PESAN ERROR VALIDASI -->
            @if (count($errors) > 0)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <!-- AWAL UNTUK MENAMPILJAN PESAN ERROR VALIDASI -->


            <div class="table-responsive py-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Video</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($videos as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    {{ $item->judul }}
                                </td>
                                <td>
                                    <iframe height="150" src="https://www.youtube.com/embed/{{ $item->youtube_code }}"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </td>
                                {{-- orian youtube ga bisa buat edit --}}
                                {{-- <td>
                                    <a href="#" class="btn btn-warning"
                                        data-bs-target="#editModal {{ $item->id }}" data-bs-toggle="modal">Edit</a>
                                    <form action="{{ route('photo.destroy', $item->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" onclick="alert('Apakah anda yakin akan menghapus ini ?')"
                                            class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                                {{-- orian youtube ga bisa buat edit --}}




                                {{-- YG BAWAH INI VERSI CHAT GPT WORK TOMBOL EDIT NYA --}}
                                <td>
                                    <a href="#" class="btn btn-warning" data-bs-target="#editVideo{{ $item->id }}"
                                        data-bs-toggle="modal">Edit</a>
                                    <form action="{{ route('video.destroy', $item->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onclick="return confirm('Apakah anda yakin akan menghapus ini?')"
                                            class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                                {{-- YG BAWAH INI VERSI CHAT GPT WORK TOMBOL EDIT NYA --}}
                            </tr>

                            <!-- AWAL Modal Edit Video Yaitu PopUp Yang Muncul Untuk Menu Upload UBAH Video -->
                            <div class="modal fade" id="editVideo{{ $item->id }}" tabindex="-1"
                                aria-labelledby="editVideo" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="editVideo">Modal Edit</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('video.update', $item->id) }}" method="POST">
                                                @csrf

                                                <input type="hidden" name="id_video" value="{{ $item->id }}">

                                                <div class="form-group mb-3">
                                                    <label for="">Judul</label>
                                                    <input type="text" name="judul" class="form-control"
                                                        value="{{ $item->judul }}">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">Youtube Code</label>
                                                    <input type="text" name="youtube_code" class="form-control"
                                                        value="{{ $item->youtube_code }}">
                                                </div>

                                                <button type="submit" class="btn btn-primary">Update</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- AKHIR Modal Edit video Yaitu PopUp Yang Muncul Untuk Menu Upload video -->
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- AWAL Modal Upload video Yaitu PopUp Yang Muncul Untuk Menu Upload video INI BOOTSTRAP-->
    <div class="modal fade" id="tambahVideo" tabindex="-1" aria-labelledby="tambahVideoLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tambahVideoLabel">Modal Video</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('video.store') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Judul</label>
                            <input type="text" name="judul" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Youtube Code</label>
                            <input type="text" name="youtube_code" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- AKHIR Modal Upload Foto Yaitu PopUp Yang Muncul Untuk Menu Upload Foto -->
@endsection
