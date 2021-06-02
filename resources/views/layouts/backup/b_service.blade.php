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
                    <h3 class="mb-4"><a href="{{ request()->segment(1) == '' ? url('service#bathroomrenovation')  : '#bathroomrenovation'   }}">Badrenovierung</a></h3>
                    <p>Träumen Sie von einer Entspannungsoase? Wir helfen bei der Projektplanung, liefern unentbehrliche Bauteile und fügen das alles so zusammen, dass nichts anderes als Ihr Traumbad daraus entsteht.
                    </p>
                </div>
            </div>
            <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="{{asset(config('testalConstruct.path_img') . 'renovation_2.png')}}" alt="Image" class="img-fluid">
              </span>
                    <h3 class="mb-4"><a href="{{ request()->segment(1) == '' ? url('service#painterandvarnishing')  : '#painterandvarnishing'   }}">Maler- und Lackiererarbeiten</a></h3>
                    <p>Maler- und Lackiererarbeiten Professionelles Malern, Lackieren und Tapezieren mit umweltfreundlichen Materialien höchster Qualität, ausgeführt von ausgebildeten Fachleuten.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="{{asset(config('testalConstruct.path_img') . 'drywall.png')}}" alt="Image" class="img-fluid">
              </span>
                    <h3 class="mb-4"><a href="{{ request()->segment(1) == '' ? url('service#drywall')  : '#drywall'   }}">Trockenbau</a></h3>
                    <p>Trockenbau ist die ideale Lösung für die individuelle Raumgestaltung. Dabei sollte jedoch dafür gesorgt werden, dass die Wände, Böden und Decken ein Ganzes bilden und die Anforderungen berücksichtigt werden.
                    </p>
                </div>
            </div>
            <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="{{asset(config('testalConstruct.path_img') . 'trowel.png')}}" alt="Image" class="img-fluid">
              </span>
                    <h3 class="mb-4"><a href="{{ request()->segment(1) == '' ? url('service#trowel')  : '#trowel'   }}">Verputzarbeiten</a></h3>
                    <p>Putz sollte nicht nur ausgewogen, ausdauernd und energiesparend sein, sondern auch eine gute Basis für das Malern, Tapezieren oder Anbringen von Fliesen darstellen.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="{{asset(config('testalConstruct.path_img') . 'family-house-facade.png')}}" alt="Image" class="img-fluid">
              </span>
                    <h3 class="mb-4"><a href="{{ request()->segment(1) == '' ? url('service#facade')  : '#facade'   }}">Fassadenbau</a></h3>
                    <p>Wir bieten jegliche Fassadenanstriche, Fassadendämmung (WDVS) oder das neu Putzen der Fassade an. Fassadengestaltungen inkl. großer Farbauswahl.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="{{asset(config('testalConstruct.path_img') . 'roof.png')}}" alt="Image" class="img-fluid">
              </span>
                    <h3 class="mb-4"><a href="{{ request()->segment(1) == '' ? url('service#roofconstruction')  : '#roofconstruction'   }}">Dachdeckerei</a></h3>
                    <p>Ob es um ein Steildach oder ein Flachdach geht, wir sind ein zuverlässiger Partner und bietet sorgfältige Arbeit mit hochwertigen Materialien.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="{{asset(config('testalConstruct.path_img') . 'parquet.png')}}" alt="Image" class="img-fluid">
              </span>
                    <h3 class="mb-4"><a href="{{ request()->segment(1) == '' ? url('service#floorlaying')  : '#floorlaying'   }}">Bodenverlegung</a></h3>
                    <p>Die Wahl des richtigen Bodens ist nicht nur Sache der Ästhetik. Bei der Auswahl sind auch Hochwertigkeit, Funktionalität und Widerstandsfähigkeit, sowie Komfort bei der Reinigung des Bodens wichtig.
                    </p>
                </div>
            </div>
            <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="{{asset(config('testalConstruct.path_img') . 'door.png')}}" alt="Image" class="img-fluid">
              </span>
                    <h3 class="mb-4"><a href="{{ request()->segment(1) == '' ? url('service#doorwindowinstallation')  : '#doorwindowinstallation'   }}">Montage von Fenster und Türen</a></h3>
                    <p>Die Wahl des richtigen Bodens ist nicht nur Sache der Ästhetik. Bei der Auswahl sind auch Hochwertigkeit, Funktionalität und Widerstandsfähigkeit, sowie Komfort bei der Reinigung des Bodens wichtig.
                    </p>
                </div>
            </div>
            <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="{{asset(config('testalConstruct.path_img') . 'electric.png')}}" alt="Image" class="img-fluid">
              </span>
                    <h3 class="mb-4"><a href="{{ request()->segment(1) == '' ? url('service#electrictyinstallation')  : '#electrictyinstallation'   }}">Elektroinstallation</a></h3>
                    <p>Eine fachgerecht durchgeführte elektrische Installation ist keine Annehmlichkeit, sondern ein Muss! Nur gänzlich ausgebildete Fachleute sollten Kabel verlegen, Steckdosen und Sicherungen anbringen.
                    </p>
                </div>
            </div>
            <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="{{asset(config('testalConstruct.path_img') . 'restroom.png')}}" alt="Image" class="img-fluid">
              </span>
                    <h3 class="mb-4"><a href="{{ request()->segment(1) == '' ? url('service#sanitarynstallation')  : '#sanitarynstallation'   }}">Heizungs- und Sanitärarbeiten</a></h3>
                    <p>Wir bieten Ihnen eine vielfältige Lösungen (Bodenheizung, Wandheizung, Wärmepumpen, etc.), danach führen wir die Installation unter Verwendung von hochwertigsten Materialien durch.</p>
                </div>
            </div>

             {{-- <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="">
                   <div class="service-29193 text-center">
             <span class="img-wrap mb-5">
               <img src="{{asset(config('testalConstruct.path_fonts') . 'flaticon/svg/001-stairs.svg')}}" alt="Image" class="img-fluid">
             </span>
                       <h3 class="mb-4"><a href="#">Interior Blueprint</a></h3>
                       <p>Lorem ipsum dolor sit ame adipisicing elit. Perspiciatis incidunt distinctio voluptate .</p>
                   </div>
               </div>--}}
        </div>
    </div>
</div>
