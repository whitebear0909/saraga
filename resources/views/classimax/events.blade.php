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
		font-size: 1rem;
	}
</style>
@endsection

@section('content')
<nav class="navbar navbar-expand shadow-sm background-saraga">
  <div class="container collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" style="color: white" href="javascript:history.back()">  
            <img src="{{ asset('images/back-icon.svg') }}" alt="" class="back-icon" title="back">
        	<b class="ml-3" style="font-size: 20px;">
			    Event
        	</b>
  		</a>
      </li>
  	</ul>
  </div>
</nav>
@if(isset($fields))
<section class="border-top-1 bg-light">
@else
<section class="border-top-1">
@endif
	@if(isset($events))
    <div class="container">
		<div class="row">
			<div class="col-12">
				<div class="scrolling-wrapper">
					@foreach($events as $event)
					<div class="pb-3 pt-3">
						<div class="card">
							<a href="{{route('event-detail', $event->id)}}">
							    <img class="card-img-top" src="{{$event->image->path}}" alt="Card image cap" style="max-height: 30rem">
							</a>
						    <div class="card-body">
						    	<div class="row card-text">
						    		<div class="col-12 mb-4">
						    			<div style="font-weight: bold"> 
						    			{{$event->title}}
						    			</div>
						    			<div class="text-muted">Lokasi</div>
						    			
						    		</div>
							    	<div class="col-6 d-inline-block">
							    		<div class="text-muted mb-1">Batas Pendaftaran :</div>
							    	</div>
							    	@if(1==1)
							    	<div class="col-6 d-inline-block">
							    		<div style="font-weight: bold; color: red;">
						        			{{date('j M Y', strtotime($event->start_at))}} - {{date('j M Y', strtotime($event->end_at))}}
						        		</div>
							    	</div>
							    	@endif
							    </div>
						    </div>
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
		      <img src="{{asset('/images/no-fav.png')}}" class="img-fluid pb-4" alt="Belum ada event">
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