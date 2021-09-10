@extends('layouts.master')
@section('css')
<style type="text/css">
    h4{
        color: #666666;
        font-size: 1rem;
    }
    h3{
        font-size: 1rem;
    }
    .btn-block{
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
    .navbar{
        border-bottom: 1px solid #d8d8d8 !important;
    }
    .about-content{
        margin-top: 25px;
    }

</style>
@endsection
@section('body')
<nav class="navbar navbar-expand shadow-sm container sticky-top bg-white">
  <a class="navbar-brand" href="javascript:history.back()">
    <img class="close-icon" src="{{ asset('images/close-icon.svg') }}" alt="" title="close">
  </a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto p-2">
      <li class="nav-item active">    
          <b class="text-saraga modal-title">
            Beri Penilaian
          </b>
      </li>
    </ul>
  </div>
</nav>
<section class="form-rating pb-4 mb-4">
  <form method="POST" action="{{ route('create-rating') }}" style="overflow-y: auto;" class="bg-light">
    @csrf
  <div class="container mt-2 bg-white">
    <div class="col-12">
      
      <div class="row">
        <b>Berikan Penilaian Anda</b>
      </div>
      <div class="form-inline row mt-2">
        <div class="form-control border rating-button" value="1">
            <img src="{{ asset('images/star.svg') }}" alt="" class="rating" title="rating">
            1
        </div>
        <div class="form-control border rating-button" value="2">
            <img src="{{ asset('images/star.svg') }}" alt="" class="rating" title="rating">
            2
        </div>
        <div class="form-control border rating-button" value="3">
            <img src="{{ asset('images/star.svg') }}" alt="" class="rating" title="rating">
            3
        </div>
        <div class="form-control border rating-button" value="4">
            <img src="{{ asset('images/star.svg') }}" alt="" class="rating" title="rating">
            4
        </div>
        <div class="form-control border rating-button" value="5" style="margin-right: 0">
            <img src="{{ asset('images/star.svg') }}" alt="" class="rating" title="rating">
            5
        </div>
      </div>
      <input type="hidden" name="rating" id="input-rating">
      <input type="hidden" name="id" id="input-id" value={{$id}}>

<!--       <div class="row mt-3">
        <b>Beri Ulasan</b>
        <textarea class="form-control" id="input-review" rows="5"></textarea>
      </div> -->

      <div class="fixed-bottom text-center container" style="margin-bottom: 20px;">
        <button type="submit" class="btn button-saraga btn-block">Kirim</button>
      </div>
      
    </div>
  </div>
  </form>
</section>
@endsection

@section('master_script')
<script type="text/javascript">
    $('.rating-button').click(function () {
      $('.rating-button').removeClass('active');
      $(this).addClass('active');
      $("#input-rating").val( $(this).attr('value') );
    }); 
</script>
@endsection