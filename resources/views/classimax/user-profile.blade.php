@extends('layouts.app')

@section('css')
<style type="text/css">
	p{
		color:white;
		font-size: 0.9rem;
		margin-bottom: 3px;
	}

	p, .lead{
		font-size: 0.8rem;
	}

	.span-bordered{
		color: white;
		background-color: rgba(150,150,150,0.8);
		border-radius: 0.25rem
	}
	.hero-area{
		padding-top: 30px;
	}
	.text-muted{
		font-size: 0.8rem;
	}
	.widget{
		margin-bottom: 5px;
		padding: 15px 20px 15px;
	}
	.card{
		border: 0;
	}
</style>
@endsection
@section('content')
<section class="section bg-light" style="padding-top: 0; padding-bottom: 0">
	<div class="container hero-area bg-1 overly">
	<div class="container">

		<!-- Profile Header -->
		<div class="pb-3">
			<div class="d-flex">
				<div class="pl-4">
					<img src="{{session('auth_data')->profile_image ? session('auth_data')->profile_image : 'https://via.placeholder.com/150'}}" class="img-responsive rounded-circle" alt="No Image" width=100 height=100>
				</div>
				<div class="text-left pl-4 mt-2">
					<p style="font-weight: bold; font-size: 1.2rem;">{{session('auth_data')->name}}</p>
					<p style="font-size: 0.7rem;">{{session('auth_data')->telephone}}</p>
					<p style="font-size: 0.7rem;">{{session('auth_data')->email}}</p>
				</div>
				<div style="position: absolute; right: 10%">
					<a href="{{ route('edit-profile' )}}"><span><i class="fa fa-pencil fa-lg p-2 span-bordered" aria-hidden="true"></i></span></a>
				</div>
			</div>
		</div>
		<div class="row" style="margin-top: 75px;">
			<div class="card col-12 bg-light" style="border-radius: 3rem 3rem 0px 0px;">
				<div class="card-body">

					<!-- Referral -->
					<div style="margin-top: -75px;">
						<div class="card" style="border-style: dashed; border-width: 2px; border-color:var(--saraga-color); border-radius: 0.5rem">
						  <div class="card-body text-left" style="padding: 1rem;">
						  	<div class="row">
								<div class="mr-auto pl-3">
								  	<p class="lead" style="color: black;">Kode Referral</p>
								  	<p class="text-saraga" style="font-weight: bold; font-size: 1.1rem;">{{session('auth_data')->referral_code}}</p>
								</div>
								<div class="pr-3 d-flex align-items-center">
									<a onclick="referral_copy()" href="#"><span>
										<img src="{{ asset('images/share-icon-black.svg') }}" alt="" class="icon" title="share">
									</span></a>
								</div>
						    </div>
						  </div>
						</div>
					</div>

					<!-- Refund -->
<!-- 					<div class="row pt-4">
						<div class="col-12">
							<div class="widget personal-info">
								<a href="#">
									<div class="d-flex">
									  <div class="d-flex align-items-center">
									  	<span><i class="fa fa-refresh fa-2x" aria-hidden="true"></i></span>
									  </div>
									  <div class="pl-3">									  	
									  	<p class="lead" style="color: black; font-weight: bold;">Refund Saya</p>
										<p class="text-muted">Atur refund Anda di satu tempat</p>
									  </div>
									  <div class="d-flex ml-auto align-items-center">
									  	<span><i class="fa fa-angle-right fa-2x text-saraga" aria-hidden="true"></i></span>
									  </div>
									</div>
								</a>
							</div>
						</div>
					</div> -->

					<!-- Panel Help -->
					<div class="row pt-4">
						<div class="col-12">
							<div class="widget personal-info">
						  			<a href="{{route('help-center')}}">
										<div class="d-flex">
										  <div class="d-flex align-items-center text-left">
										  	<span><i class="fa fa-question-circle fa-2x" aria-hidden="true"></i></span>
										  </div>
										  <div class="pl-3 mr-2">									  	
										  	<p class="lead" style="color: black; font-weight: bold;">Pusat Bantuan</p>
											<p class="text-muted">Temukan jawaban terbaik dari pertanyaan Anda</p>
										  </div>
										  <div class="d-flex ml-auto align-items-center"><span><i class="fa fa-angle-right fa-2x text-saraga" aria-hidden="true"></i></span></div>
										</div>
									</a>
<!-- 								<a href="{{ route('setting-profile') }}">
									<div class="d-flex">
									  <div class="d-flex align-items-center">
									  	<span><i class="fa fa-cog fa-2x" aria-hidden="true"></i></span>
									  </div>
									  <div class="pl-3 mr-2">									  	
									  	<p class="lead" style="color: black; font-weight: bold;">Pengaturan</p>
										<p class="text-muted">Lihat dan atur preferensi akun Anda</p>
									  </div>
									  <div class="d-flex ml-auto align-items-center"><span><i class="fa fa-angle-right fa-2x text-saraga" aria-hidden="true"></i></span></div>
									</div>
								</a> -->
							</div>
						</div>
					</div>

					<!-- Panel Setting -->
					<div class="row pt-4">
						<div class="col-12">
							<div class="widget personal-info">
									<a href="{{ route('setting-profile') }}">
										<div class="d-flex">
										  <div class="d-flex align-items-center">
										  	<span><i class="fa fa-cog fa-2x" aria-hidden="true"></i></span>
										  </div>
										  <div class="pl-3 mr-2">									  	
										  	<p class="lead" style="color: black; font-weight: bold;">Pengaturan</p>
											<p class="text-muted">Lihat dan atur preferensi akun Anda</p>
										  </div>
										  <div class="d-flex ml-auto align-items-center"><span><i class="fa fa-angle-right fa-2x text-saraga" aria-hidden="true"></i></span></div>
										</div>
									</a>
							</div>
						</div>
					</div>

					<!-- Logout -->
					<div class="row pt-4 mb-4" >
						<div class="col-12">
							<a href="{{ route('logout') }}">
							<div class="widget personal-info">
								<div class="d-flex">
								  <div class="d-flex align-items-center">
								  	<span><i class="fa fa-reply fa-2x" aria-hidden="true"></i></span>
								  </div>
								  <div class="pl-3">									  	
								  	<p class="lead" style="color: black; font-weight: bold;">Logout</p>
								  </div>
								</div>
							</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>

@endsection

@section('script')
<script type="text/javascript">
	function referral_copy(){
	    var input = document.createElement('input');
	    input.setAttribute('value', '{{session("auth_data")->referral_code}}');
	    document.body.appendChild(input);
	    input.select();
	    var result = document.execCommand('copy');
	    document.body.removeChild(input);
		tempAlert("Copied!",1000);
	    return result;
	}
</script>	

@endsection