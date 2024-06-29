@extends('beranda.layouts.app')

@section('content')
        <div class="main-content">
            @include('beranda.partials.slideshow')
        </div>

        <div class="layanan">
            @include('beranda.partials.notices')
        </div>

        <div class="agenda">
            @include('beranda.partials.agenda')
        </div>

        <div class="newscontainer">
            @include('beranda.partials.news')
        </div>

        <footer class="footercontainer">
            @include('beranda.partials.footer')
        </footer>

@endsection
