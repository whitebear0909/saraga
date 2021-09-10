
<div class="card" style="width: 100%; cursor:pointer;" id="card-{{$id}}">
	@if(isset($token))
  	<a href="{{config('app.snap_url').'/v1/transactions/'.$token.'/pdf'}}"></a>
  	@else
  	<a href="">
  	@endif
    	<img class="card-img-top" src="{{$image_url ? $image_url : 'https://via.placeholder.com/150'}}" alt="Card image cap" style="max-height: 15rem">
  	</a>
	<div id="innerelements" class="shadow">
		<!-- <i class="fav-button fa fa-futbol-o fa-2x" aria-hidden="true" style="font-size: 1.5rem;"></i> -->
	    <img class="icon icon-cat" src="{{ asset('images/sports').'/'.$icon.'.svg' }}">
	</div>
	<div class="card-body">
	    <h5 class="card-title text-truncate pt-3" style="margin-top:-50px;">{{$title}}</h5>
	    <span class="badge badge-pill badge-success p-2" style="background-color: rgb(233, 255, 236); border: 1px solid green; color: black;">{{$span}}</span>
	    
	    <div class="card-text" style="font-size: 0.9rem">

	    	<div class="d-inline-block mr-4 mb-2 mt-4" style="vertical-align: top; font-size: 0.8rem;">
	    		<div class="text-muted mb-2">Hari dan Tanggal</div>
	    		<div style="font-weight: bold">
	      			<i class="fa fa-calendar fa-lg text-saraga mr-1" aria-hidden="true"></i>
        			{{ date("D, j M Y", strtotime($date)) }}
        		</div>
	    	</div>
	    	<div class="d-inline-block mr-4 mb-2 mt-4" style="vertical-align: top;">
	    		<div class="text-muted mb-2">Jam</div>
	    		<div style="font-weight: bold">
	    			@foreach($time as $t)
	      			<i class="fa fa-clock-o fa-lg text-saraga mr-1" aria-hidden="true"></i>
        			{{$t->time_slot}}<br>
        			@endforeach
        		</div>
	    	</div>
	    </div>
	</div>
	@component('payment-time', [
		'id'	=> $id,
		'date'	=> date("Y-m-d H:i:s", strtotime($created_at. " +20 minutes")),
		'status'=> $status,
		'used'  => $used,
		'rated'	=> $rated
	])
	@endcomponent
</div>

<script type="text/javascript">
	$("#card-{{$id}}").click(function(){
		window.location.href="{{ route('booking-detail', ['id'=>$id]) }}";
	});
</script>