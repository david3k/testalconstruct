<div class="site-section">
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col-lg-6">
                <div class="box-29291">
                    <h2 class="heading-39291">Willkommen bei Testal <br> Ein paar Worte über uns</h2>
                    <p>Wir sind ein ambitioniertes und innovatives Bauunternehmen in Deutschland und Polen.</p>
                     <p>Neue Technologien sind für uns Werkzeuge, die wir sowohl bei der Baustellenplanung und -verwaltung einsetzen, als auch bei der Einsatzleitung. So sparen wir Zeit und halten uns die Möglichkeit offen, bei voller Kontrolle über das Projekt jederzeit Änderungen einführen zu können.</p>
                    <br>
                    <p>Ein Unternehmen, viele Möglichkeiten </p>
                    <br>
                    <div class="more-about">
                        {!! (request()->segment(1) == '') ? '<a href="' .  url('about')  . '"class="btn-about">Mehr erfahren</a>' : '' !!}
                    </div>
                    <p class="mt-5">
                        <span class="d-block font-weight-bold text-black">Adam Zborowski</span>
                        <span class="d-block font-weight-bold text-muted">Bauingenieur und Geschäftsführer</span>
                        {{--<img src="images/signature.svg" alt="Image" class="img-fluid" width="140">--}}
                    </p>
                </div>

            </div>
            <div class="col-lg-6">
                    <img src="{{ asset(config('testalConstruct.path_img') . 'about_1.jpg') }}" alt="Image" class="img-about">
            </div>
        </div>
    </div>
</div>
