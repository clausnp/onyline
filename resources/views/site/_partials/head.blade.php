<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta http-equiv="imagetoolbar" content="no"/>
<meta http-equiv="window-target" content="standard"/>
<meta http-equiv="Expires" content="-1"/>
<meta http-equiv="Content-Language" content="pt-br"/>
<meta http-equiv="cache-control" content="no-cache"/>
<meta name="resource-type" content="document"/>
<meta name="classification" content="Internet"/>
<meta name="distribution" content="Global"/>
<meta name="doc-class" content="Completed"/>
<meta name="generator" content="JetBrains PhpStorm"/>
<meta name="MSSmartTagsPreventParsing" content="true"/>
<meta name="author" content="Voope Soluções"/>
<link rel="author" href="https://www.voope.com.br" title="Voope"/>
<meta name="revisit-after" content="30 Days"/>
<meta name="robots" content="index, follow">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="DC.date.created" content="{{ config('app.site_date') }}"/>
<meta name="DC.title" content="{{ config('app.site_title') }}"/>
<meta name="keywords" content="{{ config('app.site_keywords') }}"/>
<meta name="description" content="{{ config('app.site_description') }}"/>

<meta property="og:locale" content="pt_BR">
@section('og_title')
    <meta property="og:title" content="{{ config('app.site_keywords') }}">
@show
@section('og_url')
    <meta property="og:url" content="{{ Request::url() }}">
@show
@section('og_description')
    <meta property="og:description" content="{{ config('app.site_description') }}">
@show
@section('og_image')
    <meta property="og:image" content="{{ url('/') }}{{ config('app.site_logo') }}">
@show
<meta property="og:type" content="website" />

<link rel="icon" href="{{ asset('images/favicon.png') }}" />

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

<!-- Bootstrap -->
<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Libs CSS -->
<link href="/css/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="/vendor/owl-carousel/owl.carousel.css" media="screen">
<link rel="stylesheet" href="/vendor/owl-carousel/owl.theme.css" media="screen">
<link rel="stylesheet" href="/vendor/flexslider/flexslider.css" media="screen">
<link rel="stylesheet" href="/vendor/chosen/chosen.css" media="screen">

<!-- Theme -->
<link href="/css/theme-animate.css" rel="stylesheet">
<link href="/css/theme-elements.css" rel="stylesheet">
<link href="/css/theme-blog.css" rel="stylesheet">
<link href="/css/theme-map.css" rel="stylesheet">
<link href="/css/theme.css" rel="stylesheet">

<!-- Theme Responsive-->
<link href="/css/theme-responsive.css" rel="stylesheet">
<link href="/css/custom.css" rel="stylesheet">

@yield('head')
