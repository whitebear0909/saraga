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
</style>
<div class="card">
  <img class="card-img-top" src="{{$image_url}}" alt="Card image cap" style="max-height: 20rem">
  <div class="card-body">
    <h5 class="card-title text-truncate">{{$title}}</h5>
    <span class="badge badge-pill badge-success p-2" style="background-color: rgb(233, 255, 236); border: 1px solid green; color: black;">{{$type}}</span>
    <div class="form-inline">
      <p class="card-text mt-3" style="font-weight: bold; color: orange;">Rp {{number_format($price,0)}}</p>
      <p class="card-text ml-2">/Jam</p>
    </div>
    <button type="submit" class="btn btn-block button-saraga">Pilih Lapang</button>
  </div>
  {{ $slot }}
</div>
