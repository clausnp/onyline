@extends('layouts.site')

@section('title')
    Inicial - @parent
@stop

@section('content')
    @include('site._partials.slider')
    @include('site._partials.busca')




    <!-- Begin Featured -->
    <section class="pgl-featured">
        <div class="container">
            <h2>Em destaque</h2>
            <div class="properties-listing">
                <div class="row">
                    <div class="owl-carousel pgl-pro-slide pgl-pro-special" data-plugin-options='{"items": 2, "itemsDesktop": 1, "itemsDesktopSmall": 1, "singleItem": false, "autoPlay": false, "pagination": false, "autoHeight": true}'>
                        <div class="col-md-12 animation">
                            <div class="pgl-property pgl-property-thumb">
                                <a href="{{ route('propriedade_show') }}" class="link_preto">
                                <div class="row pgl-midnarrow-row">
                                    <div class="col-xs-6">
                                        <div class="property-thumb-info-image">
                                            <img alt="" class="img-responsive" src="images/properties/property-1.jpg">
                                            <span class="property-thumb-info-label">
                                                <span class="label price">$358,000</span>
                                                <span class="label forrent">Venda</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="property-thumb-info">
                                            <div class="property-thumb-info-content">
                                                <h3>Categoria</h3>
                                                <address>Endereço<br>Cidade - UF</address>
                                            </div>
                                            <div class="amenities clearfix">
                                                <ul class="pull-left">
                                                    <li><strong>Area total:</strong> 450<sup>m2</sup></li>
                                                </ul>
                                                <ul class="pull-right">
                                                    <li><i class="icons icon-bedroom"></i> 3</li>
                                                    <li><i class="icons icon-bathroom"></i> 2</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12 animation">
                            <div class="pgl-property pgl-property-thumb">
                                <a href="{{ route('propriedade_show') }}" class="link_preto">
                                    <div class="row pgl-midnarrow-row">
                                        <div class="col-xs-6">
                                            <div class="property-thumb-info-image">
                                                <img alt="" class="img-responsive" src="images/properties/property-1.jpg">
                                                <span class="property-thumb-info-label">
                                                <span class="label price">$358,000</span>
                                                <span class="label forrent">Venda</span>
                                            </span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="property-thumb-info">
                                                <div class="property-thumb-info-content">
                                                    <h3>Categoria</h3>
                                                    <address>Endereço<br>Cidade - UF</address>
                                                </div>
                                                <div class="amenities clearfix">
                                                    <ul class="pull-left">
                                                        <li><strong>Area total:</strong> 450<sup>m2</sup></li>
                                                    </ul>
                                                    <ul class="pull-right">
                                                        <li><i class="icons icon-bedroom"></i> 3</li>
                                                        <li><i class="icons icon-bathroom"></i> 2</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12 animation">
                            <div class="pgl-property pgl-property-thumb">
                                <a href="{{ route('propriedade_show') }}" class="link_preto">
                                    <div class="row pgl-midnarrow-row">
                                        <div class="col-xs-6">
                                            <div class="property-thumb-info-image">
                                                <img alt="" class="img-responsive" src="images/properties/property-1.jpg">
                                                <span class="property-thumb-info-label">
                                                <span class="label price">$358,000</span>
                                                <span class="label forrent">Venda</span>
                                            </span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="property-thumb-info">
                                                <div class="property-thumb-info-content">
                                                    <h3>Categoria</h3>
                                                    <address>Endereço<br>Cidade - UF</address>
                                                </div>
                                                <div class="amenities clearfix">
                                                    <ul class="pull-left">
                                                        <li><strong>Area total:</strong> 450<sup>m2</sup></li>
                                                    </ul>
                                                    <ul class="pull-right">
                                                        <li><i class="icons icon-bedroom"></i> 3</li>
                                                        <li><i class="icons icon-bathroom"></i> 2</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12 animation">
                            <div class="pgl-property pgl-property-thumb">
                                <a href="{{ route('propriedade_show') }}" class="link_preto">
                                    <div class="row pgl-midnarrow-row">
                                        <div class="col-xs-6">
                                            <div class="property-thumb-info-image">
                                                <img alt="" class="img-responsive" src="images/properties/property-1.jpg">
                                                <span class="property-thumb-info-label">
                                                <span class="label price">$358,000</span>
                                                <span class="label forrent">Venda</span>
                                            </span>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="property-thumb-info">
                                                <div class="property-thumb-info-content">
                                                    <h3>Categoria</h3>
                                                    <address>Endereço<br>Cidade - UF</address>
                                                </div>
                                                <div class="amenities clearfix">
                                                    <ul class="pull-left">
                                                        <li><strong>Area total:</strong> 450<sup>m2</sup></li>
                                                    </ul>
                                                    <ul class="pull-right">
                                                        <li><i class="icons icon-bedroom"></i> 3</li>
                                                        <li><i class="icons icon-bathroom"></i> 2</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="short">
        </div>
    </section>
    <!-- End Featured -->

    <!-- Begin Properties -->
    <section class="pgl-properties">
        <div class="container">
            <h2>Consulta Rápida</h2>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs pgl-pro-tabs text-center animation" role="tablist">
                <li class="active"><a href="#all" role="tab" data-toggle="tab">TODOS</a></li>
                <li><a href="#house" role="tab" data-toggle="tab">Cat 1 Terreno</a></li>
                <li><a href="#offices" role="tab" data-toggle="tab">Cat 2 Casa</a></li>
                <li><a href="#apartment" role="tab" data-toggle="tab">Cat 3 Apartamento</a></li>
                <li><a href="#residential" role="tab" data-toggle="tab">Cat 4 Sala Comercial</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">


                <div class="tab-pane active" id="all">
                    <div class="row">
                        <div class="col-xs-6 col-md-3 animation">
                            <a href="{{ route('propriedade_show') }}" class="link_preto">
                            <div class="pgl-property">
                                <div class="property-thumb-info">
                                    <div class="property-thumb-info-image">
                                        <img alt="Imagem propriedade TAL" class="img-responsive" src="images/properties/property-1.jpg">
                                        <span class="property-thumb-info-label">
                                            <span class="label price">$358,000</span>
                                            <span class="label forrent">Venda</span>
                                        </span>
                                    </div>
                                    <div class="property-thumb-info-content">
                                        <h3>Categoria</h3>
                                        <address>Endereço<br>Cidade - UF</address>
                                    </div>
                                    <div class="amenities clearfix">
                                        <ul class="pull-left">
                                            <li><strong>Area total:</strong> 450<sup>m2</sup></li>
                                        </ul>
                                        <ul class="pull-right">
                                            <li><i class="icons icon-bedroom"></i> 3</li>
                                            <li><i class="icons icon-bathroom"></i> 2</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-xs-6 col-md-3 animation">
                            <a href="{{ route('propriedade_show') }}" class="link_preto">
                                <div class="pgl-property">
                                    <div class="property-thumb-info">
                                        <div class="property-thumb-info-image">
                                            <img alt="Imagem propriedade TAL" class="img-responsive" src="images/properties/property-1.jpg">
                                            <span class="property-thumb-info-label">
                                            <span class="label price">$358,000</span>
                                            <span class="label forrent">Venda</span>
                                        </span>
                                        </div>
                                        <div class="property-thumb-info-content">
                                            <h3>Categoria</h3>
                                            <address>Endereço<br>Cidade - UF</address>
                                        </div>
                                        <div class="amenities clearfix">
                                            <ul class="pull-left">
                                                <li><strong>Area total:</strong> 450<sup>m2</sup></li>
                                            </ul>
                                            <ul class="pull-right">
                                                <li><i class="icons icon-bedroom"></i> 3</li>
                                                <li><i class="icons icon-bathroom"></i> 2</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6 col-md-3 animation">
                            <a href="{{ route('propriedade_show') }}" class="link_preto">
                                <div class="pgl-property">
                                    <div class="property-thumb-info">
                                        <div class="property-thumb-info-image">
                                            <img alt="Imagem propriedade TAL" class="img-responsive" src="images/properties/property-1.jpg">
                                            <span class="property-thumb-info-label">
                                            <span class="label price">$358,000</span>
                                            <span class="label forrent">Venda</span>
                                        </span>
                                        </div>
                                        <div class="property-thumb-info-content">
                                            <h3>Categoria</h3>
                                            <address>Endereço<br>Cidade - UF</address>
                                        </div>
                                        <div class="amenities clearfix">
                                            <ul class="pull-left">
                                                <li><strong>Area total:</strong> 450<sup>m2</sup></li>
                                            </ul>
                                            <ul class="pull-right">
                                                <li><i class="icons icon-bedroom"></i> 3</li>
                                                <li><i class="icons icon-bathroom"></i> 2</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6 col-md-3 animation">
                            <a href="{{ route('propriedade_show') }}" class="link_preto">
                                <div class="pgl-property">
                                    <div class="property-thumb-info">
                                        <div class="property-thumb-info-image">
                                            <img alt="Imagem propriedade TAL" class="img-responsive" src="images/properties/property-1.jpg">
                                            <span class="property-thumb-info-label">
                                            <span class="label price">$358,000</span>
                                            <span class="label forrent">Venda</span>
                                        </span>
                                        </div>
                                        <div class="property-thumb-info-content">
                                            <h3>Categoria</h3>
                                            <address>Endereço<br>Cidade - UF</address>
                                        </div>
                                        <div class="amenities clearfix">
                                            <ul class="pull-left">
                                                <li><strong>Area total:</strong> 450<sup>m2</sup></li>
                                            </ul>
                                            <ul class="pull-right">
                                                <li><i class="icons icon-bedroom"></i> 3</li>
                                                <li><i class="icons icon-bathroom"></i> 2</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6 col-md-3 animation">
                            <a href="{{ route('propriedade_show') }}" class="link_preto">
                                <div class="pgl-property">
                                    <div class="property-thumb-info">
                                        <div class="property-thumb-info-image">
                                            <img alt="Imagem propriedade TAL" class="img-responsive" src="images/properties/property-1.jpg">
                                            <span class="property-thumb-info-label">
                                            <span class="label price">$358,000</span>
                                            <span class="label forrent">Venda</span>
                                        </span>
                                        </div>
                                        <div class="property-thumb-info-content">
                                            <h3>Categoria</h3>
                                            <address>Endereço<br>Cidade - UF</address>
                                        </div>
                                        <div class="amenities clearfix">
                                            <ul class="pull-left">
                                                <li><strong>Area total:</strong> 450<sup>m2</sup></li>
                                            </ul>
                                            <ul class="pull-right">
                                                <li><i class="icons icon-bedroom"></i> 3</li>
                                                <li><i class="icons icon-bathroom"></i> 2</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6 col-md-3 animation">
                            <a href="{{ route('propriedade_show') }}" class="link_preto">
                                <div class="pgl-property">
                                    <div class="property-thumb-info">
                                        <div class="property-thumb-info-image">
                                            <img alt="Imagem propriedade TAL" class="img-responsive" src="images/properties/property-1.jpg">
                                            <span class="property-thumb-info-label">
                                            <span class="label price">$358,000</span>
                                            <span class="label forrent">Venda</span>
                                        </span>
                                        </div>
                                        <div class="property-thumb-info-content">
                                            <h3>Categoria</h3>
                                            <address>Endereço<br>Cidade - UF</address>
                                        </div>
                                        <div class="amenities clearfix">
                                            <ul class="pull-left">
                                                <li><strong>Area total:</strong> 450<sup>m2</sup></li>
                                            </ul>
                                            <ul class="pull-right">
                                                <li><i class="icons icon-bedroom"></i> 3</li>
                                                <li><i class="icons icon-bathroom"></i> 2</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6 col-md-3 animation">
                            <a href="{{ route('propriedade_show') }}" class="link_preto">
                                <div class="pgl-property">
                                    <div class="property-thumb-info">
                                        <div class="property-thumb-info-image">
                                            <img alt="Imagem propriedade TAL" class="img-responsive" src="images/properties/property-1.jpg">
                                            <span class="property-thumb-info-label">
                                            <span class="label price">$358,000</span>
                                            <span class="label forrent">Venda</span>
                                        </span>
                                        </div>
                                        <div class="property-thumb-info-content">
                                            <h3>Categoria</h3>
                                            <address>Endereço<br>Cidade - UF</address>
                                        </div>
                                        <div class="amenities clearfix">
                                            <ul class="pull-left">
                                                <li><strong>Area total:</strong> 450<sup>m2</sup></li>
                                            </ul>
                                            <ul class="pull-right">
                                                <li><i class="icons icon-bedroom"></i> 3</li>
                                                <li><i class="icons icon-bathroom"></i> 2</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6 col-md-3 animation">
                            <a href="{{ route('propriedade_show') }}" class="link_preto">
                                <div class="pgl-property">
                                    <div class="property-thumb-info">
                                        <div class="property-thumb-info-image">
                                            <img alt="Imagem propriedade TAL" class="img-responsive" src="images/properties/property-1.jpg">
                                            <span class="property-thumb-info-label">
                                            <span class="label price">$358,000</span>
                                            <span class="label forrent">Venda</span>
                                        </span>
                                        </div>
                                        <div class="property-thumb-info-content">
                                            <h3>Categoria</h3>
                                            <address>Endereço<br>Cidade - UF</address>
                                        </div>
                                        <div class="amenities clearfix">
                                            <ul class="pull-left">
                                                <li><strong>Area total:</strong> 450<sup>m2</sup></li>
                                            </ul>
                                            <ul class="pull-right">
                                                <li><i class="icons icon-bedroom"></i> 3</li>
                                                <li><i class="icons icon-bathroom"></i> 2</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>


                <div class="tab-pane" id="house">
                    <div class="row">
                        <div class="col-xs-6 col-md-3 animation">
                            <a href="{{ route('propriedade_show') }}" class="link_preto">
                                <div class="pgl-property">
                                    <div class="property-thumb-info">
                                        <div class="property-thumb-info-image">
                                            <img alt="Imagem propriedade TAL" class="img-responsive" src="images/properties/property-1.jpg">
                                            <span class="property-thumb-info-label">
                                            <span class="label price">$358,000</span>
                                            <span class="label forrent">Venda</span>
                                        </span>
                                        </div>
                                        <div class="property-thumb-info-content">
                                            <h3>Categoria</h3>
                                            <address>Endereço<br>Cidade - UF</address>
                                        </div>
                                        <div class="amenities clearfix">
                                            <ul class="pull-left">
                                                <li><strong>Area total:</strong> 450<sup>m2</sup></li>
                                            </ul>
                                            <ul class="pull-right">
                                                <li><i class="icons icon-bedroom"></i> 3</li>
                                                <li><i class="icons icon-bathroom"></i> 2</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6 col-md-3 animation">
                            <a href="{{ route('propriedade_show') }}" class="link_preto">
                                <div class="pgl-property">
                                    <div class="property-thumb-info">
                                        <div class="property-thumb-info-image">
                                            <img alt="Imagem propriedade TAL" class="img-responsive" src="images/properties/property-1.jpg">
                                            <span class="property-thumb-info-label">
                                            <span class="label price">$358,000</span>
                                            <span class="label forrent">Venda</span>
                                        </span>
                                        </div>
                                        <div class="property-thumb-info-content">
                                            <h3>Categoria</h3>
                                            <address>Endereço<br>Cidade - UF</address>
                                        </div>
                                        <div class="amenities clearfix">
                                            <ul class="pull-left">
                                                <li><strong>Area total:</strong> 450<sup>m2</sup></li>
                                            </ul>
                                            <ul class="pull-right">
                                                <li><i class="icons icon-bedroom"></i> 3</li>
                                                <li><i class="icons icon-bathroom"></i> 2</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6 col-md-3 animation">
                            <a href="{{ route('propriedade_show') }}" class="link_preto">
                                <div class="pgl-property">
                                    <div class="property-thumb-info">
                                        <div class="property-thumb-info-image">
                                            <img alt="Imagem propriedade TAL" class="img-responsive" src="images/properties/property-1.jpg">
                                            <span class="property-thumb-info-label">
                                            <span class="label price">$358,000</span>
                                            <span class="label forrent">Venda</span>
                                        </span>
                                        </div>
                                        <div class="property-thumb-info-content">
                                            <h3>Categoria</h3>
                                            <address>Endereço<br>Cidade - UF</address>
                                        </div>
                                        <div class="amenities clearfix">
                                            <ul class="pull-left">
                                                <li><strong>Area total:</strong> 450<sup>m2</sup></li>
                                            </ul>
                                            <ul class="pull-right">
                                                <li><i class="icons icon-bedroom"></i> 3</li>
                                                <li><i class="icons icon-bathroom"></i> 2</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6 col-md-3 animation">
                            <a href="{{ route('propriedade_show') }}" class="link_preto">
                                <div class="pgl-property">
                                    <div class="property-thumb-info">
                                        <div class="property-thumb-info-image">
                                            <img alt="Imagem propriedade TAL" class="img-responsive" src="images/properties/property-1.jpg">
                                            <span class="property-thumb-info-label">
                                            <span class="label price">$358,000</span>
                                            <span class="label forrent">Venda</span>
                                        </span>
                                        </div>
                                        <div class="property-thumb-info-content">
                                            <h3>Categoria</h3>
                                            <address>Endereço<br>Cidade - UF</address>
                                        </div>
                                        <div class="amenities clearfix">
                                            <ul class="pull-left">
                                                <li><strong>Area total:</strong> 450<sup>m2</sup></li>
                                            </ul>
                                            <ul class="pull-right">
                                                <li><i class="icons icon-bedroom"></i> 3</li>
                                                <li><i class="icons icon-bathroom"></i> 2</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Properties -->




    <!-- Begin Agents -->
    <section class="pgl-agents">
        <div class="container">
            <h2>Corretores</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="pgl-agent-item pgl-bg-light">
                        <div class="row pgl-midnarrow-row">
                            <div class="col-xs-5">
                                <div class="img-thumbnail-medium">
                                    <img src="images/agents/temp-agent.png" class="img-responsive" alt="Foto Corretor Cléderson de Santi">
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="pgl-agent-info">
                                    <h4><a href="agentprofile.html">Cléderson de Santi</a></h4>
                                    <p>FAZER PELO ADMIN.</p>
                                    <address>
                                        <i class="fa fa-whatsapp"></i> <a href="https://api.whatsapp.com/send?1=pt_BR&phone=5554999750499" target="_blank">(54) 99975-0499</a><br>
                                        <i class="fa fa-envelope-o"></i> <a href="mailto:cledidesanti@onyline.com.br" target="_blank">cledidesanti@onyline.com.br</a>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pgl-agent-item pgl-bg-light">
                        <div class="row pgl-midnarrow-row">
                            <div class="col-xs-5">
                                <div class="img-thumbnail-medium">
                                    <img src="images/agents/temp-agent.png" class="img-responsive" alt="Foto Corretor Leandro A. Tessaro">
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="pgl-agent-info">
                                    <h4><a href="agentprofile.html">Leandro A. Tessaro</a></h4>
                                    <p>FAZER PELO ADMIN.</p>
                                    <address>
                                        <i class="fa fa-whatsapp"></i> <a href="https://api.whatsapp.com/send?1=pt_BR&phone=5554991768344" target="_blank">(54) 99176-8344</a><br>
                                        <i class="fa fa-envelope-o"></i> <a href="mailto:leandro@onyline.com.br" target="_blank">leandro@onyline.com.br</a>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="top-tall">
        </div>
    </section>
    <!-- End Agents -->



@endsection
