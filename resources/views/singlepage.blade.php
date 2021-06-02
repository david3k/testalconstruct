@extends('master')

@section('body')

    <!-- Navbar start -->
    @include('layouts.home.navbar')
    <!-- Navbar end -->

    <!-- About start -->
    @if($page == 'about')
    @include('layouts.single.about')
    @endif
    <!-- About end -->

    <!-- Contact start -->
    @if($page == 'contact')
        @include('layouts.single.contact')
    @endif
    <!-- Contact end -->

    <!-- Service start -->
    @if($page == 'service')
        @include('layouts.single.service')
    @endif
    <!-- Service end -->

    <!-- Imprint start -->
    @if($page == 'imprint')
        @include('layouts.single.imprint')
    @endif
    <!-- Imprint end -->

    <!-- Projects start -->
    @if($page == 'projects')
        @include('layouts.single.projects')
    @endif
    <!-- Projects end -->

    <!-- Intelliplan start -->
    @if($page == 'intelliplan')
        @include('layouts.single.intelliplan')
    @endif
    <!-- Intelliplan end -->

    <!-- Reference start -->
    @if($page == 'reference')
        @include('layouts.single.reference')
    @endif
    <!-- Reference end -->

    <!-- Galerie start -->
    @if($page == 'galerie')
        @include('layouts.single.galerie')
    @endif
    <!-- Galerie end -->

    <!-- footer start -->
    @include('layouts.home.footer')
    <!-- footer end -->

@endsection
