@extends('layouts.app')

@section('css')
<style type="text/css">


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
<nav class="navbar navbar-expand shadow-sm background-saraga">
  <div class="container collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" style="color: white">  		
        	<b>
			    Favorit
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
	@if(isset($fields))
    <div class="container">
		<div class="row pt-3">
<!-- 			<div class="col-12">
				<div class="scrolling-wrapper">
					@foreach($categories as $category)
					<a href="#">
						<div class="card text-center mr-2" style="width: 8rem; border-style: none; display: inline-block;">
						  <div class="card-body text-center bg-button" style="background-image: linear-gradient(to bottom, rgba(9,58,102,0.5), rgba(9,58,102,0.5)), url({{ asset('images/promo/promo-1.jpg') }});">
						    {{$category->name}}
						  </div>
						</div>
					</a>
					@endforeach
				</div>
			</div> -->
		</div>
		<div class="row">
			<div class="col-12">
				<div class="scrolling-wrapper">
					@foreach($fields as $spot)
						<div class="pb-3 pt-3"> 
						@component('card', [
							'review_star' => $spot->rating,
							'price'		  => $spot->price,
							'image_url'	  => $spot->cover_image,
							'title'		  => $spot->name,
							'address'	  => $spot->address,
							'a_url'		  => route('field-detail', $spot->slug),
							'spot_id'	  => $spot->id,
							'is_favorite' => isset($spot->is_favorite)?$spot->is_favorite:false
						])
						@endcomponent
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