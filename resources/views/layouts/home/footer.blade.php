<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-7">
                        <h2 class="footer-heading mb-4">Kontaktdaten</h2>
                        <p>Piaskowa 14</p>
                        <p>65-209 Zielona Góra, Polen</p>
                        <br>
                        <p>Telefon DE: +49 157 56 290 330</p>
                        <p>Telefon PL: +48 68 417 04 17</p>
                        <br>
                        <p>Email</p>
                       <p>info@testal-bau.de</p>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <h2 class="footer-heading mb-4">Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="{{ url('about') }}">Über uns</a></li>
                            <li><a href="{{ url('service') }}">Leistungen</a></li>
                            <li><a href="{{ url('intelliplan') }}">Intelligentes Planen</a></li>
                            <li><a href="{{ url('imprint') }}">Über Uns</a></li>
                            <li><a href="{{ url('imprint') }}">Referenzen</a></li>
                            <li><a href="{{ url('contact') }}">Kontakt</a></li>
                            <li><a href="{{ url('imprint') }}">Impressum</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-md-4 ml-auto">

                {{-- <div class="mb-5">
                     <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>
                     <form action="#" method="post" class="footer-suscribe-form">
                         <div class="input-group mb-3">
                             <input type="text" class="form-control rounded-0 border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                             <div class="input-group-append">
                                 <button class="btn btn-primary text-white" type="button" id="button-addon2">Subscribe</button>
                             </div>
                         </div>
                 </div>--}}

                <h2 class="footer-heading mb-4">Folge uns</h2>
                <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="{{ url('/') }}" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="{{ url('/') }}" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="{{ url('/') }}" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </form>
            </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <div class="pt-5">
                    <!-- Link back to Free-Template.co can't be removed. Template is licensed under CC BY 3.0. -->
                    <p class="copyright"><small>&copy;
                            <script>document.write(new Date().getFullYear());</script> Testal Bauunternehmen <a
                                    href="" target="_blank"></a></small></p>
                </div>
            </div>
        </div>
    </div>
</footer>
