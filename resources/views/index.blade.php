@extends('master')


@section('body')

    {{--Navbar start--}}
    @include('layouts.home.navbar')
    {{--Navbar end--}}

    {{--Carousel start--}}
    @include('layouts.home.carousel')
    {{--Carousel end--}}

    {{--About start--}}
    @include('layouts.home.about')
    {{--About end--}}

    {{--Service start--}}
    @include('layouts.home.service')
    {{--Service end--}}

    {{--Rating start--}}
    @include('layouts.home.rating')
    {{--Rating end--}}

    {{--Projects start--}}
    @include('layouts.home.projects')
    {{--Projects end--}}

    {{--Footer start--}}
    @include('layouts.home.footer')
    {{--Footer end--}}

@endsection
