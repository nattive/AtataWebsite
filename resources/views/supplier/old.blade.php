@extends('supplier\layout\app')
@section('content')


<!-- PAGE CONTENT-->
<div class="page-content--bgf7">

    <!-- DATA TABLE-->
    <section class="p-t-20">
        <div class="container mx-auto">
            <div class="section">
                <div class="row">
                    <div class="col-12">
                        <p style="text-align: center">Need help? <a href="" class="btn-link">contact our help team</a>
                            or &nbsp;
                            <button class="btn main-btn btn-flat ">Open Ticket</button>&nbsp;
                            <a href="" class="btn-link"> &nbsp;Or watch a quick tutorial&nbsp; </a>on how ro get the
                            best of
                            <strong>ATATA57</strong> </p>
                        <marquee behavior="" direction=""><span style="color:red">IMPORTANT NOTICE</span> Lorem
                            ipsum dolor,
                            sit amet consectetur adipisicing elit.
                            Vitae saepe quam sint tempore reiciendis labore. </marquee>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="p-t-20">
        <div class="container">
            <div class="section">
                <div class="row">
                    <ul class="nav mx-auto">
                        <li style="cursor: pointer" class="product-tab active-tab d-block" id="category-tab-link"
                            onclick="nextTab('category-tab', 'product-basic-info-tab','product-Specification-tab','product-media-tab')">
                            Select Category <i id="CategoryIcon" class="fa fa-exclamation-circle text-danger d-none"></i>
                        </li>
                        <li style="cursor: pointer" class="product-tab d-block" id="product-basic-info-tab-link"
                            onclick="nextTab('product-basic-info-tab', 'category-tab','product-Specification-tab','product-media-tab')">
                            Products Primary Details <i id="BasicIinfoIcon" class="fa fa-exclamation-circle text-danger d-none"></i>
                        </li>
                        <li style="cursor: pointer" class="product-tab d-block" id="product-Specification-tab-link"
                            onclick="nextTab('product-Specification-tab', 'category-tab','product-basic-info-tab','product-media-tab')">
                            Products Detailed Specification <i id="BasicSpecIcon" class="fa fa-exclamation-circle text-danger d-none"></i> 
                        </li>
                        <li style="cursor: pointer" class="product-tab d-block" id="product-media-tab-link"
                            onclick="nextTab('product-media-tab', 'category-tab','product-Specification-tab','product-basic-info-tab')">
                            Product Media</li>
                    </ul>
                </div>
                <div class="container" id="category-tab">
                    <div class="section">
                        <div class="row">
                            <div class="col-4"> <textarea name="" id="" cols="30" rows="10"
                                    class="form-control"></textarea></div>
                            <div class="col-4"> <textarea name="" id="" cols="30" rows="10"
                                    class="form-control"></textarea></div>
                            <div class="col-4"> <textarea name="" id="" cols="30" rows="10"
                                    class="form-control"></textarea></div>
                        </div>

                    </div>
                    <div class="section">
                        <div class="float-right">
                            <button class="btn primary-btn"
                                onclick="nextTab('product-basic-info-tab', 'category-tab','product-Specification-tab','product-media-tab')">Continue</button>
                        </div>
                    </div>
                </div>
                <div class="container d-none" id="product-basic-info-tab">
                    <div class="section">
                        <div class="row">
                            <div class="col-md-3" style="display: flex; justify-content: flex-end">
                                <label for="productName" id="productNameLabel" class=" form-control-label">Product Name *</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" id="productName" name="productName" class="form-control">
                                <small class="text-danger d-none" id="productNameErrMsg"></small><br>
                                <small>Detailed Product name, this can include version/model or edition, buy not more
                                    than 200 characters</small><br>
                                <small>E.g: Hp870 elitebook with 8MP webcam</small>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3" style="display: flex; justify-content: flex-end">
                                <label for="company" class=" form-control-label">Model/version or Edition</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" id="productModel" name="productModel" class="form-control">
                                <small>Include the only the version , model or edition number </small><br>
                                <small>E.g: Hp870 </small>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3" style="display: flex; justify-content: flex-end">
                                <label for="company" class=" form-control-label" id="productBrandLabel">Brand *</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" id="productBrand" name="productBrand" class="form-control mb-2">
                                <small class="text-danger d-none" id="productBrandErrMsg"></small><br>
                                <small>Brand/Registered manufacturer of the product. If the brand does not exist,<a
                                        href="#" class="btn-link">&nbsp; Create one</a>. <br></small>
                                <small>E.g: IMO, Nestle etx</small>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3" style="display: flex; justify-content: flex-end">
                                <label for="company" class=" form-control-label" id="prodcolorLabel">Primary Colour</label>
                            </div>
                            <div class="col-md-3">
                                <input type="color" id="prodcolor" name="prodcolor" class="form-control mb-2">
                                <small>Select the primary product colour</small>
                            </div>
                            <div class="col-md-3" style="display: flex; justify-content: flex-end">
                                <label for="prod_Country" id="productCountryLabel" class=" form-control-label">Production Country</label>
                            </div>
                            <div class="col-md-3">
                                <select name="country" id="productCountry" name="productCountry" required class="form-control">
                                    <option value="null" selected> --Choose Country-- </option>
                                    <option value="ng">Nigeria</option>
                                </select>
                                <small class="text-danger d-none" id="productCountryErrMsg"></small><br>
                                <small>Select the primary product colour</small>
                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="float-right">
                            <button class="btn main-btn mr-4"
                                onclick="nextTab('category-tab', 'product-basic-info-tab','product-Specification-tab','product-media-tab')">back</button>
                            <button class="btn primary-btn"
                                onclick="nextTab('product-Specification-tab', 'category-tab','product-basic-info-tab','product-media-tab'); 
                                validatebasicinfo()">Continue</button>
                        </div>
                    </div>
                </div>
                <div class="container d-none" id="product-Specification-tab">
                    <div class="section">
                        <div class="row mt-3">
                            <div class="col-md-3" style="display: flex; justify-content: flex-end">
                                <label for="company" class=" form-control-label" id="prodSpecificationLabel">Detailed Specification *</label>
                            </div>
                            <div class="col-md-9">
                                <textarea class="specification" name="example" id="prodSpecification" name="prodSpecification"></textarea>
                                <small id="prodSpecificationErrMsg" class="d-none text-danger"></small><br>
                                <small>Give a detailed specification on how that will convice the customer they have the
                                    right package</small><br>
                                <small>E.g: Hp870 </small>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3" style="display: flex; justify-content: flex-end">
                                <label for="company" class=" form-control-label">Other important information</label>
                            </div>
                            <div class="col-md-9">
                                <textarea class="impIfo" name="example"></textarea>
                                <small>Include message from the manufacturer, terms of use, how to use etc </small><br>
                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="float-right">
                            <button class="btn main-btn mr-4"
                                onclick="nextTab('product-basic-info-tab', 'category-tab','product-Specification-tab','product-media-tab')">back</button>
                            <button class="btn primary-btn"
                                onclick="nextTab('product-media-tab', 'category-tab','product-basic-info-tab','product-Specification-tab'); validateDetailSpec()">Continue</button>
                        </div>
                    </div>
                </div>
                <div class="container d-none" id="product-media-tab">
                    <div class="section">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="thumbnail"><img src="{{ asset('img/a2.jpg') }}" alt=""
                                        class="img-thumbnail"></div>
                                <input type="file" name="" id="" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <div class="thumbnail"><img src="{{ asset('img/a2.jpg') }}" alt=""
                                        class="img-thumbnail"></div>
                                <input type="file" name="" id="" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <div class="thumbnail"><img src="{{ asset('img/a2.jpg') }}" alt=""
                                        class="img-thumbnail"></div>
                                <input type="file" name="" id="" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <div class="thumbnail"><img src="{{ asset('img/a2.jpg') }}" alt=""
                                        class="img-thumbnail"></div>
                                <input type="file" name="" id="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="float-right">
                            <button class="btn main-btn mr-4"
                                onclick="nextTab('product-Specification-tab', 'category-tab','product-basic-info-tab','product-media-tab')">back</button>
                            <button class="btn primary-btn"
                                onclick="nextTab('product-media-tab', 'category-tab','product-basic-info-tab','product-Specification-tab');">Continue</button>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- END DATA TABLE-->


</div>
@endsection

@section('js')
<script>
    const nextTab = (next, current1,current2,current3) => {
            $('#'+ current1).removeClass('d-block, active').addClass('d-none');
            $('#'+ current2).removeClass('d-block, active').addClass('d-none');
            $('#'+ current3).removeClass('d-block, active').addClass('d-none');
            $('#'+ next).addClass('d-block, active ').removeClass('d-none')
            $('#'+ next+'-link').addClass('active-tab')
            $('#'+ current1+'-link').removeClass('active-tab')
            $('#'+ current2+'-link').removeClass('active-tab')
            $('#'+ current3+'-link').removeClass('active-tab')
        };

        function validatebasicinfo()
        {
            if ($('#productName').val() === '' || $('#productName').val() === null || $('#productName').val().length() < 1){
                errorOnValidate('productName')
                $('#BasicIinfoIcon').removeClass('d-none');
                $('#productNameErrMsg').removeClass('d-none').text('This Product name field is required and can\'t be empty ');
            };
             if ($('#productBrand').val() === '' || $('#productBrand').val() === null || $('#productBrand').val().length() < 1){
                errorOnValidate('productBrand')
                $('#BasicIinfoIcon').removeClass('d-none');
                $('#productBrandErrMsg').removeClass('d-none').text('This Product brand field needs to be filled');
            };
             if ($('#productCountry').val() === '' || $('#productCountry').val() === null || $('#productCountry').val() === 'null' || $('#productCountry').val().length() < 1){
                errorOnValidate('productCountry')
                $('#BasicIinfoIcon').removeClass('d-none');
                $('#productCountryErrMsg').removeClass('d-none').text('We need to know where the product is coming from');
            };
        }

        function validateDetailSpec(){
            if ($('#prodSpecification').html() === '' || $('#prodSpecification').html() == null){
                errorOnValidate('prodSpecification')
                $('#BasicSpecIcon').removeClass('d-none');
                $('#prodSpecificationErrMsg').removeClass('d-none').text('This Product name field is required and can\'t be empty ');
            };
        }
        const errorOnValidate = (input) => {
            $('#' + input).addClass('border, border-danger');
            $('#' + input+'Label').addClass('Text-danger');
        } 
            
</script>


@show