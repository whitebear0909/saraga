@extends('layouts.master')

@section('master_css')
  @yield('css')
  <style type="text/css">
    .active{
        color: var(--saraga-color);
    }
    .active img.off-icon{
        display: none;
    }
    .active img.on-icon{
        display: inline;
    }
    .body-wrapper{
        background-color: #f8f9fa!important;
        width: 100%;
    }
  </style>
@endsection

@section('title')
  @yield('title')
@endsection

@section('body')

<body class="body-wrapper">

    <!--============================
    =            Navigation        =
    =============================-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar fixed-bottom navbar-expand bg-light navigation">
                      <div class="container text-center">
                        <div class="col-xs-5ths navbot"><a class="ic_home" href="{{ route('home') }}">
                            <img class="off-icon" src="{{ asset('images/navbar/ic_home_off.svg') }}" alt="" width="20" height="20" title="Home" style="display: inline;">
                            <img class="on-icon" src="{{ asset('images/navbar/ic_home_on.svg') }}" alt="" width="20" height="20" title="Home" style="display: none;">
                            <br>Home</a>
                        </div>
                        <div class="col-xs-5ths navbot"><a class="ic_search" href="{{route('navbar-form-search')}}">
                            <!--  data-toggle="modal" data-target="#myModal" -->
                            <img class="off-icon" src="{{ asset('images/navbar/ic_search_off.svg') }}" alt="" width="20" height="20" title="Search" style="display: inline;">
                            <!-- <img class="on-icon" src="{{ asset('images/navbar/ic_search_off.svg') }}" alt="" width="20" height="20" title="Search" style="display: none;"> -->
                            <i class="fa fa-search fa-lg on-icon" style="display: none"></i>
                            <br>Search</a>
                        </div>
                        <div class="col-xs-5ths navbot"><a href="{{ route('booking-list') }}">
                            <img class="off-icon" src="{{ asset('images/navbar/ic_booking_off.svg') }}" alt="" width="20" height="20" title="Booking" style="display: inline;">
                            <img class="on-icon" src="{{ asset('images/navbar/ic_booking_on.svg') }}" alt="" width="20" height="20" title="Booking" style="display: none;">
                            <br>Booking</a>
                        </div>
                        <div class="col-xs-5ths navbot" style="color: rgb(216,216,216);"><a href="{{ url('favorit') }}">
                            <i class="fa fa-heart fa-lg off-icon" style="color: rgb(216,216,216); display: inline-block"></i>
                            <i class="fa fa-heart fa-lg on-icon" style="display: none"></i>
                            <!-- <img class="on-icon" src="{{ asset('images/navbar/ic_favorit_on.png') }}" alt="" width="20" height="20" title="Akun" style="display: none;"> -->
                            <br>Favorit</a>
                        </div>
                        <div class="col-xs-5ths navbot"><a href="{{ url('profile') }}">
                            <img class="off-icon" src="{{ asset('images/navbar/ic_akun_off.svg') }}" alt="" width="20" height="20" title="Akun" style="display: inline;">
                            <img class="on-icon" src="{{ asset('images/navbar/ic_akun_on.svg') }}" alt="" width="20" height="20" title="Akun" style="display: none;">
                            <br>Akun</a>
                        </div>

                      </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    <!--============================
    =            Content            =
    =============================-->
    @yield('content')

</body>
@endsection


@section('master_script')
  @yield('script')
  <script type="text/javascript">

    setNavigation();
    function setNavigation() {
        var path = window.location;
        var pathname = path.origin + path.pathname;

        if(path.href == "{{url('/').'/'}}"){
            var a = $(".ic_home");
            a.addClass('active');
            a.find('.off-icon').toggle();
            a.find('.on-icon').toggle();
        }
        else if(pathname == "{{route('field-search')}}"){
            var a = $(".ic_search");
            a.addClass('active');
            a.find('.off-icon').toggle();
            a.find('.on-icon').toggle();
        }
        else{
            $(".navbot a").each(function () {
                var href = $(this).attr('href');
                
                if (pathname == href) {
                    var a = $(this).closest('a');
                    a.addClass('active');
                    a.find('.off-icon').toggle();
                    a.find('.on-icon').toggle();
                }
            });
        }
    }
  </script>
@endsection
