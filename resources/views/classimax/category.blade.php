@extends('layouts.app')

@section('css')
<style type="text/css">
	#filter-modal .modal-body{
		min-height: 0 !important
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
			      <a class="nav-item form-inline my-2" href="{{route('field-search')}}" style="color: var(--blue)">
			      	Reset
			      </a>
              </div>
            </div>
        </nav>
        <!-- Modal body -->
        <form method="GET" action="{{ route('field-search') }}" style="overflow-y: auto;" class="bg-light">
            <div class="modal-body container bg-white">
            	<div class="col-12">
            		<div class="row">
                	<b>Sort</b>
					<select class="w-100 form-control custom-select mt-2" name="sort-filter" id="input-sort-filter">
						<option disabled selected value style="display: none">Sort by</option>
						<option value="0">Semua</option>
						<option value="1">Harga Tertinggi</option>
						<option value="2">Harga Terendah</option>
						<option value="3">Rekomendasi</option>
					</select>
					</div>
            	</div>
            </div>
            <div class="modal-body container mt-2 bg-white">
            	<div class="col-12">
            		<div class="row">
	                	<b>Rentang Harga</b>
	                </div>
                	<div class="form-inline row mt-2">
						<input type="number" class="form-control mr-auto" name="minPrice" id="input-min-price" style="width: 45%" placeholder="Minimal" min=0>
						<span class="mr-2 ml-2" style="font-size: 1.5rem; font-weight: 900; color: var(--saraga-color); margin-bottom: 5px;">-</span>
						<input type="number" class="form-control ml-auto" name="maxPrice" id="input-max-price" style="width: 45%" placeholder="Maximal" max=100000000>
					</div>
            	</div>
            </div>

            <div class="modal-body container mt-2 bg-white">
            	<!-- Rating -->
            	<div class="col-12">
            		<div class="row">
	                	<b>Rating</b>
	                </div>
                	<div class="form-inline row mt-2">
			            <div class="form-control border rating-button" value="1">
			              	<img src="{{ asset('images/star.svg') }}" alt="" class="rating" title="rating">
			              	1
			            </div>
			            <div class="form-control border rating-button" value="2">
			              	<img src="{{ asset('images/star.svg') }}" alt="" class="rating" title="rating">
			              	2
			            </div>
			            <div class="form-control border rating-button" value="3">
			              	<img src="{{ asset('images/star.svg') }}" alt="" class="rating" title="rating">
			              	3
			            </div>
			            <div class="form-control border rating-button" value="4">
			              	<img src="{{ asset('images/star.svg') }}" alt="" class="rating" title="rating">
			              	4
			            </div>
			            <div class="form-control border rating-button" value="5" style="margin-right: 0">
			              	<img src="{{ asset('images/star.svg') }}" alt="" class="rating" title="rating">
			              	5
			            </div>
					</div>
					<input type="hidden" name="rating" id="input-rating">
            	</div>
            	<hr>

            	<div class="col-12">
            		<div class="row">
	                	<b>Jenis Lapang</b>
	                </div>
	                <div class="row mt-2">
						<div class="custom-control custom-checkbox col-6">
						  <input type="checkbox" class="custom-control-input type-filter" id="customCheck1" name="type-filter[]" value="1">
						  <label class="custom-control-label" for="customCheck1">Lapang Sintetis</label>
						</div>
						<div class="custom-control custom-checkbox col-6">
						  <input type="checkbox" class="custom-control-input type-filter" id="customCheck2" name="type-filter[]" value="4">
						  <label class="custom-control-label" for="customCheck2">Lapang Vinyl</label>
						</div>							
						<div class="custom-control custom-checkbox col-6">
						  <input type="checkbox" class="custom-control-input type-filter" id="customCheck3" name="type-filter[]" value="5">
						  <label class="custom-control-label" for="customCheck3">Lapang Parquette</label>
						</div>							
						<div class="custom-control custom-checkbox col-6">
						  <input type="checkbox" class="custom-control-input type-filter" id="customCheck4" name="type-filter[]" value="6">
						  <label class="custom-control-label" for="customCheck4">Lapang Taraflex</label>
						</div>							
						<div class="custom-control custom-checkbox col-6">
						  <input type="checkbox" class="custom-control-input type-filter" id="customCheck5" name="type-filter[]" value="2">
						  <label class="custom-control-label" for="customCheck5">Lapang Beton</label>
						</div>							
						<div class="custom-control custom-checkbox col-6">
						  <input type="checkbox" class="custom-control-input type-filter" id="customCheck6" name="type-filter[]" value="3">
						  <label class="custom-control-label" for="customCheck6">Lapang Karpet Plastik</label>
						</div>
	               	</div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer container bg-white">
	            <input type="hidden" name="category" value="{{ app('request')->input('category') }}">
	            <input type="hidden" name="search_date" value="{{ app('request')->input('search_date') }}">
	            <input type="hidden" name="keyword" value="{{ app('request')->input('keyword') }}">
                <button type="submit" class="btn btn-block button-saraga">Terapkan</button>
            </div>
        </form>
    </div>
  </div>
</div>
<!--             	<div class="col-12">
            		<div class="row">
	                	<b>Tipe Lapang</b>
	                </div>
	                <div class="row mt-2">
						<div class="custom-control custom-checkbox col-6">
						  <input type="checkbox" class="custom-control-input" id="customCheck1" name="type-filter[]" value="2">
						  <label class="custom-control-label" for="customCheck1">Lapang Indoor</label>
						</div>
						<div class="custom-control custom-checkbox col-6">
						  <input type="checkbox" class="custom-control-input" id="customCheck2" name="type-filter[]" value="3">
						  <label class="custom-control-label" for="customCheck2">Lapang Outdoor</label>
						</div>
					</div>
</div> -->
                <!-- <hr> -->
<!-- The Modal -->
<div class="modal" id="search-input-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
        <nav class="navbar navbar-expand shadow-sm">
            <div class="container">
              <a class="navbar-brand" href="#" data-dismiss="modal">
                <img src="{{ asset('images/close-icon.svg') }}" alt="" class="close-icon" title="close">
              </a>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto p-2">
                  <li class="nav-item active">      
                        <b class="text-saraga">
                            Ubah Pencarian
                        </b>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
        <!-- Modal body -->
        <form method="GET" action="{{ route('field-search') }}">
            <div class="modal-body container">
                <div class="form-row pt-3">
                    @component('search-input-group', [
                    	'requests' => $requests
                    ])
                    @endcomponent
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer container">
                <button type="submit" class="btn btn-block button-saraga">Cari Lapang</button>
            </div>
        </form>
    </div>
  </div>
</div>

@component('search')
@endcomponent
<nav class="navbar navbar-expand shadow-sm background-saraga sticky-top">
	<div class="container">
	  <a class="navbar-brand" href="{{route('home')}}">
	    <img src="{{ asset('images/back-icon.svg') }}" alt="" class="back-icon" title="back">
	  </a>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" style="color: white" data-toggle="modal" data-target="#search-input-modal" href="#">  		
<!-- 	        	<b style="font-size: 1rem;">
				    @if (empty($requests['category_name']))
				      {{"Semua Kategori"}}
				    @else
				      {{$requests['category_name']}}
				    @endif
	        	</b>
	        	<br>
			    @if (empty($requests['keyword']))
			      {{"Semua tempat"}}
			    @else
			      {{$requests['keyword']}}
		        @endif
	  			| 
			    @if (empty($requests['search_date']))
			      {{"Semua waktu"}}
			    @else
			      {{date("d F Y", strtotime($requests['search_date']))}}
		        @endif -->
		        <b>
			        Hasil Pencarian
			    </b>
	  		</a>
	      </li>
	  	</ul>
	  	<a href="#" data-toggle="modal" data-target="#search-input-modal">
	      <li class="nav-item form-inline my-2" style="color: white;">
	      	<i class="fa fa-search fa-lg"></i>
	      </li>
	    </a>
	  </div>
	</div>
</nav>

<section class="bg-light">
    <div class="container">
		<div class="row">
			<div class="col-12">
				<div class="scrolling-wrapper">
					@if(count($fields) > 0)
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
								'is_favorite' => isset($spot->is_favorite)?$spot->is_favorite:false,
								'gallery'     => $spot->gallery
							])
							@endcomponent
							</div>
						@endforeach
					@else
			            <div class="alert alert-warning mt-3">
			            	@if(!empty($requests['category_name']))
				                <strong>Tidak ditemumkan hasil pencarian lapangan dengan jenis {{$requests['category_name']}}. <a data-toggle="modal" data-target="#search-input-modal" href="#" style="text-decoration: underline;"> Coba cari semua jenis lapangan.</a></strong>
				            @else
				            	<strong>Pencarian lapangan tidak ditemukan. <a data-toggle="modal" data-target="#search-input-modal" href="#" style="text-decoration: underline;">Coba cari lapangan lainnya.</a></strong>
			                @endif
			            </div>
					@endif
				</div>
			</div>
		</div>
		<?php 
			$next5 = ($links->current_page+5) > $links->last_page ? $links->last_page : $links->current_page+5; 
			$next = ($links->current_page+1) > $links->last_page ? $links->last_page : $links->current_page+1; 
			$prev5 = ($links->current_page-5) < 1 ? 1 : $links->current_page-5; 
			$prev = ($links->current_page-1) < 1 ? 1 : $links->current_page-1; 
		?>

		<div class="row mb-5">
			<nav class="col-12">
				<ul id="pagination" class="pagination justify-content-center"></ul>
			</nav>
		</div>
		<div class="row" style="margin-bottom: 100px;"></div>
		<div class="fixed-bottom text-center" style="margin-bottom: 70px;">
			@component('filter-button')
			@endcomponent
		</div>
    </div>
</section>
@endsection

@section('script')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.2/jquery.twbsPagination.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		   	autofill();
		});

		function autofill(){
			@if(isset($requests['sort-filter']))
				$("#input-sort-filter").val("{{$requests['sort-filter']}}")
			@endif
			@if(isset($requests['type-filter']))
				$(".type-filter").each(function(){
					@foreach($requests['type-filter'] as $typeFilter)
						if($(this).attr('value') == "{{$typeFilter}}"){
							$(this).click();
						}
					@endforeach
				});
			@endif
			@if(isset($requests['rating']))
				<?php $arrRating = json_decode($requests['rating']) ?>
				$(".rating-button").each(function(){
					@foreach($arrRating as $rating)
						if($(this).attr('value') == "{{$rating}}"){
							$(this).click();
						}
					@endforeach
				});
			@endif
			@if(isset($requests['minPrice']))
				$("#input-min-price").val("{{$requests['minPrice']}}")
			@endif
			@if(isset($requests['maxPrice']))
				$("#input-max-price").val("{{$requests['maxPrice']}}")
			@endif
		}
		$('.rating-button').click(function () {
			if($(this).hasClass('active')) {
				$(this).removeClass('active');
			}
			else{
				$(this).addClass('active');
			}
			fill_rating();
		});

		var rating = []
		function fill_rating(){
			rating = [];
			$('.rating-button').each(function(i, obj) {
				if ($(obj).hasClass("active")) {
					rating.push($(obj).attr('value'))
				}
			});
			$("#input-rating").val(JSON.stringify(rating));
		}

	    $('#pagination').twbsPagination({
	        totalPages: {{$links->last_page}},
	        visiblePages: 5,
	        startPage: {{$links->current_page}},
	        prev: '<span aria-hidden="true">&lsaquo;</span>',
	        next: '<span aria-hidden="true">&rsaquo;</span>',
	        last: '',
	        first: '',
	        initiateStartPageClick: false,
	        onPageClick: function (event, page) {
	        	var category = "category=" + "{{ Request()->category }}";
	        	var search_date = "&search_date=" + "{{ Request()->search_date }}";
	        	var keyword = "&keyword=" + "{{ Request()->keyword }}";
	        	var page = "&page=" + page;
	        	window.location.replace("{{ url()->current() }}?" + category+search_date+keyword+page);
	        }
	    });
	</script>
@endsection