@extends('layouts.master')

@section('body')
    <section class="setting-profile pb-4 mb-4">
        <div class="container h-100">
            <div class="row align-items-center" style="height:90%">
                <div class="col-12 text-center">
                  <img src="{{asset('/images/no_message.svg')}}" class="img-fluid mb-4" alt="Cek Email Anda" style="height:15rem;">
                  <p class="img-message">Kami akan mengirimkan link verifikasi ke email anda.<br> Silahkan buka email anda untuk meng-aktifkan akun anda.</p>
                  <a href="https://mail.google.com" class="btn btn-block button-saraga" target="_blank">Buka Email</a>
                  <div class="p-4"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
