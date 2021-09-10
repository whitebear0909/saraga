@extends('layouts.master')

@section('body')
<section class="section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center mx-auto">
                <div class="404-img">
                    <img src="{{ asset('images/saraga-logo.png') }}" class="img-fluid" alt="">
                </div>
                <div class="404-content">
                    <h1 class="display-1 pt-1 pb-2">Oops,</h1>
                    <p class="px-3 pb-2 text-dark">Lapangan yang anda pesan sudah habis! :( <br>But there is a lot more for you!</p>
                    <a href="javascript:history.go(-2)" class="btn btn-info">SELECT OTHER TIME</a>
                    <h1>OR</h1>
                    <a href="{{route('field-search')}}" class="btn btn-info">FIND NEW PLACE</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection