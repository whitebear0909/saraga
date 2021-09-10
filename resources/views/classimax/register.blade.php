@extends('layouts.master')

@section('body')
<nav class="navbar navbar-light shadow-sm p-3">
  <div class="container">
    <a class="navbar-brand" href="{{ route('login') }}">
      <img src="{{ asset('images/back-icon-black.svg') }}" alt="" class="back-icon back-icon-black" title="back">
      Daftar
    </a>
  </div>
</nav>
<section class="login py-5 border-top-1">
    <div class="container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label class="has-float-label">
              <input class="form-control" type="text" name="name" placeholder="John Saraga" value="{{ old('name') }}"/>
              <span style="font-size: 15px;">Nama Lengkap</span>
            </label>
            @if ($errors->has('name'))
                <div class="alert alert-danger">
                    <strong>{{ $errors->first('name') }}</strong>
                </div>
            @endif

            <label class="has-float-label">
              <input class="form-control" type="email" name="email" placeholder="example@saraga.id" value="{{ old('email') }}"/>
              <span style="font-size: 15px;">Email</span>
            </label>
            @if ($errors->has('email'))
                <div class="alert alert-danger">
                    <strong>{{ $errors->first('email') }}</strong>
                </div>
            @endif

            <label class="has-float-label">
              <input name="telephone" type="number" placeholder="08XXXXXXXXXX" class="border form-control mt-4" value="{{ old('telephone') }}">
              <span style="font-size: 15px;">Telephone</span>
            </label>
            @if ($errors->has('telephone'))
                <div class="alert alert-danger">
                    <strong>{{ $errors->first('telephone') }}</strong>
                </div>
            @endif
            <label class="has-float-label">
              <input name="password" type="password" placeholder="Password" class="border form-control mt-4">
              <span style="font-size: 15px;">Password</span>
            </label>
            @if ($errors->has('password'))
                <div class="alert alert-danger">
                    <strong>{{ $errors->first('password') }}</strong>
                </div>
            @else
                <div class="mt-2">
                  @component('password-validation-message')
                  @endcomponent
                </div>
            @endif
            <button type="submit" class="btn btn-block px-5 mt-4 font-weight-bold button-saraga">Daftar</button>
        </form>
      <div class="row mt-4">
        <div class="col-12">
          <h3 class="lead has-line muted-saraga"><span style="margin-left:5px;"> Atau daftar dengan </span></h3>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-6">
          @component('google-signin')
          @endcomponent
        </div>
        <div class="col-6">
          @component('facebook-signin')
          @endcomponent
        </div>
      </div>
        </div>
    </div>
</section>
@endsection

@section('master_script')

<script type="text/javascript">
    function check_login_status(){
        console.log(firebase.auth().currentUser);
    }
</script>
@endsection