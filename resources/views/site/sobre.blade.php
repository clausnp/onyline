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
    @include('site._partials.bread', ['pagina'=> "Sobre",'imagem'=> "bread_sobre"])
@endsection

@section('content')
    <div class="container">
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    <p>Sobre</p>
    </div>
@endsection
