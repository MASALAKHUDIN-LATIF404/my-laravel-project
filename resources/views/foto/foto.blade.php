@extends('layouts.layouts')

@section('content')
    {{-- INI AWAL FOTO KEGIATAN --}}
    <section id="foto" style="margin-top: 100px">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center mb-5">
                <div class="d-flex align-items-center"> {{-- fungsi d-flex align-items-center adalah agar garis srtip sejajar dengan huruf foto kegiatan --}}
                    <div class="stripe-putih me-2"></div> {{-- fungsi me-2 adalah untuk memberi gap antara garis strip dengan huruf foto kegiatan --}}
                    <h5 class="fw-bold text-white">Foto Kegiatan</h5>
                </div>

                <div>
                    <a href="/foto" class="btn btn-outline-white">Foto Lainnya</a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-6">
                    {{-- CODE <a class="image-link" href="{{ asset('assets/images/ziarahdongkelan-webp.webp') }}"></a> INI ADALAH UNTUK MENAMPILKAN GAMBAR POP UP UNTUK MEMANGGIL CODE MAGNIFIC DI FILE LAYOTS --}}
                    <a class="image-link" href="{{ asset('assets/images/ziarahdongkelan-webp.webp') }}">
                        <img src="{{ asset('assets/images/ziarahdongkelan-webp.webp') }}" class="img-fluid" alt="">
                    </a>
                    <p class="mb-3 text-secondary text-center">Ziarah Maqam Dongkelan</p>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <a class="image-link" href="{{ asset('assets/images/tasyakuran-kompres-webp.webp') }}">
                        <img src="{{ asset('assets/images/tasyakuran-kompres-webp.webp') }}" class="img-fluid"
                            alt="">
                    </a>
                    <p class="mb-3 text-secondary text-center">Tasyakuran Khotmil Qur'an</p>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <a class="image-link" href="{{ asset('assets/images/ziarahwali-webp.webp') }}">
                        <img src="{{ asset('assets/images/ziarahwali-webp.webp') }}" class="img-fluid" alt="">
                    </a>
                    <p class="mb-3 text-secondary text-center">Ziarah Wali Songo</p>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <a class="image-link" href="{{ asset('assets/images/fotbar-kompres.webp') }}">
                        <img src="{{ asset('assets/images/fotbar-kompres.webp') }}" class="img-fluid" alt="">
                    </a>
                    <p class="mb-3 text-secondary text-center">Masjid Gili Ketapang</p>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    {{-- CODE <a class="image-link" href="{{ asset('assets/images/ziarahdongkelan-webp.webp') }}"></a> INI ADALAH UNTUK MENAMPILKAN GAMBAR POP UP UNTUK MEMANGGIL CODE MAGNIFIC DI FILE LAYOTS --}}
                    <a class="image-link" href="{{ asset('assets/images/ziarahdongkelan-webp.webp') }}">
                        <img src="{{ asset('assets/images/ziarahdongkelan-webp.webp') }}" class="img-fluid" alt="">
                    </a>
                    <p class="mb-3 text-secondary text-center">Ziarah Maqam Dongkelan</p>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <a class="image-link" href="{{ asset('assets/images/tasyakuran-kompres-webp.webp') }}">
                        <img src="{{ asset('assets/images/tasyakuran-kompres-webp.webp') }}" class="img-fluid"
                            alt="">
                    </a>
                    <p class="mb-3 text-secondary text-center">Tasyakuran Khotmil Qur'an</p>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <a class="image-link" href="{{ asset('assets/images/ziarahwali-webp.webp') }}">
                        <img src="{{ asset('assets/images/ziarahwali-webp.webp') }}" class="img-fluid" alt="">
                    </a>
                    <p class="mb-3 text-secondary text-center">Ziarah Wali Songo</p>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <a class="image-link" href="{{ asset('assets/images/fotbar-kompres.webp') }}">
                        <img src="{{ asset('assets/images/fotbar-kompres.webp') }}" class="img-fluid" alt="">
                    </a>
                    <p class="mb-3 text-secondary text-center">Masjid Gili Ketapang</p>
                </div>
            </div>
        </div>
    </section>
    {{-- INI AKHIR FOTO KEGIATAN --}}
@endsection
