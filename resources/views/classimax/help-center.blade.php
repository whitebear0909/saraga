@extends('layouts.app')
@section('css')
<style type="text/css">
    .faq-content, .faq-content p{
        color: #666;
        line-height: 27px;
    }

    .faq-content a{
        color: #007bff;
    }

    ol {
        list-style: inherit;
        list-style-type: decimal;
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
          FAQ
          </b>
      </li>
    </ul>
  </div>
</nav>
<section class="setting-profile pb-4 mb-4">
    <div class="container bg-white pt-4" style="min-height: 69%">
        <div class="faq-content">
            <h3 class="font-weight-bold text-uppercase">Layanan Saraga</h3>
            @component('accordion-card', [
                'accordion_id' => 'accordion-service',
                'card' => [
                    [
                        'title' => "Apa itu Saraga? ",
                        'content' => "
                        <p>Saraga adalah sebuah platform online/ digital yang memungkinkan pengguna untuk mencari, menemukan, dan memesan sarana olahraga secara online.</p>"
                    ],
                    [
                        'title' => "Apa saja jenis sarana olahraga yang tersedia di Saraga? ",
                        'content' => "
                        <p>Saat ini Saraga memiliki listing untuk cabang olahraga bulutangkis. Kedepannya, kami akan terus memperbarui listing kami dari segi jenis olahraga dan jumlah lapangan olahraganya sendiri. </p>"
                    ],
                ]
            ])
            @endcomponent

            <h3 class="font-weight-bold text-uppercase pt-4 mt-4">Pemesanan</h3>
            @component('accordion-card', [
                'accordion_id' => 'accordion-order',
                'card' => [
                    [
                        'title' => "Bagaimana cara memesan fasilitas olahraga di Saraga? ",
                        'content' => "
                            <ol>
                                <li>Pada halaman utama, isi informasi pada satu atau semua kolom berikut: jenis olahraga, tanggal pemesanan, dan lokasi atau nama fasilitas olahraga yang Anda inginkan.  </li>
                                <li>Klik tombol “Cari Fasilitas Olahraga”. </li>
                                <li>Dari pilihan yang ada, pilih fasilitas yang Anda inginkan. </li>
                                <li>Scroll ke bagian bawah dan pilih tanggal, jam, dan durasi booking. </li>
                                <li>Pilih lapangan yang Anda inginkan. </li>
                                <li>Pada halaman Checkout, masukkan voucher atau kode promo (jika ada). Di halaman ini, Anda dapat mengecek detail pemesanan sebelum melakukan pembayaran. Jika sudah benar, klik tombol “Pilih Metode Pembayaran”. </li>
                                <li>Pilih metode pembayaran, kemudian klik “Bayar”. Pastikan Anda melunasi pembayaran sebelum batas waktu yang diberikan habis, agar tidak terjadi pembatalan pemesanan.  </li>
                                <li>Pemesanan berhasil apabila pembayaran telah terverifikasi.  </li>
                            </ol>

                            <p class='mt-4'>Masih bingung? Cara pesan berikut screenshot nya dapat anda lihat disini : <a href='https://saraga.id/blog/cara-booking'>Cara pesan lapangan di Saraga.</a>
                        "
                    ],
                    [
                        'title' => "Apakah saya pasti dapat lapangan jika memesan via Saraga? ",
                        'content' => "
                        <p>Saraga memberikan jaminan penggunaan lapangan jika pesanan telah dikonfirmasi oleh Saraga. Seluruh informasi ketersediaan jam sesuai dengan yang tertera pada situs saraga.id. Saraga juga memberikan jaminan uang kembali 100% jika pemesan tidak dapat menggunakan fasilitas yang sudah dipesan dan dikonfirmasi melalui Saraga di jam pesanan.</p>"
                    ],
                    [
                        'title' => "Bagaimana cara mengajukan pembatalan atas pemesanan? ",
                        'content' => "<p>Pengajuan pembatalan dapat dilakukan dengan menghubungi customer care kami pada halaman <a href='" . route('help-center') . "'>hubungi kami</a>. Sebagai catatan, pembatalan belum tentu disertai dengan pengembalian dana. Pada kasus dana yang dikembalikan, akan dikenakan biaya administrasi. Untuk syarat, ketentuan, dan biaya administrasi pengembalian, dapat dilihat di <a href='" . route('terms') . "'>halaman Syarat dan Ketentuan.</a></p>"
                    ],
                    [
                        'title' => "Bagaimana cara mengecek status pemesanan? ",
                        'content' => "
                            <p>Untuk mengecek status dan histori pemesanan, Anda dapat melakukan langkah berikut:</p>
                            <ol>
                                <li>Kunjungi website <a href='". route('home') ."'>www.saraga.id</a> dan login ke akun Anda.   </li>
                                <li>Di menu bar, pilih “Booking”.  </li>
                                <li>Pada halaman Booking, Anda dapat melihat status dan histori pemesanan Anda. </li>
                            </ol>
                        "
                    ],
                    [
                        'title' => "Mengapa pemesanan saya dibatalkan? ",
                        'content' => "                            
                            <p>Walaupun sudah dibayar, ada beberapa alasan mengapa pemesanan Anda bisa dibatalkan: </p>
                            <ol>
                                <li>Saat proses verifikasi, dana tidak ditemukan karena dana yang Anda bayarkan berbeda dengan total pada <i>invoice</i>.</li>
                                <li>Fasilitas olahraga yang Anda pesan ternyata sudah tidak tersedia (contoh: karena ternyata tutup pada tanggal yang Anda pilih). </li>
                            </ol>
                        "
                    ],  
                ]
            ])
            @endcomponent

            <h3 class="font-weight-bold text-uppercase pt-4 mt-4">Pembayaran</h3>
            <?php 
            // This variable is required because string ")" will cause error
            $payment2 = "<p>Pastikan terlebih dahulu: 1) Anda tidak melakukan penggabungan voucher, 2) Kode voucher yang digunakan sudah sesuai dengan syarat & ketentuan berlaku. Perhatikan batas waktu promo, ketentuan promo, dan kesesuaian promo yang sedang berlangsung. Apabila sudah sesuai ketentuan dan masih tidak bisa digunakan, silakan menghubungi tim Saraga support. </p>";
            ?>
            @component('accordion-card', [
                'accordion_id' => 'accordion-payment',
                'card' => [
                    [
                        'title' => "Bagaimana cara melakukan pembayaran ketika memesan fasilitas olahraga? ",
                        'content' => "
                            <ol>
                                <li>Sebelum melakukan pembayaran, pastikan pemesanan sudah sesuai dengan mengecek detail pemesanan di halaman Checkout. </li>
                                <li>Jika sudah benar, klik tombol “Pilih Metode Pembayaran”. </li>
                                <li>Pilih metode pembayaran, kemudian klik “Bayar”. Pastikan Anda melunasi pembayaran sebelum batas waktu yang diberikan habis, agar tidak terjadi pembatalan pemesanan. </li>
                                <li>Pemesanan berhasil apabila pembayaran telah terverifikasi.  </li>
                            </ol>
                        "
                    ],
                    [
                        'title' => "Mengapa kode voucher atau promo saya tidak dapat digunakan? ",
                        'content' => $payment2
                    ],
                    [
                        'title' => "Berapa lama waktu untuk melakukan pembayaran? ",
                        'content' => "
                            <p>Batas waktu melakukan pembayaran berbeda-beda tergantung dengan metode pembayaran yang Anda pilih. Informasi tersebut bisa Anda dapatkan pada saat memilih metode pembayaran. </p>
                        "
                    ],
                    [
                        'title' => "Saya tidak sengaja transfer pembayaran dua kali. Apa yang harus saya lakukan? ",
                        'content' => "
                            <p>Tidak perlu khawatir. Dana akan kembali dalam waktu 3 jam secara otomatis. Apabila setelah 3 jam dana tidak kembali, mohon hubungi tim Saraga Support. </p>
                        "
                    ],
                    [
                        'title' => "Apakah saya perlu mengirimkan bukti pembayaran? ",
                        'content' => "
                            <p>Untuk pembayaran dengan menggunakan metode transfer bank, Anda wajib meng-upload foto bukti pembayaran. Langkahnya adalah: </p>
                            <li>Klik tombol “Upload Bukti Pembayaran”.</li>
                            <li>Pilih antara kamera atau galeri gambar. </li>
                            <li>Apabila Anda memilih kamera, maka Anda harus mengambil foto bukti pembayaran secara langsung. Apabila Anda memilih galeri gambar, maka pilih foto bukti pembayaran yang telah difoto sebelumnya.  </li>
                            <li>Klik “Upload”. </li>
                        "
                    ],
                    [
                        'title' => "Bagaimana cara melakukan verifikasi pembayaran? ",
                        'content' => "
                            <p>Sistem kami akan melakukan verifikasi secara otomatis. Silakan cek status pemesanan kamu secara berkala di menu Booking. Namun, apabila dalam waktu 1x24 jam hari kerja pembayaran Anda masih belum terverifikasi, mohon hubungi tim Saraga Support. </p>
                        "
                    ],
                    [
                        'title' => "Berapa lama hingga pembayaran terverifikasi? ",
                        'content' => "
                            <p>Verifikasi pembayaran umumnya membutuhkan waktu 5 menit - 1x24 jam tergantung dengan metode pembayaran yang dipilih. Apabila dalam waktu 1x24 jam hari kerja pembayaran Anda masih belum terverifikasi, mohon hubungi tim Saraga Support. </p>
                        "
                    ],
                ]
            ])
            @endcomponent

            <h3 class="font-weight-bold text-uppercase pt-4 mt-4">Refund (Pengembalian Dana)</h3>
            @component('accordion-card', [
                'accordion_id' => 'accordion-service',
                'card' => [
                    [
                        'title' => "Bagaimana saya akan menerima pengembalian dana <i>(refund)</i>? ",
                        'content' => "
                        <p>Pengembalian dana akan dikembalikan sesuai dengan metode pembayaran saat memesan dalam waktu 2x24 jam hari kerja.  </p>"
                    ],
                    [
                        'title' => "Saya belum menerima <i>(refund)</i> atas pembatalan pemesanan. Apa yang harus saya lakukan? ",
                        'content' => "
                        <p>Mohon menunggu selama 2x24 jam hari kerja untuk menerima pengembalian dana. Apabila waktu menunggu sudah terlewat dan dana masih belum diterima, silakan hubungi tim Saraga Support. </p>"
                    ],
                    [
                        'title' => "Nominal <i>refund</i> yang saya terima tidak sesuai dengan pemesanan saya. Apa yang harus saya lakukan? ",
                        'content' => "
                        <p>Silakan hubungi tim Saraga Support. </p>"
                    ],
                ]
            ])
            @endcomponent

            <?php 
            // This variable is required because string ")" will cause error
            $account1 = "
                <ol>
                    <li>Pastikan Anda sudah mempunyai alamat email dan no HP yang valid. </li>
                    <li>Kunjungi halaman registrasi Saraga di <a href='" . route('register') ."'>www.saraga.id/register</a>.  </li>
                    <li>Input data sesuai dengan yang diminta: nama lengkap, email,  no hp, dan password. </li>
                    <li>Klik tombol “Daftar”. </li>
                    <li>Cek email yang didaftarkan untuk verifikasi akun. </li>
                    <li>Akun berhasil didaftarkan. </li>
                </ol>
            ";
            
            $account3 = "
                <ol>
                    <li>Pastikan Anda sudah memiliki akun Saraga sebelumnya. </li>
                    <li>Kunjungi halaman login Saraga di <a href='" . route('login') ."'>www.saraga.id/login</a>.  </li>
                    <li>Masukkan alamat email dan password.  </li>
                    <li>Klik tombol “Masuk”. </li>
                </ol>
            ";
            ?>
            <h3 class="font-weight-bold text-uppercase pt-4 mt-4">Akun</h3>
            @component('accordion-card', [
                'accordion_id' => 'accordion-account',
                'card' => [
                    [
                        'title' => "Bagaimana cara membuat akun di Saraga? ",
                        'content' => $account1
                    ],
                    [
                        'title' => "Saya tidak menerima email verifikasi Apa yang harus saya lakukan? ",
                        'content' => "
                        <p>Sistem kami secara otomatis mengirimkan email verifikasi ke email yang didaftarkan. Apabila Anda tidak menerima email tersebut, pastikan terlebih dahulu bahwa alamat email yang didaftarkan tersebut sudah benar, lalu klik tombol “kirim ulang email verifikasi”. Opsi lain, Anda dapat pilih “Lupa Password” saat login kembali.  </p>"
                    ],
                    [
                        'title' => "Bagaimana cara login ke akun Saraga saya? ",
                        'content' => $account3
                    ],
                    [
                        'title' => "Saya tidak menerima email verifikasi Apa yang harus saya lakukan? ",
                        'content' => "
                        <p>Tidak perlu khawatir. Anda dapat membuat password baru untuk akun tersebut. Ingat, Anda memerlukan akses ke email yang terhubung dengan akun Anda. Cara mengatur ulang password adalah sebagai berikut: 
                           <ol>
                                <li>Pada halaman login, klik tombol “Lupa Password”. </li>
                                <li>Masukkan alamat email akun yang didaftarkan. </li>
                                <li>Klik tombol “Kirim”.   </li>
                                <li>Ikuti petunjuk di layar.  </li>
                            </ol>
                        </p>"
                    ],
                    [
                        'title' => "Saya tidak menerima email yang untuk membuat password baru. Apa yang harus saya lakukan? ",
                        'content' => "
                        <p>Email untuk mengatur ulang password secara otomatis dikirimkan ke email Anda. Apabila Anda tidak menerima email tersebut, pastikan terlebih dahulu bahwa alamat email sudah benar. Kemudian, cek inbox/junk/spam email Anda. </p>"
                    ],
                ]
            ])
            @endcomponent
        </div>
    </div>
</section>
@component('classimax.footer')
@endcomponent
@endsection
