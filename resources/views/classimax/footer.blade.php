<!--==========================================
=              FOOTER Section                =
===========================================-->
<style type="text/css">
	.footer{
		padding: 0;
		padding-top: 15px;
		padding-bottom: 80px;

		background-color: rgba(24, 35, 41, 0.9);
	}
	.footer .container{
		padding-right: 35px;
		padding-left: 35px;
	}
	.footer a{
		color: white;
		line-height: 2;
	}
	.footer .button-saraga{
		font-size: 0.8rem;
		border-radius: 0.5rem;
		line-height: 1.25;
		width: 120px;
		padding: 7.5px 20px;
	}	
</style>
<section class="section footer">
	<div class="container">
		<div class="row">
			<div class="col-6">
				<a href="{{route('about-us')}}">About Us</a><br>
				<a href="{{route('faq')}}">FAQ</a><br>
				<a href="{{route('terms')}}">Terms Of Use</a><br>
				<a href="{{env('BLOG_URL')}}">Blog</a>
			</div>
			<div class="col-6 text-right">
				<a href="{{route('help-center')}}" class="btn button-saraga" style="margin-top: 5px;">Contact Us</a><br>
				<a href="{{env('ADMIN_URL')}}" class="btn button-saraga" style="margin-top: 15px;">For Facility Owner</a>
			</div>
		</div>
	</div>
</section>