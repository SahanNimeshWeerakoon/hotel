@extends('layouts.app')
    @section('content')
    @include('pages.homeComponenets.carousel')
    <div class="container">
        @include('pages.homeComponenets.bannerPlusDetails')
    </div>
    @include('pages.homeComponenets.sliderDetails')
    @endsection