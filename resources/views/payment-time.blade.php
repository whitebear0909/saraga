<style type="text/css">
	.card-footer{
		background-color: rgb(255,130,0);
		width: 100%;
		padding: .75rem 0.9rem;
	}
	.card-footer>p{
		color: white;
		padding: 0;
		margin: 0;
		font-size: 0.8rem;
	}	
	.time-info{
		background-color: white;
		color: red;
		width: 20px;
		padding: 2px 1px 2px 1px;
		margin: 0;
		font-size: 0.7rem;
		text-align: center;
		border-radius: 0.2rem;
		font-weight: bold;
	}
</style>

	@if($status=="pending")
	<div class="card-footer">
	  	<p class="d-inline-block mb-0 mt-1">Selesaikan Pembayaran Sebelum</p>
	  	<div class="d-inline float-right" style="color: white;" id="payment-time-{{$id}}" time="{{$date}}">
	  		<hour class="d-inline-block time-info">
	  			-
	  		</hour>
	  		:
	  		<minute class="d-inline-block  time-info">
	  			-
	  		</minute>
	  		:
	  		<second class="d-inline-block  time-info">
	  			-
	  		</second>

		</div>
  	</div>
	@elseif($status=="success")
	<div class="card-footer p" style="background-color: green;">
	  	<p class="d-inline-block" style="margin-bottom: 0px;">Pembayaran Telah Berhasil!</p>
	</div>
	@elseif($status=="expire")
		@if($used == 0)
			<div class="card-footer p" style="background-color: gray;">
			  	<p class="d-inline-block" style="margin-bottom: 0px;">
			  		Expired
			  	</p>
			</div>
		@else
			@if($rated == 0)
				<div class="card-footer p">
				  	<p class="d-inline-block" style="margin-bottom: 0px;">
				  		Berikan penilaian pada booking anda.
				  	</p>
				</div>
			@else
				<div class="card-footer p" style="background-color: green;">
				  	<p class="d-inline-block" style="margin-bottom: 0px;">
				  		Terima Kasih, Penilaian Telah Diberikan.
				  	</p>
				</div>
			@endif
		@endif	
	@elseif($status=="failure")
	<div class="card-footer p" style="background-color: red;">
		<p class="d-inline-block" style="margin-bottom: 0px;">Expired</p>
	</div>
	@endif

<script type="text/javascript">
	var x = setInterval(function() {
		$('#payment-time-{{$id}}').each(function() {
		  // Set the date we're counting down to
		  var countDownDate = new Date($(this).attr('time')).getTime();

		  // Get today's date and time
		  var now = new Date().getTime();

		  // Find the distance between now and the count down date
		  var distance = countDownDate - now;

		  // Time calculations for hours, minutes and seconds
	      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

		  // Display the result in the element with id="demo"
		  // $(this).html((hours+days*24) + "h " + minutes + "m " + seconds + "s ");
		  $(this).children('hour').html((hours+days*24));
		  $(this).children('minute').html(minutes);
		  $(this).children('second').html(seconds);

		  // If the count down is finished, write some text 
		  if (distance < 0) {
		    // clearInterval(x);
		    $(this).html("EXPIRED");
		    $(this).parent( ".card-footer" ).css( "background-color", "red" );
		  }
		});
	}, 1000);
</script>