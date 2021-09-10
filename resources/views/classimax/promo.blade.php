@extends('layouts.app')

@section('css')
<style type="text/css">
	.scrolling-wrapper {
	  overflow-x: scroll;
	  overflow-y: hidden;
	}

	.card p{
	  white-space: initial;
	  overflow: hidden;
	}

	.bg-button {
	  border-radius: 0.5rem; 
	  background-size: cover;
	  background-repeat: no-repeat;
	  color: white;
	}

	.card-text{
		font-size: 0.75rem;
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
						    Promo
						</b>
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
@if(isset($fields))
<section class="border-top-1 bg-light">
@else
<section class="border-top-1">
@endif
	@if(isset($promos))
    <div class="container">
		<div class="row">
			<div class="col-12">
				<div class="scrolling-wrapper">
					@foreach($promos as $promo)
					<div class="pb-3 pt-3">
						<div class="card">
							@if($promo->type=="PROMO")
							<a href="{{route('promo-detail', $promo->id)}}">
							@else
							<a href="{{$promo->custom_url}}" target="_blank">
							@endif
								@if($promo->type=="PROMO")
							    <div class="banner-element banner-element-promo">
							      <span>Promo</span>
							    </div>
							    @else
							    <div class="banner-element banner-element-info">
							      <span>Information</span>
							    </div>
							    @endif
							    <img class="card-img-top" src="{{$promo->image->path}}" alt="Card image cap" style="max-height: 30rem">
							</a>
						    <a>
						      <div class="card-body">
						      	@if($promo->type=="PROMO")
							    <!-- <p class="card-text"> -->
							    	<div class="row card-text">
								    	<div class="col-5" style="padding-right: 0px;">
								    		<div class="text-muted mb-1">Periode Promo</div>
								    		<div style="font-weight: bold">
							        			{{ date("j M Y", strtotime($promo->start_at)) }} - {{ date("j M Y", strtotime($promo->end_at)) }}
							        		</div>
								    	</div>
								    	<div class="col-4" style="padding-right: 0px;">
								    		<div class="text-muted mb-1">Kode Promo</div>
								    		<div style="font-weight: bold">
							        			{{ $promo->promo->code }}
							        		</div>
								    	</div>
								    	<div class="col-3 align-self-center" style="padding-right: 5px; padding-left: 5px;">
										    <button class="button bg-button p-2 pull-right card-text" style="background-color: white; border: 1px solid orange; color: rgb(235, 130, 0);" onclick="code_copy('{{$promo->promo->code}}')">Salin Kode</button>
								    	</div>
								    </div>
							    <!-- </p> -->
							    @elseif($promo->type=="INFOR")
							    	<div class="row card-text">
								    	<div class="col-5 d-inline-block">
								    		<div class="text-muted mb-1">Periode</div>
								    		<div style="font-weight: bold">
							        			{{ date("j M Y", strtotime($promo->start_at)) }} - {{ date("j M Y", strtotime($promo->end_at)) }}
							        		</div>
								    	</div>
								    	<div class="col-7 d-inline-block">
								    		<div class="text-muted mb-1">Judul Informasi</div>
								    		<div style="font-weight: bold">
							        			{{ $promo->title }}
							        		</div>
								    	</div>
								    </div>
							    @endif
						      </div>
						    </a>
						</div>
					</div>
					@endforeach
					<div class="pb-5 pt-4"></div>
				</div>
			</div>
		</div>
    </div>
    @else
    <div class="container h-100">
    	<div class="row align-items-center h-100">
    		<div class="mx-auto p-4">
		      <img src="{{asset('/images/no-fav.png')}}" class="img-fluid pb-4" alt="Belum ada booking">
		      <div class="p-4"></div>
		  	</div>
		</div>
    </div>
    @endif
</section>
@endsection
@section('script')
<script type="text/javascript">
	function code_copy(code){
	    var input = document.createElement('input');
	    input.setAttribute('value', code);
	    document.body.appendChild(input);
	    input.select();
	    var result = document.execCommand('copy');
	    document.body.removeChild(input);
		tempAlert("Code Copied!",1000);
	    return result;
	}
</script>	
@endsection