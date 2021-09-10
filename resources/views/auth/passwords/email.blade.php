@extends('layouts.master')

@section('body')

@if (session('status'))
    <section class="setting-profile pb-4 mb-4">
        <div class="container h-100">
            <div class="row align-items-center" style="height:90%">
                <div class="col-12 text-center">
                  <img src="{{asset('/images/no_message.svg')}}" class="img-fluid" alt="Cek Email Anda" style="height:15rem;">
                  <p class="img-message">Buka email anda untuk penggantian password baru</p>
                  <form method="GET" action="{{route('home')}}">
                    @csrf
                    <button type="submit" class="btn btn-block button-saraga">Kembali Ke Home</button>
                  </form>
                  <div class="p-4"></div>
                </div>
            </div>
        </div>
    </section>
@else


<nav class="navbar navbar-expand shadow-sm container sticky-top bg-white">
  <a class="navbar-brand" href="{{route('home')}}">
    <img class="back-icon back-icon-black" src="{{ asset('images/back-icon-black.svg') }}" alt="" title="back">
  </a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto p-2">
      <li class="nav-item active">    
          <b class="text-saraga modal-title">
          Lupa Password
          </b>
      </li>
    </ul>
  </div>
</nav>
<section class="border-top-1 bg-light">
    <div class="container" style="height: 100%;">
        <form method="POST" action="{{route('password.email')}}">
        @csrf
        <div class="form-row pt-3">
          <div class="form-group col-12">
            <p class="pb-2">Kami akan mengirimkan email penggantian password baru</p>
            <label class="has-float-label">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" required autocomplete="email" autofocus="">
              <span>Email</span>

            </label>
            @error('email')
                <div class="alert alert-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
            <div class="container fixed-bottom mb-3">
              <button type="submit" class="btn btn-block button-saraga text-center">
                  Kirim
              </button>
            </div>

          </div>

        </div>
    </div>
</section>
@endif

@endsection
