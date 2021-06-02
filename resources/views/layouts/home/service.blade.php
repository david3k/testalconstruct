<div class="site-section">
    <div class="container">
        <div class="row mb-5 mt-5 section-row">
            <div class="col-md-7">
                <h2 class="heading-39291 mb-0">Unser Leistungsspektrum umfasst</h2>
            </div>
            @if(request()->segment('1') == '')
                <div class="col-md-5 text-right">
                <p class="mb-0"><a href="{{ url('service') }}" class="more-39291">Alle Leistungen anzeigen</a></p>
            </div>
             @endif
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="">
                <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="{{asset(config('testalConstruct.path_img') . 'renovation.png')}}" alt="Image" class="img-fluid">
              </span>
                    <h3 class="mb-4 animate__animated animate__bounceIn">Renovierungsarbeiten</h3>
                    <div class="">
                        <a href="{{ request()->segment(1) == '' ? url('service#bathroomrenovation')  : '#bathroomrenovation'   }}" class="btn-about">Mehr erfahren</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-29193 text-center ">
              <span class="img-wrap mb-5">
                <img src="{{asset(config('testalConstruct.path_img') . 'renovation_2.png')}}" alt="Image" class="img-fluid">
              </span>
                    <h3 class="mb-4">Maler- und Lackiererarbeiten</h3>
                    <div class="">
                        <a href="{{ request()->segment(1) == '' ? url('service#painterandvarnishing')  : '#painterandvarnishing'   }}" class="btn-about">Mehr erfahren</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="{{asset(config('testalConstruct.path_img') . 'drywall.png')}}" alt="Image" class="img-fluid">
              </span>
                    <h3 class="mb-4">Trockenbau</h3>
                    <div class="">
                        <a href="{{ request()->segment(1) == '' ? url('service#drywall')  : '#drywall'   }}" class="btn-about">Mehr erfahren</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="{{asset(config('testalConstruct.path_img') . 'trowel.png')}}" alt="Image" class="img-fluid">
              </span>
                    <h3 class="mb-4">Verputzarbeiten</h3>
                    <div class="">
                        <a href="{{ request()->segment(1) == '' ? url('service#trowel')  : '#trowel'   }}" class="btn-about">Mehr erfahren</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="{{asset(config('testalConstruct.path_img') . 'family-house-facade.png')}}" alt="Image" class="img-fluid">
              </span>
                    <h3 class="mb-4">Fassadenbau</h3>
                    <div class="">
                        <a href="{{ request()->segment(1) == '' ? url('service#facade')  : '#facade'   }}" class="btn-about">Mehr erfahren</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="{{asset(config('testalConstruct.path_img') . 'roof.png')}}" alt="Image" class="img-fluid">
              </span>
                    <h3 class="mb-4">Dacharbeiten</h3>
                    <div class="">
                        <a href="{{ request()->segment(1) == '' ? url('service#roofconstruction')  : '#roofconstruction'   }}" class="btn-about">Mehr erfahren</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="{{asset(config('testalConstruct.path_img') . 'parquet.png')}}" alt="Image" class="img-fluid">
              </span>
                    <h3 class="mb-4">Bodenverlegung</h3>
                    <div class="">
                        <a href="{{ request()->segment(1) == '' ? url('service#floorlaying')  : '#floorlaying'   }}" class="btn-about">Mehr erfahren</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="{{asset(config('testalConstruct.path_img') . 'door.png')}}" alt="Image" class="img-fluid">
              </span>
                    <h3 class="mb-4">Montage von Fenster und Türen</h3>
                    <div class="">
                        <a href="{{ request()->segment(1) == '' ? url('service#doorwindowinstallation')  : '#doorwindowinstallation'   }}" class="btn-about">Mehr erfahren</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="{{asset(config('testalConstruct.path_img') . 'electric.png')}}" alt="Image" class="img-fluid">
              </span>
                    <h3 class="mb-4">Elektroinstallation</h3>
                    <div class="">
                        <a href="{{ request()->segment(1) == '' ? url('service#electrictyinstallation')  : '#electrictyinstallation'   }}" class="btn-about">Mehr erfahren</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="{{asset(config('testalConstruct.path_img') . 'restroom.png')}}" alt="Image" class="img-fluid">
              </span>
                    <h3 class="mb-4">Heizungs- und Sanitärarbeiten</h3>
                    <div class="">
                        <a href="{{ request()->segment(1) == '' ? url('service#sanitarynstallation')  : '#sanitarynstallation'   }}" class="btn-about">Mehr erfahren</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
