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
          Syarat Dan Ketentuan
          </b>
      </li>
    </ul>
  </div>
</nav>
<section class="setting-profile pb-4 mb-4">
    <div class="container bg-white">
        <div class="text-center">
          <img src="{{asset('/images/saraga.png')}}" class="img-responsive rounded mt-3" alt="No Image" style=" max-width: 40%; height: auto;">
        </div>
          <div class="terms-condition-content mt-3">
            <p class="text-center"><strong>SYARAT DAN KETENTUAN PENGGUNAAN</strong></p>
            <p>SYARAT PENGGUNAAN DI BAWAH INI HARUS DIBACA SEBELUM MENGGUNAKAN SITUS INI. PENGGUNAAN SITUS INI MENUNJUKKAN
              PENERIMAAN DAN KEPATUHAN TERHADAP SYARAT DAN KETENTUAN DI BAWAH INI</p>
            <ol>
              <li><strong>Pendahuluan</strong>
                <ol>
                  <li>Terima kasih atas kunjungan Anda ke Website dan Layanan Kami, www.saraga.id. Kami berharap agar kunjungan Anda
                    dapat bermanfaat dan memberi kenyamanan dalam mengakses dan menggunakan seluruh Layanan yang tersedia di Website
                    Kami. Kami terus menerus berupaya memperbaiki dan meningkatkan mutu pelayanan Kami, dan sangat menghargai segala
                    kritik, saran dan masukan dari Anda. Silakan Anda menyampaikannya ke Kami melalui surel di cs@saraga.id atau
                    telepon di 08119339891.</li>
                </ol>
              </li>
              <li><strong>Umum</strong>
                <ol>
                  <li>saraga.id situs ("Situs") dikelola oleh Saraga Indonesia ("kami"). Dengan mengakses dan/atau menggunakan
                    Situs, Anda mengakui bahwa Anda telah membaca dan memahami, dan menyetujui untuk terikat oleh Syarat Penggunaan
                    yang ditetapkan di bawah ini dan syarat dan ketentuan lainnya dalam kaitannya dengan Situs, termasuk namun tidak
                    terbatas pada kerahasiaan dan FAQ, yang merupakan bagian yang tidak terpisahkan dari Syarat Penggunaan
                    ("Syarat"). Anda harus setidaknya berusia delapan belas (18) tahun untuk menggunakan Situs ini.</li>
                  <li>Syarat dan Ketentuan Umum dapat Kami ubah, modifikasi, tambah, hapus atau koreksi (&ldquo;perubahan&rdquo;)
                    setiap saat sesuai dengan pengembangan Website dan peraturan perundang-undangan. Anda Kami anjurkan untuk
                    mengunjungi Website Kami secara berkala agar dapat mengetahui adanya perubahan tersebut. Dengan terus
                    menggunakan Situs ini setelah perubahan tersebut terhadap Syarat, pengunjung, pengguna atau Pengguna Terdaftar
                    ("Anda" atau "pengguna") sepakat dan menyetujui perubahan. Jika Anda menggunakan salah satu layanan kami yang
                    lain, maka penggunaan Anda didasarkan pada kepatuhan dan penerimaan terhadap syarat dan ketentuan yang berlaku
                    untuk layanan tersebut.</li>
                </ol>
              </li>
              <li><strong>Penggunaan </strong>
                <ol>
                  <li>Website ini dan produk-produk, teknologi dan proses yang terdapat atau terkandung dalam Website, dimiliki oleh
                    Kami atau pihak ketiga yang memberi hak kepada Kami. Kecuali untuk penggunaan yang secara tegas diijinkan dan
                    diperbolehkan dalam Syarat dan Ketentuan Umum ini, Anda tidak memiliki ataupun menerima dan tiket.com tidak
                    memberikan hak lain apapun ke Anda atas Website ini, berikut dengan segala data, informasi dan konten
                    didalamnya.</li>
                  <li>Dengan menggunakan Website ini atau Layanan yang tersedia didalamnya, maka Anda menyatakan setuju tidak akan
                    men-download, menayangkan atau mentransmisi dengan cara apa pun, dan atau membuat konten apa pun tersedia untuk umum
                    yang tidak konsisten dengan penggunaan yang diijinkan dalam Syarat dan Ketentuan Umum ini.</li>
                  <li>Dalam Website ini mungkin terdapat&nbsp;link&nbsp;(tautan) ke website yang dikelola oleh pihak ketiga
                    (&ldquo;Situs Eksternal&rdquo;) yang melakukan kerjasama dengan Kami. Kami tidak mengoperasikan, mengendalikan atau
                    mendukung dalam bentuk apa pun Situs Eksternal yang bersangkutan ataupun konten/isinya. Anda bertanggung jawab penuh
                    atas penggunaan Situs Eksternal tersebut dan dianjurkan untuk mempelajari syarat dan ketentuan dari Situs Eksternal
                    itu secara seksama.&nbsp;</li>
                  <li>Layanan yang tersedia dalam Website ini secara umum menggunakan sistem&nbsp;re-marketing&nbsp;dan
                    sistem&nbsp;cookies&nbsp;yang memungkinkan pihak ketiga (termasuk dan tidak terbatas pada Google) mengakses dan
                    menggunakan data kunjungan dalam sistem&nbsp;Cookies website&nbsp;ini untuk menampilkan dan menayangkan kembali tiap
                    iklan tiket.com melalui internet.</li>
                  <li>Anda tidak boleh membuat link, melakukan screen capture atau data crawling ke Website tanpa adanya persetujuan
                    tertulis sebelumnya dari saraga.id. Hal-hal tersebut dianggap sebagai pelanggaran hak milik intelektual saraga.id.
                  </li>
                </ol>
              </li>
              <li><strong>Lingkup Layanan Kami</strong>
                <ol>
                    <li>saraga.id menyediakan platform&nbsp;<em>online</em> sehingga Anda dapat menelusuri berbagai jenis sarana olahraga,
                    serta membuat reservasi, pemesanan dan/atau pembelian ("Layanan"). Pengguna dapat membuat pemesanan layanan yang
                    disediakan oleh penyedia sarana olahraga yang bekerjasama dengan saraga.id ("Vendor") di Situs. Dengan
                    meletakkan pesanan melalui Situs, Anda akan dapat memesan dan/atau membeli lapangan atau sarana olahraga pada
                    Situs kami dan sekaligus melakukan pembayaran secara online dan aman melalui berbagai sistem dan fasilitas
                    pembayaran yang tersedia. Kami akan memberikan konfirmasi pemesanan atau pembelian melalui konfirmasi email.
                    Kami berhak untuk menolak pemesanan sebagaimana diatur di bawah ini.</li>
                    <li>Layanan Kami secara umum dapat tersedia secara online selama dua puluh empat jam sehari dan tujuh hari dalam 
                    seminggu; kecuali dalam hal adanya perbaikan, peningkatan atau pemeliharaan pada Website Kami.</li>
                    <li>Produk disediakan, disuplai dan diselenggarakan oleh pihak ketiga ("Mitra Penyedia") yang telah mengadakan
                    kerjasama dan telah mengadakan ikatan, baik secara langsung ataupun tidak langsung, dengan Kami. Anda memahami dan
                    mengakui bahwa:
                      <ul type="a">
                        <li>Pemesanan dan pembelian yang Anda lakukan melalui saraga.id, merupakan hubungan hukum dan kontrak yang mengikat
                          antara Anda dan Mitra Penyedia Kami. Dalam hal ini, saraga.id bertindak sebagai agen atau perantara yang bertugas
                          untuk memfasilitasi transaksi antara antara Anda dan mitra Kami.</li>
                        <li>Data dan informasi termasuk foto terkait dengan Produk tertentu yang Kami cantumkan pada Website merupakan data
                          dan informasi yang Kami terima dari Mitra Penyedia, dan Kami mempublikasikan data dan informasi tersebut dengan
                          itikad baik sesuai dengan data dan informasi yang Kami terima. Oleh karena itu, data, informasi dan foto dapat
                          berbeda dengan aslinya.</li>
                        <li>Kami tidak memiliki kendali atas data dan informasi yang diberikan oleh Mitra Penyedia, dan Kami tidak menjamin
                          bahwa data dan informasi yang disajikan adalah akurat, lengkap, atau benar, dan terbebas dari kesalahan.</li>
                        <li>Anda tidak diperbolehkan untuk menjual kembali Produk Kami, menggunakan, menyalin, mengawasi, menampilkan,
                          men-download, atau mereproduksi konten atau informasi, piranti lunak, atau Layanan apa pun yang tersedia di Website
                          Kami untuk kegiatan atau tujuan komersial apapun, tanpa persetujuan tertulis dari Kami sebelumnya.</li>
                        <li>Anda dapat menggunakan Website dan Layanan yang tersedia untuk membuat pemesanan/pemesanan yang sah. Anda tidak
                          diperbolehkan untuk membuat pemesanan/pemesanan untuk tujuan spekulasi, tidak benar atau melanggar hukum. Jika Kami
                          menemukan atau sewajarnya menduga bahwa pemesanan/pemesanan yang Anda buat ternyata tidak sah, maka Kami
                          mencadangkan hak untuk membatalkan pemesanan/pemesanan Anda.</li>
                        <li>Anda juga menjamin bahwa data dan informasi yang Anda berikan ke Kami, baik sehubungan dengan pemesanan/pemesanan
                          ataupun pendaftaran pada saraga.id, adalah data dan informasi yang akurat, terkini dan lengkap. Untuk ketentuan
                          penggunaan data dan informasi yang Anda berikan, silakan untuk merujuk pada Kebijakan Penggunaan Data.</li>
                        <li>Transaksi saraga.id yang resmi hanyalah yang dilakukan melalui website saraga.id. Kami tidak bertanggungjawab atas
                          transaksi yang terjadi diluar website saraga.id. Kami juga tidak bertanggungjawab atas kerugian dalam bentuk apapun
                          yang Anda alami.</li>
                        <li>Komunikasi yang resmi dari Kami hanyalah yang berasal dari alamat email sebagai berikut: <a
                            href="mailto:cs@saraga.id">cs@saraga.id</a>. Komunikasi diluar alamat email tersebut bukan merupakan tanggung
                          jawab Kami.</li>
                        <li>Segala informasi yang terdapat dalam Surat Konfirmasi hanya untuk nama yang tertera pada Surat Konfirmasi. Kami
                          tidak bertanggung jawab dalam hal informasi tersebut tersebar karena kelalaian dan/atau kesengajaan Anda sehingga
                          menimbulkan kerugian bagi Anda atau pihak ketiga yang lainnya.</li>
                      </ul>
                    </li>
                    <li>Meskipun kami akan menggunakan keahlian kami dengan hati-hati dalam melakukan layanan, kami tidak
                      memverifikasi, dan tidak menjamin, bahwa semua informasi yang diberikan akurat, lengkap, benar atau terbaru yang
                      tersedia, dan kami tidak bertanggung jawab atas setiap kesalahan (termasuk kesalahan penempatan dan pengetikan),
                      gangguan (baik sementara dan/atau parsial, kerusakan, perbaikan atau peningkatan ke situs atau sebaliknya),
                      informasi yang tidak akurat, menyesatkan atau palsu atau informasi yang tidak tersampaikan. Hal ini mencakup
                      setiap informasi yang ditampilkan pada Situs atau platform kami lainnya sehubungan dengan jenis lapangan,
                      kondisi sarana olahraga berikut sarana dan prasarana penunjangnya, atau informasi lainnya yang berkenaan dengan
                      spesifikasi fasilitas sarana olahraga.</li>
                    <li>Perubahan dalam kondisi pasar atau keadaan yang terjadi dapat menyebabkan perubahan dalam waktu singkat, yang
                      menyebabkan informasi tidak akurat atau tidak berlaku. Dalam hal terjadi masalah, layanan pelanggan dapat berusaha
                      untuk membantu Anda dan memenuhi permintaan Anda.</li>
                    <li>Dalam kasus tertentu, kami dapat membatalkan atau menolak pemesanan berkenaan dengan "Kesalahan Nyata", yang tidak
                      tergantung pada letak kesalahan berasal. Untuk menghindari keraguan, Kesalahan Nyata adalah kesalahan pada Situs
                      (misalnya, dalam hal harga) yang tidak ada satu orang yang rasional pun akan menganggap layak atau membuat bisnis
                      dimengerti. Jumlah yang dibebankan akan diganti tanpa biaya lebih lanjut dalam kasus seperti itu.</li>
                </ol>
              </li>
              <li><strong>Perubahan dan Pembatalan</strong>
                <ol>
                  <li>Dengan membuat pemesanan, pesanan atau reservasi melalui Situs, Anda menerima dan setuju dengan syarat dan
                    ketentuan dari Vendor yang berlaku, termasuk yang berkaitan dengan kebijakan tentang pembatalan dan/atau
                    ketiadaan, atau sehubungan dengan permintaan khusus Anda yang mungkin diberikan kepada Vendor. saraga.id tidak
                    bertanggung jawab atas setiap pelanggaran syarat dan ketentuan yang disepakati antara Vendor dan pengguna, atau
                    yang didasarkan pada permintaan khusus pengguna, sehingga harap membaca syarat dan ketentuan Vendor dengan
                    cermat.</li>
                  <li>Sehubungan dengan pembatalan pengguna yang telah dilakukan, saraga.id mungkin dapat menahan atau mengambil bagian
                    dari jumlah yang dibayarkan untuk mengganti biaya yang telah dikeluarkan sehubungan dengan pembatalan.</li>
                  <li>Kecuali secara tegas dinyatakan lain dalam Syarat dan Ketentuan Umum ini atau ditentukan secara terpisah sesuai
                    kebijakan Mitra Penyedia, semua pembelian Produk di saraga.id tidak dapat diubah, dibatalkan, dikembalikan uang,
                    ditukar atau dialihkan ke orang/pihak lain.</li>
                  <li>Dengan melakukan pemesanan atau pembelian Produk di saraga.id, Anda dianggap telah memahami, menerima dan
                    menyetujui kebijakan dan ketentuan pembatalan, serta segala syarat dan ketentuan tambahan yang diberlakukan oleh
                    Mitra Penyedia. Harap dicatat bahwa tarif atau penawaran tertentu tidak memenuhi syarat untuk pembatalan atau
                    pengubahan. Anda bertanggung-jawab untuk memeriksa dan memahami sendiri kebijakan dan ketentuan pembatalan tersebut
                    sebelumnya.</li>
                  <li>Tata cara pengajuan perubahan dan pembatalan atas pesanan (jika ada) diatur dalam Surat Konfirmasi maupun media
                    lainnya yang dapat Kami perbaharui dari waktu ke waktu.</li>
                  <li>Untuk setiap pembatalan pesanan yang Anda lakukan, Kami akan melakukan pengembalian dana dengan ketentuan sebagai
                    berikut:
                    <ul type="a">
                      <li>Pengembalian dana dilakukan dengan jumlah dan waktu sesuai dengan kebijakan dan ketentuan pembatalan yang
                        diberlakukan oleh Mitra Penyedia dan Kami.</li>
                      <li>Jumlah dana yang dikembalikan kepada Anda tidak lebih besar dari jumlah nominal yang Anda bayarkan kepada Kami,
                        disesuaikan dengan kebijakan yang diberlakukan oleh masing-masing Mitra Penyedia dan Kami.</li>
                      <li>Kami akan meneruskan setiap pembatalan pesanan yang Anda lakukan kepada Mitra Penyedia. Sehingga, Kami
                        memerlukan
                        waktu untuk mendapatkan kembali pembayaran yang Anda lakukan sebelumnya yang telah Kami teruskan kepada Mitra
                        Penyedia. Untuk itu, Anda memaklumi setiap waktu yang Kami butuhkan untuk mengembalikan dana tersebut kepada Anda.
                      </li>
                    </ul>
                  </li>
                  <li>Anda menyetujui bahwa Kami hanya dapat memproses pengajuan pembatalan yang sesuai dengan syarat dan ketentuan
                    pembatalan yang diberlakukan oleh Mitra Penyedia, Syarat dan Ketentuan Penggunaan Saraga.id Syarat dan Ketentuan
                    Refund serta syarat dan ketentuan lainnya yang berlaku pada Website Kami. Untuk itu, Anda membebaskan Kami dalam hal
                    terdapat kerugian yang Anda derita akibat dari pengajuan pembatalan yang Anda lakukan maupun kelalaian Anda dalam
                    memenuhi ketentuan syarat dan ketentuan pembatalan yang diberlakukan oleh Mitra Penyedia, Syarat dan Ketentuan
                    Penggunaan saraga.id, Syarat dan Ketentuan Refund serta syarat dan ketentuan lainnya yang berlaku pada Website
                    Kami.&nbsp;Refund dapat berupa dana tunai, voucher/ credit, point atau kombinasi dari semuanya.</li>
                  <li>Walaupun sangat kecil kemungkinan Kami membatalkan atau mengubah pemesanan yang sudah Kami konfirm dalam Surat
                    Konfirmasi, namun jika diperlukan, Kami akan memberitahu Anda secepat mungkin. Dalam hal pembatalan atau perubahan
                    apapun terkait pesanan tersebut dilakukan atas dasar kebijakan/keputusan dari Mitra Penyedia, hal tersebut adalah
                    diluar kendali Kami. Oleh karena itu, maka tanggung jawab Kami hanya sebatas pelaksanaan refund sesuai dengan arahan
                    serta syarat dan ketentuan yang ditetapkan oleh Mitra Penyedia dan peraturan perundang-undangan yang berlaku.</li>
                  <li>Dalam hal Mitra Penyedia Produk mengalami keadaan dimana tidak bisa menyerahkan atau melaksanakan Produk, maka hak
                    Anda tunduk pada syarat dan ketentuan Mitra Penyedia atau pihak yang ditunjuk untuk bertindak untuk dan atas nama
                    Mitra Penyedia.</li>
                  <li>Kami tidak bertanggung-jawab ataupun menanggung kerugian Anda dalam hal Kami tidak dapat menyerahkan Produk atau
                    memberi Layanan kepada Anda, akibat dari hal-hal yang terjadi akibat keadaan memaksa atau yang diluar kekuasaan Kami
                    atau Mitra Penyedia Kami untuk mengendalikan, seperti, tapi tidak terbatas pada: perang, kerusuhan, teroris,
                    perselisihan industrial, tindakan pemerintah, epidemik, pandemik, bencana alam, kebakaran atau banjir, cuaca
                    ekstrim, dan lain sebagainya.</li>
                  <li>Jika Anda tidak mendapatkan Produk sesuai dengan Surat Konfirmasi, maka Kami akan merekomendasikan Produk yang
                    sejenis dengan harga yang sejenis atau setara dengan Produk yang Anda beli, tanpa ada beban biaya tambahan, atau
                    uang Anda kembali.</li>
                  <li>Dalam hal Anda melakukan pembayaran dengan kartu kredit, Anda menegaskan bahwa semua permintaan refund yang
                    diajukan kepada saraga.id adalah bentuk dari persetujuan yang tegas dari Anda untuk menolak/melepaskan/menghentikan
                    permintaan yang Anda ajukan kepada bank penerbit kartu kredit atas transaksi yang sama. saraga.id memiliki hak untuk
                    membatalkan permintaan refund yang telah dikabulkan oleh saraga.id atau voucher yang telah diberikan saraga.id dalam
                    hal ada pengembalian ganda.</li>
                  <li>Dalam hal Anda meminta adanya perubahan atau pembatalan pada transaksi, Anda setuju bahwa saraga.id dapat
                    menyesuaikan atau membatalkan manfaat yang Anda dapat dari transaksi tersebut, termasuk namun tidak terbatas pada
                    voucher Saraga.</li>
                  <li>Besaran pengembalian dana :
                    <br><br>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th width="312">
                            <p><strong>Waktu Pembatalan</strong></p>
                          </th>
                          <th width="312">
                            <p><strong>Biaya Pembatalan</strong></p>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td width="312">
                            <p>24 jam atau lebih sebelum waktu pemesanan/ check-in</p>
                          </td>
                          <td width="312">
                            <p>Pengembalian uang 100% dengan biaya administrasi pembatalan Rp 15.000/ jam.</p>
                          </td>
                        </tr>
                        <tr>
                          <td width="312">
                            <p>Kurang dari 24 jam sebelum waktu pemesanan/ check-in</p>
                          </td>
                          <td width="312">
                            <p>Pengembalian uang 75% dengan biaya administrasi pembatalan Rp 15.000/ jam.</p>
                          </td>
                        </tr>
                        <tr>
                          <td width="312">
                            <p>Tidak datang ke fasilitas olahraga tanpa pemberitahuan dan atau setelah waktu pemesanan layanan</p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <b>Setelah waktu pemesanan/ check-in</b>
                    <p>Jika Anda memutuskan untuk membatalkan pemesanan setelah waktu pemesanan/ check-in yang dijadwalkan atau Anda tidak
                      datang ke fasilitas pemesanan, harga pemesanan penuh akan dibebankan sebagai pembatalan / biaya ketidakdatangan.</p>
                    <b>Pembatalan saat waktu pemesanan/ check-in</b>
                    <p>Jika Anda memutuskan untuk mempersingkat masa pemesanan Anda setelah waktu bermain/ check-in, Anda akan dikenakan
                      biaya untuk 1 jam berikutnya setelah pembatalan resmi. Uang untuk sisa jam akan dikembalikan. Terdapat biaya
                      administrasi sebesar Rp 15.000/ jam yang dibebankan ke pemesan. Jika Anda menggunakan promo, tarif fasilitas dapat
                      berbeda dari harga di mana fasilitas dipesan.</p>
                  </li>
                  <li>Pemesanan dapat dibatalkan dengan menghubungi dukungan pelanggan kami +628119339891 email kami ke
                    cs.escalations@saraga.id. Jumlah pengembalian dana - jika berlaku - akan dikembalikan dalam waktu 30-45 hari kerja
                    setelah pengembalian dana disetujui. * Permintaan pengembalian uang hanya dapat dilakukan pada bulan pemesanan yang
                    sama.</li>
                </ol>
              </li>
              <li><strong>Pemesanan/ Pembelian Produk</strong>
                <ol>
                  <li>Pemesanan/pembelian Produk dianggap berhasil atau selesai setelah Anda melakukan pelunasan pembayaran dan
                    saraga.id menerbitkan dan mengirim ke Anda, Surat Konfirmasi pemesanan/pembelian. Apabila terjadi perselisihan
                    atau permasalahan, maka data yang terdapat pada saraga.id akan menjadi acuan utama dan dianggap sah.</li>
                  <li>Dengan menyelesaikan pemesanan/pembelian, maka Anda dianggap setuju untuk menerima: (i) email yang akan Kami kirim
                    tidak lama sebelum tanggal pelayanan yang Anda pesan, memberikan Anda informasi tentang Produk yang Anda beli, dan
                    menyediakan Anda informasi dan penawaran tertentu (termasuk penawaran pihak ketiga yang telah Anda pilih sendiri)
                    yang terkait dengan pemesanan dan tujuan Anda, dan (ii) email yang akan Kami kirim tidak lama setelah tanggal
                    pelayanan untuk mengundang Anda untuk melengkapi formulir ulasan pengguna Produk Kami. Selain dari konfirmasi email
                    yang menyediakan konfirmasi pemesanan dan email-email yang telah Anda pilih sendiri, Kami tidak akan mengirimi Anda
                    pemberitahuan (yang diinginkan maupun yang tidak), email, korespondensi lebih lanjut, kecuali jika diminta secara
                    khusus oleh Anda.</li>
                  <li>Anda diwajibkan untuk memperhatikan syarat dan ketentuan Produk yang terkait dengan: (i) pembatasan usia, (ii)
                    diperlukannya reservasi dan/atau konfirmasi terlebih dahulu sebelum kehadiran, (iii) adanya fixed time &amp; date,
                    (iv) ketidakhadiran (no show) oleh Anda dan keterkaitannya dengan refund, (v) pembatasan pengalihan atau perubahan
                    nama pada Surat Konfirmasi, (vi) dokumen yang harus dibawa pada saat penukaran Surat Konfirmasi, (vii) surat
                    identitas asli dan kartu kredit asli yang dipakai saat pembelian yang harus dibawa pada saat penukaran Surat
                    Konfirmasi. Kami tidak bertanggung jawab dalam hal Anda lalai memperhatikan dan/atau tidak memperhatian syarat dan
                    ketentuan tertentu tersebut.</li>
                  <li>Untuk menggunakan layanan kami, Anda memiliki kewajiban untuk melakukan reservasi terlebih dahulu sesuai dengan
                    syarat dan ketentuan yang berlaku. Anda bertanggung jawab sepenuhnya untuk mengikuti pengaturan tersebut.</li>
                </ol>
              </li>
              <li><strong>Harga dan Promosi</strong>
                <ol>
                  <li>Harga yang ditampilkan dapat berubah berdasarkan keadaan tertentu, namun harga tidak akan berubah untuk Produk
                    yang sudah dibeli oleh Anda dan yang untuk Produk mana Anda sudah mendapat Surat Konfirmasi.</li>
                  <li>Kami selalu berupaya untuk menyediakan harga terbaik atas Produk untuk dapat dipesan oleh&nbsp;Anda. Harga yang
                    tertera mungkin memiliki syarat dan ketentuan khusus, sehingga Anda harus memeriksa sendiri dan memahami syarat dan
                    ketentuan khusus yang berlaku terhadap suatu harga atau tarif tertentu sebelum Anda melakukan pemesanan. Anda juga
                    perlu memeriksa dan memahami ketentuan mengenai pembatalan dan pengembalian dana yang secara khusus berlaku untuk
                    Produk dan/atau harga tertentu.</li>
                  <li>Kami dapat menawarkan harga yang lebih rendah dan/atau promosi dari waktu ke waktu. Harap diketahui bahwa hal
                    tersebut mungkin memerlukan ketentuan dan persyaratan yang berbeda, misalnya, sehubungan dengan kebijakan pemesanan
                    dan pengembalian dana.</li>
                  <li>Apabila ada promosi yang diberikan oleh Vendor secara langsung, maka hak dan wewenang atas promosi tersebut
                    sepenuhnya berada pada Vendor dan mungkin tidak berlaku untuk pemesanan yang dilakukan melalui saraga.id.</li>
                </ol>
              </li>
              <li><strong>Pembayaran</strong>
                <ol>
                  <li>Pelunasan atas harga pembelian merupakan syarat untuk mendapatkan Produk dari Kami.</li>
                  <li>Kami menerima pembayaran dengan sistem pembayaran menggunakan kartu kredit (VISA, Master Card, American Express
                    dan JCB), Virtual Account, transfer antar rekening serta antar bank, dan metode pembayaran lainnya sebagaimana
                    tercantum di Website.</li>
                  <li>Dalam hal terjadi kasus penipuan kartu kredit atau penyalah-gunaan sistem pembayaran oleh pihak-pihak ketiga
                    manapun, maka kejadian tersebut harus segera dilaporkan ke Kami dan perusahaan/bank penerbit kartu kredit Anda,
                    untuk Anda memperoleh penanganan lebih lanjut sesuai dengan prosedur dan aturan yang berlaku.</li>
                  <li>Anda wajib memperhatikan secara teliti instruksi pembayaran yang Kami berikan. Kekeliruan pembayaran yang Anda
                    lakukan sebagai berikut: (i) pengisian nomor rekening Kami maupun nomor Virtual Account yang Kami tentukan untuk
                    setiap pemesanan yang Anda lakukan; dan/atau (ii) kesalahan melakukan nominal pembayaran atas pemesanan Anda, yang
                    mengakibatkan berpindahnya dana Anda ke rekening atau Virtual Account yang tidak sesuai dengan instruksi pembayaran
                    yang Kami berikan ataupun terdebetnya rekening bank Anda sejumlah nilai nominal yang tidak sesuai dengan instruksi
                    pembayaran yang Kami berikan, sehingga mengakibatkan tidak terkonfirmasinya pesanan Anda, maka Anda dengan ini
                    mengetahui dan menyetujui bahwa Kami tidak memiliki kewajiban untuk melakukan pengembalian dana kepada Anda sebagai
                    akibat dari kekeliruan ataupun kelalaian yang Anda lakukan sendiri dengan tidak mengikuti instruksi pembayaran yang
                    telah Kami berikan, sehingga dengan demikian kerugian tersebut menjadi resiko dan tanggung jawab Anda sepenuhnya.
                    Selain itu, kekeliruan pembayaran sebagaimana disebutkan di atas tidak dapat dianggap sebagai pembayaran yang sah
                    atas pesanan Anda, sehingga Anda harus melakukan pembayaran sesuai dengan instruksi pembayaran yang telah Kami
                    berikan untuk mendapatkan konfirmasi terhadap pesanan yang Anda lakukan.</li>
                  <li>Atas setiap pemesanan yang dapat Kami konfirmasi, Kami akan mengirim Anda Surat Konfirmasi via email yang berisi
                    uraian produk dan pemesanan yang Anda buat serta konfirmasi pembayaran. Anda bertanggung-jawab untuk mencetak dan
                    menjaga informasi yang tertera pada Surat Konfirmasi yang Kami kirim. Surat Konfirmasi ini merupakan dokumen yang
                    sangat penting dan Anda wajib membawa cetakan dan atau salinan digital dari Surat Konfirmasi ini pada saat Anda akan
                    menggunakan atau mengambil Produk yang Anda beli. Kami atau Mitra Penyedia Kami berhak untuk menolak memberikan
                    Produk atau pelayanan, jika Anda tidak dapat membuktikan bahwa Anda telah secara sah melakukan pemesanan dan
                    pelunasan, dan Anda membebaskan saraga.id dari segala tanggung-jawab dan kerugian Anda dalam bentuk apapun.</li>
                  <li>Konfirmasi yang Anda terima dari Kami setelah anda selesai melakukan pemesanan dan sebelum melakukan pembayaran
                    adalah trigger bahwa proses transaksi pembelian sedang terjadi. Anda hanya dapat melakukan pembatalan setiap saat
                    sebelum pembayaran dilakukan. Atas pembayaran yang telah Anda lakukan, mohon menunggu hingga anda menerima Surat
                    Konfirmasi. Dalam hal Surat Konfirmasi tidak segera Anda terima, jangan batalkan atau ubah pemesanan Anda dan segera
                    hubungi Customer Service Kami untuk penjelasan lebih lanjut.</li>
                  <li>Dalam hal batas waktu sistem Kami untuk memproses pesanan Anda telah lewat sehingga Anda tidak mendapatkan Produk
                    yang Anda pesan, maka Anda hanya berhak atas refund atau kompensasi lain yang ditentukan berdasarkan ketentuan
                    perundang-undangan yang berlaku.</li>
                  <li>Dalam hal Anda melakukan pembayaran dengan kartu kredit, Anda menegaskan bahwa semua permintaan refund yang
                    diajukan kepada saraga.id adalah bentuk dari persetujuan yang tegas dari Anda untuk menolak/melepaskan/menghentikan
                    permintaan yang Anda ajukan kepada bank penerbit kartu kredit atas transaksi yang sama. saraga.id memiliki hak untuk
                    membatalkan permintaan refund yang telah dikabulkan oleh saraga.id atau voucher yang telah diberikan saraga.id dalam
                    hal ada pengembalian ganda.</li>
                  <li>Dalam hal Anda meminta adanya perubahan atau pembatalan pada transaksi, Anda setuju bahwa saraga.id&nbsp;dapat
                    menyesuaikan atau membatalkan manfaat yang Anda dapat dari transaksi tersebut, termasuk namun tidak terbatas pada
                    voucher untuk transaksi berikutnya.</li>
                </ol>
              </li>
              <li><strong>Saran Penggunaan Fasilitas</strong>
                <ol>
                  <li>Dengan menampilkan sarana olahraga tertentu, saraga.id tidak mengemukakan atau menjamin bahwa penggunaan
                    fasilitas yang dipesan bermanfaat dan bebas risiko. saraga.id tidak akan dimintai pertanggungjawaban atas
                    kerusakan atau kerugian yang mungkin diakibatkan dari fasilitas/ sarana olahraga tersebut. Dalam situasi apa
                    pun, saraga.id tidak akan bertanggung jawab atas insiden merugikan yang terjadi selama perjalanan atau selama
                    Anda menggunakan fasilitas/ sarana olahraga. Anda secara pribadi bertanggung jawab untuk pemilihan fasilitas/
                    sarana olahraga, permainan, dan aktivitas di sarana olahraga pilihan Anda. saraga.id tidak bertanggung jawab
                    atas kerugian yang terjadi ketika Anda gagal membawa dokumen yang diperlukan, seperti kode pemesanan, e-tiket,
                    e-voucher, dan hal-hal lainnya yang disebabkan oleh kesalahan dan/atau kelalaian Anda. saraga.id juga tidak
                    bertanggung jawab atas segala kesalahan dan/atau kelalaian yang disebabkan oleh Vendor.</li>
                    <li>Anda bertanggung jawab sepenuhnya untuk mendapatkan, menjaga dan menyediakan untuk ditunjukkan, izin-izin
                      aktivitas dan kesehatan pribadi serta komunal jika diperlukan di kondisi-kondisi khusus. saraga.id tidak memiliki
                      kewajiban dan tidak akan bertanggungjawab untuk memberitahukan Anda mengenai pengaturan aktivitas dan izin-izin yang
                      dibutuhkan oleh Anda agar dapat melaksanakan aktivitas anda. saraga.id memiliki haknya untuk membatasi
                      pertanggungjawabannya dalam hal adanya kerugian atau kerusakan yang timbul dari atau sehubungan dengan izin-izin
                      aktivitas Anda.</li>
                </ol>
              </li>
              <li><strong>Keamanan</strong>
                <ol>
                  <li>Pada saat Anda membuat pemesanan atau mengakses informasi Akun Anda, Anda akan menggunakan akses Secure Server
                    Layer (SSL) akan mengenkripsi informasi yang Anda kirimkan melalui Website ini.</li>
                  <li>Walaupun saraga.id akan menggunakan upaya terbaik untuk memastikan keamanannya, saraga.id tidak bisa menjamin
                    seberapa kuat atau efektifnya enkripsi ini dan saraga.id tidak dan tidak akan bertanggung jawab atas masalah yang
                    terjadi akibat pengaksesan tanpa ijin dari informasi yang Anda sediakan.</li>
                  <li>Anda wajib memastikan bahwa perangkat atau device yang digunakan untuk login menggunakan akun saraga.id Anda
                    berada di bawah penguasaan Anda. Untuk itu, Anda membebaskan Kami dari segala kerugian yang timbul dan mungkin
                    timbul akibat kelalaian Anda sehubungan dengan perangkat atau device yang Anda gunakan.</li>
                  <li>Anda menyadari bahwa kerahasiaan akun saraga.id Anda merupakan tanggung jawab Anda sepenuhnya. Untuk itu, Kami
                    menyarankan Anda untuk mengganti secara berkala password yang Anda gunakan untuk akun saraga.id Anda.</li>
                </ol>
              </li>
              <li><strong>Biaya Tambahan</strong>
                <ol>
                  <li>Setiap harga yang tercantum pada Situs ini hanya tersedia dengan ketentuan tertentu dan harga tersebut dapat
                    berubah tergantung pada ketersediaan pemesanan, lamanya pemesanan dan/atau kuota. Harga yang tersedia dapat
                    mencakup pajak tambahan dan biaya lainnya lagi tapi dalam keadaan tertentu mungkin tidak termasuk pajak dan
                    biaya jasa lainnya (seperti biaya tips, biaya fasilitas lainnya (jika ada), dan biaya-biaya lainnya yang timbul
                    bukan dari penggunaan layanan kami maupun mitra penyedia); pengguna setuju bahwa mereka bertanggung jawab untuk
                    memverifikasi total biaya yang harus dibayar dan persyaratan lainnya dan rincian ketika email konfirmasi dikirim
                    ke pengguna. Pengguna harus memverifikasi pemesanan dalam lembar pemesanan; pengguna dapat membatalkan pemesanan
                    setiap saat sebelum konfirmasi akhir dilakukan. Harga yang ditampilkan terperinci sehingga pengguna dapat
                    melihat jumlah yang harus dibayar, biaya tambahan apa pun yang disebabkan penggunaan kartu kredit atau biaya
                    antar bank yang dikenakan untuk biaya pengiriman akan dibebankan kepada pengguna dan jika terdapat kekurangan
                    dalam jumlah yang dibayarkan, maka saraga.id dapat memberikan notifikasi email mengenai kekurangan dalam jumlah
                    yang harus dibayarkan pengguna. Dalam hal pengguna membatalkan pemesanan sebelum membayar penuh segala
                    kekurangan yang ada, saraga.id memiliki kebijaksanaan tunggal apakah akan mengembalikan jumlah yang dibayarkan
                    atau mengembalikan jumlah yang telah dikurangi biaya yang dikeluarkan oleh saraga.id sebagai akibat dari biaya
                    yang tidak dibayarkan atas kekurangan ini oleh pengguna sesuai dengan prosedur yang ditetapkan oleh saraga.id.
                    Jika pengguna memiliki keraguan tentang layanan, pengguna dapat menghubungi layanan pelanggan saraga.id (selama
                    waktu operasional layanan pelanggan yang ditentukan oleh saraga.id). Untuk setiap pembatalan lainnya, sesuai
                    dengan hukum yang berlaku, serta kebijakan saraga.id dan mitra layanan/ vendor, saraga.id pertama-tama akan
                    melakukan investigasi dan memverifikasi pesanan sebelum memberikan pengembalian dana sesuai dengan jumlah yang
                    sudah Anda bayarkan, dikurangi biaya yang dikeluarkan oleh saraga.id, termasuk namun tidak terbatas pada biaya
                    administratif, biaya transfer antar bank, biaya kartu kredit, dll. (&ldquo;Jumlah Refund&rdquo;). Setelah
                    pesanan berhasil diverifikasi oleh saraga.id, pengembalian dana akan ditawarkan kepada Anda berupa voucher
                    elektronik (mis. Kupon saraga.id, dan/atau Voucher pemesanan dari mitra layanan/vendor).</li>
                  <li>id tidak akan bertanggung jawab atau berkewajiban atas setiap penerbitan e-tiket, e-voucher, atau transaksi
                    lainnya yang digugurkan akibat jumlah yang ditransfer tidak akurat oleh pengguna atau pembayaran yang tidak
                    dilakukan melalui metode pembayaran resmi yang tersedia di Situs saraga.id. Setiap transfer yang dilakukan melebihi
                    batas waktu untuk transfer akan mengakibatkan pemesanan digugurkan. Untuk waktu nyata (<em>real-time</em>) transfer
                    antar bank, Anda harus menggunakan ATM. Setelah menyelesaikan transfer antar bank, harap konfirmasi pembayaran Anda
                    dengan mengisi formulir konfirmasi pembayaran.</li>
                </ol>
              </li>
              <li><strong>Peringkat</strong>
                <ol>
                  <li>Peringkat yang ditampilkan di Situs hanya disediakan sebagai informasi dari pengguna saja, dan peringkat yang
                    ada didasarkan pada informasi yang diberikan oleh pihak ketiga seperti pemasok, pengguna atau ulasan situs web
                    lain. Kami tidak memverifikasi peringkat yang diberikan dan karena itu tidak bertanggung jawab atas keakuratan
                    peringkat yang ada. Dengan ini kami menyatakan penyangkalan klaim, kerugian atau kewajiban sehubungan dengan
                    peringkat yang ditampilkan pada Situs.</li>
                </ol>
              </li>
              <li><strong>Akun Anda</strong>
                <ol>
                  <li>Untuk keperluan pendaftaran dan pembukaan akun Anda, Kami akan mengumpulkan dan memproses informasi pribadi
                    Anda, seperti nama Anda, alamat surat elektronik (email), dan nomor ponsel Anda. Anda setuju untuk memberi Kami
                    informasi yang akurat, lengkap, dan terbaru dan setuju untuk memberi Kami bukti identitas yang akan Kami minta
                    secara wajar.</li>
                  <li>Hanya Anda yang dapat menggunakan akun Anda sendiri dan Anda menyatakan dan menjamin bahwa Anda tidak akan
                    mengizinkan pihak lain untuk menggunakan identitas Anda atau akun Anda dengan alasan apa pun, kecuali diizinkan oleh
                    Kami atau Anda.&nbsp;</li>
                  <li>Anda tidak dapat mentransfer akun Anda ke pihak lain mana pun. Anda dengan ini menyatakan bahwa Kami akan
                    dibebaskan dari tanggung jawab atas kerugian ataupun kendala yang timbul atas penyalahgunaan akun Anda yang
                    diakibatkan oleh kelalaian Anda, termasuk namun tidak terbatas pada meminjamkan atau memberikan akses akun kepada
                    pihak lain, mengakses link atau tautan yang diberikan oleh pihak lain, memberikan atau memperlihatkan kode
                    verifikasi (OTP), password atau email kepada pihak lain, maupun kelalaian lainnya yang mengakibatkan kerugian
                    ataupun kendala pada akun Anda.</li>
                  <li>Anda harus menjaga keamanan dan kerahasiaan kata sandi akun Anda dan identifikasi apa pun yang Kami berikan kepada
                    Anda untuk semua aktivitas yang terjadi dalam akun Anda. Dalam hal terjadi pengungkapan kata sandi Anda, dengan cara
                    apa pun yang mengakibatkan penggunaan akun atau identitas Anda secara tidak sah, pesanan yang diterima dari
                    penggunaan yang tidak sah tersebut akan tetap dianggap sebagai pesanan yang valid dan Kami akan memproses pesanan
                    tersebut. Anda dengan ini menyatakan bahwa Anda membebaskan Kami dari tanggung jawab atas kehilangan, kerugian
                    dan/atau kerusakan yang timbul dari penyalahgunaan akun Anda.</li>
                  <li>Jika Anda tidak lagi memiliki kendali atas akun Anda, Anda diharuskan untuk segera memberi tahu Kami (mis.: akun
                    Anda diretas dengan cara apa pun atau ponsel Anda dicuri) sehingga Kami dapat memblokir sementara dan/atau
                    menonaktifkan akun Anda dengan benar. Harap perhatikan bahwa Anda bertanggung jawab atas penggunaan akun Anda dan
                    akan bertanggung jawab atas akun Anda meskipun disalahgunakan oleh orang lain.&nbsp;</li>
                  <li>Kami memiliki hak penuh untuk memblokir sementara, menghapus, atau menonaktifkan akun Anda atas dasar kebijakan
                    Kami sendiri dan untuk alasan apa pun tanpa memberikan alasan atau tanpa memberikan pemberitahuan untuk memblokir,
                    menghapus, atau menonaktifkan akun Anda. Alasan pemblokiran, penghapusan, atau inaktivasi akun Anda dapat mencakup
                    tetapi tidak terbatas pada:&nbsp;
                    <ul type="a">
                      <li>pelanggaran ketentuan ini,&nbsp;</li>
                      <li>larangan dalam peraturan,&nbsp;</li>
                      <li>penipuan atau pencurian (termasuk indikasi atau dugaan adanya penipuan atau pencurian), kecurigaan aktivitas
                        kriminal,&nbsp;</li>
                      <li>pemesanan yang mencurigakan,&nbsp;</li>
                      <li>pemberian informasi yang tidak akurat, salah atau menyesatkan,&nbsp;</li>
                      <li>perilaku, ancaman, atau penghinaan yang tidak pantas,</li>
                      <li>penolakan untuk memberikan informasi,&nbsp;</li>
                      <li>sulit dihubungi/dijangkau, atau&nbsp;</li>
                      <li>Anda terdaftar pada "daftar hitam" atau "daftar pantauan" oleh pemerintah atau organisasi internasional.</li>
                    </ul>
                  </li>
                  <li>Anda setuju bahwa segala resiko dan akibat atas pemblokiran, penghapusan, atau inaktivasi akun Anda akan menjadi
                    resiko Anda. Kami memiliki hak untuk melakukan segala tindakan yang diperlukan untuk mengurangi resiko dan/atau
                    kerugian Kami.</li>
                  <li>Dengan pembukaan dan penggunaan akun di Website Kami, maka Anda membebaskan Kami atas segala tanggung jawab,
                    kehilangan, dan/atau kerugian yang timbul akibat penggunaan akun Anda, serta jika Kami melaksanakan segala tindakan
                    yang Kami anggap perlu dalam pelaksanaan ketentuan akun sebagaimana diatur dalam poin diatas.</li>
                </ol>
              </li>
              <li><strong>Kebijakan Penggunaan Data</strong>
                <ol>
                  <li>Kami menganggap privasi Anda sebagai hal yang penting.</li>
                  <li>Pada saat Anda membuat pemesanan di saraga.id, Kami akan mencatat dan menyimpan informasi dan data pribadi Anda.
                    Pada prinsipnya, data Anda akan Kami gunakan untuk menyediakan Produk dan memberi Layanan kepada Anda. Kami akan
                    menyimpan setiap data yang Anda berikan, dari waktu ke waktu, atau yang Kami kumpulkan dari penggunaan Produk dan
                    Layanan Kami. Data pribadi Anda yang ada pada Kami, dapat Kami gunakan untuk keperluan akuntansi, tagihan, audit,
                    verifikasi kredit atau pembayaran, serta keperluan security, administrasi dan legal, reward points atau bentuk
                    sejenisnya, pengujian, pemeliharaan dan pengembangan sistem, hubungan pelanggan, promosi, dan membantu Kami
                    dikemudian hari dalam memberi pelayanan kepada Anda. Sehubungan dengan itu, Kami dapat mengungkapkan data Anda
                    kepada group perusahaan di mana saraga.id tergabung didalamnya, Mitra Penyedia penyedia Produk, perusahaan lain yang
                    merupakan rekanan dari saraga.id, perusahaan pemroses data yang terikat kontrak dengan Kami, agen perjalanan, badan
                    pemerintah dan badan peradilan yang berwenang, di jurisdiksi manapun.</li>
                </ol>
              </li>
              <li><strong>Detail dan Prosedur Pembayaran</strong>
                <ol>
                  <li>Pembayaran dilakukan dalam jumlah dan mata uang sebagaimana dinyatakan tanpa biaya bank penjamin atau beban
                    lain apa pun oleh saraga.id.</li>
                  <li>id tidak memungut pajak atau retribusi. Pembebanan pajak apa pun akan ditanggung oleh pengguna.</li>
                  <li>Untuk semua bentuk reservasi, Anda harus melakukan pembayaran sebelum batas waktu yang telah ditentukan. Jika
                    pembayaran tidak dilakukan, maka saraga.id berhak untuk membatalkan semua reservasi atau mengabaikan proses
                    pemesanan.</li>
                  <li>Metode pembayaran termasuk namun tidak terbatas pada transfer bank dan kartu kredit. Untuk pembayaran melalui
                    transfer bank, Anda harus memberikan tanda terima transfer bank sebagai bukti pembayaran reservasi yang tercantum
                    dalam email konfirmasi saraga.id. Anda harus mengikuti prosedur yang terdapat dalam email konfirmasi.</li>
                  <li>Untuk metode pembayaran lainnya seperti kartu kredit, Anda harus mengikuti prosedur yang dinyatakan oleh saraga.id
                    dan/atau penyedia layanan pembayaran terkait.</li>
                  <li>Setelah Anda melakukan pembayaran penuh, saraga.id akan menempatkan pesanan dan mengeluarkan kode reservasi, yang
                    akan disertai dengan:
                    <ul type="a">
                      <li>Kode Pemesanan;</li>
                      <li>Nama Pelanggan;</li>
                      <li>Nomor Pemesanan;</li>
                      <li>Rincian Pemesanan; dan</li>
                      <li>Nomor Telepon/<em>Extension</em>.</li>
                    </ul>
                  </li>
                </ol>
              </li>
              <li><strong>Hak dan Kewajiban</strong>
                <ol>
                  <li>id dengan ini memberikan pengguna hak terbatas tertentu (merupakan "Lisensi Terbatas"), yang tidak dapat
                    dipindahkan atau didelegasikan, untuk mengakses dan menggunakan Situs sejauh mana dinyatakan diizinkan oleh
                    Syarat ini. Sehubungan dengan Lisensi Terbatas ini, kami tidak akan memberikan Anda hak atau lisensi sehubungan
                    dengan penggunaan Situs; hak atau lisensi yang tidak diberikan secara tersurat, sepenuhnya dimiliki oleh
                    saraga.id atau pemilik pihak ketiga lainnya dari lisensi tersebut. Konten yang tersedia di Situs (termasuk
                    infrastruktur perangkat lunak yang digunakan untuk menyediakan Konten) sepenuhnya dimiliki oleh saraga.id atau
                    pemasok dan penyedia layanannya, termasuk namun tidak terbatas pada Vendornya (sebagaimana berlaku). Anda dapat
                    menggunakan situs tersebut untuk menaruh pesanan dan Anda dengan ini menyatakan dan menjamin bahwa Anda tidak
                    akan mengajukan permintaan reservasi palsu atau spekulatif untuk mengantisipasi pemesanan yang tersedia. Anda
                    dengan ini menyatakan untuk memastikan bahwa informasi pembayaran yang Anda berikan adalah benar dan sepenuhnya
                    akurat. Anda juga menjamin untuk memberikan alamat surat elektronik yang tepat dan akurat, alamat surat menyurat
                    dan/atau rincian informasi kontak Anda.</li>
                  <li>Berkaitan dengan Syarat Penggunaan dari Situs, Anda setuju untuk tidak menggunakan Situs atau Konten untuk
                    tujuan komersial atau baik secara langsung maupun tidak langsung untuk tujuan selain penggunaan pribadi atau
                    untuk yang melanggar hukum (dilarang oleh hukum) atau melakukan tindakan yang melanggar Syarat tersebut. Kecuali
                    dengan kesepakatan tertulis dari saraga.id, Anda setuju untuk tidak memodifikasi, menyalin, mendistribusikan,
                    mengirimkan, menampilkan, mereproduksi, mempublikasikan, melisensikan, menciptakan karya turunan dari,
                    mentransfer, atau menjual atau menjual kembali setiap informasi, perangkat lunak, produk atau layanan yang
                    diperoleh sehubungan dengan Situs. Selain itu, Anda setuju untuk tidak:
                    <ul type="i">
                      <li>menggunakan Situs ini atau Konten untuk tujuan komersial tanpa izin dari saraga.id;</li>
                      <li>mengakses, memonitor atau menyalin Konten pada Situs menggunakan teknologi, perangkat lunak, atau program apa pun
                        baik secara manual atau otomatis untuk tujuan apa pun tanpa izin tertulis dari saraga.id;</li>
                      <li>melakukan tindakan apa pun yang membebani atau mungkin membebani, tanggungan yang tidak wajar pada Situs atau
                          infrastruktur kami;</li>
                      <li>membuat tautan utama ke Situs ini (termasuk namun tidak terbatas pada jalur pemesanan) untuk tujuan apa pun tanpa
                        persetujuan tertulis dari saraga.id;</li>
                      <li>menjual kembali, menggunakan, menyalin, melakukan pengawasan (seperti menggunakan atau memasang program spider
                        atau scrape), menampilkan, mengunduh atau melakukan produksi Konten apa pun, perangkat lunak, produk, layanan yang
                        tersedia melalui Situs untuk tujuan komersial atau tujuan/kegiatan kompetisi;</li>
                      <li>mereproduksi Situs (melalui&nbsp;<em>"frame"</em>atau&nbsp;<em>"mirror"</em>) atau mengatur bagian dari Situs ini
                        pada setiap situs web lain tanpa persetujuan tertulis sebelumnya;</li>
                      <li>mengirim pengumuman ke atau melalui Situs yang melanggar hukum, peraturan, atau aturan, atau yang dapat mendukung
                        kegiatan yang melanggar hukum atau kegiatan kriminal;</li>
                      <li>mengirimkan atau menyediakan tautan ke atau mengirimkan pengumuman yang mengandung materi yang dapat dianggap
                        berbahaya, cabul, pornografi, tidak senonoh, kekerasan, rasis, atau merupakan diskriminasi, hinaan, ancaman,
                        pelecehan, penindasan, kebencian atau materi tidak menyenangkan lainnya, sesuai dengan kebijaksanaan saraga.id ini;
                      </li>
                      <li>mengirimkan atau menyediakan tautan ke setiap pengumuman yang mengandung bahasa pencemaran nama baik, fitnah, dan
                        kebohongan;</li>
                      <li>mengirimkan atau melakukan pengumuman yang mungkin melanggar kekayaan intelektual atau hak-hak lain dari entitas
                        atau orang tertentu, termasuk namun tidak terbatas pada hak cipta, paten, merek dagang, rahasia dagang atau
                        informasi rahasia atau publikasi;</li>
                      <li>mengirimkan pengumuman ketika dilarang oleh hukum yang berlaku atau melanggar hak dan kewajiban yang ada
                        berdasarkan hubungan kontraktual;</li>
                      <li>meniru orang atau kelompok apa pun, atau menyatakan dengan keliru atau salah mengemukakan kepada seseorang atau
                        entitas terhadap hubungan atau mengambil identitas palsu jika tujuannya untuk menyesatkan, menipu atau memperdaya;
                      </li>
                      <li>memanipulasi atau memalsukan informasi yang bertujuan untuk menyamarkan asal-usul pernyataan yang Anda berikan;
                      </li>
                      <li>menggunakan Situs dengan cara apa pun yang dapat merusak, menonaktifkan, menghambat, atau mengganggu penggunaan
                        Situs atau pengguna lain dari peralatan komputer, atau menyebabkan kerusakan, gangguan atau membatasi fungsi dari
                        perangkat lunak, perangkat keras atau peralatan telekomunikasi;</li>
                      <li>mendapatkan akses tidak sah atau melakukan modifikasi yang tidak sah ke Situs atau situs web terkait lainnya, akun
                        lainnya, sistem komputer, jaringan yang terhubung dengan Situs dengan cara meretas, pencurian kata sandi atau
                        hal-hal lain yang sejenis;</li>
                      <li>memperoleh atau berusaha memperoleh materi atau informasi apa pun dengan cara yang tidak sengaja disediakan oleh
                        situs (termasuk namun tidak terbatas pada destinasi lain yang disediakan oleh situs ini). Hal ini termasuk namun
                        tidak terbatas pada, memperoleh atau mengumpulkan informasi tentang orang lain seperti alamat email;</li>
                      <li>terlibat dalam tindakan penipuan atau tindakan yang bertujuan untuk memanipulasi halaman hasil mesin pencari
                        ("SERP") atau melakukan optimasi mesin pencari ("SEO"). Praktik SEO dianggap tidak etis atau
                        merupakan&nbsp;<em>"spamdexing"</em>termasuk namun tidak terbatas pada&nbsp;<em>cloaking, metadata,
                          tag</em>&nbsp;judul,&nbsp;<em>scraping</em>&nbsp;konten, skema tautan,&nbsp;<em>google bomb</em>, pencarian kata
                        kunci, teks tersembunyi atau tautan tersembunyi, skema tautan, komentar yang mengandung&nbsp;<em>spam</em>&nbsp;dan
                        hal-hal lain; atau</li>
                      <li>tindakan lain apa pun yang dapat memberi pengaruh negatif atau mengakibatkan kerusakan pada Situs, saraga.id atau
                        afiliasinya dan karyawan, atau reputasi saraga.id ini.</li>
                    </ul>
                  </li>
                  <li>Kecuali ditentukan lain secara tegas, situs web tidak diizinkan untuk membuat tautan ke halaman lain selain
                    halaman utama Situs atau&nbsp;<em>frame</em>atau halaman web atau materi yang terkandung di dalamnya, atau membuat
                    tautan ke aspek Situs dalam bentuk email dengan tujuan komersial tanpa persetujuan tertulis yang dinyatakan oleh
                    saraga.id.</li>
                  <li>Dengan menempatkan pesanan melalui Situs ini, Anda dengan ini menyatakan dan menjamin bahwa Anda tidak dikenakan
                    larangan atau pembatasan apa pun oleh program sanksi apa pun, atau dikenakan hukuman di bawah rezim antipencucian
                    uang mana pun.</li>
                </ol>
              </li>
              <li><strong>Hak untuk Konten Pengguna</strong>
                <ol>
                  <li>Dengan menyelesaikan pemesanan, Anda dengan ini setuju untuk menerima surat elektronik yang berisi undangan
                    untuk memberikan ulasan atau ulasan konten terkait dengan pemilihan Vendor. Saraga memiliki kebijaksanaan
                    tunggal apakah korespondensi Anda akan muncul dalam ulasan. Saraga dapat menampilkan korespondensi, yang
                    mungkin berisi komentar, tingkat layanan dan nama Anda.</li>
                  <li>Dalam memberikan ulasan, Anda setuju untuk memastikan bahwa:
                    <ul type="a">
                      <li>Anda memiliki dan mengendalikan semua hak atas ulasan yang Anda berikan ke Situs;</li>
                      <li>konten ulasan akurat dan tidak mengandung penggambaran yang keliru; dan</li>
                      <li>penggunaan atau kinerja atau pengiriman konten ulasan tidak melanggar Syarat atau undang-undang dan peraturan
                        yang
                        berlaku, Anda tidak melanggar hak pihak ketiga, dan Anda tidak menyebabkan cedera pada pihak mana pun.</li>
                    </ul>
                  </li>
                  <li>Anda harus memikul semua tanggung jawab atas konten dari ulasan yang Anda berikan atau kirimkan. Anda
                    memperkenankan Saraga untuk bertindak ketika ada pihak yang melanggar hak-hak Anda atau hak Saraga.</li>
                  <li>Ulasan konten yang diberikan akan dianggap tidak terdiri atas informasi rahasia dan Saraga tidak akan memiliki
                    kewajiban untuk memperlakukan ulasan konten sebagai informasi rahasia. Tanpa membatasi ketentuan yang terdapat dalam
                    Syarat ini, Saraga memiliki kebijaksanaan tunggal untuk menggunakan ulasan konten yang dianggap sesuai, termasuk
                    namun tidak terbatas pada penghapusan, pemotongan, modifikasi, atau menyembunyikannya dari layar. Saraga tidak
                    memiliki kewajiban untuk membayar konten yang Anda kirimkan dalam ulasan, termasuk namun tidak terbatas pada ulasan
                    konten yang telah diubah, dihilangkan atau dipotong. Saraga tidak akan memiliki kewajiban untuk menyediakan atau
                    mencantumkan atau menyebutkan penulis atau pihak ketiga lainnya.</li>
                  <li>Dalam hal apa pun, Anda dengan ini setuju bahwa sehubungan dengan konten dari ulasan:</li>
                  <li>Anda tidak memerlukan atribusi atau identifikasi dalam setiap karya turunan;</li>
                  <li>Anda memperkenankan penerbitan, penggunaan, penghapusan, modifikasi, reproduksi atau eksploitasi dari ulasan
                    konten akan dilakukan oleh Saraga dan karyawannya, penerus dan penerima pengalihan mereka;</li>
                  <li>Anda dengan ini melepaskan hak dan setuju untuk tidak mengklaim hak apa pun dalam ulasan konten; dan</li>
                  <li>Anda dengan ini mengganti kerugian dan tidak menyalahkan Saraga dan karyawannya, afiliasi, pemegang hak,
                    penggantian, dan menunjuk dari setiap klaim sehubungan dengan konten dari ulasan.</li>
                </ol>
              </li>
              <li><strong>Pembatasan Pengunaan</strong>
                <ol>
                  <li>Anda dengan ini setuju untuk tidak menggunakan Situs atau Konten untuk kegiatan yang tidak sah atau melanggar
                    hukum. Anda setuju bahwa Anda tidak akan menggunakan peralatan apa pun, perangkat lunak, atau teknologi lainnya
                    yang mungkin menghambat atau berusaha menghalangi pengoperasian Situs ini. Anda setuju untuk tidak menggunakan
                    Situs ini atau Kontennya untuk tujuan komersial. Anda setuju untuk tidak berupaya, membuat, mencari, menggunakan
                    atau mengirim sarana otomatis atau bentuk lain dari teknologi untuk mengumpulkan atau mendapatkan informasi dari
                    Situs ini, atau cara lain untuk berinteraksi dengan Situs ini.</li>
                </ol>
              </li>
              <li><strong>Hak Kekayaan Intelektual</strong>
                <ol>
                  <li>Semua informasi dan bahan, termasuk namun tidak terbatas pada, perangkat lunak, teks, data, grafik, citra,
                    suara, video, merek dagang, logo, ikon, kode html dan kode lainnya dalam situs web ini dilarang untuk
                    dipublikasikan, dimodifikasi, disalin, direproduksi, digandakan atau diubah dengan cara apa pun di luar wilayah
                    Situs ini tanpa izin yang dinyatakan oleh saraga.id. Jika Anda melanggar hak-hak ini, saraga.id berhak untuk
                    membuat gugatan perdata untuk jumlah keseluruhan kerusakan atau kerugian yang diderita. Pelanggaran-pelanggaran
                    ini juga bisa merupakan tindak pidana.</li>
                  <li>Anda dapat menggunakan informasi di Situs hanya untuk penggunaan pribadi, non-komersial. Kecuali ditentukan lain,
                    dan secara tegas diizinkan oleh hukum hak cipta, Anda tidak dapat menyalin, mereproduksi, mendistribusikan,
                    mengirimkan ulang, mempublikasikan atau sebaliknya mengeksploitasi secara komersial setiap unduhan yang Anda buat
                    dari Situs tanpa izin dari pemilik hak kekayaan intelektual. Bahkan jika Anda mendapatkan izin yang diperlukan, Anda
                    dilarang untuk melakukan perubahan atau penghapusan. Anda dengan ini menerima dan setuju bahwa mengunduh setiap
                    Kekayaan Intelektual tidak memberikan Anda hak atas mereka.</li>
                  <li>Kami dapat menyediakan tautan ke situs-situs lainnya yang dikelola oleh pihak lain, dengan mengeklik pada tautan,
                    Anda dengan ini mengemukakan, mengakui dan setuju bahwa tindakan tersebut merupakan tindakan sukarela Anda untuk
                    melihat atau mengunjungi situs lain yang saraga.id tidak memiliki pengawasan atau bertanggung jawab terhadapnya.
                  </li>
                </ol>
              </li>
              <li><strong>Batasan Tanggung Jawab</strong>
                <ol>
                  <li>TANPA BERPRASANGKA TERHADAP APA YANG DIATUR DALAM SYARAT, KEWAJIBAN MASING-MASING PIHAK TERBATAS DAN
                    DIKECUALIKAN SEMAKSIMALNYA YANG DIIZINKAN OLEH HUKUM, SEPERTI UNTUK CEDERA PRIBADI DAN KEMATIAN. KAMI TIDAK AKAN
                    BERTANGGUNG JAWAB ATAS SETIAP KERUGIAN ATAU KERUSAKAN, BAIK LANGSUNG ATAU TIDAK LANGSUNG, AKIBAT DARI ATAU
                    TERHUBUNG KE PENGGUNAAN ANDA TERHADAP SITUS INI ATAU PENGGUNAAN TAUTAN PADA SITUS, TERMASUK NAMUN TIDAK TERBATAS
                    PADA KERUSAKAN KHUSUS, INSIDENTAL, HUKUMAN ATAU KERUSAKAN AKIBAT ATAU KERUGIAN EKONOMI LAINNYA, MESKIPUN KAMI
                    TELAH DIBERITAHU TENTANG KEMUNGKINAN KERUGIAN ATAU KERUSAKAN YANG MUNGKIN TERJADI. PERBAIKAN SATU-SATUNYA YANG
                    TERSEDIA BAGI ANDA ADALAH PENGHENTIAN PENGGUNAAN SITUS INI.</li>
                  <li>Anda dengan ini setuju untuk mengganti kerugian dan tidak menyalahkan saraga.id dan karyawannya, afiliasi, staf
                    dan mitra, dari dan terhadap setiap dan semua klaim, tuntutan, kewajiban, kerusakan atau kerugian termasuk biaya
                    hukum, yang timbul sebagai akibat dari klaim pihak ketiga sehubungan dengan: (a) penggunaan Anda terhadap Situs; (B)
                    Konten yang diberikan, disediakan atau diakses melalui Situs ini; (C) pelanggaran Anda terhadap Syarat tersebut; (D)
                    pelanggaran hak atau kewajiban lainnya; dan/atau (e) setiap tindakan atau kelalaian oleh Anda, baik lalai, melanggar
                    hukum atau lainnya.</li>
                </ol>
              </li>
              <li><strong>Tautan dan Konten Pihak Ketiga</strong>
                <ol>
                  <li>Situs ini mungkin mengandung tautan ke situs web yang dioperasikan oleh pihak lain selain saraga.id. Kami
                    tidak mengontrol situs-situs atau tautan tersebut dan tidak bertanggung jawab atas konten atau privasi atau
                    kegiatan lain dari situs tersebut. Kami, atau pihak ketiga lainnya, dapat mengunggah secara otomatis hasil
                    pencarian atau memberikan tautan ke situs lain. Kami memberikan kesempatan bagi pihak ketiga untuk memberikan,
                    memuat, mengirimkan atau sebaliknya menyediakan segala informasi, data, teks, citra, suara, grafik, video,
                    pesan, ulasan, atau bahan lainnya ("Konten") melalui Situs ini. Kami tidak mengulas dan/atau tidak memiliki
                    kontrol atas situs, sumber, dan Konten. Anda setuju bahwa kami tidak bertanggung jawab atas konten atau
                    ketersediaan situs dan sumber daya tersebut, dan kami tidak mendukung atau merekomendasikan dan tidak
                    bertanggung jawab atas asal-usul situs atau Konten. Anda setuju untuk membebaskan kami dari dan terhadap setiap
                    dan semua kewajiban, pengeluaran, kerugian, atau kerusakan, secara langsung atau tidak langsung yang disebabkan
                    atau diduga disebabkan oleh atau sehubungan dengan penggunaan atau akun untuk Konten, situs atau sumber daya.
                  </li>
                </ol>
              </li>
              <li><strong>Penghentian</strong>
                <ol>
                  <li>id memiliki kebijaksanaan tunggal dan penuh untuk mengubah, menunda, tidak melanjutkan atau menghentikan Situs
                    ini dan/atau bagian Situs, termasuk layanan atau produk yang disediakan dalam Situs ini, dan/atau penggunaan
                    Situs ini, atau bagiannya, kapan saja dengan alasan apa pun tanpa pemberitahuan sebelumnya kepada Anda.</li>
                  <li>Dalam hal terjadi penghentian, Anda tetap terikat oleh kewajiban dalam Syarat ini, termasuk namun tidak terbatas
                    pada jaminan, ganti rugi, pelepasan dan pembatasan kewajiban yang telah Anda sepakati.</li>
                  <li>id tidak akan bertanggung jawab kepada Anda atau pihak ketiga mana pun atas penghentian atau penangguhan akses
                    Anda ke Situs.</li>
                </ol>
              </li>
              <li><strong>Force Majeure</strong>
                <ol>
                  <li>id tidak akan bertanggung jawab atas performa yang tidak dilakukan atau pelanggaran Syarat ini, seperti
                    kegagalan transaksi, akses terbatas ke Situs, atau setiap kerusakan atau bahaya kepada pengguna yang disebabkan
                    oleh tindakan atau kondisi apa pun di luar kontrol yang wajar baik oleh Anda atau Kami
                    ("Peristiwa&nbsp;<em>Force Majeure</em>"). Peristiwa&nbsp;<em>Force Majeure</em>termasuk namun tidak terbatas
                    pada bencana alam (banjir, gempa bumi), epidemi, pandemi, kerusuhan, pernyataan perang, perang, aksi militer,
                    tindakan teroris, embargo, sanksi, perubahan undang-undang atau peraturan, petir, badai/topan/siklon, mogok
                    kerja, demonstrasi, kebangkrutan atau kepailitan mitra, dan sebagainya yang ditetapkan melalui surat edaran dari
                    instansi terkait; yang mencakup namun tidak terbatas pada pemerintah, instansi pemerintahan, instansi swasta,
                    dan instansi pribadi.</li>
                  <li>id tidak akan bertanggung jawab atas setiap kerusakan atau kerugian yang disebabkan oleh cara apa pun kepada pihak
                    mana pun jika saraga.id tidak dapat memproses pesanan Anda karena Peristiwa&nbsp;<em>Force Majeure</em>.</li>
                </ol>
              </li>
              <li><strong>Ketentuan Lain</strong>
                <ol>
                  <li>Syarat dan Ketentuan Umum ini tunduk pada hukum Negara Republik Indonesia.</li>
                  <li>Bahasa yang dipakai untuk Syarat dan Ketentuan Umum ini adalah Bahasa Indonesia.</li>
                  <li>Akan ada keadaan dimana syarat dan ketentuan untuk beberapa Produk berada di laman terpisah. Dalam hal
                    terdapat perbedaan antara syarat dan ketentuan di laman lain dengan Syarat dan Ketentuan Umum ini, maka Syarat
                    dan Ketentuan Umum ini yang akan berlaku.</li>
                </ol>
              </li>
            </ol>
          </div>
        </div>
    </div>
</section>
@component('classimax.footer')
@endcomponent
@endsection