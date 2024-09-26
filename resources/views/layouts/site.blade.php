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

</body>


</html>
