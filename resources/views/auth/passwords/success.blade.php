@extends('layouts.master')

@section('body')
    <section class="setting-profile pb-4 mb-4">
        <div class="container h-100">
            <div class="row align-items-center" style="height:90%">
                <div class="col-12 text-center">
                  <img src="{{asset('/images/saraga.png')}}" class="img-fluid mb-4" alt="Cek Email Anda" style="height:15rem;">
                  <p class="img-message"><b>Anda telah berhasil mengganti password!</b> <br><br>Anda akan diarahkan ke halaman home setelah 5 detik, <br>atau gunakan button kembali ke home untuk melanjutkan sesi.</p>
                  <form method="GET" action="{{route('home')}}">
                    @csrf
                    <button type="submit" class="btn btn-block button-saraga">Kembali Ke Home</button>
                  </form>
                  <div class="p-4"></div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('master_script')
<script type="text/javascript">
$(document).ready(function () {
    // Handler for .ready() called.
    window.setTimeout(function () {
        window.location.href = "{{route('home')}}";
    }, 6000);
});
</script>
@endsection