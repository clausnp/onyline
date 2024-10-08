@extends('layouts.site')

@section('og_title')
    <meta property="og:title" content="Sobre - {{ config('app.site_title') }}">
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
            <div class="owl-carousel pgl-pro-slide pgl-img-slide" data-plugin-options='{"items": 1, "pagination": false, "autoHeight": true}'>
                <div class="item-wrap">
                    <img src="images/sobre/slider1.jpg" alt="Foto Onyline Imóveis" class="img-responsive">
                    <div class="item-caption"><p>Onyline Imóveis</p></div>
                </div>
                <div class="item-wrap">
                    <img src="images/sobre/slider2.jpg" alt="Foto Onyline Imóveis" class="img-responsive">
                    <div class="item-caption"><p>Onyline Imóveis</p></div>
                </div>
                <div class="item-wrap">
                    <img src="images/sobre/slider3.jpg" alt="Foto Onyline Imóveis" class="img-responsive">
                    <div class="item-caption"><p>Onyline Imóveis</p></div>
                </div>
            </div>
            <div class="lead pgl-bg-light text-center">
                <p>Imobiliária Tessaro e De Santi Imóveis "ONYLINE IMÓVEIS".</p>
                <p>Localizada na cidade de Nova Prata - RS, na Serra Gaúcha tem como objetivo a venda de imóvel que você sonha e busca para você e sua família.</p>
                <p>Proporcionamos para você cliente a escolha do seu imóvel preferido: apartamentos, casas, terrenos, terrenos em condomínio, áreas de terra, coberturas, pavilhões e salas comerciais.</p>
                <p>Convidamos a todos vocês para conhecer nossa imobiliária e nossos corretores.</p>
                <p>Sejam bem vindos!!</p>
            </div>








        </div>
    </section>

@endsection
