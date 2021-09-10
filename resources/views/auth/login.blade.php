@extends('layouts.master')

@section('body')

<section class="login py-2 border-top-1 pt-3">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('images/back-icon-black.svg') }}" alt="" class="back-icon" title="close">
      </a>
      <div class="text-center">
        <img class="card-img-top pb-3 login-logo" src="{{ asset('images/saraga.png') }}" alt="Card image cap">
      </div>
      <form method="POST" action="{{ route('email-login') }}">
        @csrf
        <br>
        <label class="has-float-label">
          <input class="form-control" type="email" name="email" required autofocus="true" />
          <span>Email</span>
        </label>
        <label class="has-float-label">
          <input class="form-control" type="password" name="password" required>
          @if ($errors->has('credentials'))
            <div class="alert alert-danger mt-3">
                <strong>{{ $errors->first('credentials') }}</strong>
            </div>
          @endif
          @if ($errors->has('warning'))
            <div class="alert alert-warning mt-3">
                <strong>{{ $errors->first('warning') }}</strong>
            </div>
          @endif
          <span>Password</span>
        </label>
        <a class="d-block muted-saraga pull-right" href="password/reset">Lupa Password?</a>
        <button type="submit" class="btn btn-block mt-3 font-weight-bold button-saraga">Masuk</button>
      </form>

      <div class="row mt-4">
        <div class="col-12">
          <h3 class="lead has-line muted-saraga"><span style="margin-left:5px;"> Atau masuk dengan </span></h3>
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
      <div class="text-center mt-4">
        <h3 class="muted-saraga">Belum Punya Akun? <a class="mt-3 d-inline-block font-weight-strong text-saraga" href="register"><b>Daftar Sekarang</b></a></h3>
      </div>
    </div>
</section>
@endsection

@section('master_script')

<script type="text/javascript">
    function check_login_status(){
        console.log(firebase.auth().currentUser);
    }
    
    function sign_out(){
        firebase.auth().signOut().then(function() {
          // Sign-out successful.
          console.log("sign out successful.");
        }).catch(function(error) {
          // An error happened.
        });
    }
</script>
@endsection