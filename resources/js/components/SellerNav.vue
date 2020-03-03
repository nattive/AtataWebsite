<template>
    <div class="col-md-3 left_col">
      <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
          <a href="index.html" class="site_title">
            <i class="fa fa-paw"></i>
            <span>
              Seller's Corner
              Alela!
            </span>
          </a>
        </div>

        <div class="clearfix"></div>
        <!-- menu profile quick info -->
        <!-- /menu profile quick info -->
        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section">
            <h3>User Dashboard</h3>
            <ul class="nav side-menu">
              <li>
                <a>
                  <i class="fa fa-dashboard"></i> Dashboard
                </a>
              </li>
              <li>
                <a>
                  <i class="fa fa-shopping-basket"></i> Order
                  <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                  <li>
                    <a href="index.html">Recent Order</a>
                  </li>
                  <li>
                    <a href="index2.html">Track Order</a>
                  </li>
                </ul>
              </li>
              <li>
                <a>
                  <i class="fa fa-suitcase"></i> Quotation Request
                  <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                  <li>
                    <a href="form.html">Manage Quotation Request</a>
                  </li>
                  <li>
                    <a href="form_advanced.html">Make Quotation Request</a>
                  </li>
                </ul>
              </li>
              <li>
                <a>
                  <i class="fa fa-credit-card"></i> Wallet
                  <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                  <li>
                    <a href="general_elements.html">Wallet Ballance</a>
                  </li>
                  <li>
                    <a href="typography.html">Fund Account</a>
                  </li>
                  <li>
                    <a href="media_gallery.html">Recent Wallet Transaction</a>
                  </li>
                  <li>
                    <a href="icons.html">All Discount Coupons</a>
                  </li>
                </ul>
              </li>
              <li>
                <a>
                  <i class="fa fa-user"></i> User Settings
                  <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                  <li>
                    <a href="general_elements.html">Billing Address</a>
                  </li>
                  <li>
                    <a href="typography.html">Account Setting</a>
                  </li>
                  <li>
                    <a href="media_gallery.html">Recent Wallet Transaction</a>
                  </li>
                  <li>
                    <a href="icons.html">All Discount Coupons</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="menu_section">
            <h3>Your Shop</h3>
            <ul class="nav side-menu">
              <li>
                <router-link to="/Seller/Dashboard">
                  <i class="fa fa-dashboard"></i>
                  Dashboard
                </router-link>
              </li>
              <li>
                <a>
                  <i class="fa fa-shopping-basket"></i> Products
                  <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                  <li>
                    <router-link to="/Seller/product/create">Products</router-link>
                  </li>
                  <li>
                    <router-link to="/Seller/product/list">All Products </router-link>
                  </li>

                  <li>
                    <a href="index3.html">Trash</a>
                  </li>
                </ul>
              </li>
              <li>
                <a>
                  <i class="fa fa-suitcase"></i> Transactions
                  <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                  <li>
                    <a href="form.html">Orders</a>
                  </li>
                  <li>
                    <a href="form_advanced.html">Transactions</a>
                  </li>
                  <li>
                    <a href="form_validation.html">Quotation Requests</a>
                  </li>
                  <li>
                    <a href="form_wizards.html">Transaction Statistics</a>
                  </li>
                </ul>
              </li>
              <li>
                <a>
                  <i class="fa fa-percent"></i> Promotion
                  <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                  <li>
                    <a href="general_elements.html">Join Promotion</a>
                  </li>
                  <li>
                    <a href="typography.html">Active Promotions</a>
                  </li>
                  <li>
                    <a href="media_gallery.html">Create Discount Coupons</a>
                  </li>
                  <li>
                    <a href="icons.html">All Discount Coupons</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="menu_section">
            <h3>Services</h3>
            <ul class="nav side-menu">
              <li>
                <a>
                  <i class="fa fa-truck"></i> Get Logistics
                </a>
              </li>
              <li>
                <a>
                  <i class="fa fa-support"></i> Insure Goods
                </a>
              </li>
              <li>
                <a>
                  <i class="fa fa-university"></i> Find Warehouse
                </a>
              </li>
              <li>
                <a>
                  <i class="fa fa-dashboard"></i> ATATAPay
                </a>
              </li>
            </ul>
          </div>
          <div class="menu_section">
            <h3>Message Center</h3>
            <ul class="nav side-menu">
              <li>
                <a>
                  <i class="fa fa-pencil-square"></i> Compose Message
                </a>
              </li>
              <li>
                <a>
                  <i class="fa fa-inbox"></i> Inbox
                </a>
              </li>
              <li>
                <a>
                  <i class="fa fa-pencil"></i> Draft
                </a>
              </li>
              <li>
                <a>
                  <i class="fa fa-send"></i> Sent Message
                </a>
              </li>
            </ul>
          </div>
          <div class="menu_section">
            <h3>Service Centre</h3>
            <ul class="nav side-menu">
              <li>
                <a>
                  <i class="fa fa-bug"></i> Ticket
                  <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                  <li>
                    <a href="e_commerce.html">Open Ticket</a>
                  </li>
                  <li>
                    <a href="projects.html">Manage Ticket</a>
                  </li>
                </ul>
              </li>
              <li>
                <a>
                  <i class="fa fa-windows"></i> Contact Support
                  <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                  <li>
                    <a href="page_403.html">Customer Suport</a>
                  </li>
                  <li>
                    <a href="page_404.html">Accounting Support</a>
                  </li>
                  <li>
                    <a href="page_500.html"></a> Tech Support
                  </li>
                  <li>
                    <a href="plain_page.html">Chat with our Representative</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>

          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="fa fa-comments" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="fa fa-bell-o" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="fa fa-sign-out" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
              <span class="fa fa-envelope-o" aria-hidden="true"></span>
              <span class="badge bg-green">6</span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>
    </div>
</template>

<script>
    export default {
        methods: {
            
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
