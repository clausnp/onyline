<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@section('title') {{ config('app.site_title') }} @show</title>

    @include('site._partials.head')
</head>

<body>

@include('site._partials.nav')

@yield('bread')

<!-- Begin Main -->
<div role="main" class="main pgl-bg-grey">

@yield('content')

</div>
<!-- End Main -->

@include('site._partials.footer')

@include('site._partials.scripts')
<a href="https://api.whatsapp.com/send?1=pt_BR&phone=5554999750499" target="_blank" title="WhatsApp Cléderson de Santi" style="position:fixed;width:60px;height:60px;bottom:40px;left:20px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
  z-index:1000;" target="_blank">
    <i style="margin-top:16px" class="fab fa-whatsapp"></i>
</a>
<a href="https://api.whatsapp.com/send?1=pt_BR&phone=5554991768344" target="_blank" title="WhatsApp Leandro A. Tessaro" style="position:fixed;width:60px;height:60px;bottom:120px;left:20px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
  z-index:1000;" target="_blank">
    <i style="margin-top:16px" class="fab fa-whatsapp"></i>
</a>
</body>


</html>
