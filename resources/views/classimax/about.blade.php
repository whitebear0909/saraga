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
          Tentang Saraga
          </b>
      </li>
    </ul>
  </div>
</nav>
<section class="setting-profile pb-4 mb-4">
    <div class="container bg-white">
        <div class="text-center">
          <img src="{{asset('/images/saraga.png')}}" class="img-responsive rounded mt-3" alt="No Image" style=" max-width: 40%; height: auto;">
          <p>Version 0.0.1</p>
        </div>
        <div class="about-content" class="mt-4 pt-4">
            <div id="about-saraga" class="pb-3">
                <h3 class="font-weight-bold"><u>Tentang Saraga</u></h3>
                <p class="text-justify">Saraga adalah sebuah platform yang memungkinkan pengguna mencari, menemukan, dan memesan sarana olahraga secara online.</p>
                <p class="text-justify">
                Saraga selalu berusaha untuk memberikan manfaat maksimal bagi semua pihak yang terlibat. Kami berkolaborasi dengan pemilik sarana olahraga dan membantu mereka meningkatkan pendapatan dan layanan mereka. Kami juga terobsesi dengan pengembangan kualitas hidup di Indonesia. Saraga hadir untuk membantu kamu dan teman satu timmu hidup lebih sehat dan bugar, dan sekaligus membangun pertemanan solid yang didasarkan pada kepercayaan dan kerjasama tim. Dan bagi kami, itu semua dimulai sesederhana berolahraga bersama. 
                </p>
            </div>
            <div id="how-help">
                <h3 class="font-weight-bold pb-3"><u>Bagaimana Kami Dapat Membantu?</u></h3>
                <ul>
                    <li class="ml-4">
                        <strong>Untuk Pengguna :</strong>
                        <p>
                            Saraga membantu pengguna untuk mencari dan memesan sarana olahraga sesuai dengan kriteria pengguna; berdasarkan lokasi, fasilitas, dan waktu ketersediaan. Melalui platform online, proses pencarian dan pemesanan jadi lebih cepat, mudah, dan efektif.
                        </p>
                    </li>
                    <li class="ml-4">
                        <strong>Untuk Pengelola :</strong>
                        <p>
                            Saraga membantu pengelola sarana olahraga agar lebih terjangkau dan mudah ditemukan dengan adanya platform online. Semakin mudah ditemukan, semakin mudah dipesan. Saraga berkomitmen untuk membangun dan mengembangkan sarana olahraga agar dapat beroperasi dengan lebih efisien sehingga fasilitas olahraga semakin produktif.
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@component('classimax.footer')
@endcomponent
@endsection
