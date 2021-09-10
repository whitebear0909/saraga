@extends('layouts.master')

@section('master_css')
<style type="text/css">
  .card{
    width: 100%;
  }

  .modal {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    overflow: hidden;
  }

  .modal-dialog {
    position: fixed;
    margin: 0;
    width: 100%;
    height: 100%;
    padding: 0;
  }

  .modal-content {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    border: 2px solid #3c7dcf;
    border-radius: 0;
    box-shadow: none;
  }

  .modal-header {
    background: white;
  }
  
  .modal-footer {
       position:fixed;
       top:auto;
       right:0;
       left:0;
       bottom:0;    
  }
  .modal-body{
     overflow-y: auto;
  }
  .col-12{
    padding-left: 5;
    padding-right: 5;
  }

  b{
    font-size: 1rem;
  }
  .back-icon{
    margin-right: 5px;
  }
  .lead{
    font-size: 1rem;
  }
  h4{
    font-size: 1rem;
    margin-bottom: 0;
  }
  .fa.fa-angle-right{
    font-size: 1.5rem;
  }

  .card{
    border-radius: 0;
    background-color: #f8f9fa !important;
  }
</style>
@endsection

@section('body')
<div class="modal" id="phone_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
    <nav class="navbar navbar-expand shadow-sm pb-0 pt-0 container">
      <a class="navbar-brand" href="#" data-dismiss="modal">
        <img class="close-icon" src="{{ asset('images/close-icon.svg') }}" alt="" title="close">
      </a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto p-3">
          <li class="nav-item active">    
              <b class="text-saraga modal-title">
              No. Telepon
              </b>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Modal body -->
    <form method="POST" action="{{ route('update-phone') }}">
      @csrf
      <div class="modal-body container">
        <div class="form-row pt-3">
          <div class="form-group col-md-12">
            <label class="has-float-label">
              <input disabled type="text" class="form-control" name="old_phone" value="{{session('auth_data')->telephone}}">
              <span>No. Telepon Sekarang</span>
            </label>
            <p class="lead pb-2">Masukkan No. Telepon Baru</p>
            <label class="has-float-label">
              <input type="text" class="form-control" name="new_phone">
              <span>No. Telepon Baru</span>
            </label>
            @if ($errors->has('telephone'))
                <div class="alert alert-danger">
                    <strong>{{ $errors->first('telephone') }}</strong>
                </div>
            @endif
          </div>
        </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer container">
        <button type="submit" class="btn btn-block button-saraga">Simpan</button>
      </div>
    </form>
    </div>
  </div>
</div>

<div class="modal" id="email_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
    <nav class="navbar navbar-expand shadow-sm pb-0 pt-0 container">
      <a class="navbar-brand" href="#" data-dismiss="modal">
        <img class="close-icon" src="{{ asset('images/close-icon.svg') }}" alt="" title="close">
      </a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto p-3">
          <li class="nav-item active">    
              <b class="text-saraga modal-title">
              Email
              </b>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Modal body -->
    <form method="POST" action="{{ route('update-email') }}">
      @csrf
      <div class="modal-body container">
        <div class="form-row pt-3">
          <div class="form-group col-md-12">
            <label class="has-float-label">
              <input disabled type="text" class="form-control" name="old_email" value="{{session('auth_data')->email}}">
              <span>Email Sekarang</span>
            </label>
            <p class="lead pb-2">Masukkan Email Baru</p>
            <label class="has-float-label">
              <input type="text" class="form-control" name="new_email">
              <span>Email Baru</span>
            </label>
            @if ($errors->has('email'))
                <div class="alert alert-danger">
                    <strong>{{ $errors->first('email') }}</strong>
                </div>
            @endif
          </div>
        </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer fixed container">
        <button type="submit" class="btn btn-block button-saraga">Simpan</button>
      </div>
    </form>
    </div>
  </div>
</div>

<div class="modal" id="password_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
    <nav class="navbar navbar-expand shadow-sm pb-0 pt-0 container">
      <a class="navbar-brand" href="#" data-dismiss="modal">
        <img class="close-icon" src="{{ asset('images/close-icon.svg') }}" alt="" title="close">
      </a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto p-3">
          <li class="nav-item active">    
              <b class="text-saraga modal-title">
              Password
              </b>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Modal body -->
    <form method="POST" action="{{ route('change-password') }}">
      @csrf
      <div class="modal-body container">
        <div class="form-row pt-4">
          <div class="form-group col-md-12">
            <label class="has-float-label">
              <input type="password" class="form-control" name="current_password">
              <span>Password Sekarang</span>
            </label>
            @if ($errors->has('current_password'))
                <div class="alert alert-danger">
                    <strong>{{ $errors->first('current_password') }}</strong>
                </div>
            @endif
            @if ($errors->has('credentials'))
                <div class="alert alert-danger">
                    <strong>{{ $errors->first('credentials') }}</strong>
                </div>
            @endif
            <p class="lead pb-2">Masukkan Password Baru</p>
            <label class="has-float-label" style="margin-bottom:0px">
              <input type="password" class="form-control" name="new_password">
              <span>Password Baru</span>
            </label>
            @if ($errors->has('password'))
                <div class="alert alert-danger">
                  <strong>{{ $errors->first('password') }}</strong>
                </div>
            @else
                <div class="mt-2 mb-2">
                    @component('password-validation-message')
                    @endcomponent
                </div>
            @endif
            <input type="password" class="form-control" name="confirm_password" placeholder="Konfirmasi password">
            @if ($errors->has('new_password'))
                <div class="alert alert-danger mt-2">
                    <strong>{{ $errors->first('new_password') }}</strong>
                </div>
            @endif
          </div>
        </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer container">
        <button type="submit" class="btn btn-block button-saraga">Simpan</button>
      </div>
    </form>
    </div>
  </div>
</div>

<div class="modal" id="privacy_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
    <nav class="navbar navbar-expand shadow-sm container">
      <a class="navbar-brand" href="#" data-dismiss="modal">
        <img class="close-icon" src="{{ asset('images/close-icon.svg') }}" alt="" title="close">
      </a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto p-2">
          <li class="nav-item active">    
              <b class="text-saraga modal-title">
              Kebijakan Privasi
              </b>
          </li>
        </ul>
      </div>
    </nav>
      <div class="modal-body container" style="overflow-y: auto;">
        <div class="text-center">
          <img src="{{asset('/images/saraga.png')}}" class="img-responsive rounded" alt="No Image" style=" max-width: 40%; and height: auto;">
        </div>
          <div class="terms-condition-content mt-4">
            <h5 class="py-3">We may collect and process the following data about you via the Service: </h5>
            <p><span class="font-weight-bold text-dark">• Personal Information you provide to us:</span> We receive and store any information that you enter on the Service or provide to us in any other way, for example, when you download the Service, set up a profile within the Service, or access, upload or download material to or from the Service, including when that material is accessed on a third party platform, service or social network (such as Facebook), that social network or third-party may provide us with the information you agreed the social network or other third party platform could provide to as through the social networks€TMs or third party platforma€TMs Application Programming Interface (API) based on your settings on the third party social network or platform. The types of personal information collected may include your email address, profile picture, username and password. We use this information to validate you as a user when using the Service, to provide the Service to you, including administration of your user account, to notify you of changes to the Service or about any changes to our terms and conditions or this privacy policy, to manage our business, including financial reporting, for the development of new products and services, to send you newsletters to market and advertise our products and services by email, to comply with applicable laws, court orders and government enforcement agency requests, for research and analytics purposes including to improve the quality of the Service and to ensure that the Service is presented in the most effective manner for you and your device. Details of Correspondence: If you contact us, we may keep a record of that correspondence. We will not retain a record of that correspondence for longer than is reasonably necessary. </p>
            <p><span class="font-weight-bold text-dark">• Personal Information that we automatically collect:</span> When you use the Service, we automatically collect information about the device you use to access it and your usage of the Service. The information we collect may include (where available) the type and model of device you use, the device's unique device identifier, operating system, browser type, language options, current time zone and mobile network information to allow you to use the Service, for system administration purposes and to report aggregated, anonymised information to our business partners. If you do not wish for as to provide aggregated, anonymised information to our trusted business partners, please find out how to opt out of our use of analytics cookies in the cookies section below. We use this information to administer the Service and for our internal operations including troubleshooting, data analysis, testing, research, statistical and survey purposes, to improve the Service, how it is presented and its safety and security. Please note that the Service requires access to your devices€TMs photograph storage application in order to store the completed videos, but we do not take any information, videos, photos or other content from your devices photograph storage application. </p>
            <p><span class="font-weight-bold text-dark">• Log information:</span> When you use the Service, we may automatically collect and store the following information in server logs: Internet protocol (IP) addresses, Internet service provider (ISP), clickstream data, browser type and language, viewed and exit pages and date or time stamps. We use this information to communicate with the Service and to better understand our users' operating systems, for system administration and to audit the use of the Service. We do not use this data to identify the name, address or other personal details of any individual. </p>
          </div>
        </div>
    </div>
  </div>
</div>

<nav class="navbar shadow-sm background-saraga sticky-top navbar-expand">
  <div class="container">
    <a class="navbar-brand" href="{{ route('profile')}}" style="color: white;">
      <img class="back-icon" src="{{ asset('images/back-icon.svg') }}" alt="" title="back">
      Edit Profile
    </a>
  </div>
</nav>
<section class="setting-profile">
    <div class="container">
    <div class="row h-100">
      <div class="card col-12">
        <div class="card-body">
          <!-- Panel Edit -->
          <div class="row pt-2">
            <div class="col-12">
              <div class="widget personal-info shadow-sm">
                <div class="widget-header">
                  <a href="#" data-toggle="modal" data-target="#phone_modal">
                    <div class="d-flex">
                      <div class="d-flex mr-auto align-items-center">
                        <h4>No. Telepon</h4>
                      </div>
                      <div class="d-flex ml-auto align-items-center"><span><i class="fa fa-angle-right fa-2x text-saraga" aria-hidden="true"></i></span></div>
                    </div>
                  </a>
                </div>
                <div class="widget-header">
                  <a href="#" data-toggle="modal" data-target="#email_modal">
                    <div class="d-flex">
                      <div class="d-flex mr-auto align-items-center">
                        <h4>Email</h4>
                      </div>
                      <div class="d-flex ml-auto align-items-center"><span><i class="fa fa-angle-right fa-2x text-saraga" aria-hidden="true"></i></span></div>
                    </div>
                  </a>
                </div>
                  <a href="#" data-toggle="modal" data-target="#password_modal">
                    <div class="d-flex">
                      <div class="d-flex mr-auto align-items-center">
                        <h4>Password</h4>
                      </div>
                      <div class="d-flex ml-auto align-items-center"><span><i class="fa fa-angle-right fa-2x text-saraga" aria-hidden="true"></i></span></div>
                    </div>
                  </a>
              </div>
            </div>
          </div>
          <!-- Panel Setting -->
          <div class="row pt-2">
            <div class="col-12">
              <div class="widget personal-info shadow-sm">
                <div class="widget-header">
                  <a href="{{route('about-us')}}">
                    <div class="d-flex">
                      <div class="d-flex mr-auto align-items-center">
                        <h4>Tentang Saraga</h4>
                      </div>
                      <div class="d-flex ml-auto align-items-center"><span><i class="fa fa-angle-right fa-2x text-saraga" aria-hidden="true"></i></span></div>
                    </div>
                  </a>
                </div>
                <div class="widget-header">
                  <a href="{{route('terms')}}">
                    <div class="d-flex">
                      <div class="d-flex mr-auto align-items-center">
                        <h4>Syarat & Ketentuan</h4>
                      </div>
                      <div class="d-flex ml-auto align-items-center"><span><i class="fa fa-angle-right fa-2x text-saraga" aria-hidden="true"></i></span></div>
                    </div>
                  </a>
                </div>
                  <a href="#" data-toggle="modal" data-target="#privacy_modal">
                    <div class="d-flex">
                      <div class="d-flex mr-auto align-items-center">
                        <h4>Kebijakan Privasi</h4>
                      </div>
                      <div class="d-flex ml-auto align-items-center"><span><i class="fa fa-angle-right fa-2x text-saraga" aria-hidden="true"></i></span></div>
                    </div>
                  </a>
              </div>
            </div>
          </div>
    </div>
</section>
@endsection

@section('master_script')
<script type="text/javascript">
  @if ($errors->has('telephone'))
    $('#phone_modal').modal('show');
  @endif
  @if ($errors->has('email'))
    $('#email_modal').modal('show');
  @endif
  @if ($errors->has('credentials'))
    $('#password_modal').modal('show');
  @endif
  @if ($errors->has('current_password'))
    $('#password_modal').modal('show');
  @endif
  @if ($errors->has('new_password'))
    $('#password_modal').modal('show');
  @endif
    $(document).ready(function() {
      var _originalSize = $(window).width() + $(window).height()
      $(window).resize(function() {
        if ($(window).width() + $(window).height() != _originalSize) {
          $(".modal-footer").removeClass("fixed");
        } else {
          $(".modal-footer").addClass("fixed");
        }
      });
    });
</script>

@endsection