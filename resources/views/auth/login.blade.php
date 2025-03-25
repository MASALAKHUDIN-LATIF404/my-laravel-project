{{-- @extends('layouts.layouts')

@section('content')
    <section style="margin-top: 100px" class="d-flex justify-content-center">
        <div class="container py-5 d-flex justify-content-center">
            <div class="col-md-6 col-lg-4">
                <h3 class="fw-bold mb-3 text-center">Halaman Login Admin Pesantren</h3>

                <form action="/login" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="email">Masukan Email</label>
                        <input type="email" id="email" name="email" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="password">Masukan Password</label>
                        <input type="password" id="password" name="password" class="form-control">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary w-50">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection --}}





{{-- CODE YANG ATAS DALAH YANG PUNYA SAYA DAN YANG BAWAH INI ADALAH PERBAIKAN CHATGPT --}}
@extends('layouts.layouts')

@section('content')
    <section style="margin-top: 100px" class="d-flex justify-content-center">
        <div class="container py-5 d-flex justify-content-center">
            <div class="col-md-6 col-lg-4">
                <h3 class="fw-bold mb-3 text-center">Halaman Login Admin Pesantren</h3>

                {{-- Pesan sukses login (Hijau) --}}
                @if (session('success'))
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Pesan error login (Merah) --}}
                @if ($errors->has('email'))
                    <div class="alert alert-danger text-center">
                        {{ $errors->first('email') }}
                    </div>
                @endif

                {{-- Form Login --}}
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="email">Masukan Email</label>
                        <input type="email" id="email" name="email" class="form-control"
                            value="{{ old('email') }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="password">Masukan Password</label>
                        <input type="password" id="password" name="password" class="form-control">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary w-50">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection




{{-- TAMBAHAN DARI CHAT HGPT UNTUK MEMUNCUL KAN PESAN PASWORD SALAH BERWARNA MERAH --}}
@if ($errors->has('email'))
    <div style="color: red; margin-bottom: 10px;">
        {{ $errors->first('email') }}
    </div>
@endif
