@extends('layouts.site')

@section('og_title')
    <meta property="og:title" content="Contato - {{ config('app.site_title') }}">
@stop
@section('og_url')
    <meta property="og:url" content="{{ Request::url() }}">
@stop
@section('og_description')
    <meta property="og:description" content="{{ config('app.site_description') }}">
@stop
@section('og_image')
    <meta property="og:image" content="{{ url('/') }}{{ config('app.site_logo') }}">
@stop

@section('title')
    Sobre - @parent
@stop

@section('bread')
    @include('site._partials.bread', ['pagina'=> "Sobre",'imagem'=> "bread_contato"])
@endsection

@section('content')
    <section class="pgl-intro">
        <div class="container">
            <h2>Welcome to RealEstast</h2>
            <div class="owl-carousel pgl-pro-slide pgl-img-slide" data-plugin-options='{"items": 1, "pagination": false, "autoHeight": true}'>
                <div class="item-wrap">
                    <img src="images/sobre/slider1.jpg" alt="Photo" class="img-responsive">
                    <div class="item-caption"><p>Frase 1.</p></div>
                </div>
                <div class="item-wrap">
                    <img src="images/sobre/slider2.jpg" alt="Photo" class="img-responsive">
                    <div class="item-caption"><p>Frase 2.</p></div>
                </div>
                <div class="item-wrap">
                    <img src="images/sobre/slider3.jpg" alt="Photo" class="img-responsive">
                    <div class="item-caption"><p>Frase 3.</p></div>
                </div>
            </div>
            <div class="lead pgl-bg-light text-center">
                <p>Sobre, hisória, etc</p>
            </div>
        </div>
    </section>

    <!-- Begin testimonial -->
    <section class="pgl-teams">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Missão</h2>
                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                    <h2>Visão</h2>
                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                    <h2>Valores</h2>
                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>


                </div>
            </div>

        </div>
    </section>
    <!-- End testimonial -->
@endsection
