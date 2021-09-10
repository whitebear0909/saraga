@extends('layouts.app')
@section('css')
<style type="text/css">
	#filter-modal .modal-body{
		min-height: 0 !important
	}
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

	.nav-tabs .nav-link{
		border: 0;
	}
	.nav-tabs .nav-link.active{
		border-bottom: 2px solid var(--saraga-color);
	}
	.nav-link{
		font-size: 0.85rem;
	}
	.no-padding{
		padding-left: 0;
		padding-right: 0;
		margin-bottom: 0;
	}
	.form-group{
		margin-bottom: 5;
	}
  .modal {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    overflow: hidden;
  }

  .modal-dialog {
    position: fixed;
    margin: 0;
    width: 100%;
    height: 100%;
    padding: 0;
  }
  .modal-content {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    border: 2px solid #3c7dcf;
    border-radius: 0;
    box-shadow: none;
  }

  .modal-body {
    min-height: 80%;
  }
  .modal-footer {
       position:fixed;
       top:auto;
       right:0;
       left:0;
       bottom:0;    
  }
  .icon{
  	width: 20;
  	height: 20;
  }
  .modal .icon{
  	margin-right: 10;
  }
  .modal .form-control{
  	padding-top: 0;
  	padding-bottom: 0;
  	font-size: 0.9rem;
  	border: 0px;

  }
</style>
@endsection

@section('content')
<!-- Filter Modal -->
<div class="modal" id="filter-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
        <nav class="navbar navbar-expand shadow-sm sticky-top">
            <div class="container">
              <a class="navbar-brand" href="#" data-dismiss="modal">
                <img src="{{ asset('images/close-icon.svg') }}" alt="" class="close-icon" title="back">
              </a>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto p-2">
                  <li class="nav-item active">      
                        <b class="text-saraga">
                            Urutkan & Filter
                        </b>
                  </li>
                </ul>
			      <a class="nav-item form-inline my-2" href="{{route('booking-list')}}" style="color: var(--blue)">
			      	Reset
			      </a>
              </div>
            </div>
        </nav>
        <!-- Modal body -->
        <form method="GET" action="{{ route('booking-list') }}" style="overflow-y: auto" class="bg-light">
            <div class="modal-body container mb-5 bg-white">
            	<div class="col-12">
            		<div class="row">
	                	<b>Tampilkan Berdasarkan</b>
	                </div>
	                <div class="row mt-2">
					    <div class="form-group col-12 no-padding">
					      <div class="d-flex justify-content-between">
					        <label for="type-filter-1">Menunggu Pembayaran</label>
					        <div class="form-group custom-control custom-radio">
							  <input type="radio" class="custom-control-input text-right type-filter" id="type-filter-1" name="type-filter" value="pending">
							  <label class="custom-control-label" for="type-filter-1"></label>
					        </div>
					      </div>
						</div>
					    <div class="form-group col-12 no-padding">
					      <div class="d-flex justify-content-between">
					        <label for="type-filter-2">Pembayaran Berhasil</label>
					        <div class="form-group custom-control custom-radio ">
							  <input type="radio" class="custom-control-input text-right type-filter" id="type-filter-2" name="type-filter" value="settlement">
							  <label class="custom-control-label" for="type-filter-2"></label>
					        </div>
					      </div>
						</div>
					    <div class="form-group col-12 no-padding">
					      <div class="d-flex justify-content-between">
					        <label for="type-filter-3">Dibatalkan</label>
					        <div class="form-group custom-control custom-radio ">
							  <input type="radio" class="custom-control-input text-right type-filter" id="type-filter-3" name="type-filter" value="expire">
							  <label class="custom-control-label" for="type-filter-3"></label>
					        </div>
					      </div>
						</div>
					</div>
                </div>
                <hr>
            	<div class="col-12">
            		<div class="row">
	                	<b>Filter Berdasarkan</b>
	                </div>
	                <div class="row mt-2">
	                	@foreach($categories as $category)
					    <div class="form-group col-12 no-padding">
					      <div class="d-flex justify-content-between">
					      	
					        <label for="cat-filter-{{$category->id}}">
					        	<img class="icon" src="{{ asset('images/sports/').'/'.$category->slug.'.svg' }}"></img>
					        	{{$category->name}}
					        </label>
					        <div class="form-group custom-control custom-checkbox ">
							  <input type="checkbox" class="custom-control-input text-right cat-filter" id="cat-filter-{{$category->id}}" name="cat-filter[]" value="{{$category->id}}">
							  <label class="custom-control-label" for="cat-filter-{{$category->id}}"></label>
					        </div>
					      </div>
						</div>
						@endforeach
	                </div>
                </div>
                <hr>
            	<div class="col-12">
            		<div class="row">
	                	<b>Tanggal Pemesanan</b>
	                </div>
	                <div class="row mt-2">
					    <div class="form-group col-12 no-padding">
					      <div class="d-flex justify-content-between">
					        <label for="date-filter-1">Bulan ini</label>
					        <div class="form-group custom-control custom-radio ">
							  <input type="radio" class="custom-control-input text-right date-filter" id="date-filter-1" name="date-filter" value="thisMonth">
							  <label class="custom-control-label" for="date-filter-1"></label>
					        </div>
					      </div>
						</div>
					    <div class="form-group col-12 no-padding">
					      <div class="d-flex justify-content-between">
					        <label for="date-filter-2">Bulan terakhir</label>
					        <div class="form-group custom-control custom-radio ">
							  <input type="radio" class="custom-control-input text-right date-filter" id="date-filter-2" name="date-filter" value="lastMonth">
							  <label class="custom-control-label" for="date-filter-2"></label>
					        </div>
					      </div>
						</div>
					    <div class="form-group col-12 no-padding">
					      <div class="d-flex justify-content-between">
					        <label for="date-filter-3">Atur tanggal</label>
					        <div class="form-group custom-control custom-radio ">
							  <input type="radio" class="custom-control-input text-right date-filter" id="date-filter-3" name="date-filter" value="custom">
							  <label class="custom-control-label" for="date-filter-3"></label>
					      	</div>
					      </div>
						  <input type="text" class="flatpickr form-control" placeholder="Pilih tanggal" id="select-date">
						</div>
					</div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer container bg-white">
            	<input type="hidden" name="custom-range" id="custom-range">
                <button type="submit" class="btn btn-block button-saraga">Terapkan</button>
            </div>
        </form>
    </div>
  </div>
</div>

<nav class="navbar navbar-expand shadow-sm background-saraga fixed-top">
  <div class="container collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" style="color: white">  		
        	<b>
			    Booking
        	</b>
  		</a>
      </li>
  	</ul>
	<a class="nav-item form-inline" style="color: white;" data-toggle="modal" data-target="#filter-modal" href="#">
	  Filter
	</a>
  </div>
</nav>
<nav class="navbar navbar-expand bg-white fixed-top" style="margin-top: 58px; padding-bottom: 0; padding-top: 0">
  <div class="container collapse navbar-collapse">
			<ul class="nav nav-tabs nav-fill w-100" id="myTab" role="tablist">
			  <li class="nav-item active">
			    <a class="nav-link" id="active-tab" data-toggle="tab" href="#active" role="tab" aria-controls="active" aria-selected="true">Aktif</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="selesai-tab" data-toggle="tab" href="#selesai" role="tab" aria-controls="selesai" aria-selected="false">Selesai</a>
			  </li>
			</ul>
  </div>
</nav>
<section class="border-top-1 bg-light" style="margin-top: 100px;">
	<div class="booking-list container">
	    <div class="pb-5">

			<div class="tab-content container">
				<div id="active" class="tab-pane fade in active">
					@if(isset($booking_list->active))
					<div class="row">
							<div class="scrolling-wrapper">
								@foreach($booking_list->active as $booking)
								<div class="row p-3">
									@component('booking-card', [
										'id'		=> $booking->id,
										'token' 	=> $booking->token,
										'image_url'	=> $booking->detail[0]->image->path,
										'icon'		=> $booking->detail[0]->sport->slug,
										'title'		=> $booking->detail[0]->spot->name,
										'span'	  	=> $booking->detail[0]->court->sport,
										'date'	  	=> $booking->order_date,
										'duration'	=> $booking->duration,
										'created_at'=> $booking->created_at,
										'status'	=> $booking->status,
										'used'		=> $booking->used,
										'rated'		=> $booking->rated,
										'time'		=> $booking->detail
									])
									@endcomponent
								</div>
								@endforeach

							</div>
					</div>
					@else
				    <div class="container h-100">
				    	<div class="row align-items-center" style="height:90%">
				    		<div class="col-12 text-center">
						      <img src="{{asset('/images/no_booking.svg')}}" class="img-fluid pb-4" alt="Belum ada booking" style="height:15rem;">
						      <p class="img-message">Belum ada lapangan yang kamu booking.</p>
						      <form method="GET" action="{{route('field-search')}}">
						      	@csrf
						      	<button type="submit" class="btn btn-block button-saraga">Booking Sekarang</button>
						      </form>
						      <div class="p-4"></div>
						  	</div>
						</div>
				    </div>
					@endif
				</div>
				<div id="selesai" class="tab-pane fade">
					@if(isset($booking_list->past))
					@foreach($booking_list->past as $booking)
					<div class="row p-3">
						@component('booking-card', [
							'id'		=> $booking->id,
							'token' 	=> $booking->token,
							'image_url'	=> $booking->detail[0]->image->path,
							'icon'		=> $booking->detail[0]->sport->slug,
							'title'		=> $booking->detail[0]->spot->name,
							'span'	  => $booking->detail[0]->court->sport,
							'date'	  => $booking->order_date,
							'duration'	=> $booking->duration,
							'created_at'=> $booking->created_at,
							'status'	=> $booking->status,
							'used'		=> $booking->used,
							'rated'		=> $booking->rated,
							'time'		=> $booking->detail
						])
						@endcomponent
					</div>
					@endforeach
					@else
				    <div class="container h-100">
				    	<div class="row align-items-center" style="height:90%">
				    		<div class="col-12 text-center">
						      <img src="{{asset('/images/no_booking.svg')}}" class="img-fluid pb-4" alt="Belum ada booking" style="height:15rem;">
						      <p class="img-message">Belum ada lapangan yang kamu booking.</p>
						      <div class="p-4"></div>
						  	</div>
						</div>
				    </div>
					@endif
				</div>
			</div>
	    </div>
		<div class="pb-5"></div>
	</div>
</section>

@endsection

@section('script')
<script type="text/javascript">
	var flatpickr = $(".flatpickr").flatpickr({
		altFormat: "j F Y",
		dateFormat: "j F Y",
		minDate: "today",
		disableMobile: "true",
		mode: "range",
		onChange: function(selectedDates){
			$("#date-filter-3").prop("checked", true);
	        const dateArr = selectedDates.map(date => this.formatDate(date, "Y-m-d"));
	        $('#custom-range').val(dateArr);
		}
	});
	$(document).ready(function(){
	   	$('#active-tab').trigger("click");
	   	autofill();
	});
	function autofill(){
		@if(isset($requests['type-filter']))
		$(".type-filter").each(function(){
			if($(this).attr('value') == "{{$requests['type-filter']}}"){
				$(this).click();
			}
		});
		@endif
		@if(isset($requests['cat-filter']))
		$(".cat-filter").each(function(){
			@foreach($requests['cat-filter'] as $catFilter)
			if($(this).attr('value') == "{{$catFilter}}"){
				$(this).click();
			}
			@endforeach
		});
		@endif
	}
</script>
@endsection