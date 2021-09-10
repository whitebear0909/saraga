@extends('layouts.app')

@section('css')
<style type="text/css">
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
</style>
@endsection

@section('content')
<nav class="navbar navbar-expand shadow-sm background-saraga sticky-top">
  <div class="container collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" style="color: white" href="javascript:history.back()">  
            <img src="{{ asset('images/back-icon.svg') }}" alt="" class="back-icon" title="back">
        	<b class="ml-3" style="font-size: 20px;">
			    Detail Event
        	</b>
  		</a>
      </li>
  	</ul>
  </div>
</nav>

<section class="border-top-1 bg-light">
    <div class="container" style="background-color: white;">
	    <div class="row">
        	<img class="card-img-top img-fluid" src="{{$event->image->path}}" alt="Card image cap" style="max-height: 25rem; padding-right: 0px; padding-left: 0px;">
          	<div id="innerelements" class="shadow">
            	<div style="cursor: pointer">
              		<i class="fa fa-share-alt fa-2x text-saraga share-btn" value="true" aria-hidden="true" style="font-size: 1.75rem;"></i>
            	</div>
          	</div>
        </div>
    	<div class="row col-12 pb-4" style="font-size: 1.1rem;">
	    	{{$event->description}}
	    </div>
    </div>

    <div class="container mt-4" style="background-color: white;">
    	<div class="row p-2">
	    	<div class="col-6 d-inline-block">
	    		<div class="text-muted mb-1">Tanggal Pelaksanaan</div>
	    		<div>
        			{{ date("j M Y", strtotime($event->start_at)) }} - {{ date("j M Y", strtotime($event->end_at)) }}
        		</div>
	    	</div>
	    	@if(isset($event->event->due_date) && $event->event->due_date != "")
	    	<div class="col-6 d-inline-block">
	    		<div class="text-muted mb-1">Batas Pendaftaran</div>
	    		<div style="color: red;">
        			{{ date("j M Y", strtotime($event->event->due_date)) }}
        		</div>
	    	</div>
	    	@endif
	    </div>
    </div>

    @if($event->event->contact_info != "")
    <div class="container mt-4 pb-4" style="background-color: white;">
    	<div class="row p-2">
    		<div class="col-12">
	    		<div class="text-muted mb-1">More Info</div>
	    		<div>
        			{{ $event->event->contact_info }}
        		</div>
	    	</div>
	    </div>
    </div>
    @endif

    @if($event->event->contact_info != "")
    <div class="container mt-4 pb-4" style="background-color: white;">
    	<div class="row p-2">
    		<div class="col-12">
	    		<div class="text-muted mb-1">Tempat Pendaftaran</div>
	    		<div>
        			{{ $event->event->due_location }}
        		</div>
	    	</div>
	    </div>
    </div>
    @endif

    @if(isset($event->event->requirement) && $event->event->requirement != "")
    <div class="container mt-4 pb-4 mb-4" style="background-color: white;">
    	<div class="row p-2">
    		<div class="col-12 pb-4">
	    		<h4 class="pt-2 pb-1">Persyaratan</h4>
	    		<hr>
	            <p>{{$event->event->requirement}}</p>
	    	</div>
	    </div>
    </div>
    @endif

</section>
@endsection

@section('script')
<script type="text/javascript">
	const shareBtn = document.querySelector('.share-btn');

	shareBtn.addEventListener('click', () => {
	  if (navigator.share) {
	    navigator.share({
	      title: 'My awesome post!',
	      text: 'This post may or may not contain the answer to the universe',
	      url: window.location.href
	    }).then(() => {
	      console.log('Thanks for sharing!');
	    })
	    .catch(err => {
	      console.log(`Couldn't share because of`, err.message);
	    });
	  } else {
	    link_copy();
	  }
	});

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