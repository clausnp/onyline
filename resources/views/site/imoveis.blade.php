@extends('layouts.site')

@section('og_title')
    <meta property="og:title" content="Imóveis - {{ config('app.site_title') }}">
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
    Imóveis - @parent
@stop

@section('bread')
    @include('site._partials.bread', ['pagina'=> "Imóveis",'imagem'=> "bread_contato"])
@endsection

@section('content')
    <!-- Begin content with sidebar -->
    <div class="container">
        <div class="row">

            <div class="col-md-3 sidebar">
                <!-- Begin Advanced Search -->
                <aside class="block pgl-advanced-search pgl-bg-light">
                    <h3>Busca</h3>
                    <form name="advancedsearch">
                        <div class="form-group">
                            <label class="sr-only" for="property-status">Tipo</label>
                            <select id="property-status" name="property-status" data-placeholder="Property Status" class="chosen-select">
                                <option selected="selected" value="Property Status">Tipo</option>
                                <option value="sale">Venda</option>
                                <option value="rent">Aluguel</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="sr-only" for="property-types">Categoria</label>
                            <select id="property-types" name="property-types" data-placeholder="Property Types" class="chosen-select">
                                <option selected="selected" value="Property Types">Categoria</option>
                                <option value="residential">Residential</option>
                                <option value="commercial">Commercial</option>
                                <option value="land">Terreno</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="sr-only" for="location">Cidade</label>
                            <select id="location" name="location" data-placeholder="Location" class="chosen-select">
                                <option selected="selected" value="Location">Cidade</option>
                                <option value="United States">United States</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Aland Islands">Aland Islands</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>

                            </select>
                        </div>


                        <div class="form-group">
                            <label class="sr-only" for="area-from">Bairro</label>
                            <select id="area-from" name="area-from" data-placeholder="Area From" class="chosen-select" tabindex="4">
                                <option selected="selected" value="Area From">Bairro</option>
                                <option value="450">Filtrar conforme cidade escolhida</option>
                                <option value="450">Filtrar conforme cidade escolhida</option>
                                <option value="450">Filtrar conforme cidade escolhida</option>
                                <option value="450">Filtrar conforme cidade escolhida</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="search-bedrooms">Dormitórios</label>
                            <select id="search-bedrooms" name="search-bedrooms" data-placeholder="Bedrooms" class="chosen-select" tabindex="5">
                                <option selected="selected" value="Bedrooms">Dormitórios</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="5plus">5+</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="search-bathrooms">Banheiros</label>
                            <select id="search-bathrooms" name="search-bathrooms" data-placeholder="Bathrooms" class="chosen-select">
                                <option selected="selected" value="Bathrooms">Banheiros</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4plus">4+</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <div class="row pgl-narrow-row">
                                <div class="col-xs-6">
                                    <label class="sr-only" for="search-minprice">R$ Mínimo</label>
                                    <select id="search-minprice" name="search-minprice" data-placeholder="Price From" class="chosen-select">
                                        <option selected="selected" value="Price From">R$ Mínimo</option>
                                        <option value="0">$0</option>
                                        <option value="25000">$25000</option>
                                        <option value="50000">$50000</option>
                                        <option value="75000">$75000</option>
                                        <option value="100000">$100000</option>
                                        <option value="150000">$150000</option>
                                        <option value="200000">$200000</option>
                                        <option value="300000">$300000</option>
                                        <option value="500000">$500000</option>
                                        <option value="750000">$750000</option>
                                        <option value="1000000">$1000000</option>
                                    </select>
                                </div>
                                <div class="col-xs-6">
                                    <label class="sr-only" for="search-maxprice">R$ Máximo</label>
                                    <select id="search-maxprice" name="search-maxprice" data-placeholder="Price To" class="chosen-select">
                                        <option selected="selected" value="Price To">R$ Máximo</option>
                                        <option value="25000">$25000</option>
                                        <option value="50000">$50000</option>
                                        <option value="75000">$75000</option>
                                        <option value="100000">$100000</option>
                                        <option value="150000">$150000</option>
                                        <option value="200000">$200000</option>
                                        <option value="300000">$300000</option>
                                        <option value="500000">$500000</option>
                                        <option value="750000">$750000</option>
                                        <option value="1000000">$1000000</option>
                                        <option value="1000000plus">>$1000000</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">Buscar</button>
                        </div>

                    </form>
                </aside>
                <!-- End Advanced Search -->


            </div>



            <div class="col-md-9 content">
                <!-- Begin Properties -->
                <section class="pgl-properties pgl-bg-grey">
                    <div class="properties-full">
                        <div class="listing-header clearfix">

                            <ul class="list-inline list-sort pull-right">
                                <li><label for="order-status">Ordem</label></li>
                                <li>
                                    <select id="order-status" name="order-status" data-placeholder="Order" class="chosen-select">
                                        <option value="Descending">Decrescente</option>
                                        <option value="Ascending">Crescente</option>
                                    </select>
                                </li>
                                <li><label for="sortby-status">Ordenar por</label></li>
                                <li>
                                    <select id="sortby-status" name="sortby-status" data-placeholder="Sort by" class="chosen-select">
                                        <option value="Name">Nome</option>
                                        <option value="Area">Área total</option>
                                        <option value="Date">Data</option>
                                    </select>
                                </li>
                            </ul>
                        </div>




                        <div class="row">
                            <div class="col-xs-4 animation">
                                <a href="{{ route('imovel_show') }}" class="link_preto">
                                    <div class="pgl-property">
                                        <div class="property-thumb-info">
                                            <div class="property-thumb-info-image">
                                                <img alt="Imagem propriedade TAL" class="img-responsive" src="images/properties/property-1.jpg">
                                                <span class="property-thumb-info-label">
                                            <span class="label price">R$ 358.000,00</span>
                                            <span class="label forrent">Venda</span>
                                        </span>
                                            </div>
                                            <div class="property-thumb-info-content">
                                                <h3>Categoria</h3>
                                                    <p class="codigo">CÓD: COMEÇAR DO 1000</p>

                                                <address>Endereço<br>Cidade - UF</address>
                                            </div>
                                            <div class="amenities clearfix">
                                                <ul class="pull-left">
                                                    <li><strong><i class="fa fa-arrows"></i></strong> 450<sup>m2</sup></li>
                                                </ul>
                                                <ul class="pull-right">
                                                    <li><i class="fa-solid fa-car"></i> 3</li>
                                                <li><i class="icons icon-bedroom"></i> 3</li>
                                                    <li><i class="icons icon-bathroom"></i> 2</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-4 animation">
                                <a href="{{ route('imovel_show') }}" class="link_preto">
                                    <div class="pgl-property">
                                        <div class="property-thumb-info">
                                            <div class="property-thumb-info-image">
                                                <img alt="Imagem propriedade TAL" class="img-responsive" src="images/properties/property-1.jpg">
                                                <span class="property-thumb-info-label">
                                            <span class="label price">R$ 358.000,00</span>
                                            <span class="label forrent">Venda</span>
                                        </span>
                                            </div>
                                            <div class="property-thumb-info-content">
                                                <h3>Categoria</h3>
                                                    <p class="codigo">CÓD: COMEÇAR DO 1000</p>
                                                <address>Endereço<br>Cidade - UF</address>
                                            </div>
                                            <div class="amenities clearfix">
                                                <ul class="pull-left">
                                                    <li><strong><i class="fa fa-arrows"></i></strong> 450<sup>m2</sup></li>
                                                </ul>
                                                <ul class="pull-right">
                                                    <li><i class="fa-solid fa-car"></i> 3</li>
                                                <li><i class="icons icon-bedroom"></i> 3</li>
                                                    <li><i class="icons icon-bathroom"></i> 2</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-4 animation">
                                <a href="{{ route('imovel_show') }}" class="link_preto">
                                    <div class="pgl-property">
                                        <div class="property-thumb-info">
                                            <div class="property-thumb-info-image">
                                                <img alt="Imagem propriedade TAL" class="img-responsive" src="images/properties/property-1.jpg">
                                                <span class="property-thumb-info-label">
                                            <span class="label price">R$ 358.000,00</span>
                                            <span class="label forrent">Venda</span>
                                        </span>
                                            </div>
                                            <div class="property-thumb-info-content">
                                                <h3>Categoria</h3>
                                                    <p class="codigo">CÓD: COMEÇAR DO 1000</p>
                                                <address>Endereço<br>Cidade - UF</address>
                                            </div>
                                            <div class="amenities clearfix">
                                                <ul class="pull-left">
                                                    <li><strong><i class="fa fa-arrows"></i></strong> 450<sup>m2</sup></li>
                                                </ul>
                                                <ul class="pull-right">
                                                    <li><i class="fa-solid fa-car"></i> 3</li>
                                                <li><i class="icons icon-bedroom"></i> 3</li>
                                                    <li><i class="icons icon-bathroom"></i> 2</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-4 animation">
                                <a href="{{ route('imovel_show') }}" class="link_preto">
                                    <div class="pgl-property">
                                        <div class="property-thumb-info">
                                            <div class="property-thumb-info-image">
                                                <img alt="Imagem propriedade TAL" class="img-responsive" src="images/properties/property-1.jpg">
                                                <span class="property-thumb-info-label">
                                            <span class="label price">R$ 358.000,00</span>
                                            <span class="label forrent">Venda</span>
                                        </span>
                                            </div>
                                            <div class="property-thumb-info-content">
                                                <h3>Categoria</h3>
                                                    <p class="codigo">CÓD: COMEÇAR DO 1000</p>
                                                <address>Endereço<br>Cidade - UF</address>
                                            </div>
                                            <div class="amenities clearfix">
                                                <ul class="pull-left">
                                                    <li><strong><i class="fa fa-arrows"></i></strong> 450<sup>m2</sup></li>
                                                </ul>
                                                <ul class="pull-right">
                                                    <li><i class="fa-solid fa-car"></i> 3</li>
                                                <li><i class="icons icon-bedroom"></i> 3</li>
                                                    <li><i class="icons icon-bathroom"></i> 2</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-4 animation">
                                <a href="{{ route('imovel_show') }}" class="link_preto">
                                    <div class="pgl-property">
                                        <div class="property-thumb-info">
                                            <div class="property-thumb-info-image">
                                                <img alt="Imagem propriedade TAL" class="img-responsive" src="images/properties/property-1.jpg">
                                                <span class="property-thumb-info-label">
                                            <span class="label price">R$ 358.000,00</span>
                                            <span class="label forrent">Venda</span>
                                        </span>
                                            </div>
                                            <div class="property-thumb-info-content">
                                                <h3>Categoria</h3>
                                                    <p class="codigo">CÓD: COMEÇAR DO 1000</p>
                                                <address>Endereço<br>Cidade - UF</address>
                                            </div>
                                            <div class="amenities clearfix">
                                                <ul class="pull-left">
                                                    <li><strong><i class="fa fa-arrows"></i></strong> 450<sup>m2</sup></li>
                                                </ul>
                                                <ul class="pull-right">
                                                    <li><i class="fa-solid fa-car"></i> 3</li>
                                                <li><i class="icons icon-bedroom"></i> 3</li>
                                                    <li><i class="icons icon-bathroom"></i> 2</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>


                        </div>



                        <ul class="pagination">
                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </div>
                </section>
                <!-- End Properties -->

            </div>

        </div>
    </div>
    <!-- End content with sidebar -->

@endsection
