<!-- Begin Advanced Search -->
<section class="pgl-advanced-search pgl-bg-light">
    <div class="container">
        <form name="advancedsearch">
            <div class="row">
                <div class="col-xs-6 col-sm-3">
                    <div class="form-group">
                        <label class="sr-only" for="property-status">Tipo</label>
                        <select id="property-status" name="property-status" data-placeholder="Property Status" class="chosen-select" tabindex="1">
                            <option selected="selected" value="Property Status">Tipo</option>
                            <option value="sale">Venda</option>
                            <option value="rent">Aluguel</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="form-group">
                        <label class="sr-only" for="property-types">Categoria</label>
                        <select id="property-types" name="property-types" data-placeholder="Property Types" class="chosen-select" tabindex="3">
                            <option selected="selected" value="Property Types">Categoria</option>
                            <option value="residential">Residential</option>
                            <option value="commercial">Commercial</option>
                            <option value="land">Terreno</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3">

                    <div class="form-group">
                        <label class="sr-only" for="location">Cidade</label>
                        <select id="location" name="location" data-placeholder="Location" class="chosen-select" tabindex="2">
                            <option selected="selected" value="Location">Cidade</option>
                            <option value="United States">United States</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Aland Islands">Aland Islands</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>

                        </select>
                    </div>



                </div>
                <div class="col-xs-6 col-sm-3">
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
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 col-sm-3">
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
                </div>
                <div class="col-xs-6 col-sm-3">
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
                </div>
                <div class="col-xs-6 col-sm-3">
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
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Buscar</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</section>
<!-- End Advanced Search -->
