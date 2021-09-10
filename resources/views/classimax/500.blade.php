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
                    <h1 class="display-1 pt-1 pb-2">500</h1>
                    <p class="px-3 pb-2 text-dark">There might be something wrong with the server, please try again. <br>Meanwhile, you can check our other content.</p>
                    <a href="javascript:history.back()" class="btn btn-info">BACK TO HOME</a>
                    <a href="{{route('home')}}" class="btn btn-info">BACK TO HOME</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection