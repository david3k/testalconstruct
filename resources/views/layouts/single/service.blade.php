{{--
@include('layouts.home.service')
--}}

<style>
    /* Style the links inside the sidenav */
    #mySidenav a {
        text-align: right;
        z-index: 2;
        position: fixed; /* Position them relative to the browser window */
        left: -30px; /* Position them outside of the screen */
        transition: 0.3s; /* Add transition on hover */
        padding: 15px; /* 15px padding */
        width: 80px; /* Set a specific width */
        text-decoration: none; /* Remove underline */
        font-size: 20px; /* Increase font size */
        color: white; /* White text color */
        border-radius: 0 5px 5px 0; /* Rounded corners on the top right and bottom right side */
        opacity: 0.8;
    }

    #mySidenav a:hover {
        left: -25px; /* On mouse-over, make the elements appear as they should */
        padding-left: 5px;
        opacity: 0.8;
        font-color: white;
    }

    #mySidenav .active{
        left: -25px; /* On mouse-over, make the elements appear as they should */
        padding-left: 5px;
        background-color: #f1ebdd;
        opacity: 0.8;
    }

    /* The about link: 20px from the top with a green background */
    #l1 {
        top: 110px;
        background-color: #fbf4e1;
    }

    #l2 {
        top: 160px;
        background-color: #fbf4e1; /* Blue */
    }

    #l3 {
        top: 210px;
        background-color: #fbf4e1;
    }

    #l4 {
        top: 260px;
        background-color: #fbf4e1
    }
    #l5 {
        top: 310px;
        background-color: #fbf4e1
    }
    #l6 {
        top: 360px;
        background-color: #fbf4e1
    }
    #l7 {
        top: 410px;
        background-color: #fbf4e1
    }
    #l8 {
        top: 460px;
        background-color: #fbf4e1
    }
    #l9 {
        top: 510px;
        background-color: #fbf4e1
    }

</style>
    <div class="service-section">
        <div id="mySidenav" class="sidenav">
            <a href="#bathroomrenovation" id="l1"><img src="{{asset(config('testalConstruct.path_img') . 'renovation.png')}}" alt="Image" width="30" height="30"></a>
            <a href="#painterandvarnishing" id="l2"><img src="{{asset(config('testalConstruct.path_img') . 'renovation_2.png')}}" alt="Image" width="30" height="30"></a>
            <a href="#drywall" id="l3"><img src="{{asset(config('testalConstruct.path_img') . 'drywall.png')}}" alt="Image" width="30" height="30"></a>
            <a href="#trowel" id="l4"><img src="{{asset(config('testalConstruct.path_img') . 'trowel.png')}}" alt="Image" width="30" height="30"></a>
            <a href="#facade" id="l5"><img src="{{asset(config('testalConstruct.path_img') . 'family-house-facade.png')}}" alt="Image" width="30" height="30"></a>
            <a href="#roofconstruction" id="l6"><img src="{{asset(config('testalConstruct.path_img') . 'roof.png')}}" alt="Image" width="30" height="30"></a>
            <a href="#floorlaying" id="l7"><img src="{{asset(config('testalConstruct.path_img') . 'parquet.png')}}" alt="Image" width="30" height="30"></a>
            <a href="#doorwindowinstallation" id="l8"><img src="{{asset(config('testalConstruct.path_img') . 'door.png')}}" alt="Image" width="30" height="30"></a>
            <a href="#electrictyinstallation" id="l9"><img src="{{asset(config('testalConstruct.path_img') . 'electric.png')}}" alt="Image" width="30" height="30"></a>
        </div>
     <div>

    <div class="service-section bathroomrenovation" id="bathroomrenovation">
        <div class="container" >
            <div class="row" style="background-color: white;">
                <div class="col-md-5 service-section-text-left">
                    <h2 class="heading-39291">Renovierungsarbeiten</h2>
                    <p>Renovieren ist unsere Leidenschaft. Wenn attraktive und funktionale Räume entstehen in denen man sich aufhalten und leben will, erfüllt uns das mit Freude.
                        Dieses Gefühl wollen wir mit unseren Kunden teilen, damit die Verwirklichung ihrer Idee für sie ein ebenso herrliches Abenteuer ist wie für uns. Dabei hilft uns ein Fächer an innovativen Lösungen und neuesten Technologien die, genutzt durch ein ausgebildetes und erfahrenes Team, den gemeinsamen Erfolg garantieren.
                    </p>
                </div>
                <div class="col-md-6 service-section-picture-right ml-auto">
                    <img src="{{ asset(config('testalConstruct.path_img') . 'service/badrenov_640x480.jpg') }}" alt="Image">
                </div>
            </div>
        </div>
    </div>
    <div class="service-section element-item painterandvarnishing" id="painterandvarnishing">
        <div class="container mb-5">
            <div class="row" style="background-color: white;">
                <div class="col-md-6 service-section-picture-left mr-auto">
                    <img src="{{ asset(config('testalConstruct.path_img') . 'service/malern_640x480.jpg') }}" alt="Image">
                </div>
                <div class="col-md-5 service-section-text-right">
                    <h2 class="heading-39291">MALER- UND LACKIERERARBEITEN</h2>
                    <p>Professionelles Malern, Lackieren und Tapezieren mit umweltfreundlichen Materialien höchster Qualität, ausgeführt von ausgebildeten Fachleuten.</p>
                    <p>Wir malern und tapezieren nicht nur Ihre Räume, wir helfen auch bei der Auswahl der richtigen Farbe und Tapete, im Hinblick auf die Ästhetik und Verträglichkeit. Im Kinderzimmer nutzt man andere Materialien als in der Küche und noch andere im Wohnzimmer oder Bad.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="service-section drywall" id="drywall">
        <div class="container">
            <div class="row" style="background-color: white;">
                <div class="col-md-5 service-section-text-left">
                    <h2 class="heading-39291">Trockenbau</h2>
                    <p>
                    <p>Trockenbau ist die ideale Lösung für die individuelle Raumgestaltung. Dabei sollte jedoch dafür gesorgt werden, dass die Wände, Böden und Decken ein harmonisches Ganzes bilden, und die physischen Anforderungen des Gebäudes berücksichtigt werden.</p>
                    <p>Testal Ihr kompetenter Partner im Trockenbau, der alle Brandschutz Richtlinien befolgt, die Raumakustik berücksichtigt sowie gleichzeitig die Wünsche der Kunden nicht aus den Augen verliert.
                    </p>
                </div>
                <div class="col-md-6 service-section-picture-right ml-auto">
                    <img src="{{ asset(config('testalConstruct.path_img') . 'service/trockenbau640x480_2.jpg') }}" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>


    <div class="service-section" id="trowel">
        <div class="container mb-5">
            <div class="row" style="background-color: white;">
                <div class="col-md-6 service-section-picture-left mr-auto">
                    <img src="{{ asset(config('testalConstruct.path_img') . 'service/verputzarbeiten_640x480.jpg') }}" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-5 service-section-text-right">
                    <h2 class="heading-39291">Verputzarbeiten</h2>
                    <p>Putz sollte nicht nur ausgewogen, ausdauernd und energiesparend sein, sondern auch eine gute Basis für das Malern, Tapezieren oder Anbringen von Fliesen darstellen.</p>
                    <p>Gut verputze Wände beeinflussen nicht nur die Ästhetik des Raumes maßgeblich, sondern auch das vorherrschende Klima des Raumes sowie das Wohlgefühl der sich darin befindenden Personen. Bei Testal haben wir Spezialisten, die Ihnen helfen einen hochwertigen Putz zu finden, angepasst an die Bedürfnisse.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="service-section facade" id="facade">
        <div class="container">
            <div class="row" style="background-color: white;">
                <div class="col-md-5 service-section-text-left">
                    <h2 class="heading-39291">Fassadenbau</h2>
                    <p>
                        Neben der Wärmedämmung von Gebäuden übernimmt Testal auch sämtliche Arbeiten im Zusammenhang mit der Sanierung von Außenfassaden. Unsere kompetenten Mitarbeiter vor Ort garantieren die fachgerechte Ausführung der Arbeiten und geben Ihrem Haus das perfekte Erscheinungsbild durch die passende Auswahl von Putz – und Farbsystemen. Witterung, Abgase oder auch die vergangen Jahre halten uns nicht davon ab, Ihrer Fassade wieder eine neue und ansprechende Optik zu geben.
                    </p>
                </div>
                <div class="col-md-6 service-section-picture-right ml-auto">
                    <img src="{{ asset(config('testalConstruct.path_img') . 'service/fassaden_640x480.jpg') }}" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="service-section roofconstruction" id="roofconstruction">
        <div class="container mb-5">
            <div class="row" style="background-color: white;">
                <div class="col-md-6 service-section-picture-left mr-auto">
                    <img src="{{ asset(config('testalConstruct.path_img') . 'service/dachsanierung_640x480.jpg') }}" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-5 service-section-text-right">
                    <h2 class="heading-39291">Dachdeckerei</h2>
                    <p>Wir bieten wir Ihnen alle Arbeiten aus einer Hand. Ob es um ein Steildach oder ein Flachdach geht, Testal ist Ihr zuverlässiger Partner und bietet sorgfältige Arbeit mit hochwertigen Materialien. Wir führen Neueindeckungen durch, reparieren Ihr Flach- oder Steildach und übernehmen die Sanierung. Als Unternehmen für Dachdeckerei und als Ihr Dachspengler erledigen wir auch sämtliche Verblechungen, bringen Dachrinnen und Abflüsse sowie Verkleidungen an. Wir übernehmen Planung und Ausführung nach Ihren Wünschen.</p>
                </div>
            </div>
        </div>
    </div>

        <div class="service-section section floorlaying" id="floorlaying">
            <div class="container">
                <div class="row" style="background-color: white;">
                    <div class="col-md-5 service-section-text-left">
                        <h2 class="heading-39291">BODENVERLEGUNG</h2>
                        <p>Die Wahl des richtigen Bodens ist nicht nur Sache der Ästhetik. Bei der Auswahl sind auch Hochwertigkeit, Funktionalität und Widerstandsfähigkeit, sowie Komfort bei der Reinigung des Bodens wichtig. Qualifiziertes Personal von Testal hilft Ihnen bei der Auswahl des richtigen Bodens, der optimal an das Rauminnere angepasst ist. Im Rahmen unserer Leistungen bieten wir sowohl Beratung als auch Bodenausgleich und Montage von Böden jeglicher Art an, wie: Fliesen und Laminat.</p>
                    </div>
                    <div class="col-md-6 service-section-picture-right ml-auto">
                        <img src="{{ asset(config('testalConstruct.path_img') . 'service/bodenverlegung.png') }}" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="service-section doorwindowinstallation" id="doorwindowinstallation">
            <div class="container mb-5">
                <div class="row" style="background-color: white;">
                    <div class="col-md-6 service-section-picture-left mr-auto">
                        <img src="{{ asset(config('testalConstruct.path_img') . 'service/fenster_640x480.jpg') }}" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-md-5 service-section-text-right">
                        <h2 class="heading-39291">Fenster und Türenmontage</h2>
                        <p>Selbst die höchste Qualität von Fenstern und Türen hilft nicht, wenn sie nicht professionell montiert wurden. Bei Testal garantieren wir eine fachkundige Montage. Türen und Fenster, angebracht von unserem qualifizierten Team, sind langlebig und bieten Ihnen höchsten Wohnkomfort sowie idealen Schutz vor Klimabedingungen.</p>
                        <p>Wir helfen Ihnen bei der Auswahl der richtigen Modelle, die angepasst sein müssen an die räumlichen Bedingungen, die Art des Raumes sowie die Sonnenbestrahlung. Wir garantieren, dass Sie den Unterschied spüren werden.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="service-section electrictyinstallation" id="electrictyinstallation">
            <div class="container">
                <div class="row" style="background-color: white;">
                    <div class="col-md-5 service-section-text-left">
                        <h2 class="heading-39291">Elektroinstallation</h2>
                        <p>Eine fachgerecht durchgeführte elektrische Installation ist keine Annehmlichkeit, sondern ein Muss! Nur gänzlich ausgebildete Fachleute sollten Kabel verlegen, Steckdosen und Sicherungen anbringen.</p>
                    </div>
                    <div class="col-md-6 service-section-picture-right ml-auto">
                        <img src="{{ asset(config('testalConstruct.path_img') . 'service/elektro640x480.png') }}" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <div class="service-section sanitarynstallation" id="sanitarynstallation">
            <div class="container mb-5">
                <div class="row" style="background-color: white;">
                    <div class="col-md-6 service-section-picture-left mr-auto">
                        <img src="{{ asset(config('testalConstruct.path_img') . 'service/heizungsanitar_640x480.jpg') }}" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-md-5 service-section-text-right">
                        <h2 class="heading-39291">HEIZUNGS- UND SANITÄRARBEITEN</h2>
                        <p>Ein weiteres stets erforderliches Element in jedem Haus und in jeder Wohnung, dem man viel Aufmerksamkeit widmen sollte, ist die Installation von Heizung und Hydraulik. Eine unprofessionelle Installation mag zu Störungen in der Funktionalität, aber auch zum Totalausfall führen, was erhebliche Kosten nach sich ziehen kann. Deshalb befassen sich unsere Mitarbeiter höchst professionell mit diesem Thema.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
