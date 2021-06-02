<div class="site-section">
    <div class="container">
        <div class="row mb-5 mt-5 section-row">
            <div class="col-md-7">
                <h2 class="heading-39291 mb-0">Komplette Projekte</h2>
            </div>
            @if(request()->segment(1) == '')
            <div class="col-md-5 text-right">
                <p class="mb-0"><a href="{{ url('projects') }}" class="more-39291">Alle Projekte</a></p>
            </div>
            @endif
        </div>
        <div class="row">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="">
                <div class="media-02819">
                    <a href="{{ asset(config('testalConstruct.path_img') . '26.jpg') }}" class="img-link" data-lightbox="Küche und Esszimmer" data-title="Küche und Esszimmer"><img src="{{ asset(config('testalConstruct.path_img') . '26.jpg') }}" alt="Image" class="img-fluid"></a>
                   {{-- <h5>Küche und Esszimmer</h5>--}}
                    {{-- <span>Haus, Polen</span>--}}
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="">
                <div class="media-02819">
                    <a href="{{ asset(config('testalConstruct.path_img') . 'gallery/02.jpg') }}" class="img-link" data-lightbox="WC und Bad" data-title="WC und Bad"><img src="{{ asset(config('testalConstruct.path_img') . 'gallery/02.jpg') }}" alt="Image" class="img-fluid"></a>
                  {{--  <h5>WC und Bad</h5>--}}
                    {{-- <span>Melbourne, Australia</span>--}}
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="">
                <div class="media-02819">
                    <a href="{{ asset(config('testalConstruct.path_img') . 'gallery/04.jpg') }}" class="img-link" data-lightbox="Komplettes Haus" data-title="Komplettes Haus"><img src="{{ asset(config('testalConstruct.path_img') . 'service/fassaden_640x480.jpg') }}" alt="Image" class="img-fluid"></a>
                   {{-- <h5>Komplettes Haus</h5>--}}
                    {{--  <span>Melbourne, Australia</span>--}}
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="">
                <div class="media-02819">
                    <a href="{{ asset(config('testalConstruct.path_img') . 'haus2.jpg') }}" class="img-link" data-lightbox="Komplettes Haus #2" data-title="Komplettes Haus #2"><img src="{{ asset(config('testalConstruct.path_img') . 'service/haus2_640x480.jpg') }}" alt="Image" class="img-fluid"></a>
                   {{-- <h5>Komplettes Haus #2</h5>--}}
                    {{--<span>Melbourne, Australia</span>--}}
                </div>
            </div>
            @if(request()->segment(1) == 'projects')
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="">
                <div class="media-02819">
                    <a href="{{ asset(config('testalConstruct.path_img') . 'gallery/05.jpg') }}" class="img-link" data-lightbox="Komplettes Haus #2" data-title="Komplettes Haus #2"><img src="{{ asset(config('testalConstruct.path_img') . 'gallery/05.jpg') }}" alt="Image" class="img-fluid"></a>
                    <h5>Haus Innenräume</h5>
                    {{--<span>Melbourne, Australia</span>--}}
                </div>
            </div>
             <div class="col-lg-6" data-aos="fade-up" data-aos-delay="">
                    <div class="media-02819">
                        <a href="{{ asset(config('testalConstruct.path_img') . 'haus2.jpg') }}" class="img-link" data-lightbox="Haus Innenräume" data-title="Haus Innenräume"><img src="{{ asset(config('testalConstruct.path_img') . 'service/haus2_640x480.jpg') }}" alt="Image" class="img-fluid"></a>
                        <h5>Haus Innenräume</h5>
                        {{--<span>Melbourne, Australia</span>--}}
                    </div>
             </div>

            @endif
        </div>
    </div>
</div>

{{--   <div class="site-section">
       <div class="container">
           <div class="row  mb-5">
               <div class="col-md-7">
                   <h2 class="heading-39291">Blog and Updates</h2>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto quos veniam magni totam, architecto earum dolor id obcaecati!</p>

               </div>
           </div>
           <div class="row align-items-stretch">
               <div class="col-lg-3 col-md-6 mb-5">
                   <div class="post-entry-1 h-100">

                       <div class="post-entry-1-contents">
                           <span class="meta">Septermber 30, 2019</span>
                           <h2><a href="#">Iusto quos veniam magni totam</a></h2>
                           <p class="my-3"><a href="#" class="more-39291">Read More</a></p>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-md-6 mb-5">
                   <div class="post-entry-1 h-100">

                       <div class="post-entry-1-contents">
                           <span class="meta">Septermber 30, 2019</span>
                           <h2><a href="#">Iusto quos veniam magni totam</a></h2>
                           <p class="my-3"><a href="#" class="more-39291">Read More</a></p>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-md-6 mb-5">
                   <div class="post-entry-1 h-100">

                       <div class="post-entry-1-contents">
                           <span class="meta">Septermber 30, 2019</span>
                           <h2><a href="#">Iusto quos veniam magni totam</a></h2>
                           <p class="my-3"><a href="#" class="more-39291">Read More</a></p>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-md-6 mb-5">
                   <div class="post-entry-1 h-100">
                       <div class="post-entry-1-contents">
                           <span class="meta">Septermber 30, 2019</span>
                           <h2><a href="#">Iusto quos veniam magni totam</a></h2>
                           <p class="my-3"><a href="#" class="more-39291">Read More</a></p>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
--}}
