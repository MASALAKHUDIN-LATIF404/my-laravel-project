{{-- INI P[ROGRAM ORI YANG DI YOUTUBE --}}

{{-- @extends('layouts.layouts')

@section('content')
    <section style="margin-top: 100px">
        <div class="container col-xxl-8 py-5">
            <h3 class="fw-bold mb-3">halaman Dashboard Admin</h3>
        </div>
    </section>
@endsection --}}


{{-- INI PROGRAM DARI CHAT GPT --}}
@extends('layouts.layouts')

@section('content')
    <section style="margin-top: 100px">
        <div class="container py-5">
            {{-- FUNGSI CODE <div style="padding-left: 150px;"> ADALAH UNTUK MENGGESER JUDUL AGAR LEBIH MASUK KE ARAH DALAM KANAN --}}
            <div>
                <h3 class="fw-bold mb-3">Halaman Dashboard Admin</h3>
                <p>Selamat Datang Di Halaman Dashboard Admin</p>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card shadow-sm rounded-3 border-0">
                            <img src="{{ asset('assets/images/baground-blog.webp') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Blog Artikel</h5>
                                <p class="card-text">Atur Dan Kelola Artikel Kegiatan Pesantren.</p>
                                <a href="{{ route('blog') }}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card shadow-sm rounded-3 border-0">
                            <img src="{{ asset('assets/images/bg-kegitan.webp') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Foto Kegiatan</h5>
                                <p class="card-text">Atur Dan Kelola Foto Kegiatan Pesantren.</p>
                                <a href="{{ route('photo') }}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card shadow-sm rounded-3 border-0">
                            <img src="{{ asset('assets/images/bg-kegitan.webp') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Video Kegiatan</h5>
                                <p class="card-text">Atur Dan Kelola Video Kegiatan Pesantren.</p>
                                <a href="{{ route('video') }}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
{{-- INI PROGRAM DARI CHAT GPT --}}


{{-- INI VERSI YANG JUDUL DAN ISI RATA TENGAH --}}

{{-- @extends('layouts.layouts')

@section('content')
    <section style="margin-top: 100px">
        <div class="container py-5">
            {{-- FUNGSI CODE <div class="row justify-content-center"> ADALAH UNTUK MENGGESER JUDUL AGAR RATA TENGAH --}}
{{-- <div class="row justify-content-center">
                <div class="col-xxl-8 text-center">
                    <h3 class="fw-bold mb-3">Halaman Dashboard Admin</h3>
                    <p>Selamat Datang Di Halaman Dashboard Admin</p>

                    <div class="row">
                        <div class="col-lg-4">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
{{-- INI VERSI YANG JUDL DAN ISI RATA TENGAH --}}
