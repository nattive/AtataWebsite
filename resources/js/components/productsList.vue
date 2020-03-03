<template>
  <div class="container">
    <div class="x_content">
      <p>Simple table with project listing with progress and editing options</p>

      <!-- start project list -->
      <table class="table table-striped projects">
        <thead>
          <tr>
            <th style="width: 10%">SKU</th>
            <th style="width: 20%">Prodeuct Name</th>
            <th style="width: 20%">Images</th>
            <th style="width: 20%">Category</th>
            <th style="width: 5%">Price</th>
            <th style="width: 5%">Discounred Price</th>
            <th style="width: 20%">#Edit</th>
          </tr>
        </thead>
        <div class="overlay">
        <i class="fa fa-spin fa-spinner"></i> 
        </div>

        <tbody>
          <tr v-for="product in products.data" v-bind:key="product.id">
            <td>{{product.productSKU}}</td>
            <td>{{product.productName}}</td>
            <td></td>
            <td>{{product.category_id}}</td>
            <td>{{product.productPrice}}</td>
            <td>{{product.productSalePrice}}</td>
            <td>
              <button class="btn btn-danger btn-flat" @click="deleteBtn">
                <i class="fa fa-trash"></i>
              </button>
            </td>
            <sweet-modal ref="deleteBtn" icon="error" title="Oh noes…">
              This is an error…
              <button class="btn btn-flat btn-danger">Delete</button>
            </sweet-modal>
          </tr>
        </tbody>
      </table>
      <!-- end project list -->
    </div>
  </div>
</template>

<script>
import { SweetModal, SweetModalTab } from 'sweet-modal-vue'

export default {
  components: {
    SweetModal
  },
  data() {
    return {
      products: {},
      loading: false
    };
  },
  methods: {
    fetchProduct() {
    this.loading = true
      axios
        .get(`/seller/admin/product`)
        .then(response => {
          // JSON responses are automatically parsed.
          this.products = response.data;
          console.log("this.products");
           this.loading = false
        })
        .catch(e => {
          console.error(e);
           this.loading = false
        });
    },
    delteProduct(id) {
      
      axios
        .post(`seller/admin/product/delete`, {
          id: id
        })
        .then(response => {})
        .catch(e => {
          this.errors.push(e);
        });
    },
    deleteBtn() {
      this.$refs.deleteBtn.open();
    }
  },
  mounted() {
    this.fetchProduct();
  }
};
</script>
