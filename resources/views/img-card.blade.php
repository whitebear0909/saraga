<div id="carousel-{{$id}}" class="carousel slide" data-ride="carousel" data-interval="false">
  <ol class="carousel-indicators">
    <li data-target="#carousel-{{$id}}" data-slide-to="0" class="active"></li>
    <?php $cnt = 0?>
    @if(isset($gallery))
	    @foreach($gallery as $image)
	        <?php $cnt++?>
		    <li data-target="#carousel-{{$id}}" data-slide-to="{{$cnt}}"></li>
	    @endforeach
    @endif
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{$first_image}}" alt="First slide" style="max-height: 15rem;">
    </div>
    @foreach($gallery as $image)
    <div class="carousel-item">
      <img class="d-block w-100" src="{{$image->path}}" alt="Gallery slide" style="max-height: 15rem;">
    </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carousel-{{$id}}" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-{{$id}}" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>