<template>
  <div class="right_col" role="main">
    <!-- top tiles -->
    <!-- Smart Wizard -->
    <p>This is a basic form wizard example that inherits the colors from the selected scheme.</p>
    <div id="wizard" class="form_wizard wizard_horizontal">
      <ul class="wizard_steps">
        <li>
          <a href="#step-1">
            <span id="basicStep_no" class="step_no">1</span>
            <span class="step_descr">
              <span id="error_iconBasic"></span> Step 1
              <br />
              <small>Product Basic description</small>
            </span>
          </a>
        </li>
        <li>
          <a href="#step-2">
            <span class="step_no">2</span>
            <span class="step_descr">
              Step 2
              <br />
              <small>Product Specification</small>
            </span>
          </a>
        </li>
        <li>
          <a href="#step-3">
            <span class="step_no">3</span>
            <span class="step_descr">
              Step 3
              <br />
              <small>Product Category Selection</small>
            </span>
          </a>
        </li>
        <li>
          <a href="#step-4">
            <span class="step_no">4</span>
            <span class="step_descr">
              Step 4
              <br />
              <small>Image and media Upload</small>
            </span>
          </a>
        </li>
      </ul>
      <div id="step-1">
        <div class="form-horizontal form-label-left">
          <div class="form-group row">
            <label
              class="col-form-label col-md-3 col-sm-3 label-align"
              for="productName"
              id="productNameLabel"
            >
              Product name
              <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6">
              <input
                type="text"
                id="productName"
                required="required"
                class="form-control"
                name="productName"
                v-model="productName"
              />
            </div>
          </div>
          <div class="form-group row">
            <label
              class="col-form-label col-md-3 col-sm-3 label-align"
              for="productModel"
              id="productModelLabel"
            >
              Product Model
              <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6">
              <input
                type="text"
                id="productModel"
                name="productModel"
                v-model="productModel"
                required="required"
                class="form-control"
              />
            </div>
          </div>
          <div class="form-group row">
            <label
              for="productBrand_id"
              class="col-form-label col-md-3 col-sm-3 label-align"
              id="productBrand_idLabel"
            >Brand Name*</label>
            <div class="col-md-6 col-sm-6">
              <input
                id="productBrand_id"
                class="form-control col"
                type="text"
                name="productBrand_id"
                v-model="productBrand_id"
              />
            </div>
          </div>
          <div class="form-group row">
            <label
              for="productBrand_id"
              class="col-form-label col-md-3 col-sm-3 label-align"
              id="productSKU"
            >Unique SKU number</label>
            <div class="col-md-6 col-sm-6">
              <input
                id="productSKU"
                class="form-control col"
                type="text"
                name="productSKU"
                v-model="productSKU"
              />
            </div>
          </div>

          <div class="form-group row">
            <label
              class="col-form-label col-md-3 col-sm-3 label-align"
              id="productPriceLabel"
            >Product Price</label>
            <div class="col-md-6 col-sm-6">
              <div class="d-flex">
                <input
                  type="number"
                  class="form-control"
                  id="inputSuccess3"
                  placeholder="Product Price"
                  v-model="productPrice"
                />
                <select class="form-control col-2">
                  <option value="NGN">₦</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label
              class="col-form-label col-md-3 col-sm-3 label-align"
              id="productSalePriceLabel"
            >Product Sale Price</label>
            <div class="col-md-6 col-sm-6">
              <div class="d-flex">
                <input
                  type="number"
                  class="form-control"
                  id="inputSuccess3"
                  v-model="productSalePrice"
                  placeholder="Product Price"
                />
                <select class="form-control col-2" id>
                  <option value="NGN">₦</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-form-label col-md-3 col-sm-3 label-align" id="prodcolorLabel">Colour</label>
            <div class="col-md-6 col-sm-6">
              <div class="input-group demo2">
                <input type="text" value="red" class="form-control" v-model="prodcolor" />
                <span class="input-group-addon">
                  <i></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label
              class="col-form-label col-md-3 col-sm-3 label-align"
              id="productDescriptionLabel"
            >Product Description</label>
            <div class="col-md-6 col-sm-6">
              <textarea
                class="form-control"
                v-model="productDescription"
                cols="30"
                rows="10"
                id="productDescription"
              ></textarea>
            </div>
          </div>
        </div>
      </div>
      <div id="step-2">
        <h2 class="StepTitle">Product Specification</h2>
        <div class="page-wrapper box-content">
          <textarea class="prof1" v-model="prodSpecification" id="prodSpecification"></textarea>
        </div>
        <div class="py-4"></div>
        <h2 class="StepTitle">Product Specification</h2>
        <div class="page-wrapper box-content">
          <textarea class="prof2" v-model="prodManufacturer" id="prodManufacturer"></textarea>
        </div>
      </div>
      <div id="step-3">
        <div class="row">
          <div class="col-md-6">
            <div class="x_panel">
              <div class="x_title">
                <h2>Select your product category</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="form-group row">
                  <div class="col-md-9 col-sm-9">
                    <select class="select2_single form-control" tabindex="-1">
                      <option></option>
                      <option value="AK">Alaska</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="x_panel">
              <div class="x_title">
                <h2>Select your product Sub category</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="form-group row">
                  <div class="col-md-9 col-sm-9">
                    <select class="select2_single form-control" tabindex="-1">
                      <option></option>
                      <option value="AK">Alaska</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <h3 class="text-center">Apric >> food</h3>
          </div>
        </div>
      </div>
      <div id="step-4">
        <vue-upload-multiple-image
          @upload-success="uploadImageSuccess"
          @before-remove="beforeRemove"
          @edit-image="editImage"
          :data-images="images"
        ></vue-upload-multiple-image>
      </div>
      <sweet-modal icon="success" ref="UploadSuccessModal">{{UploadSuccessModalMessage}}</sweet-modal>
       <sweet-modal ref="deleteBtn" icon="error" title="Oh noes…">
              This is an error…
              <button class="btn btn-flat btn-danger">Delete</button>
            </sweet-modal>
    </div>
    <!-- End SmartWizard Content -->
  </div>
</template>
<script>
import VueUploadMultipleImage from "vue-upload-multiple-image";
import { SweetModal, SweetModalTab } from 'sweet-modal-vue'

export default {
  components: {
    VueUploadMultipleImage,
    SweetModal
  },
  data() {
    return {
      productName: "",
      productModel: "",
      productBrand_id: "",
      productPrice: "",
      productSalePrice: "",
      prodSpecification: "",
      prodManufacturer: "",
      productDescription: "",
      prodcolor: "",
      productSKU: "",
      isValid: false,
      images: [],
      uploadedImages: [],
      UploadSuccessModalMessage: ""
    };
  },
  methods: {
    uploadImageSuccess(formData, index, fileList) {
      this.uploadedImages = fileList;
      // Upload image api
      // axios.post('http://your-url-upload', formData).then(response => {
      //   console.log(response)
      // })
    },
    beforeRemove(index, done, fileList) {
      console.log("index", index, fileList);
      var r = confirm("remove image");
      if (r == true) {
        done();
      } else {
      }
    },
    editImage(formData, index, fileList) {
      console.log("edit data", formData, index, fileList);
    },
    updateTextarea: function() {
      this.prodSpecification = $("#prodSpecification").val();
      this.prodManufacturer = $("#prodManufacturer").val();
    },
    formSubmit: function() {
      //  this.$refs.deleteBtn.open();5
      this.$refs.UploadSuccessModal.open()
      if (this.isValid === true) {
        axios
          .post(`/seller/admin/product/add`, {
            productName: this.productName,
            productModel: this.productModel,
            productBrand_id: this.productBrand_id,
            productSKU: this.productSKU,
            productPrice: this.productPrice,
            productSalePrice: this.productSalePrice,
            prodSpecification: $("#prodSpecification").val(),
            prodManufacturer: $("#prodManufacturer").val(),
            productDescription: this.productDescription,
            prodcolor: this.prodcolor,
            images: this.uploadedImages
          })
          .then(response => {
            this.UploadSuccessModalMessage = response.data
            this.$refs.UploadSuccessModal.open()
            window.location.href='http://atatawebsite.test/seller/admin/product/add/'
            // console.log();
          })
          .catch(e => {
            console.log(e);
          });
      }
    },
    setError: function(stepnumber) {
      $("#wizard").smartWizard("setError", {
        stepnum: stepnumber,
        iserror: true
      });
    },
    // Product upload form wixard
    init_SmartWizard: function() {
      if (typeof $.fn.smartWizard === "undefined") {
        return;
      }
      console.log("init_SmartWizard");

      $("#wizard").smartWizard({
        onLeaveStep: this.leaveAStepCallback,
        errorSteps: this.errorSteps,
        onFinish: () => {
          this.formSubmit();
        }
      });

      $("#wizard_verticle").smartWizard({
        transitionEffect: "slide"
      });

      $(".buttonNext").addClass("btn btn-success");
      $(".buttonPrevious").addClass("btn btn-primary");
      $(".buttonFinish").addClass("btn btn-default");
    },
    leaveAStepCallback: function(obj, context) {
      if (context.fromStep === 1) {
        this.validateBasicDescription();
      }
      return true; // return false to stay on step and true to continue navigation
    },
    validateBasicDescription: function() {
      var inputToValidate = {
        productName: this.productName,
        productBrand_id: this.productBrand_id,
        productSKU: this.productSKU,
        productPrice: this.productPrice,
        productDescription: this.productDescription
      };
      for (const inputKey in inputToValidate) {
        if (inputToValidate.hasOwnProperty(inputKey)) {
          const element = inputToValidate[inputKey];
          if (element === "" || element === null) {
            $("#" + inputKey + "Label").addClass("text-danger");
            $("#error_iconBasic").addClass(
              "fa fa-exclamation-triangle text-danger"
            );
            this.isValid = false;
            $("#basicStep_no").addClass("bg-danger");
          } else {
            this.isValid = true;
            $("#" + inputKey + "Label").removeClass("text-danger");
            $("#error_iconBasic").addClass("d-none");
            $("#basicStep_no").removeClass("bg-danger");
          }
        }
      }
    },
    uploadImage(event) {
      this.image = event.target.files[0];
    }
  },
  mounted() {
    $(document).ready(function() {
      $(".prof1").richText();
      $(".prof2").richText();
    }),
      this.init_SmartWizard();
  }
};
</script>
