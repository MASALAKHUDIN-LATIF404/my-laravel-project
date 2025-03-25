@extends('layouts.layouts')

@section('content')
    <section id="hero" class="px-0">
        <div class="container text-center text-white">
            <div class="hero-title" data-aos="fade-up">
                {{-- fungsi code <br> adalah untuk menurunkan text agar menurun ke bawah --}}
                <div class="hero-text">Selamat Datang <br> Di Komplek Ribathul Maulid <br> Yayasan Ummu Sa'adah
                    Yogyakarta</div>
                {{-- fungsi code <h4> adalah untuk meratakan text agar sejajar ke samping sesuai judul diatasnya, jika tidak mau sejajar gunakan <p> --}}
                <h4>Pondok Pesantren Modern: Cendekiawan, Sinergi Ilmu Dunia dan Ilmu Akhirat</h4>
            </div>
        </div>
    </section>

    {{-- fungsi dari code style="margin-top: -150px"> ini dalah untuk menaikkan tulisan Pendidikan Berkualitas agar lebih mengatas arah beranda teks selamat datang --}}
    <section id="program" style="margin-top: -45px">
        {{-- FUNGSI col-xxl-9 ADALAH AGAR KOLOM MENU YANG LOGO MERAPAT KE TENGAH --}}
        <div class="container col-xxl-9">
            <div class="row">
                {{-- untuk membuat code seperti ini = <div class="col-lg-3"></div> cukup gunakan perintah .col-lg-3 sesuaikan aja isi classnya --}}
                {{-- FUNGSI col-md-6 col ADALAH AGAR KOLOM MENURUN SEJAJAR 2 KEBAWAH DAN FUNGSI mb-2 ADALAH UNTUK MEMISAHKAN ( GAP ) ANTAR KOLOM --}}
                <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                    {{-- fungsi code bg-white rounded-3 p-3 d-flex align-items-cente adalah untuk memberikan kesdan teks yang di dalam kolom pendidikan berkualitas tidak terlalu mepet ke pinggir agar lebih ketengah --}}
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            {{-- INI ASLINYA = <h5>Pendidikan <br> Berkualitas</h5> KALAU INGIN TEKS NYA AGAK TEBAL, GUNAKAN <P>Pendidikan <br> Berkualitas</P> AGAR LEBIH TIPIS --}}
                            <p>Pendidikan <br> Berkualitas</p>
                        </div>
                        {{-- img src di bawah ini di gunakan untuk memanggil gambar logo yang ada di dalam kolom pemdidikan berkualitas dan height="55" width="55" ini adalah untuk mengatur besaran logonya dan fungsi shadow adalah untuk mengambangkan kolomnya --}}
                        {{-- fungsi justify-content-between adalah untuk meratan icon gambar ke arah kiri --}}
                        <img src="{{ asset('assets/icons/ic-book.png') }}" height="55" width="55" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                    {{-- fungsi code bg-white rounded-3 p-3 d-flex align-items-cente adalah untuk memberikan kesdan teks yang di dalam kolom pendidikan berkualitas tidak terlalu mepet ke pinggir agar lebih ketengah --}}
                    {{-- fungsi justify-content-between adalah untuk meratan icon gambar ke arah kiri --}}
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <p>Pendidikan <br> Berakhlak</p>
                        </div>
                        {{-- img src di bawah ini di gunakan untuk memanggil gambar logo yang ada di dalam kolom pemdidikan berkualitas dan height="55" width="55" ini adalah untuk mengatur besaran logonya dan fungsi shadow adalah untuk mengambangkan kolomnya --}}
                        {{-- fungsi justify-content-between adalah untuk meratan icon gambar ke arah kiri --}}
                        <img src="{{ asset('assets/icons/ic-globe.png') }}" height="55" width="55" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                    {{-- fungsi code bg-white rounded-3 p-3 d-flex align-items-cente adalah untuk memberikan kesdan teks yang di dalam kolom pendidikan berkualitas tidak terlalu mepet ke pinggir agar lebih ketengah --}}
                    {{-- fungsi justify-content-between adalah untuk meratan icon gambar ke arah kiri --}}
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <p>Pendidikan <br> Muamalah</p>
                        </div>
                        {{-- img src di bawah ini di gunakan untuk memanggil gambar logo yang ada di dalam kolom pemdidikan berkualitas dan height="55" width="55" ini adalah untuk mengatur besaran logonya dan fungsi shadow adalah untuk mengambangkan kolomnya --}}
                        {{-- fungsi justify-content-between adalah untuk meratan icon gambar ke arah kiri --}}
                        <img src="{{ asset('assets/icons/ic-neraca.png') }}" height="55" width="55" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                    {{-- fungsi code bg-white rounded-3 p-3 d-flex align-items-cente adalah untuk memberikan kesdan teks yang di dalam kolom pendidikan berkualitas tidak terlalu mepet ke pinggir agar lebih ketengah --}}
                    {{-- fungsi justify-content-between adalah untuk meratan icon gambar ke arah kiri --}}
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <p>Pendidikan <br> Teknologi</p>
                        </div>
                        {{-- img src di bawah ini di gunakan untuk memanggil gambar logo yang ada di dalam kolom pemdidikan berkualitas dan height="55" width="55" ini adalah untuk mengatur besaran logonya dan fungsi shadow adalah untuk mengambangkan kolomnya --}}
                        <img src="{{ asset('assets/icons/ic-komputer.png') }}" height="55" width="55" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- BERITA KEGIATAN PONDOK PESANTREN --}}
    <section id="berita" class="py-5">
        {{-- fungsi py-5 adalah untuk jarak antara text Berita Kegiatan Pondok Pesantren dengan menu di atasnya --}}
        <div class="container">

            <div class="header-berita text-center">
                {{-- fungsi fw-bold agar text menjadi tebal --}}
                <h2 class="fw-bold">Berita Kegiatan Pondok Pesantren</h2>
            </div>

            {{-- fungsi py-5 adalah untuk jarak antara text Berita Kegiatan Pondok Pesantren dengan menu di atasnya --}}
            <div class="row py-5" data-aos="flip-up">
                @foreach ($artikels as $item)
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('storage/artikel/' . $item->image) }}" class="img-fluid mb-3" alt="">
                            <div class="conten-berita">
                                {{-- <p class="mb-3 text-secondary">{{ $item->created_at }}</p> --}}
                                <p class="mb-3 text-secondary">{{ date('d-m-Y H:i', strtotime($item->created_at)) }}</p>
                                <h4 class="fw-bold mb-3">{{ $item->judul }}</h4>
                                <p class="mb-3 text-secondary">#Pesantren Modern</p>
                                <a href="/detail/{{ $item->slug }}"
                                    class="text-decoration-none text-danger">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="footer-berita text-center">
                <a href="/berita" class="btn btn-outline-danger">Berita Lainnya</a>
            </div>
        </div>
    </section>
    {{-- BERITA --}}


    {{-- JOIN --}}
    {{-- fungsi py-5 adalah untuk mengatur renggang jarak antar section menu berita --}}
    <section id="join" class="py-5" data-aos="flip-down">
        <div class="container py-5">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="d-flex align-items-center mb-3">
                        {{-- funggsi stripe me-2 adallah untuk mengatur jarak logo merah dengan teks daftar santri --}}
                        <div class="stripe me-2"></div>
                        <h5>Daftar Santri</h5>
                    </div>
                    <h1 class="fw-bold mb-2">Gabung Bersama Kami, Mewujudkan Generasi Rabbani</h1>
                    <p class="mb-3">
                        Komplek Ribathul Maulid merupakan pondok pesantren dari keluarga Pondok Pesantren
                        Al-Munawwir, Krapyak Yogyakarta dengan meluluskan santri yang telah banyak menghafal Al-Qur'an
                        dan banyak yang telah menjadi Kiyai maupun Ustadz terkemuka yang mendakwahkan ilmunya di seluruh
                        pelosok Nusantara
                    </p>
                    {{-- fungsi code danger adalah untuk memunculkan warna merah ketika cursor di arahkan ke tombol --}}
                    <button class="btn btn-outline-danger">Register</button>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/Group 3.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- JOIN --}}

    {{-- VIDIO --}}
    <section id="video" class="py-5" data-aos="zoom-in">
        <div class="container col-xxl-6 py-5">
            <div class="video-wrapper">
                {{-- ini awal url video yt --}}
                <iframe src="https://www.youtube.com/embed/0VHW0FNBkJM?si=M-9iUykHn523DbW4" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
                {{-- ini akhir url video yt --}}
            </div>
        </div>
    </section>
    {{-- VIDIO --}}

    {{-- INI ADALAH AWAL BAGIAN VIDEO YOUTUBE LAINNYA --}}
    {{-- fungsi dari code py-5 adalah untuk mengatur jarak atas bawah antar section menu berita --}}
    <section id="video_youtube" class="py-5" data-aos="zoom-in">
        <div class="container py-5">
            <div class="header-berita text-center">
                <h2 class="fw-bold">Video Kegiatan Pondok Pesantren</h2>
            </div>

            <div class="row py-5">
                @foreach ($videos as $item)
                    <div class="col-lg-4">
                        {{-- ini awal url video yt --}}
                        {{-- fungsi dari width="100%" adalah untuk mengatur panjang kesamping tampilan video dan height="215" adallah untuk mengatur lebar atas bawah tampilan video --}}
                        <iframe width="100%" height="215" src="https://www.youtube.com/embed/{{ $item->youtube_code }}"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        {{-- ini akhir url video yt --}}
                    </div>
                @endforeach

            </div>

            {{-- ini adalah program, untuk fungsi tombol video lainnya --}}
            <div class="footer-berita text-center">
                <a href="" class="btn btn-outline-danger">Video Lainnya</a>
            </div>
        </div>
    </section>
    {{-- INI ADALAH AKHIR BAGIAN VIDEO YOUTUBE LAINNYA --}}


    {{-- INI AWAL FOTO KEGIATAN --}}
    <section id="foto" class="section-foto parallax">
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
                @foreach ($photos as $photo)
                    <div class="col-lg-3 col-md-6 col-6">
                        {{-- CODE <a class="image-link" href="{{ asset('assets/images/ziarahdongkelan-webp.webp') }}"></a> INI ADALAH UNTUK MENAMPILKAN GAMBAR POP UP UNTUK MEMANGGIL CODE MAGNIFIC DI FILE LAYOTS --}}
                        <a class="image-link" href="{{ asset('storage/photo/' . $photo->image) }}">
                            <img src="{{ asset('storage/photo/' . $photo->image) }}" class="img-fluid" alt="">
                        </a>
                        <p>{{ $photo->judul }}</p>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    {{-- INI AKHIR FOTO KEGIATAN --}}



    {{-- INI AWAL SECTION FASILITAS --}}
    <section id="fasilitas" class="py-5" data-aos="zoom-in-up">
        <div class="container py-5">
            <div class="text-center">
                <h3 class="fw-bold">Fasilitas Pesantren</h3>
            </div>

            <img src="{{ asset('assets/images/Fasilitas-webp.webp') }}" class="img-fluid py-5" alt="">

            <div class="text-center">
                <a href="" class="btn btn-outline-danger">Fasilitas Lainnya</a>
            </div>
        </div>
    </section>
    {{-- INI AKHIR SECTION FASILITAS --}}
@endsection
