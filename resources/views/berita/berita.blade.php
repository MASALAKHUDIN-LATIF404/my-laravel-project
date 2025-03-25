@extends('layouts.layouts')

@section('content')
    {{-- BERITA KEGIATAN PONDOK PESANTREN --}}
    {{-- FUNGSI style="margin-top: 100px" DALAH UNTUK MENURUNKAN KONTEN DARI NAVBAR --}}
    <section id="berita" style="margin-top: 100px" class="py-5">
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
        </div>
    </section>
    {{-- BERITA --}}
@endsection
