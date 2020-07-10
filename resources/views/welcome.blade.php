@extends('partials.master')

@section('content')
<!-- carousel -->
      <div class="site-section-cover overlay img-bg-section" style="background-image: url(../template/images/bg2.png);" >
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12 col-lg-7">
              <h1 data-aos="fade-up" data-aos-delay="">STRIKE OVER</h1>  
              <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, cumque vitae animi.</p>
              <p data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-outline-white border-w-2 btn-md">LOGIN</a></p>
            </div>
          </div>
        </div>
      </div>
    <!-- end carousel -->
    

    <!-- section1 -->
    <div class="site-section">
      <div class="block__73694 mb-2" id="services-section">
        <div class="container">
          <div class="row d-flex no-gutters align-items-stretch">

            <div class="col-12 col-lg-7 block__73422" style="background-image: url(../template/images/logo-bower.png);" data-aos="fade-right" data-aos-delay="">
            </div>

            <div class="col-lg-5 ml-auto p-lg-5 mt-4 mt-lg-0" data-aos="fade-left" data-aos-delay="">
              <h2 class="mb-3 text-black">Tentang Stike Over</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus id dignissimos nemo minus perspiciatis ullam itaque voluptas iure vero, nesciunt unde odit aspernatur distinctio, maiores facere officiis. Cum, esse, iusto?</p>

              <p>Minus perspiciatis ullam itaque voluptas iure vero, nesciunt unde odit aspernatur distinctio, maiores facere officiis. Cum, esse, iusto?</p>

              <ul class="ul-check primary list-unstyled mt-5">
                <li>Lorem ipsum dolor.</li>
                <li>Quod, amet. Provident.</li>
                <li>Quo, adipisci, quis.</li>
                <li>Cumque perspiciatis, blanditiis?</li>
              </ul>              
            </div>
          </div>
        </div>      
      </div>
    </div>
    <!-- end section1 -->

    <!-- our fitur -->
    <section class="site-section bg-light" id="pricing-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-md-7">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
              <h2>FITUR</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quae temporibus tenetur vitae iusto suscipit alias, laudantium, porro unde tempora.</p>
            </div>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="">
            <div class="pricing">
              <h3 class="text-center text-black mb-3">Tanya Pribadi</h3>
              <p class="text-center" style="font-weight: bold;">Manfaat yang didapat</p>
              <ul class="list-unstyled ul-check success mb-5">
                
                <li>Officia quaerat eaque neque</li>
                <li>Possimus aut consequuntur incidunt</li>
                <li class="remove">Lorem ipsum dolor sit amet</li>
                <li class="remove">Consectetur adipisicing elit</li>
                <li class="remove">Dolorum esse odio quas architecto sint</li>
              </ul>
              <p class="text-center">
                <a href="#" class="btn btn-secondary btn-md">Masuk</a>
              </p>
            </div>
          </div>

          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing">
              <h3 class="text-center text-black mb-3">Tanya Publik</h3>
              <p class="text-center" style="font-weight: bold;">Manfaat yang didapat</p>
              <ul class="list-unstyled ul-check success mb-5">
                
                <li>Officia quaerat eaque neque</li>
                <li>Possimus aut consequuntur incidunt</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipisicing elit</li>
                <li class="remove">Dolorum esse odio quas architecto sint</li>
              </ul>
              <p class="text-center">
                <a href="#" class="btn btn-primary btn-md text-white">Masuk</a>
              </p>
            </div>
          </div>

          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing">
              <h3 class="text-center text-black mb-3">List Pertanyaan</h3>
              <p class="text-center" style="font-weight: bold;">Manfaat yang didapat</p>
              <ul class="list-unstyled ul-check success mb-5">
                
                <li>Officia quaerat eaque neque</li>
                <li>Possimus aut consequuntur incidunt</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipisicing elit</li>
                <li>Dolorum esse odio quas architecto sint</li>
              </ul>
              <p class="text-center">
                <a href="#" class="btn btn-secondary btn-md">Masuk</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
@include('partials.footer')
@endsection