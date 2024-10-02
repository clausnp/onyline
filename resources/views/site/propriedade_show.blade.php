@extends('layouts.site')

@section('og_title')
    <meta property="og:title" content="NOME DA PROPRIEDADE - {{ config('app.site_title') }}">
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
    NOME DA PROPRIEDADE - @parent
@stop

@section('bread')
    @include('site._partials.bread', ['pagina'=> "NOME DA PROPRIEDADE",'imagem'=> "bread_contato"])
@endsection

@section('content')


    <!-- Begin content with sidebar -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 content">

                <section class="pgl-pro-detail pgl-bg-light">
                    <div id="slider" class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="images/properties/property-detail-1.jpg" alt="">
                                <span class="property-thumb-info-label">
                                    <span class="label price">R$ X</span>
                                    <span class="label forrent">Venda ou Aluguel</span>
                                </span>
                            </li>
                            <li>
                                <img src="images/properties/property-detail-2.jpg" alt="">
                                <span class="property-thumb-info-label">
                                    <span class="label price">R$ X</span>
                                    <span class="label forrent">Venda ou Aluguel</span>
                                </span>
                            </li>
                            <li>
                                <img src="images/properties/property-detail-3.jpg" alt="">
                                <span class="property-thumb-info-label">
                                    <span class="label price">R$ X</span>
                                    <span class="label forrent">Venda ou Aluguel</span>
                                </span>
                            </li>
                            <li>
                                <img src="images/properties/property-detail-4.jpg" alt="">
                                <span class="property-thumb-info-label">
                                    <span class="label price">R$ X</span>
                                    <span class="label forrent">Venda ou Aluguel</span>
                                </span>
                            </li>
                            <li>
                                <img src="images/properties/property-detail-5.jpg" alt="">
                                <span class="property-thumb-info-label">
                                    <span class="label price">R$ X</span>
                                    <span class="label forrent">Venda ou Aluguel</span>
                                </span>
                            </li>

                        </ul>
                    </div>
                    <div id="carousel" class="flexslider">
                        <ul class="slides">
                            <li><img src="images/properties/property-detail-s-1.jpg" alt=""></li>
                            <li><img src="images/properties/property-detail-s-2.jpg" alt=""></li>
                            <li><img src="images/properties/property-detail-s-3.jpg" alt=""></li>
                            <li><img src="images/properties/property-detail-s-4.jpg" alt=""></li>
                            <li><img src="images/properties/property-detail-s-5.jpg" alt=""></li>
                        </ul>
                    </div>
                    <div class="pgl-detail">
                        <div class="row">
                            <div class="col-sm-4">
                                <ul class="list-unstyled amenities amenities-detail">
                                    <li><strong>Tipo:</strong> Apartment</li>
                                    <li><strong>Área total:</strong> 450<sup>m2</sup></li>
                                    <li><strong>Área privativa:</strong> 350<sup>m2</sup></li>
                                    <li>
                                        <address><i class="icons icon-location"></i> Cidade - UF</address>
                                    </li>
                                    <li><i class="icons icon-bedroom"></i> 3 Quartos</li>
                                    <li><i class="icons icon-bathroom"></i> 2 Banheiros</li>
                                </ul>
                            </div>
                            <div class="col-sm-8">
                                <p>Mauris elementum tempus nisi, vitae ullamcorper sem ultricies vitae. Nullam
                                    consectetur lacinia nisi, quis laoreet magna pulvinar in. Class aptent taciti
                                    sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In hac
                                    habitasse platea dictumst. Cum sociis natoque penatibus et magnis dis parturient
                                    montes, nascetur ridiculus mus.</p>
                            </div>
                        </div>

                        <div class="tab-detail">

                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Vídeo</h3>
                                        <iframe width="100%" height="400" src="https://www.youtube.com/embed/aErkPlKbxvg?si=-GRCbx2XI_y4XOB5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    </div>
                                    <div class="col-md-6">
                                        <h3>Mapa</h3>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.4886197585265!2d-46.68472682466902!3d-23.586803078782356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5744e0ebff5b%3A0x769bf4a32f914782!2sGoogle!5e0!3m2!1spt-BR!2sbr!4v1727901481061!5m2!1spt-BR!2sbr" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>


                            <div class="row">
                                <div class="col-md-12 content">

                                    <div class="contact">
                                        <p>Mande uma mensagem ou dúvida referente a essa propriedade que em breve responderemos!</p>

                                        <form id="contact-form" name="form1" method="post" action="send_contact.php">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label for="name">Nome *</label>
                                                        <input type="text" name="name" id="name" class="form-control" data-msg-required="Digite seu nome." required>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="customer_mail">E-mail *</label>
                                                        <input type="email" name="customer_mail" id="customer_mail" class="form-control" data-msg-required="Digite seu e-mail." data-msg-email="Please enter a valid email address." required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label for="subject">Telefone *</label>
                                                        <input type="number" name="telefone" id="telefone" class="form-control" data-msg-required="Digite seu telefone." required>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="website">Assunto</label>
                                                        <input type="text" name="assunto" id="assunto" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="comments">Mensagem *</label>
                                                <textarea rows="9" name="comments" id="comments" class="form-control" data-msg-required="Digite sua mensagem." required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" value="Enviar" class="btn btn-primary min-wide" data-loading-text="Enviando...">
                                            </div>
                                        </form>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </section>


            </div>

        </div>
    </div>
    <!-- End content with sidebar -->



@endsection
