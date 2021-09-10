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
                    <h1 class="display-1 pt-1 pb-2">404</h1>
                    <p class="px-3 pb-2 text-dark">Oops, something went wrong, we can't find the page that you are looking for :( <br>But there is a lot more for you!</p>
                    <a href="javascript:history.back()" class="btn btn-info">GO BACK</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection