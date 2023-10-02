@extends('layouts.app')

@section('content')
    <div class="row">
       <div class="col-sm-6 d-flex">
        <div>
            <div class="d-flex judul p-1">
              <img src="{{ asset('assets/img/Handbag.png') }}" alt="logo" width="28px" height="28px" class="gambar">
              <h3 class="text">SIMS Web App</h3>
            </div>

            <div class="d-flex position-fixed">
                <h3 class="text2">Masuk atau buat akun
                    untuk memulai</h3>
              </div>

        <div class="form-input">
            <form action="{{ route('login.post') }}" method="POST">
                @csrf
              <div class="wrapper w-100 mb-3">
                <input type="text" name="email" class="form-control input" placeholder="masukkan email anda">
                <h5 class="icon-lock">@</h5>
              </div>
              <div class="wrapper w-100 mb-5">
                <input type="password" name="password" id="inputPassword" class="form-control input" placeholder="masukkan password anda">
                <img src="{{ asset('') }}assets/img/lock.png" alt="" class="icon-lock">
                <img src="{{ asset('') }}assets/img/view.png" alt="" class="icon-visible" style="cursor: pointer" onclick="showPassword()">
              </div>
              <button type="submit" class="btn btn-danger w-100">Masuk</button>
            </form>
          </div>
        </div>
       </div>
       <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="{{ asset('assets/img/img1.png') }}" alt="" class="w-50 vh-100" style="position:fixed">
       </div>
    </div>
@endsection
