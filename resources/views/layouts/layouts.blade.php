<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
    {{-- YANG ATAS ADALAH YANG STANDAR DAN YANG BAWAH ADALAH MODIFAN AGAR WEB DI TAMPILAN ANDROID TIDAK BISA DI ZOOM --}}
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">


    <!-- link rel yg bawah ini fungsi untuk menampilkan LOGO di bagian url web -->
    <link rel="shortcut icon" href="{{ asset('assets\icons\LOG_BAT.ico') }}">


    <!-- title yg bawah ini fungsi untuk menampilkan JUDUL di bagian url web -->
    <title>Pondok Pesantren Ribathul Maulid</title>


    {{-- AWAL META UNTUK MENAMPILKAN TUMBNAIL DI WHATSAPP --}}
    @if (Request::segment(1) == '')
        <meta property="og:title" content="Pondok Pesantren Ribathul Maulid" />
        <meta name="description" content="Pondok Pesantren Modern: Cendikiawan, Sinergi Ilmu Dunia Dan Ilmu Akhirat" />
        <meta property="og:url" content="https://ribathulmaulidkrapyak.com" />
        <meta property="og:description" content="Pondok Pesantren Ribathul Maulid" />
        <meta property="og:image" content="{{ asset('assets/icons/LOG_BAT.png') }}" />
        <meta property="og:type" content="article" />
        <title>Pondok Pesantren Ribathul Maulid</title>
    @elseif (Request::segment(1) == 'detail')
        <meta property="og:title" content="{{ $artikel->judul }}" />
        <meta name="description" content="{{ $artikel->judul }}" />
        <meta property="og:url" content="https://ribathulmaulidkrapyak.com/detail/{{ $artikel->slug }}" />
        <meta property="og:description" content="{{ $artikel->judul }}" />
        @if ($artikel->image)
            <meta property="og:image" content="{{ asset('storage/artikel/' . $artikel->image) }}" />
        @else
            <meta property="og:image" content="{{ asset('assets/icons/LOG_BAT.png') }}" />
        @endif
        <meta property="og:type" content="article" />
        <title>Pondok Pesantren Ribathul Maulid | {{ $artikel->judul }}</title>
    @endif
    {{-- AWAL META UNTUK MENAMPILKAN TUMBNAIL DI WHATSAPP --}}


    <!-- href & rel yg bawah ini fungsi untuk merubah seluruh font di laman web -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    {{-- AWAL ANIMASI AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- AKHIR ANIMASI AOS --}}


    <!-- Summernote CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
    <!-- Summernote CSS -->


    <!-- INI ADALAH UNTUK MEMANGGIL FILE CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- INI ADALAH UNTUK MEMANGGIL FILE CSS -->


    {{-- AWAL STYLE DI BAWAH INI ADALAH UNTUK MENGHILANGKAN LAG AKIBAT EFEK AOS DAN MENGHILANGKAN GAP SCROL KE KANAN --}}
    <style>
        html,
        body {
            max-width: 100vw;
            overflow-x: clip;
            /* Lebih baik daripada hidden untuk mencegah lag */
        }

        [data-aos] {
            position: relative;
            backface-visibility: hidden;
            /* Mencegah glitch pada animasi */
            will-change: transform, opacity;
            /* Optimasi performa animasi */
        }
    </style>
    {{-- AKHIR STYLE DI ATAS INI ADALAH UNTUK MENGHILANGKAN LAG AKIBAT EFEK AOS DAN MENGHILANGKAN GAP SCROL KE KANAN --}}

    {{-- AWAL MAGNIFIC --}}
    <link rel="stylesheet" href="{{ asset('assets/css/magnific.css') }}">
    {{-- AKHIR MAGNIFIC --}}

</head>

<body>

    {{-- NAVBAR --}}
    @include('layouts.navbar')
    {{-- NAVBAR --}}

    {{-- KONTEN --}}
    @yield('content')

    {{-- BAGIAN AWAL SECTION FOOTER --}}
    <section id="footer" class="bg-white" data-aos="zoom-out">
        <div class="container py-4">
            <footer>
                <div class="row">
                    {{-- KOLOM 1 NAVIGASI --}}
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3">Navigasi</h5>
                        <div class="d-flex">
                            <ul class="nav flex-column me-5">{{-- funsgi me-5 adalahh untuk mengatur sisi kiri margin ke kanan 5 --}}
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Berita
                                        Pondok</a>
                                </li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Kegiatan
                                        Pondok</a>
                                </li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Gallery
                                        Pondok</a>
                                </li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Kegiatan
                                        Sosial</a>
                                </li>
                            </ul>
                            <Ul class="nav flex-column">
                                <li class="nav-item mb-2">
                                    <a href="#" class="nav-link p-0 text-muted">Alumni</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="#" class="nav-link p-0 text-muted">Info PSB</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="/prestasi" class="nav-link p-0 text-muted">Prestasi</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="#" class="nav-link p-0 text-muted">Video Kegiatan</a>
                                </li>
                            </Ul>
                        </div>
                    </div>
                    {{-- AKHIR KOLOM 1 NAVIGASI --}}

                    {{-- KOLOM 2 MEDIA SOCIAL --}}
                    {{-- FUNGSI mb-3 adalah untuk margin ke bawah  --}}
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3">Follow Social Media Kami</h5>
                        <div class="d-flex mb-3">
                            <a href="" target="_blank" class="text-decoration-none text-dark">
                                <img src="{{ asset('assets/icons/ig.svg') }}" height="30" width="30"
                                    class="me-4" alt="">
                            </a>
                            <a href="" target="_blank" class="text-decoration-none text-dark">
                                <img src="{{ asset('assets/icons/facebook.svg') }}" height="30" width="30"
                                    class="me-4" alt="">
                            </a>
                            <a href="" target="_blank" class="text-decoration-none text-dark">
                                <img src="{{ asset('assets/icons/tiktok.svg') }}" height="30" width="30"
                                    class="me-4" alt="">
                            </a>
                            <a href="" target="_blank" class="text-decoration-none text-dark">
                                <img src="{{ asset('assets/icons/yotube.svg') }}" height="35" width="35"
                                    class="me-4" alt="">
                            </a>
                        </div>
                    </div>
                    {{-- AKHIR KOLOM 2 MEDIA SOCIAL --}}

                    {{-- KOLOM 3 KONTAK --}}
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="font-inter fw-bold mb-3">Kontak Kami</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">0857-8548-3423</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">maslakhudinlatif@gmail.com</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">0895-3236-02277</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#"
                                    class="nav-link p-0 text-muted">ribathulmaulidyogyakarta@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                    {{-- AKHIR KOLOM 3 KONTAK --}}

                    {{-- KOLOM 4 ALAMAT --}}
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="font-inter fw-bold mb-3">Alamat Pondok Pesantren</h5>
                        <p>Jl. Janganan No. 125, Glugo, Kel. Panggungharjo, Kec. Sewon, Kab. Bantul, DI Yogyakarta.</p>
                    </div>
                    {{-- AKHIR KOLOM 4 ALAMAT  --}}
                </div>
            </footer>
        </div>
    </section>
    {{-- BAGIAN AKHIR SECTION FOOTER --}}


    {{-- AWAL FOOTER KEDUA --}}
    <section class="bg-light border-top" data-aos="zoom-out">
        <div class="container py-4">
            <div class="d-flex justify-content-between">
                <div>
                    Pondok Pesantren Komplek Ribathul Maulid
                </div>
                <div class="d-flex">
                    <p class="me-4">Syarat & Ketentuan</p>
                    <p>
                        <a href="/kebijakan" class="text-decoration-none text-dark">Kebijakan Privacy</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- AKHIR FOOTER KEDUA --}}



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    {{-- ANIMASI AOS JAVA SCRIPT --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    {{-- ANIMASI AOS JAVA SCRIPT --}}

    {{-- AWAL jQuery 1.7.2+ or Zepto.js 1.0 --}}
    <!-- jQuery 1.9.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>



    <!-- KOMPONEN AWAL SUMMERNOTE -->
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnX1lh5ywQFktSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>

    <!-- Summernote JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>
    <!-- KOMPONEN AKHIR SUMMERNOTE -->



    <!-- Magnific Popup -->
    <script src="{{ asset('assets/js/magnific.js') }}"></script>
    {{-- AKHIR jQuery 1.7.2+ or Zepto.js 1.0 --}}



    <script type="text/javascript">
        // AWAL FUNGSI SUMMERNOTE
        $(document).ready(function() {
            $("#summernote").summernote({
                height: 200,
            });
        });
        // AWAL FUNGSI SUMMERNOTE

        const navbar = document.querySelector(".fixed-top");
        window.onscroll = () => {
            if (window.scrollY > 80) {
                navbar.classList.add("scroll-nav-active");
                navbar.classList.add("text-nav-active");
                navbar.classList.remove("navbar-dark");
            } else {
                navbar.classList.remove("scroll-nav-active");
                //navbar.classList.remove("text-nav-active");
                navbar.classList.add("navbar-dark");
            }
        };
        // AOS.init(); INI UNTUK ANIMASI AOS
        AOS.init({
            offset: 0, // Memastikan elemen dianggap masuk viewport meski tanpa scroll
            once: true,
            duration: 1000,
        });

        window.addEventListener("load", function() {
            AOS.refreshHard();
            window.dispatchEvent(new Event("scroll"));
        });
        // AKHIR AOS.init(); INI UNTUK ANIMASI AOS
        //
        // INI AWAL FUNGSI MAGNIFIC UNTUK MENAMPILKAN GAMBAR KETIKA DI CLICK ( GAMBAR POP UP )
        $(document).ready(function() {
            $('.image-link').magnificPopup({
                type: 'image',
                retina: {
                    ratio: 1,
                    replaceSrc: function(item, ratio) {
                        return item.src.replace(/\.\w+$/, function(m) {
                            return '@2x' + m;
                        });
                    }
                }
            });
        });
        // INI AKHIR FUNGSI MAGNIFIC UNTUK MENAMPILKAN GAMBAR KETIKA DI CLICK ( GAMBAR POP UP )
    </script>


</body>

</html>
{{-- KONTEN --}}
