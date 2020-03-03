<template>
  <div class="container">
    <div class="row justify-content-center mt-4">
      <div class="col-md-8">
        <div id="register" class="card animate form">
          <section class="card-body login_content">
            <form @submit.prevent="submitForm" @keydown="form.onKeydown($event)">
              alert
              <h1 v-text="registrationText"></h1>
              <div id="stepOne">
                <div class="row mb-3">
                  <div class="col-md-3" style="display: flex; justify-content: flex-end">
                    <label
                      for="AddressLine1"
                      id="AddressLine1Label"
                      class="form-control-label"
                    >Atata ID</label>
                  </div>
                  <div class="col-md-9">
                    <input
                      type="text"
                      class="form-control m-0"
                      v-model="form.atataId"
                      disabled
                    />
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-3" style="display: flex; justify-content: flex-end">
                    <label
                      for="AddressLine1"
                      id="AddressLine1Label"
                      class="form-control-label"
                    >Bussiness Address</label>
                  </div>
                  <div class="col-md-9">
                    <input
                      type="text"
                      class="form-control m-0"
                      v-model="form.AddressLine1"
                      :class="{ 'is-invalid': form.errors.has('form.AddressLine1') }"
                    />
                    <small class="text-danger d-none" id="AddressLine1ErrMsg"></small>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-3" style="display: flex; justify-content: flex-end">
                    <label
                      for="AddressLine2"
                      id="AddressLine2Label"
                      class="form-control-label"
                    >Landmark/Closest Street</label>
                  </div>
                  <div class="col-md-9">
                    <input
                      type="text"
                      class="form-control m-0"
                      v-model="form.AddressLine2"
                      :class="{ 'is-invalid': form.errors.has('form.AddressLine2') }"
                    />
                    <small class="text-danger d-none" id="AddressLine2ErrMsg"></small>
                  </div>
                </div>
                <div class="row justify-content-between">
                  <div class="col-xs-4">
                    <label for="Country">Choose State</label>
                    <div>
                      <select name="State" v-model="form.State" class="form-control" >
                        <option value selected>--Choose State--</option>
                        <option value="lagos">Lagos</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <label for="cityOrTown">"City/Town</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="form.cityOrTown"
                      
                      :class="{ 'is-invalid': form.errors.has('form.cityOrTown') }"
                    />
                  </div>
                  <div class="col-xs-4">
                    <label for="Country">Choose Country</label>
                    <div>
                      <select 
                        name="Country"
                        v-model="form.Country"
                        class="form-control"
                        :class="{ 'is-invalid': form.errors.has('form.') }"
                      >
                        <option value selected>--Choose Country--</option>
                        <option value="Nigeria">Nigeria</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-3" style="display: flex; justify-content: flex-end">
                    <label
                      for="Product_Category"
                      id="Product_CategoryLabel"
                      class="form-control-label"
                    >Product Category</label>
                  </div>
                  <div class="col-md-9">
                    <input
                      type="text"
                      class="form-control m-0"
                      v-model="form.Product_Category"
                      
                      :class="{ 'is-invalid': form.errors.has('form.Product_Category') }"
                    />
                    <small class="text-danger d-none" id="productNameErrMsg"></small>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-3" style="display: flex; justify-content: flex-end">
                    <label
                      for="PersonInCharge"
                      id="PersonInChargeLabel"
                      class="form-control-label"
                    >Person In Charge</label>
                  </div>
                  <div class="col-md-9">
                    <input
                      type="text"
                      class="form-control m-0"
                      v-model="form.PersonInCharge"
                      :class="{ 'is-invalid': form.errors.has('form.PersonInCharge') }"
                    />
                    <small class="text-danger d-none" id="PersonInChargeErrMsg"></small>
                  </div>
                </div>
                <div class="separator">
                  <div class="float-right">
                    <div class="d-flex">
                      <button
                      type="button"
                        class="btn btn-flat btn-info m-1"
                        @click.prevent="next('stepOne','stepTwo', true)"
                        disabled
                      >Previous</button>
                      <button
                      type="button"
                        class="btn btn-flat btn-success m-1"
                        @click.prevent="next('stepOne','stepTwo', false)"
                      >Next</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>

              <div id="stepTwo" class="d-none">
                <div class="row mb-3">
                  <div class="col-md-3" style="display: flex; justify-content: flex-end">
                    <label for="AddressLine1" id="AddressLine1Label" class="form-control-label">TIN</label>
                  </div>
                  <div class="col-md-9">
                    <input
                      type="text"
                      class="form-control m-0"
                      v-model="form.TIN"
                      :class="{ 'is-invalid': form.errors.has('form.TIN') }"
                    />
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-3" style="display: flex; justify-content: flex-end">
                    <label
                      for="BusinessRegistration"
                      id="BusinessRegistrationLabel"
                      class="form-control-label"
                    >CAC Registration Number</label>
                  </div>
                  <div class="col-md-9">
                    <input
                      type="text"
                      class="form-control m-0"
                      v-model="form.BusinessRegistration"
                      :class="{ 'is-invalid': form.errors.has('form.BusinessRegistration') }"
                    />
                    <small class="text-danger d-none" id="BusinessRegistrationErrMsg"></small>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-3" style="display: flex; justify-content: flex-end">
                    <label
                      for="VATRegisterationStatus"
                      id="VATRegisterationStatusLabel"
                      class="form-control-label"
                    >VAT Registeration</label>
                  </div>
                  <div class="col-md-9">
                    <select
                      class="form-control"
                      v-model="form.VATRegisterationStatus"
                      :class="{ 'is-invalid': form.errors.has('form.VATRegisterationStatus') }"
                    >
                      <option value="True">registered</option>
                      <option value="false">Unregistered</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-3" style="display: flex; justify-content: flex-end">
                    <label
                      for="Legal_or_business_name"
                      id="Legal_or_business_nameLabel"
                      class="form-control-label"
                    >Legal or business name</label>
                  </div>
                  <div class="col-md-9">
                    <input
                      type="text"
                      class="form-control m-0"
                      v-model="form.Legal_or_business_name"
                      :class="{ 'is-invalid': form.errors.has('form.Legal_or_business_name') }"
                    />
                    <small class="text-danger d-none" id="Legal_or_business_nameErrMsg"></small>
                  </div>
                </div>
                <div class="float-right">
                  <div class="d-flex">
                    <button
                      class="btn btn-flat btn-info m-1"
                      @click.prevent="next('stepOne','stepTwo', true)"
                    >Previous</button>
                    <button
                    type="button"
                      class="btn btn-flat btn-success m-1"
                      @click.prevent="next('stepTwo','stepThree', false)"
                    >Next</button>
                  </div>
                </div>
              </div>
              <div id="stepThree" class="d-none">
                <div class="row mb-3">
                  <div class="col-md-3" style="display: flex; justify-content: flex-end">
                    <label for="Bank" id="BankLabel" class="form-control-label">Bank Name</label>
                  </div>
                  <div class="col-md-9">
                    <input
                      type="text"
                      class="form-control m-0"
                      v-model="form.Bank"
                      :class="{ 'is-invalid': form.errors.has('form.Bank') }"
                    />
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-3" style="display: flex; justify-content: flex-end">
                    <label for="Bank_code" id="Bank_codeLabel" class="form-control-label">Bank Code</label>
                  </div>
                  <div class="col-md-9">
                    <input
                      type="text"
                      class="form-control m-0"
                      v-model="form.Bank_code"
                      :class="{ 'is-invalid': form.errors.has('form.Bank_code') }"
                    />
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-3" style="display: flex; justify-content: flex-end">
                    <label
                      for="Account_name"
                      id="Account_nameLabel"
                      class="form-control-label"
                    >Account Name</label>
                  </div>
                  <div class="col-md-9">
                    <input
                      type="text"
                      class="form-control m-0"
                      v-model="form.Account_name"
                      :class="{ 'is-invalid': form.errors.has('form.Account_name') }"
                    />
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-3" style="display: flex; justify-content: flex-end">
                    <label for="IBAN" id="IBANLabel" class="form-control-label">IBAN</label>
                  </div>
                  <div class="col-md-9">
                    <input
                      type="text"
                      class="form-control m-0"
                      v-model="form.IBAN"
                      :class="{ 'is-invalid': form.errors.has('form.IBAN') }"
                    />
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-3" style="display: flex; justify-content: flex-end">
                    <label
                      for="Account_number"
                      id="Account_numberLabel"
                      class="form-control-label"
                    >Account Number</label>
                  </div>
                  <div class="col-md-9">
                    <input
                      type="text"
                      class="form-control m-0"
                      v-model="form.Account_number"
                      :class="{ 'is-invalid': form.errors.has('form.Account_number') }"
                    />
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-3" style="display: flex; justify-content: flex-end">
                    <label for="BVN" id="BVNLabel" class="form-control-label">BVN</label>
                  </div>
                  <div class="col-md-9">
                    <input
                      type="text"
                      class="form-control m-0"
                      v-model="form.BVN"
                      :class="{ 'is-invalid': form.errors.has('form.BVN') }"
                    />
                  </div>
                </div>
                <div class="float-right">
                  <div class="d-flex">
                    <button
                    type="button"
                      class="btn btn-flat btn-info m-1"
                      @click.prevent="next('stepTwo','stepThree', true)"
                    >Previous</button>
                    <button
                      v-show="!isLoading"
                      class="btn btn-flat btn-success m-1"
                      type="submit"
                    >
                    <span v-show="isLoading" class="fa fa-spin fa-spinner"></span> Finish</button>
                  </div>
                </div>
              </div>
              <div class="separator">
                <div class="clearfix"></div>
                <br />

                <div>
                  <p>©2016 All Rights Reserved. Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </div>
  <!-- adedayotolu@gmail.com -->
</template>

<script>
import { Form, HasError, AlertError } from 'vform'
export default {
  props: ["sellerid"],
  data() {
    return {
      form: new Form({
        user_id:this.$store.state.currentUser.id,
        atataId: "",
        Product_Category: "",
        AddressLine1: "",
        AddressLine2: "",
        cityOrTown: "",
        State: "",
        Country: "",
        TIN: "",
        PersonInCharge: "",
        BusinessRegistration: "",
        VATRegisterationStatus: "",
        Legal_or_business_name: "",
        Is_verified: "",
        Bank: "",
        Bank_code: "",
        Account_name: "",
        IBAN: "",
        Account_number: "",
        BVN: "",
        Seller_id: ""
      }),
      registrationText: "Create Seller's Account",
      hassError: false,
      isLoading: false
    };
  },
  methods: {
    next(prev, next, inverse) {
      console.log(this.sellerid);
      var app = this;
      if (next === "stepOne") {
        console.log("one");
        app.registrationText = "Create Seller's Account";
      } else if (next === "stepTwo") {
        app.registrationText = "Setup Business Information";
      } else if (next === "stepThree") {
        app.registrationText = "Setup Bank Information";
      }

      if (inverse === true) {
        if (prev === "stepOne") {
          console.log("one");
          app.registrationText = "Create Seller's Account";
        } else if (prev === "stepTwo") {
          app.registrationText = "Setup Business Information";
        } else if (prev === "stepThree") {
          app.registrationText = "Setup Bank Information";
        }
        var stepTwo = document.querySelector("#" + prev);
        var stepOne = document.querySelector("#" + next);
      } else {
        var stepOne = document.querySelector("#" + prev);
        var stepTwo = document.querySelector("#" + next);
      }
      stepTwo.classList.remove("d-none");
      stepOne.classList.add("d-none");
      console.log(stepTwo);
    },
    generateSellerId() {
      var date = new Date();
      this.form.atataId = "ATS0" + this.$store.state.currentUser.id+ date.getSeconds();
      console.log(this.atataId);
    },
    validateInput(inputName) {
      alert("ok");
    },
    submitForm() {
      this.isLoading = true
      try {
         this.form.post("/seller/register").then(({ data }) => {
        alert(data.message)
         this.$router.push({path: '/Seller/Dashboard', params: {successRegistrationRedirect: true, data: data}})
        // window.location.href = window.location.origin + '/seller/'+ data.seller.atataId +'/dashboard'
        console.log(data);
      });
      } catch (error) {
         this.isLoading = false
         this.hassError = true
         console.log(error)
      }
     
    }
  },
  mounted() {
    document.title = "Create Atata Seller's Account";
    console.log(this.$store.state.currentUser)
    this.generateSellerId();
  }
};
</script>
