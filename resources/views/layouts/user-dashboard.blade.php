@extends('layouts.app')

@section('content')
<!--==================================
=            User Profile            =
===================================-->

<section class="user-profile section bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-3 offset-lg-0">
				<div class="sidebar">
					<!-- Dashboard Links -->
					<div class="widget dashboard-links">
						<h5 class="widget-header user">Halo, {{session('auth_data')->name}}</h5>

						<ul>
							<li><a class="my-1 d-inline-block" href="{{url('profile')}}">Profile</a></li>
							<li><a class="my-1 d-inline-block" href="{{url('my-order')}}">My Order</a></li>
							<li><a class="my-1 d-inline-block" href="{{url('my-order')}}">Favourite Courts <span>(5)</span></a></li>
							<li><a class="my-1 d-inline-block" href="{{url('my-order')}}">History</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
				@yield('user-content')
			</div>
		</div>
	</div>
</section>
@endsection