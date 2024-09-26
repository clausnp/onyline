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
    Contato - @parent
@stop

@section('bread')
    @include('site._partials.bread', ['pagina'=> "Contato",'imagem'=> "bread_contato"])
@endsection

@section('head')
    <script src='https://www.google.com/recaptcha/api.js?render={{env('CAPTCHA_KEY')}}'></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('{{env('CAPTCHA_KEY')}}', {action: 'homepage'}).then(function (token) {
                document.getElementById('g-recaptcha-response').value = token;
            });
        });
    </script>
@endsection

@section('content')

    <!-- Begin content with sidebar -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 content">

                <div class="contact">
                    <p>Entre em contato conosco através do formulário abaixo, iremos responder assim que possível.</p>

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

        <div class="row mb-50">
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3496.9167331064496!2d-51.61208572371812!3d-28.781743173879473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951dc60fd49bfdb3%3A0xb21522ee7ccd77c3!2sAv.%20Pres.%20Vargas%2C%20424%20-%20Centro%2C%20Nova%20Prata%20-%20RS%2C%2095320-000!5e0!3m2!1spt-BR!2sbr!4v1727367459149!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </div>
    <!-- End content -->


    </div>
    <script src="https://www.google.com/recaptcha/api.js?onload=onLoadCallback&render=explicit"></script>
@endsection
