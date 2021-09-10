@extends('layouts.master')

@section('master_css')
<style type="text/css">
	.normal-text{
		color: black;
		font-size: 0.8rem;
	}
	.bigger-text{
		color: black;
		font-size: 0.9rem;
		font-weight: bold;
	}
	.lead-text{
		font-size: 0.9rem;
		font-weight: bold;
	}
	#voucher{
		height: 43px;
	}
	#apply{
		height: 43px;
	}
	#promo-error{
		padding: 0.5rem 1rem;
	}
</style>
    <script type="text/javascript"
            src="{{ config('app.snap_url') }}/snap.js"
            data-client-key="{{ config('app.client_key') }}"></script>

@endsection

@section('body')
<nav class="navbar navbar-expand shadow-sm background-saraga sticky-top">
	<div class="container">
	  <a class="navbar-brand" href="javascript:history.back()">
	    <img src="{{ asset('images/back-icon.svg') }}" alt="" class="back-icon" title="back">
	  </a>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" style="color: white">  		
	        	<b class="lead-text">
				    Konfirmasi Booking
	        	</b>
	  		</a>
	      </li>
	  	</ul>
	  </div>
	</div>
</nav>

<section class="border-top-1">
    <div class="container mt-4">
    	<h5 class="bigger-text">Detail Booking</h5>
    	<hr class="my-4">
        <div class="form-inline">
			<img src="{{$spot->cover_image}}" class="img-responsive inline-block" height="70" width="70" />
			<div class="ml-3">
				<p class="bigger-text mb-2">{{$spot->name}}</p>
				<p class="bigger-text mb-2">{{$court->name}}</p>
                <span class="badge badge-pill badge-success p-2" style="background-color: rgb(233, 255, 236); border: 1px solid green; color: black;">{{$court->court_type->name}}</span>
			</div>
        </div>

        <hr class="my-4">
        <div class="row">
        	<div class="col-12">
        		<p class="mb-0">Hari dan Tanggal</p>
        		<div class="form-inline">
	        		<p class="bigger-text">
		      			<i class="fa fa-calendar fa-lg text-saraga mr-1" aria-hidden="true"></i>
	        			{{date("D, j M Y", strtotime($input['input_date']))}}
	        		</p>
	        	</div>
        	</div>
        	<div class="col-6">
        		<p class="mb-0">Jam</p>
        		<div class="form-inline">
	        		<p class="bigger-text">
	        			@foreach($time as $index => $t)
	        			@if($index == 0)
		      			<i class="fa fa-clock-o fa-lg text-saraga mr-1" aria-hidden="true"></i>
		      			@else
		      			<i class="fa fa-clock-o fa-lg mr-1" aria-hidden="true" style="color: white;"></i>
		      			@endif
	        			{{$t}}
	        			<br>
	        			@endforeach
	        		</p>
	        	</div>
        	</div>
        	<div class="col-6">
        		<p class="mb-0">Total Durasi</p>
        		<div class="form-inline">
	        		<p class="bigger-text">
		      			<i class="fa fa-clock-o fa-lg text-saraga mr-1" aria-hidden="true"></i>
	        			{{$input['duration']}} Jam
	        		</p>
	        	</div>
        	</div>
        </div>
        <hr class="my-4">
		<div class="row">
	      <div class="col-12 clearfix">
	        <p class="float-left" style="color: black;">Harga / Jam</p>
			<p class="float-right" style="color: black; font-weight: bold;">
				@if ($court->discount_price)
					<del class="mr-2 text-muted" style=" font-weight: normal; font-size: 0.8rem;">Rp {{number_format($court->price,0)}}</del>
					Rp {{number_format($court->discount_price,0)}}
				@else
					Rp {{number_format($court->price,0)}}
				@endif
			</p>
	      </div>
		</div>

		<h4 class="mb-2 mt-3 lead-text">Tipe Pembayaran</h4>
		<p>Full Payment</p>

		<p class="mb-2 mt-4" class="lead-text">Voucher</p>
		<div class="form-inline">
			<input type="text" class="form-control col-8 col-sm-9" name="voucher" placeholder="Punya kode voucher atau promo" id="voucher">
			<button class="btn btn-primary col-4 col-sm-3" id="apply">Apply</button>
		</div>
        <div class="alert alert-danger mt-2" id="promo-error" style="display: none;">
            <strong id="promo-error-text">Kode promo tidak bisa digunakan.</strong>
        </div>
        <div class="alert alert-success" id="promo-success" style="display: none;">
            <strong id="promo-success-text">Yay! Anda dapat menggunakan kode promo ini!</strong>
        </div>
		@php
			$price = $court->discount_price ? $court->discount_price : $court->price;
		@endphp
        <hr class="my-4">
    	<h4 class="lead-text">Rincian Pembayaran</h4>
    	<hr class="my-4">
		<div class="row">
	      <div class="col-12 clearfix">
	        <p class="float-left text-muted"   style="font-weight: normal; font-size: 0.8rem;">Harga / Jam</p>
	        <p class="float-right text-muted"  style="font-weight: normal; font-size: 0.8rem;">
				@if ($court->discount_price)
					<del class="mr-2 text-muted" style=" font-weight: normal; font-size: 0.8rem;">Rp {{number_format($court->price,0)}}</del>
					Rp {{number_format($court->discount_price,0)}}
				@else
					Rp {{number_format($court->price,0)}}
				@endif
	        </p>
	      </div>
		</div>

<!-- 		<div class="row">
	      <div class="col-12 clearfix">
	        <p class="float-left" style="color: black;">Total yang harus dibayar</p>
	        <p class="float-right" style="color: black;">
	        	Rp {{number_format($price*$input['duration'],0)}}
	        </p>
	      </div>
		</div> -->
		<div class="row">
	      <div class="col-12 clearfix">
	        <p class="float-left" style="color: black;">Durasi</p>
	        <p class="float-right" style="color: black;">
	        	{{$input['duration']}} jam
	        </p>
	      </div>
		</div>
		<div class="row" id="discount" style="display: none;">
	      <div class="col-12 clearfix">
	        <p class="float-left" style="color: black;">Discount</p>
	        <p class="float-right" style="color: black;" id="discount-html"></p>
	      </div>
		</div>
		<div class="row mt-3">
	      <div class="col-12 clearfix">
	        <div class="float-right" id="before-grand-total-div" style="display: none;">
		        <p class="text-muted" style="font-weight: normal; font-size: 0.8rem; margin-bottom: 0" id="before-grand-total-html"><del>Rp {{number_format($court->price*$input['duration'],0)}}</del></p>
		    </div>
	      </div>
	      <div class="col-12 clearfix">
	        <p class="float-left" style="color: black; font-size: 1.05rem;">Total Pembayaran</p>
	        <div class="float-right">
	        <p style="color: orange; font-size: 1.05rem; font-weight: bold;" id="grand-total-html">Rp {{number_format($price*$input['duration'],0)}}</p>
		    </div>
	      </div>
	      <div class="col-12 clearfix">
	          <p style="color: black;color: black;border: solid darkgrey 2px;padding: 3px 10px;background-color: lightgrey;margin: 0px;">
	              Pastikan anda sudah <b>mengecek pesanan anda</b> sebelum melanjutkan pembayaran. <b>Pesanan tidak dapat diganti</b> setelah anda meng-klik tombol "Buat Pesanan & Lakukan Pembayaran"
	          </p>
	      </div>
		</div>
		<hr class="my-4">
		<div class="row mt-3">
			<div class="col-12 clearfix">
				<p class="text-muted text-center" style="font-weight: normal; font-size: 0.8rem;">
					Dengan melanjutkan pemesanan, anda telah menyetujui <a href="{{route('terms')}}"><u>syarat dan
							ketentuan</u></a> dari Saraga Indonesia
				</p>
			</div>
		</div>
		<button type="button" class="btn btn-block button-saraga mb-4" onclick="select_payment()">Buat Pesanan & Lakukan Pembayaran</button>
    </div>
</section>
@endsection

@section('master_script')
<script type="text/javascript">
  $(document).ready(function(){
    $("#apply").click(function() {
		$.post("{{route('apply-coupon')}}",
		{
			_token: "{{ csrf_token() }}",
			code: $("#voucher").val()
		},
		function(data, status){
			// console.log(data);
			if(data.status=="true"){
			  	$("#promo-success").css("display", "block");
			  	$("#promo-error").css("display", "none");
			  	var strSuccess = "Yay! You got Rp. " + number_format(data.data.discount) + " off from using this promo code!";
			  	$("#promo-success-text").html(strSuccess);
			  	// console.log(data.data.discount);
			  	$("#discount").css("display", "block");
			  	$("#discount-html").html("Rp " + number_format(data.data.discount));
			  	$("#before-grand-total-div").css("display", "block");
			  	$("#grand-total-html").html("Rp " + number_format(data.data.grand_total));
			}
			else{
			  	$("#promo-success").css("display", "none");
			  	$("#promo-error").css("display", "block");
			  	$("#discount").css("display", "none");
			  	$("#grand-total-html").html("Rp {{number_format($court->price*$input['duration'],0)}}");
			}			
		});
  	});
  });	
  function create_order(result){
	$.post("{{route('booking-create')}}",
	{
		data: result
	},
	function(data, status){
		console.log(data);
	});
  };
  function select_payment(){
	$.post("{{route('booking-snap')}}",
	{
		_token: "{{ csrf_token() }}",
		voucher_code: $("#voucher").val()
	})
	.done(function(data){
		var d = JSON.parse(data);
		snap.pay(d.token, {
		  onSuccess: function(result){
		  	window.location.href = "{{route('payment-finish')}}";
		  },
		  onPending: function(result){
		  	window.location.href = "{{route('payment-pending')}}";
		  },
		  onError: function(result){
		  	console.log('error');console.log(result);
		  },
		  onClose: function(){
		  	console.log('customer closed the popup without finishing the payment');
		  	console.log("going back");
		  	window.history.go(-3);
		  }
		})
	})
    .fail(function(xhr, status, error) {
        // error handling
        window.location.href = "{{route('412')}}";
        console.log(status);
        console.log(error);
        console.log(xhr);
    });
  }
</script>
@endsection