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
.fav-button{
  color: rgb(226,42,42); 
  font-size: 1.5rem;
}
.address{
  font-size: 0.8rem;
  font-weight: 400;
  color: #666;
}
</style>
<div class="card">
  <a href="{{$a_url}}">
    @if(isset($gallery))
      @component('img-card', [
        'id' => $spot_id,
        'first_image' => $image_url,
        'gallery' => $gallery
      ])
      @endcomponent
    @else
      <img class="card-img-top" src="{{$image_url}}" alt="Card image cap" style="max-height: 15rem;">
    @endif
  </a>
    <div id="innerelements" class="shadow">
      <a style="cursor: hand">
        @if ($is_favorite == true)
        <i class="fav-button fa fa-heart fa-2x" id="{{$spot_id}}" value="true" aria-hidden="true"></i>
        @else
        <i class="fav-button fa fa-heart-o fa-2x" id="{{$spot_id}}" value="false" aria-hidden="true"></i>
        @endif
      </a>
    </div>
    <a href="{{$a_url}}">
      <div class="card-body">
        <h5 class="card-title text-truncate" style="margin-top:-50px;">{{$title}}</h5>
        <p class="card-text">Rp {{number_format($price,0)}} /Jam</p>
        <p class="card-text">
        	@for ($i=0; $i<$review_star; $i++)
        		<i class="fa fa-star" aria-hidden="true"></i>
        	@endfor
        </p>
        <h5 class="address text-truncate"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$address}}</h5>
        
        {{ $slot }}
      </div>
    </a>
</div>
