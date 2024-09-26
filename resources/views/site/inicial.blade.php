@extends('layouts.site')

@section('title')
    Inicial - @parent
@stop

@section('content')
    @include('site._partials.slider')
    @include('site._partials.busca')



    <!-- Begin About -->
    <section class="pgl-offer pgl-bg-dark text-center">
        <div class="container">
            <h2>Onyline Imóveis</h2>
            <span class="divider"></span>
            <div class="row">
                <div class="col-sm-4 animation">
                    <div class="offer-item">
                        <div class="offer-item-inner">
                            <p><i class="icons icon-hand"></i></p>
                            <h3>Característica 1</h3>
                            <p>Texto 1.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 animation">
                    <div class="offer-item">
                        <div class="offer-item-inner">
                            <p><i class="icons icon-home"></i></p>
                            <h3>Característica 2</h3>
                            <p>Texto 2.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 animation">
                    <div class="offer-item">
                        <div class="offer-item-inner">
                            <p><i class="icons icon-chart"></i></p>
                            <h3>Característica 3</h3>
                            <p>Texto 3.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About -->



    <!-- Begin Featured -->
    <section class="pgl-featured">
        <div class="container">
            <h2>Em destaque</h2>
            <div class="properties-listing">
                <div class="row">
                    <div class="owl-carousel pgl-pro-slide pgl-pro-special" data-plugin-options='{"items": 2, "itemsDesktop": 1, "itemsDesktopSmall": 1, "singleItem": false, "autoPlay": false, "pagination": false, "autoHeight": true}'>
                        <div class="col-md-12 animation">
                            <div class="pgl-property pgl-property-thumb">
                                <div class="row pgl-midnarrow-row">
                                    <div class="col-xs-6">
                                        <div class="property-thumb-info-image">
                                            <img alt="" class="img-responsive" src="images/properties/property-1.jpg">
                                            <span class="property-thumb-info-label">
														<span class="label price">$358,000</span>
													</span>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="property-thumb-info">

                                            <div class="property-thumb-info-content">
                                                <h3><a href="property-detail.html">Categoria</a></h3>
                                                <address>Endereço<br>Cidade - UF</address>
                                            </div>
                                            <div class="amenities clearfix">
                                                <ul class="pull-left">
                                                    <li><strong>Area:</strong> 450<sup>m2</sup></li>
                                                </ul>
                                                <ul class="pull-right">
                                                    <li><i class="icons icon-bedroom"></i> 3</li>
                                                    <li><i class="icons icon-bathroom"></i> 2</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 animation">
                            <div class="pgl-property pgl-property-thumb">
                                <div class="row pgl-midnarrow-row">
                                    <div class="col-sm-6">
                                        <div class="property-thumb-info-image">
                                            <img alt="" class="img-responsive" src="images/properties/property-2.jpg">
                                            <span class="property-thumb-info-label">
														<span class="label price">$358,000</span>
													</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="property-thumb-info">

                                            <div class="property-thumb-info-content">
                                                <h3><a href="property-detail.html">Categoria</a></h3>
                                                <address>Endereço<br>Cidade - UF</address>
                                            </div>
                                            <div class="amenities clearfix">
                                                <ul class="pull-left">
                                                    <li><strong>Area:</strong> 450<sup>m2</sup></li>
                                                </ul>
                                                <ul class="pull-right">
                                                    <li><i class="icons icon-bedroom"></i> 3</li>
                                                    <li><i class="icons icon-bathroom"></i> 2</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 animation">
                            <div class="pgl-property pgl-property-thumb">
                                <div class="row pgl-midnarrow-row">
                                    <div class="col-md-6">
                                        <div class="property-thumb-info-image">
                                            <img alt="" class="img-responsive" src="images/properties/property-1.jpg">
                                            <span class="property-thumb-info-label">
														<span class="label price">$358,000</span>
													</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="property-thumb-info">

                                            <div class="property-thumb-info-content">
                                                <h3><a href="property-detail.html">Categoria</a></h3>
                                                <address>Endereço<br>Cidade - UF</address>
                                            </div>
                                            <div class="amenities clearfix">
                                                <ul class="pull-left">
                                                    <li><strong>Area:</strong> 450<sup>m2</sup></li>
                                                </ul>
                                                <ul class="pull-right">
                                                    <li><i class="icons icon-bedroom"></i> 3</li>
                                                    <li><i class="icons icon-bathroom"></i> 2</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 animation">
                            <div class="pgl-property pgl-property-thumb">
                                <div class="row pgl-midnarrow-row">
                                    <div class="col-md-6">
                                        <div class="property-thumb-info-image">
                                            <img alt="" class="img-responsive" src="images/properties/property-2.jpg">
                                            <span class="property-thumb-info-label">
														<span class="label price">$358,000</span>
													</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="property-thumb-info">

                                            <div class="property-thumb-info-content">
                                                <h3><a href="property-detail.html">Categoria</a></h3>
                                                <address>Endereço<br>Cidade - UF</address>
                                            </div>
                                            <div class="amenities clearfix">
                                                <ul class="pull-left">
                                                    <li><strong>Area:</strong> 450<sup>m2</sup></li>
                                                </ul>
                                                <ul class="pull-right">
                                                    <li><i class="icons icon-bedroom"></i> 3</li>
                                                    <li><i class="icons icon-bathroom"></i> 2</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
            <h2>Latest Properties</h2>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs pgl-pro-tabs text-center animation" role="tablist">
                <li class="active"><a href="#all" role="tab" data-toggle="tab">All</a></li>
                <li><a href="#house" role="tab" data-toggle="tab">House</a></li>
                <li><a href="#offices" role="tab" data-toggle="tab">Offices</a></li>
                <li><a href="#apartment" role="tab" data-toggle="tab">Apartment</a></li>
                <li><a href="#residential" role="tab" data-toggle="tab">Residential</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="all">
                    <div class="row">
                        <div class="col-xs-6 col-md-3 animation">
                            <div class="pgl-property">
                                <div class="property-thumb-info">
                                    <div class="property-thumb-info-image">
                                        <img alt="" class="img-responsive" src="images/properties/property-1.jpg">
                                        <span class="property-thumb-info-label">
													<span class="label price">$358,000</span>
													<span class="label forrent">Rent</span>
												</span>
                                    </div>
                                    <div class="property-thumb-info-content">
                                        <h3><a href="property-detail.html">Poolside character home on a wide 422sqm</a></h3>
                                        <address>Ferris Park, Jersey City Land in Sales</address>
                                    </div>
                                    <div class="amenities clearfix">
                                        <ul class="pull-left">
                                            <li><strong>Area:</strong> 450<sup>m2</sup></li>
                                        </ul>
                                        <ul class="pull-right">
                                            <li><i class="icons icon-bedroom"></i> 3</li>
                                            <li><i class="icons icon-bathroom"></i> 2</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3 animation">
                            <div class="pgl-property">
                                <div class="property-thumb-info">
                                    <div class="property-thumb-info-image">
                                        <img alt="" class="img-responsive" src="images/properties/property-2.jpg">
                                        <span class="property-thumb-info-label">
													<span class="label price">$358,000</span>
												</span>
                                    </div>
                                    <div class="property-thumb-info-content">
                                        <h3><a href="property-detail.html">Presidential Parcel Frames Command Views</a></h3>
                                        <address>Ferris Park, Jersey City Land in Sales</address>
                                    </div>
                                    <div class="amenities clearfix">
                                        <ul class="pull-left">
                                            <li><strong>Area:</strong> 450<sup>m2</sup></li>
                                        </ul>
                                        <ul class="pull-right">
                                            <li><i class="icons icon-bedroom"></i> 3</li>
                                            <li><i class="icons icon-bathroom"></i> 2</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3 animation">
                            <div class="pgl-property">
                                <div class="property-thumb-info">
                                    <div class="property-thumb-info-image">
                                        <img alt="" class="img-responsive" src="images/properties/property-3.jpg">
                                        <span class="property-thumb-info-label">
													<span class="label price">$358,000</span>
													<span class="label forsold">Sold</span>
												</span>
                                    </div>
                                    <div class="property-thumb-info-content">
                                        <h3><a href="property-detail.html">Californian Class, Grand Family Proportions</a></h3>
                                        <address>Ferris Park, Jersey City Land in Sales</address>
                                    </div>
                                    <div class="amenities clearfix">
                                        <ul class="pull-left">
                                            <li><strong>Area:</strong> 450<sup>m2</sup></li>
                                        </ul>
                                        <ul class="pull-right">
                                            <li><i class="icons icon-bedroom"></i> 3</li>
                                            <li><i class="icons icon-bathroom"></i> 2</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3 animation">
                            <div class="pgl-property">
                                <div class="property-thumb-info">
                                    <div class="property-thumb-info-image">
                                        <img alt="" class="img-responsive" src="images/properties/property-3.jpg">
                                        <span class="property-thumb-info-label">
													<span class="label price">$358,000</span>
													<span class="label forsold">Sold</span>
												</span>
                                    </div>
                                    <div class="property-thumb-info-content">
                                        <h3><a href="property-detail.html">Californian Class, Grand Family Proportions</a></h3>
                                        <address>Ferris Park, Jersey City Land in Sales</address>
                                    </div>
                                    <div class="amenities clearfix">
                                        <ul class="pull-left">
                                            <li><strong>Area:</strong> 450<sup>m2</sup></li>
                                        </ul>
                                        <ul class="pull-right">
                                            <li><i class="icons icon-bedroom"></i> 3</li>
                                            <li><i class="icons icon-bathroom"></i> 2</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-md-3 animation">
                            <div class="pgl-property">
                                <div class="property-thumb-info">
                                    <div class="property-thumb-info-image">
                                        <img alt="" class="img-responsive" src="images/properties/property-4.jpg">
                                        <span class="property-thumb-info-label">
													<span class="label price">$358,000</span>
													<span class="label forrent">Rent</span>
												</span>
                                    </div>
                                    <div class="property-thumb-info-content">
                                        <h3><a href="property-detail.html">Chatham St NW, Roanoke, VA 24012</a></h3>
                                        <address>Ferris Park, Jersey City Land in Sales</address>
                                    </div>
                                    <div class="amenities clearfix">
                                        <ul class="pull-left">
                                            <li><strong>Area:</strong> 450<sup>m2</sup></li>
                                        </ul>
                                        <ul class="pull-right">
                                            <li><i class="icons icon-bedroom"></i> 3</li>
                                            <li><i class="icons icon-bathroom"></i> 2</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3 animation">
                            <div class="pgl-property">
                                <div class="property-thumb-info">
                                    <div class="property-thumb-info-image">
                                        <img alt="" class="img-responsive" src="images/properties/property-5.jpg">
                                        <span class="property-thumb-info-label">
													<span class="label price">$358,000</span>
												</span>
                                    </div>
                                    <div class="property-thumb-info-content">
                                        <h3><a href="property-detail.html">Chatham St NW, Roanoke, VA 24012</a></h3>
                                        <address>Ferris Park, Jersey City Land in Sales</address>
                                    </div>
                                    <div class="amenities clearfix">
                                        <ul class="pull-left">
                                            <li><strong>Area:</strong> 450<sup>m2</sup></li>
                                        </ul>
                                        <ul class="pull-right">
                                            <li><i class="icons icon-bedroom"></i> 3</li>
                                            <li><i class="icons icon-bathroom"></i> 2</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3 animation">
                            <div class="pgl-property">
                                <div class="property-thumb-info">
                                    <div class="property-thumb-info-image">
                                        <img alt="" class="img-responsive" src="images/properties/property-6.jpg">
                                        <span class="property-thumb-info-label">
													<span class="label price">$358,000</span>
												</span>
                                    </div>
                                    <div class="property-thumb-info-content">
                                        <h3><a href="property-detail.html">Chatham St NW, Roanoke, VA 24012</a></h3>
                                        <address>Ferris Park, Jersey City Land in Sales</address>
                                    </div>
                                    <div class="amenities clearfix">
                                        <ul class="pull-left">
                                            <li><strong>Area:</strong> 450<sup>m2</sup></li>
                                        </ul>
                                        <ul class="pull-right">
                                            <li><i class="icons icon-bedroom"></i> 3</li>
                                            <li><i class="icons icon-bathroom"></i> 2</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3 animation">
                            <div class="pgl-property">
                                <div class="property-thumb-info">
                                    <div class="property-thumb-info-image">
                                        <img alt="" class="img-responsive" src="images/properties/property-4.jpg">
                                        <span class="property-thumb-info-label">
													<span class="label price">$358,000</span>
													<span class="label forrent">Rent</span>
												</span>
                                    </div>
                                    <div class="property-thumb-info-content">
                                        <h3><a href="property-detail.html">Chatham St NW, Roanoke, VA 24012</a></h3>
                                        <address>Ferris Park, Jersey City Land in Sales</address>
                                    </div>
                                    <div class="amenities clearfix">
                                        <ul class="pull-left">
                                            <li><strong>Area:</strong> 450<sup>m2</sup></li>
                                        </ul>
                                        <ul class="pull-right">
                                            <li><i class="icons icon-bedroom"></i> 3</li>
                                            <li><i class="icons icon-bathroom"></i> 2</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="house">
                    <div class="row">
                        <div class="col-xs-6 col-md-3 animation">
                            <div class="pgl-property">
                                <div class="property-thumb-info">
                                    <div class="property-thumb-info-image">
                                        <img alt="" class="img-responsive" src="images/properties/property-4.jpg">
                                        <span class="property-thumb-info-label">
													<span class="label price">$358,000</span>
													<span class="label forrent">Rent</span>
												</span>
                                    </div>
                                    <div class="property-thumb-info-content">
                                        <h3><a href="property-detail.html">Chatham St NW, Roanoke, VA 24012</a></h3>
                                        <address>Ferris Park, Jersey City Land in Sales</address>
                                    </div>
                                    <div class="amenities clearfix">
                                        <ul class="pull-left">
                                            <li><strong>Area:</strong> 450<sup>m2</sup></li>
                                        </ul>
                                        <ul class="pull-right">
                                            <li><i class="icons icon-bedroom"></i> 3</li>
                                            <li><i class="icons icon-bathroom"></i> 2</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3 animation">
                            <div class="pgl-property">
                                <div class="property-thumb-info">
                                    <div class="property-thumb-info-image">
                                        <img alt="" class="img-responsive" src="images/properties/property-5.jpg">
                                        <span class="property-thumb-info-label">
													<span class="label price">$358,000</span>
												</span>
                                    </div>
                                    <div class="property-thumb-info-content">
                                        <h3><a href="property-detail.html">Chatham St NW, Roanoke, VA 24012</a></h3>
                                        <address>Ferris Park, Jersey City Land in Sales</address>
                                    </div>
                                    <div class="amenities clearfix">
                                        <ul class="pull-left">
                                            <li><strong>Area:</strong> 450<sup>m2</sup></li>
                                        </ul>
                                        <ul class="pull-right">
                                            <li><i class="icons icon-bedroom"></i> 3</li>
                                            <li><i class="icons icon-bathroom"></i> 2</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3 animation">
                            <div class="pgl-property">
                                <div class="property-thumb-info">
                                    <div class="property-thumb-info-image">
                                        <img alt="" class="img-responsive" src="images/properties/property-6.jpg">
                                        <span class="property-thumb-info-label">
													<span class="label price">$358,000</span>
												</span>
                                    </div>
                                    <div class="property-thumb-info-content">
                                        <h3><a href="property-detail.html">Chatham St NW, Roanoke, VA 24012</a></h3>
                                        <address>Ferris Park, Jersey City Land in Sales</address>
                                    </div>
                                    <div class="amenities clearfix">
                                        <ul class="pull-left">
                                            <li><strong>Area:</strong> 450<sup>m2</sup></li>
                                        </ul>
                                        <ul class="pull-right">
                                            <li><i class="icons icon-bedroom"></i> 3</li>
                                            <li><i class="icons icon-bathroom"></i> 2</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3 animation">
                            <div class="pgl-property">
                                <div class="property-thumb-info">
                                    <div class="property-thumb-info-image">
                                        <img alt="" class="img-responsive" src="images/properties/property-4.jpg">
                                        <span class="property-thumb-info-label">
													<span class="label price">$358,000</span>
													<span class="label forrent">Rent</span>
												</span>
                                    </div>
                                    <div class="property-thumb-info-content">
                                        <h3><a href="property-detail.html">Chatham St NW, Roanoke, VA 24012</a></h3>
                                        <address>Ferris Park, Jersey City Land in Sales</address>
                                    </div>
                                    <div class="amenities clearfix">
                                        <ul class="pull-left">
                                            <li><strong>Area:</strong> 450<sup>m2</sup></li>
                                        </ul>
                                        <ul class="pull-right">
                                            <li><i class="icons icon-bedroom"></i> 3</li>
                                            <li><i class="icons icon-bathroom"></i> 2</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="offices">
                    <div class="row">
                        <div class="col-xs-6 col-md-3 animation">
                            <div class="pgl-property">
                                <div class="property-thumb-info">
                                    <div class="property-thumb-info-image">
                                        <img alt="" class="img-responsive" src="images/properties/property-1.jpg">
                                        <span class="property-thumb-info-label">
													<span class="label price">$358,000</span>
													<span class="label forrent">Rent</span>
												</span>
                                    </div>
                                    <div class="property-thumb-info-content">
                                        <h3><a href="property-detail.html">Poolside character home on a wide 422sqm</a></h3>
                                        <address>Ferris Park, Jersey City Land in Sales</address>
                                    </div>
                                    <div class="amenities clearfix">
                                        <ul class="pull-left">
                                            <li><strong>Area:</strong> 450<sup>m2</sup></li>
                                        </ul>
                                        <ul class="pull-right">
                                            <li><i class="icons icon-bedroom"></i> 3</li>
                                            <li><i class="icons icon-bathroom"></i> 2</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3 animation">
                            <div class="pgl-property">
                                <div class="property-thumb-info">
                                    <div class="property-thumb-info-image">
                                        <img alt="" class="img-responsive" src="images/properties/property-2.jpg">
                                        <span class="property-thumb-info-label">
													<span class="label price">$358,000</span>
												</span>
                                    </div>
                                    <div class="property-thumb-info-content">
                                        <h3><a href="property-detail.html">Presidential Parcel Frames Command Views</a></h3>
                                        <address>Ferris Park, Jersey City Land in Sales</address>
                                    </div>
                                    <div class="amenities clearfix">
                                        <ul class="pull-left">
                                            <li><strong>Area:</strong> 450<sup>m2</sup></li>
                                        </ul>
                                        <ul class="pull-right">
                                            <li><i class="icons icon-bedroom"></i> 3</li>
                                            <li><i class="icons icon-bathroom"></i> 2</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3 animation">
                            <div class="pgl-property">
                                <div class="property-thumb-info">
                                    <div class="property-thumb-info-image">
                                        <img alt="" class="img-responsive" src="images/properties/property-3.jpg">
                                        <span class="property-thumb-info-label">
													<span class="label price">$358,000</span>
													<span class="label forsold">Sold</span>
												</span>
                                    </div>
                                    <div class="property-thumb-info-content">
                                        <h3><a href="property-detail.html">Californian Class, Grand Family Proportions</a></h3>
                                        <address>Ferris Park, Jersey City Land in Sales</address>
                                    </div>
                                    <div class="amenities clearfix">
                                        <ul class="pull-left">
                                            <li><strong>Area:</strong> 450<sup>m2</sup></li>
                                        </ul>
                                        <ul class="pull-right">
                                            <li><i class="icons icon-bedroom"></i> 3</li>
                                            <li><i class="icons icon-bathroom"></i> 2</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3 animation">
                            <div class="pgl-property">
                                <div class="property-thumb-info">
                                    <div class="property-thumb-info-image">
                                        <img alt="" class="img-responsive" src="images/properties/property-3.jpg">
                                        <span class="property-thumb-info-label">
													<span class="label price">$358,000</span>
													<span class="label forsold">Sold</span>
												</span>
                                    </div>
                                    <div class="property-thumb-info-content">
                                        <h3><a href="property-detail.html">Californian Class, Grand Family Proportions</a></h3>
                                        <address>Ferris Park, Jersey City Land in Sales</address>
                                    </div>
                                    <div class="amenities clearfix">
                                        <ul class="pull-left">
                                            <li><strong>Area:</strong> 450<sup>m2</sup></li>
                                        </ul>
                                        <ul class="pull-right">
                                            <li><i class="icons icon-bedroom"></i> 3</li>
                                            <li><i class="icons icon-bathroom"></i> 2</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="apartment">
                    <div class="row">
                        <div class="col-xs-6 col-md-3 animation">
                            <div class="pgl-property">
                                <div class="property-thumb-info">
                                    <div class="property-thumb-info-image">
                                        <img alt="" class="img-responsive" src="images/properties/property-1.jpg">
                                        <span class="property-thumb-info-label">
													<span class="label price">$358,000</span>
													<span class="label forrent">Rent</span>
												</span>
                                    </div>
                                    <div class="property-thumb-info-content">
                                        <h3><a href="property-detail.html">Poolside character home on a wide 422sqm</a></h3>
                                        <address>Ferris Park, Jersey City Land in Sales</address>
                                    </div>
                                    <div class="amenities clearfix">
                                        <ul class="pull-left">
                                            <li><strong>Area:</strong> 450<sup>m2</sup></li>
                                        </ul>
                                        <ul class="pull-right">
                                            <li><i class="icons icon-bedroom"></i> 3</li>
                                            <li><i class="icons icon-bathroom"></i> 2</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3 animation">
                            <div class="pgl-property">
                                <div class="property-thumb-info">
                                    <div class="property-thumb-info-image">
                                        <img alt="" class="img-responsive" src="images/properties/property-2.jpg">
                                        <span class="property-thumb-info-label">
													<span class="label price">$358,000</span>
												</span>
                                    </div>
                                    <div class="property-thumb-info-content">
                                        <h3><a href="property-detail.html">Presidential Parcel Frames Command Views</a></h3>
                                        <address>Ferris Park, Jersey City Land in Sales</address>
                                    </div>
                                    <div class="amenities clearfix">
                                        <ul class="pull-left">
                                            <li><strong>Area:</strong> 450<sup>m2</sup></li>
                                        </ul>
                                        <ul class="pull-right">
                                            <li><i class="icons icon-bedroom"></i> 3</li>
                                            <li><i class="icons icon-bathroom"></i> 2</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3 animation">
                            <div class="pgl-property">
                                <div class="property-thumb-info">
                                    <div class="property-thumb-info-image">
                                        <img alt="" class="img-responsive" src="images/properties/property-3.jpg">
                                        <span class="property-thumb-info-label">
													<span class="label price">$358,000</span>
													<span class="label forsold">Sold</span>
												</span>
                                    </div>
                                    <div class="property-thumb-info-content">
                                        <h3><a href="property-detail.html">Californian Class, Grand Family Proportions</a></h3>
                                        <address>Ferris Park, Jersey City Land in Sales</address>
                                    </div>
                                    <div class="amenities clearfix">
                                        <ul class="pull-left">
                                            <li><strong>Area:</strong> 450<sup>m2</sup></li>
                                        </ul>
                                        <ul class="pull-right">
                                            <li><i class="icons icon-bedroom"></i> 3</li>
                                            <li><i class="icons icon-bathroom"></i> 2</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="residential">
                    <div class="row">
                        <div class="col-xs-6 col-md-3 animation">
                            <div class="pgl-property">
                                <div class="property-thumb-info">
                                    <div class="property-thumb-info-image">
                                        <img alt="" class="img-responsive" src="images/properties/property-1.jpg">
                                        <span class="property-thumb-info-label">
													<span class="label price">$358,000</span>
													<span class="label forrent">Rent</span>
												</span>
                                    </div>
                                    <div class="property-thumb-info-content">
                                        <h3><a href="property-detail.html">Poolside character home on a wide 422sqm</a></h3>
                                        <address>Ferris Park, Jersey City Land in Sales</address>
                                    </div>
                                    <div class="amenities clearfix">
                                        <ul class="pull-left">
                                            <li><strong>Area:</strong> 450<sup>m2</sup></li>
                                        </ul>
                                        <ul class="pull-right">
                                            <li><i class="icons icon-bedroom"></i> 3</li>
                                            <li><i class="icons icon-bathroom"></i> 2</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3 animation">
                            <div class="pgl-property">
                                <div class="property-thumb-info">
                                    <div class="property-thumb-info-image">
                                        <img alt="" class="img-responsive" src="images/properties/property-3.jpg">
                                        <span class="property-thumb-info-label">
													<span class="label price">$358,000</span>
													<span class="label forsold">Sold</span>
												</span>
                                    </div>
                                    <div class="property-thumb-info-content">
                                        <h3><a href="property-detail.html">Californian Class, Grand Family Proportions</a></h3>
                                        <address>Ferris Park, Jersey City Land in Sales</address>
                                    </div>
                                    <div class="amenities clearfix">
                                        <ul class="pull-left">
                                            <li><strong>Area:</strong> 450<sup>m2</sup></li>
                                        </ul>
                                        <ul class="pull-right">
                                            <li><i class="icons icon-bedroom"></i> 3</li>
                                            <li><i class="icons icon-bathroom"></i> 2</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3 animation">
                            <div class="pgl-property">
                                <div class="property-thumb-info">
                                    <div class="property-thumb-info-image">
                                        <img alt="" class="img-responsive" src="images/properties/property-3.jpg">
                                        <span class="property-thumb-info-label">
													<span class="label price">$358,000</span>
													<span class="label forsold">Sold</span>
												</span>
                                    </div>
                                    <div class="property-thumb-info-content">
                                        <h3><a href="property-detail.html">Californian Class, Grand Family Proportions</a></h3>
                                        <address>Ferris Park, Jersey City Land in Sales</address>
                                    </div>
                                    <div class="amenities clearfix">
                                        <ul class="pull-left">
                                            <li><strong>Area:</strong> 450<sup>m2</sup></li>
                                        </ul>
                                        <ul class="pull-right">
                                            <li><i class="icons icon-bedroom"></i> 3</li>
                                            <li><i class="icons icon-bathroom"></i> 2</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
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
            <h2>Our Agents ???</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="pgl-agent-item pgl-bg-light">
                        <div class="row pgl-midnarrow-row">
                            <div class="col-xs-5">
                                <div class="img-thumbnail-medium">
                                    <a href="agentprofile.html"><img src="images/agents/temp-agent.png" class="img-responsive" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="pgl-agent-info">
                                    <small>NO.1</small>
                                    <h4><a href="agentprofile.html">John Smith</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum nisi eu ante mattis.</p>
                                    <address>
                                        <i class="fa fa-map-marker"></i> Office : 1-800-666-8888<br>
                                        <i class="fa fa-phone"></i> Mobile : 0800-666-6666<br>
                                        <i class="fa fa-fax"></i> Fax : 1-800-666-8888<br>
                                        <i class="fa fa-envelope-o"></i> Mail: <a href="mailto:JohnSmith@gmail.com">JohnSmith@gmail.com</a>
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
                                    <a href="agentprofile.html"><img src="images/agents/temp-agent.png" class="img-responsive" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="pgl-agent-info">
                                    <small>NO.2.1</small>
                                    <h4><a href="agentprofile.html">Andrew MCCarthy</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum nisi eu ante mattis.</p>
                                    <address>
                                        <i class="fa fa-map-marker"></i> Office : 1-800-666-8888<br>
                                        <i class="fa fa-phone"></i> Mobile : 0800-666-6666<br>
                                        <i class="fa fa-fax"></i> Fax : 1-800-666-8888<br>
                                        <i class="fa fa-envelope-o"></i> Mail: <a href="mailto:MCCarthy@gmail.com">MCCarthy@gmail.com</a>
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

    <!-- Begin About -->
    <section class="pgl-about pgl-bg-light">
    <div class="container">
            <div class="row">
                <div class="col-md-4 animation about-item">
                    <h2>Quem somos nós</h2>
                    <p><img src="images/content/demo-1.jpg" alt="" class="img-responsive"></p>
                    <p>Frase curta.</p>
                    <a href="{{ route('sobre') }}" class="btn btn-lg btn-default">Saiba mais</a>
                </div>
                <div class="col-md-4 animation about-item">
                    <h2>Perguntas frequentes</h2>
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default pgl-panel">
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Pergunta 1</a> </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>Resposta.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default pgl-panel">
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">Pergunta 2</a> </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Resposta.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default pgl-panel">
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">Pergunta 3</a> </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="panel-body">
                                        <p>Resposta.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default pgl-panel">
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseFouth" class="collapsed">Pergunta 4</a> </h4>
                            </div>
                            <div id="collapseFouth" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="panel-body">
                                        <p>Resposta.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default pgl-panel">
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" class="collapsed">Pergunta 5</a> </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="panel-body">
                                        <p>Resposta.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animation about-item">
                    <h2>Clientes Felizes</h2>
                    <div class="owl-carousel pgl-bg-dark pgl-testimonial" data-plugin-options='{"items": 1, "pagination": false, "autoHeight": true}'>
                        <div class="col-md-12">
                            <div class="testimonial-author">
                                <div class="img-thumbnail-small img-circle">
                                    <img src="images/agents/agent-1.jpg" class="img-circle" alt="Andrew MCCarthy">
                                </div>
                                <h4>Nome</h4>
                                <p><strong>Comprador</strong></p>
                            </div>
                            <div class="divider-quote-sign"><span>“</span></div>
                            <blockquote class="testimonial">
                                <p>Depoimento.</p>
                            </blockquote>
                        </div>
                        <div class="col-md-12">
                            <div class="testimonial-author">
                                <div class="img-thumbnail-small img-circle">
                                    <img src="images/agents/agent-1.jpg" class="img-circle" alt="John Smith">
                                </div>
                                <h4>Nome</h4>
                                <p><strong>Vendedor</strong></p>
                            </div>
                            <div class="divider-quote-sign"><span>“</span></div>
                            <blockquote class="testimonial">
                                <p>Depoimento.</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About -->

@endsection
