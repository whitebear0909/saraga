<style type="text/css">
	.form-control[readonly]{
		border-color: rgb(9, 58, 102)!important;
		background-color: transparent !important;
	}	
</style>
<div class="form-group col-md-12" style="margin-bottom: 0">
	<label class="has-float-label"> 
		<select class="w-100 form-control custom-select" name="category" id="select-category">
			<option disabled selected value style="display: none">Pilih jenis olahraga</option>
			<option value="">Semua</option>
			@foreach($categories as $category)
				<option value="{{$category->id}}">{{$category->name}}</option>
			@endforeach
		</select>
		<span>Olahraga</span>
	</label>
	<label class="has-float-label search-date-component">
		<input type="text" class="form-control flatpickr" name="search_date" placeholder="Pilih tanggal" id="select-date">
		<span>Tanggal (optional)</span>
	</label>
	<label class="has-float-label" style="margin-bottom: 15">
		<input type="text" class="form-control keyword" name="keyword" data-toggle="modal" data-target="#searchModal" id="keyword" placeholder="Pilih sarana olahraga">
		<span>Nama Sarana Olahraga</span>
	</label>
	{{ $slot }}
</div>
<script type="text/javascript">
	var flatpickr = $(".flatpickr").flatpickr({
		altFormat: "j F Y",
		dateFormat: "j F Y",
		minDate: "today",
		disableMobile: "true",
	});
	
	@if (isset($requests['category']))
		$("#select-category").val("{{$requests['category']}}");
	@endif

	@if (isset($requests['search_date']))
		flatpickr.setDate(new Date("{{$requests['search_date']}}"));
	@endif

	@if (isset($requests['keyword']))
		$("#keyword").val("{{$requests['keyword']}}");
	@endif

	$( "#keyword" ).click(function() {
	doneTyping();
	});

</script>