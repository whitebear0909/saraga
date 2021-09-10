@extends('layouts.app')
@section('css')
<style type="text/css">
    h4{
        color: #666666;
        font-size: 1rem;
    }
    h3{
        font-size: 1rem;
    }
    .btn-block{
        border-radius: 0.3rem;
        padding-top: 9;
        padding-bottom: 9;
        margin-bottom: 5px;
        margin-top: 5px;
        font-size: 0.9rem;
        text-align: left;
    }
    .icon{
        margin-right: 15px;
        width: 22px;
        height: 22px;
    }
    .navbar{
        border-bottom: 1px solid #d8d8d8 !important;
    }
    .about-content{
        margin-top: 25px;
    }
</style>
@endsection
@section('content')
<nav class="navbar navbar-expand shadow-sm container sticky-top bg-white">
  <a class="navbar-brand" href="javascript:history.back()">
    <img class="back-icon back-icon-black" src="{{ asset('images/back-icon-black.svg') }}" alt="" title="back">
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
<section class="setting-profile pb-4 mb-4">
  <div class="container bg-white">
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
</section>
@component('classimax.footer')
@endcomponent
@endsection