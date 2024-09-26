<header>
    <div id="top">
        <div class="container">
            {{--<p class="pull-left text-note hidden-xs"><i class="fa fa-phone"></i> Need Support? 1-800-666-8888</p>--}}
            <ul class="nav nav-pills nav-top navbar-right">
                <li><a href="https://www.facebook.com/" title="Facebook Onyline" data-placement="bottom" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/onylineimoveis/" target="_blank" title="Instagram Onyline" data-placement="bottom" data-toggle="tooltip" data-original-title="Instagram"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
    <nav class="navbar navbar-default pgl-navbar-main" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="logo" href="{{ route('inicial') }}"><img src="/images/logo.png" alt="Logotipo Onyline"></a> </div>

            <div class="navbar-collapse collapse width">
                <ul class="nav navbar-nav pull-right">

                    <li class="{{ request()->routeIs('inicial') ? 'active' : '' }}"><a href="{{ route('inicial') }}">INICIAL</a></li>
                    <li class="{{ request()->routeIs('sobre') ? 'active' : '' }}"><a href="{{ route('sobre') }}">SOBRE</a></li>
                    <li class="{{ request()->routeIs('contato') ? 'active' : '' }}"><a href="{{ route('contato') }}">CONTATO</a></li>

                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
</header>


