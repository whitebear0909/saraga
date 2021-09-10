@extends('layouts.master')

@section('master_css')
<style type="text/css">
	#innerelements{
	  padding: 0.75em;
	  position:relative;
	  left:5%;
	  top: -25px;
	  background-color: white;
	  margin-right: auto;
	  margin-bottom: auto;
	  border-radius: 50%;
	  /*background-color:  var(--saraga-color);*/
	  color: white;
	}	
	.nav-link{
		color: grey;
	}
	.nav-link.active{
		color: var(--saraga-color) !important;
		font-weight: bold;
	}

	h4{
		font-size: 1rem;
		font-weight: bold;
	}

	strong{
		color: #333;
	}
</style>
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
	        	<b style="font-size: 20px;">
				    Detail Booking
	        	</b>
	  		</a>
	      </li>
	  	</ul>
	  </div>
	</div>
</nav>

<section class="border-top-1 bg-light h-100">
	<div class="container" style="padding-right: 0px; padding-left: 0px;">
	@component('payment-time', [
		'id'	=> "$data->id",
		'date'	=> date("Y-m-d H:i:s", strtotime($data->created_at. " +20 minutes")),
		'status'=> "$data->status",
		'rated' => $data->rated,
		'used'  => $data->used
	])
	@endcomponent
	</div>
	<div class="container card-footer bg-light">
		<p class="d-inline-block" style="color: #666">No. ID {{$data->id}}</p>
	</div>

	@if($data->status == "pending")
		<div class="container pt-3 pb-3" style="background-color: white;">

		@if(isset($midtrans->payment_type))
		@if($midtrans->payment_type == "bca_klikbca")
			<a class="btn btn-block button-saraga" href="https://www.klikbca.com/" target="_blank">Silahkan Ke KlikBCA Untuk Menyelesaikan Pembayaran</a>
		@elseif($midtrans->payment_type == "bca_klikpay")
			<a class="btn btn-block button-saraga" href="https://api.sandbox.veritrans.co.id/v3/bca/klikpay/redirect/{{$midtrans->transaction_id}}" target="_blank">Lanjutkan Pembayaran</a>
		@elseif($midtrans->payment_type == "gopay")
			<a class="btn btn-block button-saraga" href="{{config('app.midtrans_api_url')}}/v2/gopay/{{$midtrans->transaction_id}}/qr-code" target="_blank">Lihat QR-Code</a>
		@else
			<a class="btn btn-block button-saraga" href="{{config('app.snap_url').'/v1/transactions/'.$data->token.'/pdf'}}" target="_blank">Lihat Cara Pembayaran</a>
		@endif
		@endif
		</div>

		<div class="container pt-3 pb-3 mt-2 mb-2" style="background-color: white;">
		      <div class="col-12">
		        <p style="color: black; font-size: 1.05rem;">Total Pembayaran</p>
		        <p style="color: orange; font-size: 1.05rem; font-weight: bold;" id="grand-total-html">Rp {{number_format($data->grand_total,0)}}</p>
		      </div>
		</div>
	@endif
    <div class="container pt-3 pb-3" style="background-color: white;">
	  	<a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
	    	<div class="d-flex">
	      		<div class="d-flex mr-auto align-items-center">
	        		<h4>Detail Booking</h4>
	      		</div>
	      		<div class="d-flex ml-auto align-items-center"><span><i id="collapse-btn-detail"class="fa fa-angle-down fa-lg text-saraga" aria-hidden="true"></i></span></div>
	    	</div>
	  	</a>
	  	<div class="collapse" id="collapseExample">
	    	<hr class="my-4">
	        <div class="form-inline">
				<img src="{{$data->detail[0]->court->image->path}}" class="img-responsive inline-block" height="100px" width="100px" />
				<div class="ml-3">
					<p class="bigger-text mb-2">{{$data->detail[0]->spot->name}}</p>
					<p class="bigger-text mb-2">{{$data->detail[0]->court->name}}</p>
	                <span class="badge badge-pill badge-success p-2" style="background-color: rgb(233, 255, 236); border: 1px solid green; color: black;">Lapang Sintetis</span>
				</div>
	        </div>

	        <hr class="my-4">
	        <div class="row">
	        	<div class="col-12">
	        		<p class="mb-0">Hari dan Tanggal</p>
	        		<div class="form-inline">
		        		<p class="bigger-text">
			      			<i class="fa fa-calendar fa-lg text-saraga mr-1" aria-hidden="true"></i>
		        			<strong>{{date("D, j M Y", strtotime($data->order_date))}}</strong>
		        		</p>
		        	</div>
	        	</div>
	        	<div class="col-6">
	        		<p class="mb-0">Jam</p>
	        		<div class="form-inline">
		        		<p class="bigger-text">
			      			
			      			@foreach($data->detail as $det)
			      			<i class="fa fa-clock-o fa-lg text-saraga mr-1" aria-hidden="true"></i>
		        			<strong>{{$det->time_slot}}</strong><br>
		        			@endforeach
		        		</p>
		        	</div>
	        	</div>
	        	<div class="col-6">
	        		<p class="mb-0">Total Durasi</p>
	        		<div class="form-inline">
		        		<p class="bigger-text">
			      			<i class="fa fa-clock-o fa-lg text-saraga mr-1" aria-hidden="true"></i>
		        			<strong>3 Jam</strong>
		        		</p>
		        	</div>
	        	</div>
	        </div>
	        <hr class="my-4">
        	<h4 >Lokasi</h4>
            <div class="card">
              <div class="card-body text-left">
                <div class="row">
                <div class="mr-auto pl-3">
                  <p class=""><i class="fa fa-map-marker" aria-hidden="true"></i>{{$data->detail[0]->spot->address}}</p>
                  <a href="#" target="_blank">Get Directions</a>
                </div>
                </div>
              </div>
            </div>
		</div>
	</div>

    <div class="container pt-3 pb-3 mt-3" style="background-color: white;">
	  	<a data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
	    	<div class="d-flex">
	      		<div class="d-flex mr-auto align-items-center">
	        		<h4>Rincian Pembayaran</h4>
	      		</div>
	      		<div class="d-flex ml-auto align-items-center"><span><i id="collapse-btn-payment" class="fa fa-angle-down fa-lg text-saraga" aria-hidden="true"></i></span></div>
	    	</div>
	  	</a>
	  	<div class="collapse" id="collapseExample2">
	        <hr class="my-4">
			<div class="row">
		      <div class="col-12 clearfix">
		        <p class="float-left" style="color: black;">Tipe Pembayaran</p>
		        <p class="float-right" style="color: black;">Bank Transfer</p>
		      </div>
			</div>
			<div class="row">
		      <div class="col-12 clearfix">
		        <p class="float-left" style="color: black; font-size: 1rem;"><b>Total</b></p>
		        <p class="float-right" style="color: black; font-size: 1rem; font-weight: bold;" id="grand-total-html"><b>Rp {{number_format($data->grand_total,0)}}</b></p>
		      </div>
			</div>
		</div>
	</div>

    <div class="container pt-3 pb-3 mt-3" style="background-color: white;">
		<a href="tel:{{ env('CALL_CENTER') }}">
			<div class="d-flex">
			  <div class="d-flex">
			  	<span><i class="fa fa-question-circle fa-lg pt-1" aria-hidden="true"></i></span>
			  </div>
			  <div class="pl-3">									  	
				<p class="text-muted">Jika anda memiliki keluhan silahkan hubungi kami.</p>
			  </div>
			</div>
		</a>
	</div>

	@if($data->status == "expire" && $data->used == 1)
		@if($data->rated == 0)
	      <div class="fixed-bottom text-center container" style="margin-bottom: 20px;">
	        <a href="{{ route('rating-form', ['id' => $data->id]) }}" class="btn button-saraga btn-block">Beri Penilaian</a>
	      </div>
      	@else
	      <div class="fixed-bottom text-center container" style="margin-bottom: 20px;">
			<div class="alert alert-success mb-0">
			  <strong>Terima kasih, Anda telah memberikan penilaian.</strong>
			</div>
	      </div>
      	@endif
	@endif
</section>
@endsection

@section('master_script')
<script type="text/javascript">
	$("#collapseExample").on('shown.bs.collapse', function () {
		$("#collapse-btn-detail").removeClass("fa-angle-down");
		$("#collapse-btn-detail").addClass("fa-angle-up");
		console.log(this);
	})
	$("#collapseExample").on('hidden.bs.collapse', function () {
		$("#collapse-btn-detail").removeClass("fa-angle-up");
		$("#collapse-btn-detail").addClass("fa-angle-down");
		console.log(this);
	})

	$("#collapseExample2").on('shown.bs.collapse', function () {
		$("#collapse-btn-payment").removeClass("fa-angle-down");
		$("#collapse-btn-payment").addClass("fa-angle-up");
		console.log(this);
	})
	$("#collapseExample2").on('hidden.bs.collapse', function () {
		$("#collapse-btn-payment").removeClass("fa-angle-up");
		$("#collapse-btn-payment").addClass("fa-angle-down");
		console.log(this);
	})
</script>
@endsection