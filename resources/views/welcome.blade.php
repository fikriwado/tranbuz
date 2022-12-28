@extends('layouts.site.app')

@section('title', 'Home')

@section('content')
<div class="ftco-blocks-cover-1">
  <div class="ftco-cover-1 overlay" style="background-image: url('{{ asset('templates/site//images/banner.jpg') }}')">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-lg-12">
          <h1>Transportations &amp; Logistics</h1>
          <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus dolorem eius eligendi esse quod?</p>
          <form action="{{ url('search') }}" method="GET">
            <div class="form-group d-flex">
              <select class="form-control">
                <option selected disabled>Pemberangkatan</option>
                <optgroup label="TSM">
                  <option value="TSM manonjaya">Manonjaya, Tasikmalaya</option>
                  <option value="TSM salopa">Salopa, Tasikmalaya</option>
                  <option value="TSM tasikmalaya">Tasikmalaya</option>
                </optgroup>
                <optgroup label="BDG">
                  <option value="BDG cibiru">Cibiru, Bandung</option>
                  <option value="BDG lembang">Lembang, Bandung</option>
                  <option value="BDG bandung">Bandung</option>
                </optgroup>
                <optgroup label="JKT">
                  <option value="JKT rambutan">Kp.Rambutan, Jakarta</option>
                  <option value="JKT tanjung priok">Tanjung Priok, Jakarta</option>
                  <option value="JKT lebak bulus">Lebak Bulus, Jakarta</option>
                  <option value="JKT jakarta pusat">Jakarta Pusat</option>
                </optgroup>
              </select>
              <select class="form-control">
                <option selected disabled>Pemberhentian</option>
                <optgroup label="TSM">
                  <option value="TSM manonjaya">Manonjaya, Tasikmalaya</option>
                  <option value="TSM salopa">Salopa, Tasikmalaya</option>
                  <option value="TSM tasikmalaya">Tasikmalaya</option>
                </optgroup>
                <optgroup label="BDG">
                  <option value="BDG cibiru">Cibiru, Bandung</option>
                  <option value="BDG lembang">Lembang, Bandung</option>
                  <option value="BDG bandung">Bandung</option>
                </optgroup>
                <optgroup label="JKT">
                  <option value="JKT rambutan">Kp.Rambutan, Jakarta</option>
                  <option value="JKT tanjung priok">Tanjung Priok, Jakarta</option>
                  <option value="JKT lebak bulus">Lebak Bulus, Jakarta</option>
                  <option value="JKT jakarta pusat">Jakarta Pusat</option>
                </optgroup>
              </select>
              <input type="date" class="form-control" placeholder="Your tracking number">
              <input type="submit" class="btn btn-primary text-white px-4" value="Cek Transit">
            </div>
          </form>
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
            <h3><a href="#">Truck Insurance</a></h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae distinctio laudantium nulla eos numquam incidunt!</p>
          </div>
        </div>
        <div class="service text-center">
          <a href="#"><img src="{{ asset('templates/site/images/fasilitas/2.png') }}" alt="Image" class="img-fluid"></a>
          <div class="px-md-3">
            <h3><a href="#">Plane Transportation</a></h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae distinctio laudantium nulla eos numquam incidunt!</p>
          </div>
        </div>
        <div class="service text-center">
          <a href="#"><img src="{{ asset('templates/site/images/fasilitas/3.png') }}" alt="Image" class="img-fluid"></a>
          <div class="px-md-3">
            <h3><a href="#">Sea &amp; Ear Freight</a></h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae distinctio laudantium nulla eos numquam incidunt!</p>
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
          <h2>Services</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
      </div>
    </div>
    <div class="owl-carousel owl-all">
      <div class="block__35630 text-center">
        <div class="icon mb-0">
          <span class="flaticon-warehouse"></span>
        </div>
        <h3 class="mb-3">Warehouse</h3>
        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
      </div>
      <div class="block__35630 text-center">
        <div class="icon mb-0">
          <span class="flaticon-airplane"></span>
        </div>
        <h3 class="mb-3">Air Freight</h3>
        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
      </div>
      <div class="block__35630 text-center">
        <div class="icon mb-0">
          <span class="flaticon-box"></span>
        </div>
        <h3 class="mb-3">Package Forwarding</h3>
        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
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

<div class="site-section bg-light" id="faq-section">
  <div class="container">
    <div class="row mb-5">
      <div class="block-heading-1 col-12 text-center">
        <h2>Frequently Ask Questions</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
          <h3 class="text-black h4 mb-4">Possimus aut consequuntur incidunt?</h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
        </div>
        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
          <h3 class="text-black h4 mb-4">Dolorum esse odio quas architecto sint?</h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
        </div>
        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
          <h3 class="text-black h4 mb-4">Possimus aut consequuntur incidunt?</h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
          <h3 class="text-black h4 mb-4">Lorem ipsum dolor sit</h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
        </div>
        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
          <h3 class="text-black h4 mb-4">consequuntur incidunt?</h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
        </div>
        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
          <h3 class="text-black h4 mb-4">Possimus aut consequuntur incidunt?</h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="block__73694 site-section border-top" id="why-us-section">
  <div class="container">
    <div class="row d-flex no-gutters align-items-stretch">
      <div class="col-12 col-lg-6 block__73422 order-lg-2" style="background-image: url('{{ asset('templates/site/images/depot_delivery_1.jpg') }}');" data-aos="fade-left" data-aos-delay="">
      </div>
      <div class="col-lg-5 mr-auto p-lg-5 mt-4 mt-lg-0 order-lg-1" data-aos="fade-right" data-aos-delay="">
        <h2 class="mb-4 text-black">Why Depot</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam error aliquid, dolores animi obcaecati quisquam accusamus soluta?</p>
        <ul class="ul-check primary list-unstyled mt-5">
          <li>Cargo express</li>
          <li>Secure Services</li>
          <li>Secure Warehouseing</li>
          <li>Cost savings</li>
          <li>Proven by great companies</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="site-section bg-light block-13" id="testimonials-section" data-aos="fade">
  <div class="container">
    <div class="text-center mb-5">
      <div class="block-heading-1">
        <h2>Happy Clients</h2>
      </div>
    </div>
    <div class="owl-carousel nonloop-block-13">
      <div>
        <div class="block-testimony-1 text-center">
          <blockquote class="mb-4">
            <p>&ldquo;The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt
              and made herself on the way.&rdquo;</p>
          </blockquote>

          <figure>
            <img src="{{ asset('templates/site/images/person_1.jpg') }}" alt="Image" class="img-fluid rounded-circle mx-auto">
          </figure>
          <h3 class="font-size-20 text-black">Ricky Fisher</h3>
        </div>
      </div>

      <div>
        <div class="block-testimony-1 text-center">
          <blockquote class="mb-4">
            <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
          </blockquote>
          <figure>
            <img src="{{ asset('templates/site/images/person_2.jpg') }}" alt="Image" class="img-fluid rounded-circle mx-auto">
          </figure>
          <h3 class="font-size-20 mb-4 text-black">Ken Davis</h3>
        </div>
      </div>

      <div>
        <div class="block-testimony-1 text-center">
          <blockquote class="mb-4">
            <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
          </blockquote>
          <figure>
            <img src="{{ asset('templates/site/images/person_1.jpg') }}" alt="Image" class="img-fluid rounded-circle mx-auto">
          </figure>
          <h3 class="font-size-20 text-black">Mellisa Griffin</h3>
        </div>
      </div>

      <div>
        <div class="block-testimony-1 text-center">
          <blockquote class="mb-4">
            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
          </blockquote>
          <figure>
            <img src="{{ asset('templates/site/images/person_3.jpg') }}" alt="Image" class="img-fluid rounded-circle mx-auto">
          </figure>
          <h3 class="font-size-20 mb-4 text-black">Robert Steward</h3>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="site-section" id="contact-section">
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