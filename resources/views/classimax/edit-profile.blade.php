@extends('layouts.master')

@section('body')
<nav class="navbar navbar-expand shadow-sm background-saraga">
  <div class="container">
    <a class="navbar-brand" href="{{ route('profile')}}" style="color: white;">
      <img src="{{ asset('images/back-icon.svg') }}" alt="" class="back-icon" title="back" style="margin-right: 5px;"> Edit Profile
    </a>
  </div>
</nav>
<section class="login py-4 border-top-1">
    <div class="container">
        <form id="fimage" method="POST"  enctype="multipart/form-data" action="{{ route('upload-image') }}">
            @csrf
            <div class="pb-3 text-center">
              <div>
                <img src="{{session('auth_data')->profile_image}}" class="img-responsive rounded-circle" alt="No Image" width=100 height=100>
              </div>
              <div class="mt-2">
                <input id="upload" name="profile_image" type="file" style="display: none" />
                <a href="" id="upload_profile" style="font-size: 0.9rem; color: rgb(7, 108, 200);">Ganti Foto Profil</a>
                @if ($errors->has('profile_image'))
                    <div class="alert alert-danger">
                        <strong>{{ $errors->first('profile_image') }}</strong>
                    </div>
                @endif
              </div>
            </div>
          </form>

          <form method="POST" action="{{ route('update-profile') }}">
            @csrf
            <label class="has-float-label">
              <input class="form-control" type="text" name="fullname" value="{{session('auth_data')->name}}"/>
              <span style="font-size: 15px;">Nama Lengkap</span>
            </label>
            @if ($errors->has('fullname'))
                <div class="alert alert-danger">
                    <strong>{{ $errors->first('fullname') }}</strong>
                </div>
            @endif

            <label class="has-float-label">
              <input class="form-control datepicker" type="date" name="birthdate" value="{{session('auth_data')->birthdate}}"/>
              <span style="font-size: 15px;">Tanggal Lahir</span>
            </label>
            @if ($errors->has('birthdate'))
                <div class="alert alert-danger">
                    <strong>{{ $errors->first('birthdate') }}</strong>
                </div>
            @endif

            <label class="has-float-label">
              <select class="form-control" name="gender" value="{{session('auth_data')->gender}}">
                <option value=0>Laki-laki</option>
                <option value=1>Perempuan</option>
              </select>
              <span style="font-size: 15px;">Gender</span>
            </label>
            @if ($errors->has('gender'))
                <div class="alert alert-danger">
                    <strong>{{ $errors->first('gender') }}</strong>
                </div>
            @endif

            <label class="has-float-label">
              <textarea class="form-control" type="text" name="address">{{session('auth_data')->address}}</textarea>
              <span style="font-size: 15px;">Alamat</span>
            </label>
            @if ($errors->has('address'))
                <div class="alert alert-danger">
                    <strong>{{ $errors->first('address') }}</strong>
                </div>
            @endif
            <button type="submit" class="btn btn-block font-weight-bold background-saraga">Simpan</button>
        </form>
    </div>
</section>
@endsection

@section('master_script')
<script type="text/javascript">

  document.getElementById("upload").onchange = function() {
      document.getElementById("fimage").submit();
  };

  $(".datepicker").flatpickr({
      altInput: true,
      altFormat: "j F Y",
      dateFormat: "Y-m-d"
  });
  $(function(){
    $("#upload_profile").on('click', function(e){
        e.preventDefault();
        $("#upload:hidden").trigger('click');
    });
  });
</script>
@endsection