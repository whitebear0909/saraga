@extends('layouts.app')
@section('css')
<style type="text/css">
    h4{
        color: #666666;
        font-size: 1rem;
    }
    h3{
        color: #003f78;
        font-size: 1rem;
    }
    .call-button{
        border-radius: 0.3rem;
        padding-top: 9;
        padding-bottom: 9;
        margin-bottom: 5px;
        margin-top: 5px;
        font-size: 0.9rem;
        text-align: left;
    }
    .icon{
        margin-right: 15px;
        width: 22px;
        height: 22px;
    }
    .btn-google{
        border: 1px solid #f14336;
    }
    .btn-whatsapp{
        border: 1px solid #2cb742;
    }
    .navbar{
        border-bottom: 1px solid #d8d8d8 !important;
    }
    p{
        line-height: 30px;
    }
</style>
@endsection
@section('content')
<nav class="navbar navbar-expand shadow-sm container sticky-top bg-white">
  <a class="navbar-brand" href="javascript:history.back()">
    <img class="back-icon back-icon-black" src="{{ asset('images/back-icon-black.svg') }}" alt="" title="back">
  </a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto p-2">
      <li class="nav-item active">    
          <b class="text-saraga modal-title">
          Bantuan
          </b>
      </li>
    </ul>
  </div>
</nav>
<section class="setting-profile pb-4 mb-4">
    <div class="container bg-white pt-4" style="min-height: 69%">
            <div class="help-content">
                @if(isset(session('auth_data')->name))
                <h4 class="mt-2">Hallo, {{session('auth_data')->name}}</h4>
                @endif
                <h3 class="mb-2">Ada yang bisa kami bantu ?</h3>
                <p class="mt-3 text-justify">Untuk pertanyaan umum seputar Saraga, cara booking, pembayaran, promosi, dan pembatalan dapat dilihat di halaman FAQ</p>
                <a class="btn btn-block button-saraga" href="{{ route('faq') }}">Cek FAQ</a>
                <br>
                <br>
                <hr>
                <br>
                <h5>Customer Service & Pengajuan Kerja Sama :</h5>
                    <a href="mailto:contact@saraga.id" 
                    <span class="btn btn-block call-button btn-google">
                    <img src="https://saraga.id//images/gmail.svg" class="icon" title="gmail">contact@saraga.id
                    </span>
                    </a>
                <a href="https://wa.me/628119339891" target="_blank"><span class="btn btn-block call-button btn-whatsapp">
                    <img src="https://saraga.id//images/whatsapp.svg" class="icon" title="whatsapp">08119339891
                    </span>
                </a>
                <br>
                <br>
                <br>
                <h5>Career :</h5>
                <a href="mailto:career@saraga.id"><span class="btn btn-block call-button btn-google">
                    <img src="https://saraga.id//images/gmail.svg" class="icon" title="gmail">career@saraga.id
                    </span>
                </a>
            </div>
    </div>
</section>
@component('classimax.footer')
@endcomponent
@endsection
