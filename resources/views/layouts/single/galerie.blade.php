<style>
    body {
        background-color:#1d1d1d !important;
        font-family: "Asap", sans-serif;
        color:#989898;
        margin:10px;
        font-size:16px;
    }

    #demo {
        height:100%;
        position:relative;
        overflow:hidden;
    }


    .green{
        background-color:#6fb936;
    }
    .thumb{
        margin-bottom: 30px;
    }

    .page-top{
        margin-top:85px;
    }


    img.zoom {
        width: 100%;
        height: 200px;
        border-radius:5px;
        object-fit:cover;
        -webkit-transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
        -ms-transition: all .3s ease-in-out;
    }


    .transition {
        -webkit-transform: scale(1.2);
        -moz-transform: scale(1.2);
        -o-transform: scale(1.2);
        transform: scale(1.2);
    }
    .modal-header {

        border-bottom: none;
    }
    .modal-title {
        color:#000;
    }
    .modal-footer{
        display:none;
    }


</style>

<!-- Page Content -->
<div class="site-section">
<div class="container page-top">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a href="{{ asset(config('testalConstruct.path_img') . 'gallery/1.jpg') }}" class="fancybox" rel="ligthbox">
                <img  src="{{ asset(config('testalConstruct.path_img') . 'gallery/1.jpg') }}" class="zoom img-fluid "  alt="">
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a href="{{ asset(config('testalConstruct.path_img') . 'gallery/12.jpg') }}"  class="fancybox" rel="ligthbox">
                <img  src="{{ asset(config('testalConstruct.path_img') . 'gallery/12.jpg') }}" class="zoom img-fluid"  alt="">
            </a>
        </div>

        <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a href="{{ asset(config('testalConstruct.path_img') . 'gallery/3.jpg') }}" class="fancybox" rel="ligthbox">
                <img  src="{{ asset(config('testalConstruct.path_img') . 'gallery/3.jpg') }}" class="zoom img-fluid "  alt="">
            </a>
        </div>

        <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a href="{{ asset(config('testalConstruct.path_img') . 'gallery/13.jpg') }}" class="fancybox" rel="ligthbox">
                <img  src="{{ asset(config('testalConstruct.path_img') . 'gallery/13.jpg') }}" class="zoom img-fluid "  alt="">
            </a>
        </div>

        <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a href="{{ asset(config('testalConstruct.path_img') . 'gallery/04.jpg') }}" class="fancybox" rel="ligthbox">
                <img  src="{{ asset(config('testalConstruct.path_img') . 'gallery/04.jpg') }}" class="zoom img-fluid "  alt="">
            </a>
        </div>

        <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a href="{{ asset(config('testalConstruct.path_img') . 'gallery/05.jpg') }}" class="fancybox" rel="ligthbox">
                <img  src="{{ asset(config('testalConstruct.path_img') . 'gallery/05.jpg') }}" class="zoom img-fluid "  alt="">
            </a>
        </div>

        <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a href="{{ asset(config('testalConstruct.path_img') . 'gallery/01.jpg') }}" class="fancybox" rel="ligthbox">
                <img  src="{{ asset(config('testalConstruct.path_img') . 'gallery/01.jpg') }}" class="zoom img-fluid "  alt="">
            </a>
        </div>

        <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a href="{{ asset(config('testalConstruct.path_img') . 'gallery/26.jpg') }}" class="fancybox" rel="ligthbox">
                <img  src="{{ asset(config('testalConstruct.path_img') . 'gallery/26.jpg') }}" class="zoom img-fluid "  alt="">
            </a>
        </div>

        <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a href="{{ asset(config('testalConstruct.path_img') . 'gallery/15.jpg') }}" class="fancybox" rel="ligthbox">
                <img  src="{{ asset(config('testalConstruct.path_img') . 'gallery/15.jpg') }}" class="zoom img-fluid "  alt="">
            </a>
        </div>

        <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a href="{{ asset(config('testalConstruct.path_img') . 'gallery/20.jpg') }}" class="fancybox" rel="ligthbox">
                <img  src="{{ asset(config('testalConstruct.path_img') . 'gallery/20.jpg') }}" class="zoom img-fluid "  alt="">
            </a>
        </div>

        <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <a href="{{ asset(config('testalConstruct.path_img') . 'gallery/03.jpg') }}" class="fancybox" rel="ligthbox">
                <img  src="{{ asset(config('testalConstruct.path_img') . 'gallery/03.jpg') }}" class="zoom img-fluid "  alt="">
            </a>
        </div>

    </div>

</div>
</div>
