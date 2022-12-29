@extends('layouts.site.app')

@section('title', 'Home')

@section('content')
<div class="ftco-blocks-cover-1">
  <div class="ftco-cover-1 overlay" style="background-image: url('{{ asset('templates/site//images/banner.jpg') }}')">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-lg-12">
          <h1>Transportasi Kota Tasikmalaya</h1>
          <p class="mb-5">Digitalisasi transit transportasi umum bus di Terminal Indihiang Kota Tasikmalaya</p>
          <div class="row d-flex justify-content-center">
            <div class="col-lg-10">
              <form action="{{ url('search') }}" method="POST">
                <div class="form-group d-flex">
                  <select name="id_pemberangkatan" class="form-control" required>
                    <option selected disabled value="">Pemberangkatan</option>
                    @foreach ($lokasi as $item)
                      <optgroup label="{{ $item[0]->kode }}">
                        @foreach ($item as $row)
                        <option value="{{ $row->id }}">{{ $row->nama }}, {{ $row->kota }}</option>
                        @endforeach
                      </optgroup>
                    @endforeach
                  </select>
                  <select name="id_pemberhentian" class="form-control" required>
                    <option selected disabled value="">Pemberhentian</option>
                    @foreach ($lokasi as $item)
                      <optgroup label="{{ $item[0]->kode }}">
                        @foreach ($item as $row)
                        <option value="{{ $row->id }}">{{ $row->nama }}, {{ $row->kota }}</option>
                        @endforeach
                      </optgroup>
                    @endforeach
                  </select>
                  @csrf
                  <input type="submit" class="btn btn-primary text-white px-4" value="Cek Transit">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END .ftco-cover-1 -->
  <div class="site-section ftco-service-image-1 pb-5">
    <div class="container">
      <div class="owl-carousel owl-all">
        <div class="service text-center">
          <a href="#"><img src="{{ asset('templates/site/images/fasilitas/1.png') }}" alt="Image" class="img-fluid"></a>
          <div class="px-md-3">
            <h3><a href="#">Kantin</a></h3>
            <p>Penumpang telah di sediakan fasilitas kantin dengan harga terjangkau. Menjadi sarana tunggu bus dan penginstirahatan!</p>
          </div>
        </div>
        <div class="service text-center">
          <a href="#"><img src="{{ asset('templates/site/images/fasilitas/2.png') }}" alt="Image" class="img-fluid"></a>
          <div class="px-md-3">
            <h3><a href="#">Ruang Tunggu</a></h3>
            <p>Fasilitas ruang tunggu khusus. Menjadi tempat penginstirahatan transit dan bisa menjadi sarana informasi!</p>
          </div>
        </div>
        <div class="service text-center">
          <a href="#"><img src="{{ asset('templates/site/images/fasilitas/3.png') }}" alt="Image" class="img-fluid"></a>
          <div class="px-md-3">
            <h3><a href="#">Transit</a></h3>
            <p>Pemberhenetian bus transit dari dalam maupun luar kota. Bisa menjadi sarana istirahat dan lainnya!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="site-section bg-light" id="services-section">
  <div class="container">
    <div class="row mb-5 justify-content-center">
      <div class="col-md-7 text-center">
        <div class="block-heading-1">
          <h2>Layanan</h2>
          <p>Kami menyediakan banyak layanan untuk penumpang dalam kota maupun luar kota demi kenyamanan perjalanan.</p>
        </div>
      </div>
    </div>
    <div class="owl-carousel owl-all">
      <div class="block__35630 text-center">
        <div class="icon mb-0">
          <span class="flaticon-warehouse"></span>
        </div>
        <h3 class="mb-3">Penitipan</h3>
        <p>Ruang penitipan barang yang aman bagi penumpang.</p>
      </div>
      <div class="block__35630 text-center">
        <div class="icon mb-0">
          <span class="flaticon-airplane"></span>
        </div>
        <h3 class="mb-3">Gesit</h3>
        <p>Layanan informasi tersedia dengan super cepat.</p>
      </div>
      <div class="block__35630 text-center">
        <div class="icon mb-0">
          <span class="flaticon-box"></span>
        </div>
        <h3 class="mb-3">Porter</h3>
        <p>Petugas porter yang siap membawakan barang bawaan.</p>
      </div>
    </div>
  </div>
</div>

<div class="site-section" id="about-section">
  <div class="container">
    <div class="row mb-5 justify-content-center">
      <div class="col-md-7 text-center">
        <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
          <h2>Tentang Kami</h2>
          <p>Dari Bus Reguler, Pariwisata,Terminal Indihiang adalah kelompok usaha yang siap melayani kebutuhan transportasi anda yang berpusat di Kota Tasikmalaya Jawa Barat, Indonesia dan terus meningkatkan pelayanannya hingga sekarang.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="block__73694 site-section bg-light border-top" id="why-us-section">
  <div class="container">
    <div class="row d-flex no-gutters align-items-stretch">
      <div class="col-12 col-lg-6 block__73422 order-lg-2" style="background-image: url('{{ asset('templates/site/images/depot_delivery_1.jpg') }}');" data-aos="fade-left" data-aos-delay="">
      </div>
      <div class="col-lg-5 mr-auto p-lg-5 mt-4 mt-lg-0 order-lg-1" data-aos="fade-right" data-aos-delay="">
        <h2 class="mb-4 text-black">Kenapa Pilih Kami?</h2>
        <p>Terminal indhiang adalah terminal induk terbesar di kawasan Tasikmalaya. Menyediakan banyak layanan berguna untuk perjalanan.</p>
        <ul class="ul-check primary list-unstyled mt-5">
          <li>Penitipan barang</li>
          <li>Layanan cepat</li>
          <li>Porter</li>
          <li>Keamanan penumpang</li>
          <li>Fasilitas lainnya</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="site-section block-13" id="testimonials-section" data-aos="fade">
  <div class="container">
    <div class="text-center mb-5">
      <div class="block-heading-1">
        <h2>Penumpang Senang</h2>
      </div>
    </div>
    <div class="owl-carousel nonloop-block-13">
      <div>
        <div class="block-testimony-1 text-center">
          <blockquote class="mb-4">
            <p>&ldquo;Lokasinya sangat strategis, nyaman dan bersih. Cukup banyak bus yang menuju ke luar kota, salah satunya Budiman, Sinar Jaya, Primajasa, Doa Ibu dan masih banyak bus yang masuk ke terminal ini, tinggal dipilih saja.&rdquo;</p>
          </blockquote>

          <figure>
            <img src="{{ asset('templates/site/images/person_1.jpg') }}" alt="Image" class="img-fluid rounded-circle mx-auto">
          </figure>
          <h3 class="font-size-20 text-black">Ujang Solihin</h3>
        </div>
      </div>

      <div>
        <div class="block-testimony-1 text-center">
          <blockquote class="mb-4">
            <p>&ldquo;Terminal Bus Tasikmalaya luas sekali, tata letak nya sangat nyaman. Masjid terletak di bagian depan, jalur pintu masuk. Masjid nyaman, bersih.&rdquo;</p>
          </blockquote>
          <figure>
            <img src="{{ asset('templates/site/images/person_2.jpg') }}" alt="Image" class="img-fluid rounded-circle mx-auto">
          </figure>
          <h3 class="font-size-20 mb-4 text-black">Faisal Akbar</h3>
        </div>
      </div>

      <div>
        <div class="block-testimony-1 text-center">
          <blockquote class="mb-4">
            <p>&ldquo; Lokasi berada di daerah Indihiang, sangat strategis dan terdapat kantin dan toilet umun di dalam terminal. Lokasi untuk menunggu pun nyaman.&rdquo;</p>
          </blockquote>
          <figure>
            <img src="{{ asset('templates/site/images/person_3.jpg') }}" alt="Image" class="img-fluid rounded-circle mx-auto">
          </figure>
          <h3 class="font-size-20 text-black">Anindira Adelina</h3>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="site-section bg-light" id="contact-section">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
        <div class="block-heading-1">
          <h2>Contact Us</h2>
        </div>
      </div>
    </div>
    <div class="row justify-content-center text-center">
      <div class="col-lg-8 mb-5" data-aos="fade-up" data-aos-delay="100">
        Hubungi kami melalui social media instagram di <a href="https://www.instagram.com/terminal_indihiang" target="_blank">@terminal_indihiang</a>
        <br>
        Kirim pesan email di <a href="mailto:terminalindihiang@gmail.com">terminalindihiang@gmail.com</a>
        <br>
        Beri tahu kepuasan anda di <a href="https://skm.dephub.go.id/ly/buYKms72" target="_blank">Survei Kepuasan</a>.
      </div>          
    </div>
  </div>
</div>

@endsection