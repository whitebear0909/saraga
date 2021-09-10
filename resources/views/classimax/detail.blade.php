@extends('layouts.app')

@section('css')
<style type="text/css">
  a{
    font-size: 0.8rem;
  }
  #innerelements{
    padding: 0.75em;
    position:relative;
    left:80%;
    top: -30px;
    background-color: white;
    margin-right: auto;
    margin-bottom: auto;
    border-radius: 50%;
  } 
  .scrolling-wrapper {
    overflow-x: scroll;
    overflow-y: hidden;
    white-space: nowrap;
  }

  .time-button{
    cursor:hand;
    border-radius: 0.2rem;
  }
  .time-button.disabled{
    border-color: rgb(209,209,209);
    background-color: rgb(209,209,209);
  }

  .date-button{
    border-color: var(--saraga-color) !important;
    cursor:hand;
    height: 3.5rem;
    padding-top: 10px;
    border-radius: 0.2rem;
  }
  .date-button.disabled{
    border-color: rgb(209,209,209);
    background-color: rgb(209,209,209);
  }
  .date-button:hover, {
      outline: none !important;
      box-shadow: 0 0 10px #719ECE;   
  }

  .date-button.active, .time-button.active{
      background: var(--saraga-color);
      color: white;
  }
  .date-button.active>p, .time-button.active>p{
      color: white;
  }
  .col-3{
    padding-right: 8;
    padding-left: 8;
  }

  @media (max-width: 992px) {
     .container {
        width: 100%;
     }
  }
</style>
@endsection

@section('content')
<nav class="navbar navbar-expand shadow-sm background-saraga sticky-top">
  <div class="container">
    <a class="navbar-brand" href="javascript:history.back()">
      <img src="{{ asset('images/back-icon.svg') }}" alt="" class="back-icon" title="back">
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" style="color: white">     
            <b>
              Lokasi
            </b>
          </a>
        </li>
      </ul>
    </div>
    <a href="#">
      <li class="nav-item form-inline my-2 mr-1">
        <img src="{{ asset('images/share-icon.svg') }}" alt="" width="20" height="20" title="back" onclick="link_copy()">
      </li>
    </a>
  </div>
</nav>

<section class="border-top-1 bg-light">
  <div class="container" style="background-color: white;">
    <div class="row">
      <div class="card border-0 rounded-0 col-12">
              @component('img-card', [
                'id' => $detail->spot->id,
                'first_image' => $detail->spot->cover_image,
                'gallery' => isset($detail->gallery) ? $detail->gallery : []
              ])
              @endcomponent
        <div id="innerelements" class="shadow">
          <a style="cursor: hand">
            @if (isset($detail->spot->is_favorite))
              @if ($detail->spot->is_favorite == true)
              <i class="fav-button fa fa-heart fa-2x" id="{{$detail->spot->id}}" value="true" aria-hidden="true" style="color: rgb(226,42,42); font-size: 1.75rem;"></i>
              @else
              <i class="fav-button fa fa-heart-o fa-2x" id="{{$detail->spot->id}}" value="false" aria-hidden="true" style="color: rgb(226,42,42); font-size: 1.75rem;"></i>
              @endif
            @else
            <i class="fav-button fa fa-heart-o fa-2x" id="{{$detail->spot->id}}" value="true" aria-hidden="true" style="color: rgb(226,42,42); font-size: 1.75rem;"></i>
            @endif
          </a>
        </div>
        
        <div class="card-body" style="margin-top: -50px;">
          <h5 class="card-title text-truncate">{{$detail->spot->name}}</h5>
          <p class="card-text">Mulai - <b>Rp {{number_format($detail->spot->price,0)}} /Jam</b></p>
          
          <p class="card-text">
            @for ($i=0; $i<$detail->spot->rating; $i++)
              <i class="fa fa-star" aria-hidden="true"></i>
            @endfor
          </p>
          <hr class="my-4">
            <ul class="list-inline">
              <li class="list-inline-item"><h5 style="color: green; font-weight: bold;">Buka</h5></li>
              <li class="list-inline-item"><h5>{{date('h:i', strtotime($detail->spot->open_at))}} - {{date('h:i', strtotime($detail->spot->close_at))}}</h5></li>
            </ul>
          <hr class="my-4">
            <div class="row justify-content-md-center">
              <div class="col-12 col-md-8">
                <a class="btn btn-lg btn-success button-call btn-block" href="tel:{{$detail->spot->telephone}}" style="padding: 10px; 0px;">
                  <i class="fa fa-phone"></i>&ensp;Call Venue&ensp;—&ensp;{{$detail->spot->telephone}}
                </a>
              </div>
            </div>
          <hr class="my-4">
        </div>

      </div>
    </div>

    <!-- Text Fasilitas dan Lokasi -->
    <div class="row">
      <div class="col-12">
        <h5 style="font-weight: bold;">Lokasi</h5>
          <div class="card">
            <div class="card-body text-left">
              <div class="row">
                <div class="marker col-1 mt-1" style="padding-right: 0;">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                </div>
                <div class="col-11 pl-2">
                  <div class="address">
                    <span>{{$detail->spot->address}}</span>
                  </div>
                  <div class="direction mt-3">
                  <a href="{{$detail->spot->gmaps_url}}" target="_blank"style="color: rgb(42,119,189);">Get Directions</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <hr class="my-4">
        <h5 style="font-weight: bold;">Fasilitas</h5>
        @if(isset($detail->facilities))
          <!-- Display facilities on Small Screen -->
          <div class="row d-flex d-md-none">
            <?php $facility_cnt = 0;?>
            @foreach($detail->facilities as $facility)
              <?php $facility_cnt++; ?>
              @if($facility_cnt <= 4)
              <div class="card-body text-center col-3 facility-icon" style="padding: 0; padding-top: 10px;">
              @else
              <div class="card-body text-center col-3 facility-icon" hidden style="padding: 0; padding-top: 10px; padding-right: 18px;">
              @endif
                  <img  class="icon pb-2" 
                        src="{{ asset('images/facilities/'.$facility->icon) }}" 
                        height="40px" 
                        width="40px"
                        style="border:1px solid rgba(0,0,0,.125); padding:5px;">
                  <p>{{$facility->name}}</p>
              </div>
            @endforeach
            @if(count($detail->facilities) > 4)
            <div class="col-12"> 
              <a href="#">Show All</a>
            </div>
            @endif
          </div>

          <!-- Display facilities on Large Screen -->
          <div class="row d-none d-md-flex">
            <?php $facility_cnt = 0;?>
            @foreach($detail->facilities as $facility)
              <?php $facility_cnt++; ?>
              @if($facility_cnt <= 6)
              <div class="card-body text-center col-2 facility-icon" style="padding: 0; padding-top: 10px;">
              @else
              <div class="card-body text-center col-2 facility-icon" hidden style="padding: 0; padding-top: 10px; padding-right: 18px;">
              @endif
                  <img  class="icon pb-2" 
                        src="{{ asset('images/facilities/'.$facility->icon) }}" 
                        height="60px" 
                        width="60px"
                        style="border:1px solid rgba(0,0,0,.125); padding:5px;">
                  <p>{{$facility->name}}</p>
              </div>
            @endforeach
            @if(count($detail->facilities) > 6)
            <div class="col-12"> 
              <a id="show-all" style="text-decoration: underline; color: rgb(42,119,189); cursor:pointer">Show All</a>
            </div>
            @endif
          </div>      
        @endif
<!--           <div class="scrolling-wrapper">
            <ul class="list-inline">
              @if(isset($detail->facilities))
              @foreach($detail->facilities as $facility)
              <li class="list-inline-item">
                <div class="card-body text-center" style="padding: 0; padding-top: 10px; padding-right: 18px;">
                    <img  class="icon pb-2" 
                          src="{{ asset('images/facilities/'.$facility->icon) }}" 
                          height="40px" 
                          width="40px"
                          style="border:1px solid rgba(0,0,0,.125); padding:5px;">
                    <p>{{$facility->name}}</p>
                </div>
              </li>
              @endforeach
              @endif
            </ul>
          </div> -->
        <hr class="my-4">
        <h5 style="font-weight: bold;">Deskripsi</h5>
          <p>{!! nl2br(e($detail->spot->description)) !!}</p>
      </div>
    </div>

    <!-- Button Pilih Waktu -->
    @if(isset($detail->timeslots))
    <div class="row mt-4">
      <div class="col-12">
        <h5 style="font-weight: bold;">Pilih Tanggal Booking</h5>
        <div class="alert alert-warning" id="input-date-error" hidden>
            <strong>Pilih tanggal booking yang tersedia.</strong>
        </div>

        <div class="row">
          @for($i=0; $i<3; $i++)
            <div class="text-center col-3 col-sm-2 p-2">
              <div class="form-control date-button" value='{{date("Y-m-d", time() + (86400*$i))}}'>
                <p style="font-size: 0.65rem; font-weight: bold;">
                  {{date("D", time() + (86400*$i))}}
                  <br>
                  {{date("d M", time() + (86400*$i))}}
                </p>
              </div>
            </div>
          @endfor
          @for($i=3; $i<5; $i++)
            <div class="text-center d-none d-sm-block col-sm-2 p-2">
              <div class="form-control date-button" value='{{date("Y-m-d", time() + (86400*$i))}}'>
                <p style="font-size: 0.65rem; font-weight: bold;">
                  {{date("D", time() + (86400*$i))}}
                  <br>
                  {{date("d M", time() + (86400*$i))}}
                </p>
              </div>
            </div>
          @endfor
          <div class="text-center col-3 col-sm-2 p-2 flatpickr">
            <div class="form-control pt-2 date-button" id="button-date-booking">
              <i class="fa fa-calendar fa-3x" aria-hidden="true" style="font-size: 1.75rem;"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 mt-4" id="input-time-div">
        <h5 style="font-weight: bold;">Pilih Jam Booking</h5>
        <div class="alert alert-warning" id="input-time-error" hidden>
            <strong>Pilih waktu yang tersedia.</strong>
        </div>

        <div class="row">
        <?php $i=0 ?>
        @foreach($detail->timeslots as $ts)
          <?php $i++ ?>
          <div class="text-center col-3 pt-1 pb-2">
            <div class="border pt-3 time-button" id="time-button-{{$i}}" index={{$i}} time="{{$ts->start_at}}" ts="{{$ts->time_slot}}" tsid="{{$ts->start_at}}">
              <p style="font-size: 0.6rem; font-weight: bold;">{{$ts->time_slot}}</p>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
    @else
        <div class="alert alert-warning" id="input-time-error">
          <strong>Lapangan sedang tutup, mohon pilih <a href="{{route('field-search')}}">lapangan lainnya</a>, atau <a href="tel:{{$detail->spot->telephone}}">telepon lapangan</a> untuk informasi lebih lanjut.</strong>
        </div>
    @endif

    @if(isset($detail->timeslots))
    <!-- Text Durasi Booking -->
    <div class="row mt-4 mb-2">
      <div class="col-12 clearfix">
        <h5 class="float-left"><i class="fa fa-clock-o fa-lg" aria-hidden="true" style="font-size: 1.5rem;"></i> Durasi Booking</h5>
        <h5 class="float-right" style="color: orange;" id="duration">-</h5>
      </div>
    </div>

    <!-- Button Pilih Lapangan -->
    <div class="mt-3 mb-4">
      <form method="GET" action="{{ route('select-court', $detail->spot->slug) }}" onsubmit="return checkform()">
        <input type="hidden" name="input-date" id="input-date" value="{{session('input-date')}}">
        <input type="hidden" name="input-time" id="input-time" value="">
        <input type="hidden" name="input-duration" id="input-duration" value="">
        @csrf
        <button type="submit" class="btn btn-block button-saraga">Pilih Lapangan</button>
      </form>
    </div>
    @else
    <div class="mt-3 mb-4">
      <button type="submit" class="btn btn-block button-saraga" disabled style="color: black; pointer-events: none;">Lapangan belum dapat dipesan lewat Saraga atau sedang tutup</button>
    </div>
    @endif
    <div class="row mb-5 pb-3"></div>
  </div>
</section>
@endsection

@section('script')
<script type="text/javascript">
  var date_flag=false;
  var flatpickr = $(".flatpickr").flatpickr({
      altFormat: "Y-m-d",
      dateFormat: "Y-m-d",
      minDate: "today",
      maxDate: new Date().fp_incr(14),
      disableMobile: "true",
      onChange : function(selectedDates, dateStr, instance) {
        $("#input-date").val(dateStr);
      },
      onClose: function(selectedDates, dateStr, instance){
        console.log(selectedDates);
        if(typeof dateStr == 'undefined'){
          $('#button-date-booking').removeClass('active');
        }
        else{
          $("#input-date").val(dateStr);
        }
        date_flag=false;
        if(dateStr == "{{date('Y-m-d')}}"){
          $('.time-button').each(function(i, obj) {
            if("{{date('H:i:s')}}" >= $(obj).attr('time')){
              $(obj).removeClass('active')
              $(obj).addClass('disabled');
            }
          });
        }
      }
  });
  var selectedTime = [];

  $('.date-button').click(function () {
    if($(this).hasClass("disabled")){
      return false;
    }
    $('.date-button').removeClass('active');
    $(this).addClass('active');
    $("#input-date").val($(this).attr('value'));

    if($(this).attr('value') == "{{date('Y-m-d')}}"){
      $('.time-button').each(function(i, obj) {
        if("{{ date('H:i:s', strtotime ('+1 hour')) }}" >= $(obj).attr('time')){
          $(obj).removeClass('active')
          $(obj).addClass('disabled');
        }
      });
    }
    else{
      $('.time-button').removeClass('disabled');
    }
    fill_duration();
  });

  $('.time-button').click(function () {
    if(!$(this).hasClass("disabled")){
      if ($(this).hasClass("active")) {
        $(this).removeClass("active");
      }
      else{
        $(this).addClass("active");
      }
      fill_duration();
      // $('.time-button').removeClass('active');
      // if(start_index == -1){
      //   start_index = parseInt($(this).attr('index'));
      //   $(this).addClass('active');
      //   $("#input-time").val($(this).attr('time'));
      // }
      // else{
      //   end_index = parseInt($(this).attr('index'));
      //   if(end_index > start_index){
      //     for (var i = start_index; i <= end_index; i++) {
      //       var id_name = "#time-button-" + i;
      //       $(id_name).addClass('active');
      //     }
      //     $("#duration").html((end_index-start_index) + " Jam");
      //     $("#input-duration").val((end_index-start_index));
      //     start_index = -1;
      //   }
      //   else{
      //     start_index = parseInt($(this).attr('index'));
      //   }
      //   $(this).addClass('active');
      // }
    }
  });

  $('#show-all').click(function(){
    $(".facility-icon").removeAttr("hidden");
    $("#show-all").attr("hidden", true);
  })

  $('#button-date-booking').click(function () {
    if(date_flag==false){
      flatpickr.open();
      date_flag=true;
    }
    else{
      flatpickr.close();
      date_flag=false;
    }
  });

  $(document).ready(function () {
    autofill();
  }); 

  function check_data(){
    var count_index = 0;
    $(".time-button.active").each(function(){
      console.log($(this).attr('index'));
    });
  }

  function fill_duration(){
      var duration = 0;
      $('.time-button').each(function(i, obj) {
        if ($(obj).hasClass("active")) {
          duration++;
        }
      });

      $("#duration").html(duration + " Jam");
      $("#input-duration").val((duration));
  }

  function autofill(){
    $(".date-button").each(function(){
      if($(this).attr('value') == "{{session('input-date')}}"){
        $(this).click();
      }
    });
  }

  function checkform(){
    selectedTime = [];
    $('.time-button').each(function(i, obj) {
      if($(obj).hasClass('active')){
        selectedTime.push($(obj).attr('ts'));
      }
    });
    $("#input-time").val(JSON.stringify(selectedTime));
    // console.log($("#input-time").val());
    if($("#input-date").val() == ""){
      $("#input-date-error").removeAttr( "hidden" );
      return false;
    }
    if(selectedTime.length == 0){
      $("#input-time-error").removeAttr( "hidden" );
      return false;
    }
    if($("#input-duration").val() == ""){
      $("#input-time-error").removeAttr( "hidden" );
      return false;
    }
    return true;
  }
  function link_copy(){
      var input = document.createElement('input');
      input.setAttribute('value', window.location.href);
      document.body.appendChild(input);
      input.select();
      var result = document.execCommand('copy');
      document.body.removeChild(input);
      tempAlert("Link Tersalin!",1000);
      return result;
  }
</script>
@endsection