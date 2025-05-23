{{-- NAVBAR --}}
<nav class="navbar navbar-expand-lg py-3 fixed-top {{ Request::segment(1) == '' ? '' : 'bg-white shadow' }}">
    <div class="container">
        <a class="navbar-brand" href="/">
            <!-- img src yg bawah ini fungsi untuk menampilkan logo utama web di bagian kiri -->
            <img src="{{ asset('assets/icons/LOG_BAT.png') }}" heigh="70" width="70" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Prestasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Galery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Kontak</a>
                </li>

            </ul>
            <div class="d-flex">
                <!-- button class yg bawah ini fungsi untuk membuat tombol register di sebelah atas kanan -->
                @auth
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-dark">Logout</button>
                    </form>
                @else
                    <button class="btn btn-danger">Register</button>
                @endauth
            </div>
        </div>
    </div>
</nav>
{{-- NAVBAR --}}
